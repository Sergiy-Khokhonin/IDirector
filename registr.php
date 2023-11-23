<?php
include 'temp/head.php';
include 'temp/nav.php';
?> 
<div class="container">
<div class="row">
<div class="col-4"></div>
<div class="col-4">
    <div class="users">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="ins_user.php" role="form" class="form-inline">
                <h2>Регистрация</h2>
                <div class="mb-3">
                    <label for="fio" class="form-label">Ваше ФИО<font color="red">*</font></label>
                    <input type="text" class="form-control" id="FIO"  required  name="FIO" aria-describedby="emailHelp" placeholder="">
                </div> 
                    <div class="mb-3">
                    <label for="data" class="form-label">Дата рождения <font color="red">*</font></label>
                    <input type="date" class="form-control databron" id="date_birth" name="date_birth">
                </div>
                <div class="mb-3">
                    <label for="login" class="form-label">Телефон<font color="red">*</font></label>
                    <input type="tel" class="form-control" id="tel" name="tel"  required  placeholder="">
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email<font color="red">*</font></label>
                    <input type="email" class="form-control" id="email" name="email"  required  placeholder="">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Адрес<font color="red">*</font></label>
                    <input type="text" class="form-control" id="addres" name="addres"  required  placeholder="">
                </div>
                <div class="mb-3">
                    <label for="login" class="form-label">Логин<font color="red">*</font></label>
                    <input type="text" class="form-control" id="login" name="login"   required  placeholder="">
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label">Пароль<font color="red">*</font></label>
                    <input type="password" class="form-control" name="password" required  placeholder="">
                </div>
                <div class="mb-3">
                    <label for="pas" class="form-label">Подвердите пароль<font color="red">*</font></label>
                    <input type="password" class="form-control" id="pas" name="pas" placeholder=""  required >
                </div>
              </div>
                <button type="submit" id="" class="btn btn-danger">Зарегистрироваться</button>
                <p id="err" style="color:red"> </p>
                </form>   <div id="mass"></div>    
            </div>
        </div>
    </div>  

</div>
</div>
<div class="col-4"></div>
</div>
</div>
</section>
<?php
include 'temp/footer.php';
?>
