<?php

namespace application\controllers;

use application\core\Controller;


class FeedbacklistController extends Controller {

    public function indexAction() {

        if (isset($_SERVER['REQUEST_METHOD']) == 'POST' && isset($_REQUEST['sign_in']) == "Sign in") {
            $sign = new \stdClass();

            $sign->name = $_POST['name'];
            $sign->email = $_POST['email'];

            $res = $this->model->signIn($sign);
            isset($res)? $vars['message'] = $res : $vars['message'] = 0;
        }else{
            isset($res)? $vars['message'] = $res : $vars['message'] = 0;
        }
        $result_feeds = $this->model->getFeeds();
        $vars['feed'] = $result_feeds;

        $this->view->render('feedback', $vars);
    }



}