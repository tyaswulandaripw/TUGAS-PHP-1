<?php
require_once 'abstrack.php';
class segitiga extends Bentuk2D
{
    public $alas, $tinggi, $sisi1, $sisi2, $sisi3;
    public function __construct($alas, $tinggi, $sisi1, $sisi2, $sisi3)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisi1 = $sisi1;
        $this->sisi2 = $sisi2;
        $this->sisi3 = $sisi3;
    }
    public function namaBidang()
    {
        echo "Segitiga";
    }
    public function nilaiVariable()
    {
        return "alas: " . $this->alas . ", tinggi: " . $this->tinggi . ", sisi 1: " . $this->sisi1 . ", sisi 2: " . $this->sisi2 . ", sisi 3: " . $this->sisi3;
    }
    public function luasBidang()
    {
        $luas = 0.5 * $this->alas * $this->tinggi;
        return $luas;
    }
    public function kelilingBidang()
    {
        $keliling = $this->sisi1 + $this->sisi2 + $this->sisi3;
        return $keliling;
    }
}
?>