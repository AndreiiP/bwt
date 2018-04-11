<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {

    public function indexAction() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $register = new \stdClass();

            $register->name = $_POST['name'];
            $register->surname = $_POST['surname'];
            $register->email = $_POST['email'];
            $register->gender = $_POST['gender'];
            $register->birthday = $_POST['birthday'];

            $res = $this->model->addUser($register);

        }
        isset($res)? $vars = ['news' => $res] : $vars = ['news' => 0];

        $this->view->render('Register', $vars);
        debug($_POST);
    }

}