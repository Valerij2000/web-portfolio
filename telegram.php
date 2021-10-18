<?php
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];
$phone = $_REQUEST['phone'];
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
