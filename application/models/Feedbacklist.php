<?php

namespace application\models;

use application\core\Model;

class Feedbacklist extends Model {

    public function signIn($sign) {
        $q = "SELECT name FROM users WHERE name = '$sign->name' AND email = '$sign->email'";
        $result = $this->db->query($q);

        $result->execute();

        if($result->rowCount() > 0) {
            $error = true;
            $_SESSION['user'] = $sign->name;
        } else {
            $error = false;

        }
        return $error;
    }
    public function getFeeds(){
        $q = "SELECT name, email, message FROM feedback ORDER BY id DESC";
        $result = $this->db->row($q);

        return $result;
    }

}