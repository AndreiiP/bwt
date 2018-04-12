<?php

namespace application\controllers;

use application\core\Controller;


class FeedbackController extends Controller {

    public function indexAction() {

        $result_feeds = $this->model->getFeeds();
        $vars['feed'] = $result_feeds;
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_REQUEST['send']) == 'send') {
            $feedBack = new \stdClass();

            $feedBack->name = $_POST['name'];
            $feedBack->email = $_POST['email'];
            $feedBack->message = $_POST['message'];
            if($_POST['captcha'] == $_SESSION['captcha']){
                $result = $this->model->addFeedBack($feedBack);
                $vars['message'] = 'success';
            }else{
                $vars['message'] = 'error';
            }
        }
        $one = rand(1,9);
        $two = rand(1,9);
        $vars['one'] = $one;
        $vars['two'] = $two;
        $_SESSION['captcha'] = $one + $two;

        $this->view->render('feedback', $vars);
    }



}