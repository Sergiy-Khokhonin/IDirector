<?php
include "temp/head.php";
include "temp/nav.php";

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
    <div class="card">
      <img src="image/'.$row['image'].'" class="card-img-top" >
      <div class = "card-body">
        <h5 class = "card-title">'.$row['model'].'
        <p class = "card-text">'.$row['opisanie'].'</p>
        <p class = "card-text">'.$row['color'].'</p>
        <p class = "card-text">'.$row['price'].'</p>
        <button type="button" class="btn btn-danger">Купить</button>
      </div>
    </div>
  </div>';
};
?>
</div>
<div class = "col-2"></div>
</div>
</div>
</div>
</section>
<!--  модальноe окнo -->
<div id="myModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Заголовок модального окна -->
      <div class="modal-header">
        <h4 class="modal-title">Заказ товара</h4>
      </div>
      <!-- Основное содержимое модального окна -->
      <div class="modal-body">  
       <div class="form-group mb-2  col-12">
         <form  method="post" action="add_zakaz.php" role="form" class="form-inline">

         <div class="form-group">
    <label for="col">Количество товара</label>
    <input type="text" class="form-control" id="col" name ='col' placeholder="Введите количество товара">
    <input type="hidden" class="form-control"  name="id_quadrocopter" id="id_quadrocopter">
  </div>
  <div class="form-group">
    <label for="date">Дата заказа</label>
    <input type="date" class="form-control" id="date_order" name="date_order" >
  </div>
  <div class="form-group">
    <label for="adress">Адрес доставки</label>
    <input type="text" class="form-control" id="addres_delivery" name="addres_delivery" placeholder="Введите адрес доставки">
  </div>        
            </div>
          </div>
<!-- Футер модального окна -->
 <div class="modal-footer">
 <div class="col-sm-10">


  
  <div class="form-group">
    <button type="button" class="close" data-dismiss="modal"  aria-hidden="true"> Закрыть</button>
    <button type="submit" name="submit" class="btn btn-primary"> Сохранить </button>
</div>
</form>
 </div>
</div>
</div>
</div> 


<?php

include 'temp/footer.php';
?>

<!-- Вызов модального окна -->
<script>
$(document).ready(function(){
  $('#myModal').on('show.bs.modal', function (event) {
// кнопка, которая вызывает модаль
 var button = $(event.relatedTarget) 
// получим  data-id_quadrocopter атрибут
  var id_quadrocopter = button.data('id_quadrocopter') 
// получим  data-model атрибут
  var model = button.data('model');
// Здесь изменяем содержимое модали
  var modal = $(this);
 modal.find('.modal-title').text('Заказать '+model+' '+id_quadrocopter);
 modal.find('.modal-body #id_quadrocopter').val(id_quadrocopter);
})
});
</script>

