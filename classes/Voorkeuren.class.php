<?php

    class Voorkeuren
    {

        private $m_iId;
        private $m_iUser_id;
        //voorkeuren
        private $m_bZingen;
        private $m_bWave;
        private $m_bSpringen;
        private $m_bPintje;
        private $m_bKlappen;

        public function __set($p_sProperty, $p_vValue)
        {
            switch ($p_sProperty) {
                case 'id':
                    $this->m_iId = $p_vValue;
                    break;
                case 'user_id':
                    $this->m_iUser_id = $p_vValue;
                    break;
                //voorkeuren
                case 'Zingen':
                    $this->m_bZingen = $p_vValue;
                    break;
                case 'Wave':
                    $this->m_bWave = $p_vValue;
                    break;
                case 'Springen':
                    $this->m_bSpringen = $p_vValue;
                    break;
                case 'Pintje':
                    $this->m_bPintje = $p_vValue;
                    break;
                case 'Klappen':
                    $this->m_bKlappen = $p_vValue;
                    break;
            }
        }

        public function __get($p_sProperty)
        {
            switch ($p_sProperty) {
                case 'id':
                    return $this->m_iId;
                    break;
                case 'user_id':
                    return $this->m_iUser_id;
                    break;
                //voorkeuren
                case 'Zingen':
                    return $this->m_bZingen;
                    break;
                case 'Wave':
                    return $this->m_bWave;
                    break;
                case 'Springen':
                    return $this->m_bSpringen;
                    break;
                case 'Pintje':
                    return $this->m_bPintje;
                    break;
                case 'Klappen':
                    return $this->m_bKlappen;
                    break;
            }
            return true;
        }

        public function saveVoorkeuren(){
            $conn = Db::getInstance();
            $statement = $conn->prepare("INSERT INTO `supportersvoorkeuren`(`user_id`, `zingen`, `wave`, `springen`, `pintje`, `klappen`) VALUES (`:user_id`, `:zingen`, `:wave`, `:springen`, `:pintje`, `:klappen`)");
            $statement->bindValue(":user_id", $_SESSION['id']);
            $statement->bindValue(":zingen", $this->m_bZingen);
            $statement->bindValue(":wave", $this->m_bWave);
            $statement->bindValue(":springen", $this->m_bSpringen);
            $statement->bindValue(":pintje", $this->m_bPintje);
            $statement->bindValue(":klappen", $this->m_bKlappen);
            $res = $statement->execute();
            if($res == false){
                throw new Exception('Oops, something went wrong...');
            }
        }

    }