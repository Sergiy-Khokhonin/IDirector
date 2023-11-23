<?php
session_start();
include('temp/bd.php');
include('temp/head.php');
include('temp/navklient.php');
if (!empty($_POST)){
$id_user = $_SESSION['id_user'];
$amount = $_POST['amount'];
$addres_delivery = $_POST['addres_delivery'];
$id_quadrocopter = $_POST['id_quadrocopter'];
// var_dump($id_user, $amount, $addres_delivery, $id_quadrocopter);
$sql = "INSERT INTO `orders`(`date_order`, `addres_delivery`, `id_user`, `id_quadrocopter`, `amount`) VALUES (CURRENT_DATE(),'$addres_delivery','$id_user','$id_quadrocopter','$amount')";
$mysqli->query($sql);
// header('location: lichcab.php');
}
?>
<main>
<div class="container">
  <div class="row">
    <div class="col">
    </div>
        <?php
        if (!empty($_POST)){
            $id_quadrocopter = $_POST['id_quadrocopter'];
            $result = $mysqli->query("SELECT * FROM `quadrocopter` WHERE id_quadrocopter = '$id_quadrocopter'");
            foreach ($result as $row){
  echo '<div class="col">
    <img src="img/'.$row['image'].'" class="card-img-top" alt="'.$row['image'].'">
      <h5>'.$row['name'].'</h5>
      <p>'.$row['opisanie'].'</p></div>';
}
        }
        ?>
        
    <form action="" method="POST">
  <div class="mb-3">
    <label  class="form-label">Количество товара</label>
    <input type="number" class="form-control" name="amount">
  </div>
  <div class="mb-3">
    <label  class="form-label">Адрес доставки</label>
    <input type="text" class="form-control" name="addres_delivery">
  </div>
  <input type="hidden" name="id_quadrocopter" value="<?=$id_quadrocopter?>">
  <button type="submit" class="btn btn-primary">Заказать товар</button>
        </form></div>
  </div>
</main>