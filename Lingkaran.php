<?php

require_once 'abstrack1.php';

class Lingkaran extends Bentuk2D {
    private $jari_jari;
    
    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }
    
    public function namaBidang() {
        return "Lingkaran";
    }
    
    public function luasBidang() {
        return pi()* $this->jari_jari * $this->jari_jari;
    }
    
    public function kelilingBidang() {
        return 2 * pi() * $this->jari_jari;
    }
}


?>