<?php
require_once 'abstrack.php';
class persegipanjang extends Bentuk2D
{
    public $panjang, $lebar;
    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function namaBidang()
    {
        echo "Persegi panjang";
    }
    public function nilaiVariable()
    {
        return "panjang: " . $this->panjang . ", lebar: " . $this->lebar;
    }
    public function luasBidang()
    {
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }
    public function kelilingBidang()
    {
        $keliling = 2 * ($this->panjang + $this->lebar);
        return $keliling;
    }
}
?>