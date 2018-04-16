<body>
<h1 class="headerFormName text-center">Registration</h1>
<form class="form-horizontal" method="post" id="form">
    <!-- Имя -->
    <div class="form-group">
        <label for="inputName" class="col-sm-4 control-label">Name</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="name" name="name" placeholder="Ben" pattern="[a-zA-Zа-яА-ЯёЁ]+" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
    <!-- Фамилия -->
    <div class="form-group">
        <label for="inputName" class="col-sm-4 control-label">Surname</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="surname" name="surname" placeholder="Pitterson" pattern="[a-zA-Zа-яА-ЯёЁ]+" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>

    <!-- Email -->
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
        <div class="col-sm-4">
            <input type="email" class="form-control" name="email" id="email" placeholder="pitterson@gmail.com" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>

    <!-- Пол -->
    <div class="form-group">
        <label for="inputName" class="col-sm-4 control-label">gender</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="gender" name="gender" placeholder="female" pattern="[a-zA-Zа-яА-ЯёЁ]+">
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>

    <!-- день рождения -->
    <div class="form-group">
        <label for="inputName" class="col-sm-4 control-label">Birthday</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="" name="birthday" placeholder="2001-09-03" pattern="([0-9]{4})[-]([0-9]{2})[-]([0-9]{2})">
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>

    <!-- отправить -->
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-1">
            <input type="submit" id="btn_register" name="register" class="btn btn-primary" value="register">
        </div>
    </div>
</form>
<?php if($message === false){ ?>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Well done!</h4>
    </div>
<?php }else if($message === true){ ?>
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Something wrong!</h4>
    </div>
<?php }else if($message === 'nameExist'){ ?>
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Name exist!</h4>
    </div>
<?php }?>

</body>
<script src="/public/scripts/jquery.js"></script>
<script src="/public/scripts/form_valid.js"></script>
<?php

if(isset($_POST['Out']) == "LogOut"){
    unset($_SESSION["user"]);
    session_destroy();
    echo "<script>window.location.href='/'</script>";
}





