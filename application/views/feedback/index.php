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
            <input type="email" class="form-control" name="email" id="email" placeholder="pitterson@gmail.com" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
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

<script src="/public/scripts/jquery.js"></script>
<script src="/public/scripts/feddback.js"></script>
<?php if(isset($_POST['Out']) == "LogOut"){
unset($_SESSION["user"]);
session_destroy();
    echo "<script>window.location.href='feedback'</script>";
}




