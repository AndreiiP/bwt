<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/public/lib/phpQuery.php';
$gismeteo = 'http://www.gismeteo.ua/city/daily/5093/';
$file = file_get_contents ($gismeteo);

$doc = phpQuery::newDocument($file);
$tbl = $doc->find('.wsection');
$tb2 = $doc->find('h1');
$tb3 = $doc->find('.wtab dl:eq(0) dd');
$tb4 = $doc->find('.wtab dl:eq(0) dt');

?>
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
    <title>Weather</title>
</head>
<body>
<div class="content">
    <nav class="navbar-inverse">
        <div class="collapse navbar-collapse" id="main-menu" >
            <ul class="nav navbar-nav navbar-left nav-color">
                <li><a href="/" class="nav-color">Home</a></li>
                <li><a href="/weather" class="nav-color">Weather</a></li>
                <li><a href="/feedback" class="nav-color">Feedback</a></li>
                <li><a href="/feedbacklist" class="nav-color">feedbacklist</a></li>
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
<div class="container">
  <?php if(isset($_SESSION['user'])) {?>
      <?php echo $tb2; ?>
      <?php echo $tb4; ?>
      <?php echo $tb3; ?>
      <?php echo $tbl; ?>
  <?php }else{ ?>
    <h1 class="headerFormName text-center">Sign in</h1>
    <form class="form-horizontal" method="post" id="form2">
        <!-- Имя -->
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="name" name="name" placeholder="Ben" pattern="[a-zA-Zа-яА-ЯёЁ]+" required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" name="email" id="email" placeholder="pitterson@gmail.com" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            </div>
        </div>
        <!-- Войти -->
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" id="sign in" name="sign_in" class="btn btn-primary" value="Sign in">
            </div>
        </div>
    </form>
  <?php } ?>

</div>
</body>
</html>
<?php
if(isset($_POST['Out']) == "LogOut"){
    unset($_SESSION["user"]);
    session_destroy();
    echo "<script>window.location.href='weather'</script>";
} ?>
<?php if($message === false){ ?>
<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Name not found!</h4>
</div>
<?php }?>



