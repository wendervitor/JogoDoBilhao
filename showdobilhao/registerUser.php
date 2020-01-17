<?php
ob_start();
session_start();
require './page_layout/utils.php';
$name = $_POST["nome"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$repeatPassword = $_POST["repeatPassword"];
$arr = array();
if ($password == $repeatPassword) {
    $users = decodeuser();
    foreach ($users as $user) {
        if ($user->login == $username) {
            echo 'ERRO';
            header("location:signUp.php?id=0");
        } else {
            $json = file_get_contents("./assets/data/usuarios.json");
            $arr = json_decode($json, true);
            $newData = array(
                'nome' => $name,
                'email' => $email,
                'login' => $username,
                'senha' => $password,
            );
            array_push($arr, $newData);
            $json = json_encode($arr, JSON_PRETTY_PRINT);
            if (file_put_contents("./assets/data/usuarios.json", $json)) header("location:index.php?id=4");
            else header("location:signUp.php?id=1");
        }
    }
}
