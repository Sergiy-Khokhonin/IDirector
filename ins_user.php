<?php
include 'temp/bd.php';
if(!empty($_POST)){
    $FIO = $_POST['FIO']; 
    $date_birth = $_POST['date_birth'];       
   $tel = $_POST['tel']; 
   $email = $_POST['email']; 
   $addres = $_POST['addres'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $sql = " insert into user(fio,date_birth,tel,email, addres,login, password,role) values ('$fio','$date_birth','$tel','$email',$addres,'$login','$password','Клиент')";
    $result = $mysqli->query($sql);
header('location: autoriz.php');
        }
?>