<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<div class="content">
    <nav class="navbar-inverse">
        <div class="collapse navbar-collapse" id="main-menu" >
            <ul class="nav navbar-nav navbar-left nav-color">
                <li><a href="/" class="nav-color">Home</a></li>
                <li><a href="wall" class="nav-color">Weather</a></li>
                <li><a href="wall" class="nav-color">Feedback</a></li>
                <li><a href="wall" class="nav-color">Feedback list</a></li>
            </ul>
        </div>
    </nav>
</div>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

</head>
<body>

<h1 class="headerFormName text-center">Registration</h1>
<form class="form-horizontal" method="post" id="form">
    <!-- Имя -->
    <div class="form-group">
        <label for="inputName" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="name" name="name" placeholder="Ben" pattern="[a-zA-Zа-яА-ЯёЁ]+" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>
    <!-- Фамилия -->
    <div class="form-group">
        <label for="inputName" class="col-sm-2 control-label">Surname</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="surname" name="surname" placeholder="Pitterson" pattern="[a-zA-Zа-яА-ЯёЁ]+" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>

    <!-- Email -->
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-8">
            <input type="email" class="form-control" name="email" id="email" placeholder="pitterson@gmail.com" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>

    <!-- Пол -->
    <div class="form-group">
        <label for="inputName" class="col-sm-2 control-label">gender</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="gender" name="gender" placeholder="female" pattern="[a-zA-Zа-яА-ЯёЁ]+">
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>

    <!-- день рождения -->
    <div class="form-group">
        <label for="inputName" class="col-sm-2 control-label">Birthday</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="" name="birthday" placeholder="2001-09-03" pattern="([0-9]{4})[-]([0-9]{2})[-]([0-9]{2})">
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>

    <!-- отправить -->
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" id="btn_register" name="register" class="btn btn-primary" value="Регистрация">
        </div>
    </div>
</form>
<?php if($news === false){ ?>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Well done!</h4>
    </div>
<?php }else if($news === true){ ?>
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Something wrong!</h4>
    </div>
<?php }?>
</body>
<script src="/public/scripts/jquery.js"></script>
<script src="/public/scripts/form_valid.js"></script>
<script></script>
<?php

debug($_POST);



