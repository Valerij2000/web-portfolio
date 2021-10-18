<?php
// https://api.telegram.org/bot2085698645:AAE_iq7NNHhLfr1DLcvD1NtvdXgu1EhXpdY/getUpdates
// где XXXXXXXXXXXXXX = наш токен полученный ранее

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$phone = $_POST['phone'];
$token = "2085698645:AAE_iq7NNHhLfr1DLcvD1NtvdXgu1EhXpdY";
$chat_id = "-733352268";

$arr = array(
  'NAME: ' => $name,
  'EMAIL: ' => $email,
  'TELEPHONE: ' => $phone,
  'MESSAGE: ' => $message
);

foreach ($arr as $key => $value) {
  $txt .= "<b>".$key."</b>".$value."%0A";
};

$send_to_telegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

if ($send_to_telegram) {
  header('Location: index.php');
  return true;
} else {
  echo "Error";
}
 ?>
