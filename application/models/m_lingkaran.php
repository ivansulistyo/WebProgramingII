<?php
    class m_lingkaran extends CI_Model{
        //membuat variable untuk menampung nilai
        public $phi , $r, $hasil;

        //method penghitungan luas lingkaran
        public function jumlah($n = null){
            $this->phi = 3.14;
            $this->r = $n;
            $this->hasil = $this->phi * $this->r * $this->r;
            return $this->hasil;
        }
    }
?>