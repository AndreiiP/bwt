<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/public/css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<title><?php echo $title; ?></title>
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
	<?php echo $content; ?>
</body>
</html>
