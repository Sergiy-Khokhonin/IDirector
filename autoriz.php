<?php
include ('temp/head.php');
include ('temp/nav.php');

include ('bd.php');
?>
<form action="" method="POST">
    <div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Логин</label>
    <input type="text" name="login" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Пароль</label>
    <input type="password" name="password" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Войти</button>
    </div>
    <div class="col">
    </div>
  </div>
</div>
</form>
<?php

if (!empty($_POST['login']) and !empty($_POST['password'])){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `user` WHERE login='$login' AND password ='$password'";
    $result = $mysqli->query($sql);
    $user = mysqli_fetch_assoc($result);
    $name = $user['FIO'];
    $id_user = $user['id_user'];
    $role = $user['role'];
    if (!empty($user)){
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['id_user'] = $id_user;
        $_SESSION['role'] = $role;
        header('Location: index.php');
    } else {
    $massage = "Неправильный логин или пароль";
    echo $massage;
}
}
?>