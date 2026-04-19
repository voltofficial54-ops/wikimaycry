<?php
if (isset($_POST['email'])){
    $email = $_POST['email'];
}
if (isset($_POST['message'])){
    $message = $_POST['message'];
}
if (empty($email)){
    echo "Укажите свой email.";
    exit;
}
else if(empty($message)){
    echo "введите сообщение.";
    exit;
}
else {
    $to = "voltofficial54@gmail.com";
    $subject = "Материал на добавление";
    $headers = "Content-type: text/plain; charset=UTF-8";
    $send = mail($to, $subject, $message, $headers);
}
if ($send == true){
    echo "Ваше сообщение было отправлено! ждите добавление этого на сайт!<br>";
}
?>