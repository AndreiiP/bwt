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



