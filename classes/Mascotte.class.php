<?php

    class Mascotte{

        private $m_sPassword;

        public function __set($p_sProperty, $p_vValue)
        {
            switch ($p_sProperty) {
                case 'Password':
                    $this->m_sPassword = $p_vValue;
                    break;
            }
        }

        public function __get($p_sProperty)
        {
            switch ($p_sProperty) {
                case 'Password':
                    return $this->m_sPassword;
                    break;
            }
            return true;
        }

        public function checkPassword(){
            //password mascotte login checken
            $password = "123456789";
            if($this->Password == $password){
                echo 'you can log in';
            } else {
                echo 'Incorrect Password.';
            }

        }
    }