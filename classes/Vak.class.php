<?php

    class Vak{

        private $m_iId;
        private $m_sVak;

        public function __set($p_sProperty, $p_vValue)
        {
            switch ($p_sProperty) {
                case 'id':
                    $this->m_iId = $p_vValue;
                    break;
                case 'vak':
                    $this->m_sVak = $p_vValue;
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
            }
        }


    }