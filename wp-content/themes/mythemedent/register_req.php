<?php
/*
Template Name: register_req
Template Post Type: post, page, cinema
*/

global $wpdb;
session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$database = "dentistryWP";

$connect_db = mysqli_connect($hostname, $username, $password, $database);


function exReg()
{
    header('Location: http://dentistry-wp/register/');
    exit();
}
function exLog()
{
    header('Location: http://dentistry-wp/login/');
    exit();
}


$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$date_o_b = $_POST['date_o_b'];

echo $full_name;
echo $email;
echo $password;
echo $date_o_b;

if (strlen($full_name) <= 5){
    $_SESSION['message-d'] = 'Пожалуйста введите корректное имя';
    exReg();
} elseif(strlen($email) <= 5){
    $_SESSION['message-d'] = 'Пожалуйста введите кореектную почту';
    exReg();
} elseif(strlen($password) <= 5){
    $_SESSION['message-d'] = 'Пожалуйста введите кореектный пароль';
    exReg();
}
else{
    $password = md5($password);

//    $add_user = "INSERT INTO users (`id`, `full_name`, `email`, `password`, `date_o_b`)
//    VALUES (null, '$full_name', '$email', '$password', '$date_o_b')";
//    mysqli_query($connect_db, $add_user);

    $wpdb->insert($wpdb->users, array("id" => null, "full_name" => $full_name, "email" => $email, "password" => $password, "date_o_b" => $date_o_b), array("%d", "%s", "%s", "%s", "%s"));

    $_SESSION['message-g'] = 'Вы успешно Зарегестрированны. Можете войти в свой аккаунт';
    header('Location: http://dentistry-wp/');
    exit();
}

