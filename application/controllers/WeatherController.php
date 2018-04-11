<?php

namespace application\controllers;

use application\core\Controller;


class WeatherController extends Controller {

    public function indexAction() {




        $this->view->render('Weather');
    }


}