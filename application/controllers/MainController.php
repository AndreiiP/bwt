<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {

    public function indexAction() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_REQUEST['register']) == 'register') {
            $register = new \stdClass();

            $register->name = $_POST['name'];
            $register->surname = $_POST['surname'];
            $register->email = $_POST['email'];
            $register->gender = $_POST['gender'];
            if($_POST['birthday'] == '' ){$_POST['birthday'] = '0001-01-01';}
            $register->birthday = $_POST['birthday'];

            $r = $this->model->checkUser($register);
            if($r === false){
                $vars = ['message' => 'nameExist'];
            }else{
                $res = $this->model->addUser($register);
                if($res === false){$_SESSION['user'] = $register->name;}
                isset($res)? $vars = ['message' => $res] : $vars = ['message' => 0];
            }
        }else {
            isset($res) ? $vars = ['message' => $res] : $vars = ['message' => 0];
        }


        $this->view->render('Register', $vars);
    }

}
