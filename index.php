<?php

error_reporting(0);

header("Content-Type: application/json; charset=UTF-8");
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);
date_default_timezone_set('Asia/Baghdad');
$API_KEY = "7156811096:AAF4exzFW2SIUerRFh_2EiRRIF35XWNYJRM";
 define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
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




$usrbot = bot("getme")->result->username;
$emoji = 
"➡️
🎟️
↪️
🔘
🏠
" ;
$emoji = explode ("\n", $emoji) ;
$b = $emoji[rand(0,4)];
$NamesBACK = "رجوع $b" ;

define("USR_BOT",$usrbot);
function SETJSON($arr){

  if($arr != NULL){
  file_put_contents("RSHQ/rshq_".USR_BOT.".json",json_encode($arr,32|128|265));
  }}


function userd($arr){

  if($arr != NULL){
  file_put_contents("RSHQ/USERS.json",json_encode($arr,32|128|265));
  }}



$update = json_decode(file_get_contents('php://input'));
if($update->message){
 $message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
}

$timer = json_decode(file_get_contents("RSHQ/TIMER_$usrbot.json"),true);

$rshq = json_decode(file_get_contents("RSHQ/rshq_".USR_BOT.".json"),true);

$BERO = json_decode(file_get_contents("BERO.json"),1);
if($update->callback_query ){
    if( $timer['TIME'][$from_id] >= date("h:s")){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
  $timer['TIME'][$from_id] = date("h:s");
  $timer = json_encode($timer, 32 | 128 | 265);
  file_put_contents("RSHQ/TIMER_$usrbot.json", $timer);
    }
}

$e=explode("|", $data) ;
$e1=str_replace("/start",null,$text); 
$rshq = json_decode(file_get_contents("RSHQ/rshq_".USR_BOT.".json"),true);
if($text == "/start$e1" and is_numeric($e1) and !preg_match($text,"#Bero#")) {
  $rshq['HACKER'][$from_id] = "I";
  $rshq['HACK'][$from_id] = str_replace(" ", null, $e1);
  SETJSON($rshq);
}


$BBM=1;

$sudo = 5561152568 ;
$admin = $sudo ;


#تسديد ثغرات

$e=explode("|",$data);
if(preg_match("/-/", $chat_id)) {
 bot('sendMessage',[
       'chat_id'=>$chat_id ,
        'text'=>"👤] للأسف الشديد محاوله فاشله" ,
    ]);
    bot('leaveChat',[ 
'chat_id'=>$chat_id, 
]);
 
 exit;
 } 

#خزن وحبشكلات

$rshq = json_decode(file_get_contents("RSHQ/rshq_".USR_BOT.".json"),true);
$chnl = $rshq["sCh"] ;
$Api_Tok = $rshq["sToken"];

$dqiq = date('i');
$s = date('s');

if($update->callback_query ){
  if ($timer["acount"][$from_id] < time()) {
    if($update->callback_query->message->chat->id != $sudo and $update->callback_query->message->chat->id != 5561152568 and !in_array($update->callback_query->message->chat->id, $Js['admin'])) {
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
