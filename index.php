<?php
include "temp/head.php";
include "temp/nav.php";
include"temp/bd.php";
?>

<section class=" section">

<div class = "container">
  <div class = "row">
    <div class = "col-2"></div>
    <div class = "col-8">
  <!-- Container Start -->
  <div class="row row-cols-1 row-cols-md-4">
    <?php
    $sql = "select * from quadrocopter";
    $result = $connection->query($sql);
    foreach($result as $row){
    
 echo'<div class="col mb-4">
 <form action ="" method = "GET">
    <div class="card">
      <img src="images/'.$row['image'].'" class="card-img-top" >
      <div class = "card-body">
        <h5 class = "card-title">'.$row['model'].'</h5>
        <p class = "card-text">'.$row['color'].'</p>
        <p class = "card-text">'.$row['price'].'</p>
        <a href = "add_zakaz.php?id_quadrocopter='.$row['id_quadrocopter'].'">
        <button type="button" class="btn btn-danger">Купить</button></a>
      </div>
    </div>
    </form>
  </div>';
};
?>
</div>
<div class = "col-2"></div>
</div>
</div>
</div>
</section>

<?php
include "temp/footer.php";
?>
