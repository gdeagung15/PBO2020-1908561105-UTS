<?php 

class Catatan {
    private $isi;

    public function __construct($isi)
    {
        $this->isi = $isi;
    }

    public function getIsi() {
        return $this->isi;
    }
}