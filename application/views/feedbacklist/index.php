<div class="w_z">
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
    <?php }}else{ ?>
    <h1 class="headerFormName text-center">Sign in</h1>
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
        <!-- Войти -->
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-10">
                <input type="submit" id="sign in" name="sign_in" class="btn btn-primary" value="Sign in">
            </div>
        </div>
    </form>
<?php } ?>
</div>
<?php if(isset($_POST['Out']) == "LogOut"){
    unset($_SESSION["user"]);
    session_destroy();
    echo "<script>window.location.href='feedbacklist'</script>";
}?>
<?php if($message === false){ ?>
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Name not found!</h4>
    </div>
<?php }?>
