<?php

/* https://api.telegram.org/bot6686526306:AAEGHTjaVu91ALlmJlMVbL1ZCcgIExkOXds/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$token = "6686526306:AAEGHTjaVu91ALlmJlMVbL1ZCcgIExkOXds";
$chat_id = "-938827493";
$arr = array(
  'Имя пользователя: ' => $name, 
  'Телефон: ' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>