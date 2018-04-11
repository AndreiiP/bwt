<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

    public function addUser($register) {
        $q = "INSERT INTO users (`name`,`surname`,`email`,`gender`,`birthday`)
        	VALUES ('$register->name',
        			'$register->surname',
        			'$register->email',
        			'$register->gender',
        			'$register->birthday')";
        $result = $this->db->query($q);

        $result->execute();

        if($result->rowCount() > 0) {
            $error = false;
        } else {
            $error = true;
        }
        return $error;
    }


}