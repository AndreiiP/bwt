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
                <li><a href="wall" class="nav-color">Feedback</a></li>
                <li><a href="wall" class="nav-color">Feedback list</a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="container">
  <?php echo $tb2; ?>
  <?php echo $tb4; ?>
  <?php echo $tb3; ?>
  <?php echo $tbl; ?>
</div>
</body>
</html>


