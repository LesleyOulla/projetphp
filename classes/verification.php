<?php 

class Verification {

    private $array = [];

    private function Verif($name, $min, $max,$message) {
        if (strlen($name) < $min || strlen($name) > $max) {
            array_push($this->array, $message);
        }
        return $this->array;
    }

    public function getArray() {
        return $this->array;
    }

    public function getIndexError($index) {
        if (count($this->array) > 0) {
            return $this->array[$index];
        }
        return null;
    }

    public function setArray($array) {
        return $this->array = $array;
    }


    public function Email($name) {
        return $this->Verif($name, 5, 255, 'Votre email est invalide');
    }

    public function Texte($name, $param) {
        return $this->Verif($name, 5, 255, 'Votre '.$param.' est invalide');
    }

    public function Phone($name) {
        return $this->Verif($name, 8,15,"votre téléphone est invalide");

    }

    public function Password($name) {
        return $this->Verif($name, 8, 80,"votre mot de passe est invalide");

    }

}

?>