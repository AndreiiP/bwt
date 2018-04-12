<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/public/css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <title>feedback</title>
</head>
<body>
<div class="content">
    <nav class="navbar-inverse">
        <div class="collapse navbar-collapse" id="main-menu" >
            <ul class="nav navbar-nav navbar-left nav-color">
                <li><a href="/" class="nav-color">Home</a></li>
                <li><a href="/weather" class="nav-color">Weather</a></li>
                <li><a href="/feedback" class="nav-color">Feedback</a></li>
                <li><a href="#" class="nav-color user"><?php if(isset($_SESSION['user'])){echo "Пользователь: ".$_SESSION['user']; }?></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <form class="form-horizontal" method="post" id="">
                    <?php if(isset($_SESSION['user'])){ ?> <input type="submit" value="LogOut" name="Out"  onclick="destroy()" class="btn btn-primary LogOut"> <?php } ?>
                </form>

            </ul>
        </div>
    </nav>
</div>
<h1 class="headerFormName text-center">Feed back</h1>
<form class="form-horizontal" method="post" id="form2">
    <!-- Имя -->
    <div class="form-group">
        <label for="inputName" class="col-sm-4 control-label">Name</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="name" name="name" placeholder="Ben" pattern="[a-zA-Zа-яА-ЯёЁ]+" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>

    <!-- Email -->
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
        <div class="col-sm-4">
            <input type="email" class="form-control" name="email" id="email" placeholder="pitterson@gmail.com" pattern="^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
    </div>

    <!-- Сообщение -->
    <div class="form-group">
        <label class="col-sm-4 control-label">Message</label>
        <div class="col-sm-4">
            <textarea class="form-control" name="message" rows="5" id="message"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="text-center">
        <?php echo $one. '+'. $two.' = '; ?><input type="text" size="2" name="captcha">
        </div>
    </div>

    <!-- Отправить -->
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-1">
            <input type="submit" id="sign in" name="send" class="btn btn-primary" value="send">
        </div>
    </div>
    <hr>
</form>
<?php if(isset($message)){
    if($message === 'error'){ ?>
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Captcha failed. try again</h4>
        </div>
    <?php } else if($message === 'success'){?>
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Success</h4>
        </div>
    <?php } } ?>
<?php if(isset($_SESSION['user'])){ ?>
<?php foreach ($feed as $value){?>
<div class="col-md-2"></div>
<div class="container">
    <div class="col-md-12">
        <div class="list-group">

            <div class="list-group">
                <div class="list-group-item list-group-item-info"><?php echo "Имя: ".$value['name'];?><span class="email_right"><?php echo $value['email'];?></span></div>
                <div class="list-group-item msg_h"><?php echo $value['message'];?></div>
            </div>
        </div>
    </div>
</div>
<script src="/public/scripts/jquery.js"></script>
<script src="/public/scripts/feddback.js"></script>
<?php }}
if(isset($_POST['Out']) == "LogOut"){
unset($_SESSION["user"]);
session_destroy();
    echo "<script>window.location.href='feedback'</script>";

}




