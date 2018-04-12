<?php

namespace application\models;

use application\core\Model;

class Feedback extends Model {

    public function addFeedBack($feedBack){
        $q = "INSERT INTO feedback (`name`, `email`, `message`)
        	VALUES ('$feedBack->name',
        			'$feedBack->email',
        			'$feedBack->message')";
        $result = $this->db->query($q);

        if($result->rowCount() > 0) {
            $error = false;
        } else {
            $error = true;
        }
        return $error;
    }
    public function getFeeds(){
        $q = "SELECT name, email, message FROM feedback";
        $result = $this->db->row($q);

        return $result;
        //return $result->execute();

    }

}