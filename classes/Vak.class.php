<?php

    class Vak {

        private $m_iId;
        private $m_sVak;
        private $m_sMACadres;

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
                case 'vak':
                    $this->m_sVak = $p_vValue;
                    break;
                case 'MACadres':
                    $this->m_sMACadres = $p_vValue;
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
                case 'vak':
                    return $this->m_sVak;
                    break;
                case 'MACadres':
                    return $this->m_sMACadres;
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

        public function saveVak(){
            $conn = Db::getInstance();
            $statement = $conn->prepare("INSERT INTO `supportersvakken`(`vak`, `MACadres`) VALUES (:vak, :MACadres)");
            $statement->bindValue(":vak", $this->m_sVak);
            $statement->bindValue(":MACadres", $this->m_sMACadres);
            $res = $statement->execute();
            $_SESSION['id'] = $conn->lastInsertId();
            if($res == false){
                throw new Exception('Oops, something went wrong...');
            }
        }


    }