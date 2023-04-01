<!-- Kamis-30-03-2023 -->
<?php
class Bank {
    //member variable
    protected $norek;
    public $nama;
    private $saldo;
    static $jml = 0;
    const BANK = 'Bank Syariah Indonesia';
    //konstruktor untuk menyimpan variable yang akan dikirimkan ke file object bank
    public function __construct($no, $nasabah, $saldo){
        $this->norek = $no;
        $this->nama = $nasabah;
        $this->saldo = $saldo;
        self::$jml++;
    }
    public function setor($uang){
        $this->saldo += $uang;
    }
    public function ambil($uang){
        $this->saldo -= $uang;
    }
    public function cetak(){
        echo '<br><u>'.self::BANK.'</u></b>';
        echo '<br>No. Rekening '.$this->norek;
        echo '<br> Nama Nasabah '.$this->nama;
        echo '<br>Saldo : Rp. '.number_format($this->saldo,0,',',',');
        echo '<hr>';
    }
}


?>