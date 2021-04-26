<?php

/* https://api.telegram.org/bot1648192399:AAEpU9g6Fly87gCU0SQxVhGiyVjB3HYEpbU/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$product = $_POST['product'];
$product = $_POST['product'];
$product_price = $_POST['product_price'];
$textarea = $_POST['textarea'];

$token = "1648192399:AAEpU9g6Fly87gCU0SQxVhGiyVjB3HYEpbU";
$chat_id = "-386000522";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Почта' => $email,
  'Товар' => $product,
  'Цена' => $product_price,
  'Сообщение' => $comment,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thanks.html');
} else {
  echo "Error";
}
?>