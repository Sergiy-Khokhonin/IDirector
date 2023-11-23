<?php
session_start();
include 'head.php';
include 'temp/navklient.php';
include 'temp/bd.php';
$id_user = $_SESSION['id_user'];
$FIO=$_SESSION['FIO'];
?>
<div class="container">
	<div class="row">
		<table class="table">
			<tr>   <th>Название</th>
            <th>Дата заказа</th>
            <th>Дата доставки</th>
				<th>Адрес</th>
				<th>Количество</th>
                <th>Дата оплаты</th>
			</tr>
            <?php
$sql = "SELECT * FROM orders,quadrocopter WHERE orders.id_quadrocopter=quadrocopter.id_quadrocopter and id_user =$id_user";
$result= $mysqli->query($sql);
foreach($result as $row) {
	echo'<tr> <td>'.$row['name'].'</td>
		  <td>'.$row['date_order'].'</td>
          <td>'.$row['date_delivery'].'</td>
	  <td>'.$row['addres_delivery'].'</td> 
       <td>'.$row['amount'].'</td>
		  <td>'.$row['date_oplaty'].'</td>
          </tr>';
}
?>
		</table>
	</div>	
</div>

<?php include 'temp/footer.php';?>