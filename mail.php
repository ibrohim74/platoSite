<?php

/* https://api.telegram.org/bot5619243981:AAG7rzfTt82JkJtGr2ajFvIw7Fhn8fChbuQ/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$telephone = $_POST['telephone'];
$message = $_POST['message'];
$token = "5619243981:AAG7rzfTt82JkJtGr2ajFvIw7Fhn8fChbuQ";
$chat_id = "1376002269";

$arr = array(
  'name: ' => $name,
  'telephon: ' => $telephone,
  'massage: ' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");



if ($sendToTelegram) {
  header('Location: https://www.instagram.com');
} else {
  echo "Error";}
?>