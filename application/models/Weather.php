<?php

namespace application\models;

use application\core\Model;

class Weather extends Model {

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

}