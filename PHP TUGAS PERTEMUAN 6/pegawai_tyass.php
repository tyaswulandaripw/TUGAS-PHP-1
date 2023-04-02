<?php

class Pegawai{
    protected $nip;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;
    static $jml = 0;
    const PT = 'PT HTP Indonesia';
    
    static $tunjangan = 0;

    public function __construct($nip, $nama, $jabatan, $agama, $status){
        $this-> nip = $nip;
        $this-> nama = $nama;
        $this-> jabatan = $jabatan;
        $this-> agama = $agama;
        $this-> status = $status;
        self::$jml++;
    }

    // Gaji Pokok
    public function setGajiPokok($jabatan){
        switch($jabatan){
            case 'Manager' : $gapok = 15000000; break;
            case 'Asisten Manager' : $gapok = 10000000; break;
            case 'Kepala Bagian' : $gapok = 6000000; break;
            case 'Staff' : $gapok = 4000000; break;
            default: $gapok;
        }
        return $gapok;
    }

    // Tunjangan Jabatan
    public function setTunJab($jabatan){
        switch($jabatan){
            case 'Manager' || 'Asisten Manager' || 'Kepala Bagian' || 'Staff' 
            : $tunjangan = $this->setGajiPokok($this->jabatan) * 0.2; break;
            default: $tunjangan;
        }
        return $tunjangan;
    }
    
    // Tunjangan Keluarga
    public function setTunKel($status){
        $tunKel = ($status == 'Menikah') ? $this->setGajiPokok($this->jabatan) * 0.1 : 0;
        return $tunKel;
    }

    // Zakat Profesi
    public function setZakPro($agama){
        $zakat = ($agama == 'Islam' &&  $this->setGajiPokok($this->jabatan) + $this->setTunJab($this->jabatan) + $this->setTunKel($this->status) >= 6000000) ? $this->setGajiPokok($this->jabatan) * 0.025 : 0;
        return $zakat;
    }
    
    // Gaji Bersih
    public function gaBer($gaji){
        $gajiBersih = $this->setGajiPokok($this->jabatan) + $this->setTunJab($this->jabatan) + $this->setTunKel($this->status) - $this->setZakPro($this->agama);
        return $gajiBersih;
    }

    public function cetak(){
        echo 'NIP Pegawai : ' .$this-> nip;
        echo '<br> Nama Pegawai : ' .$this-> nama;
        echo '<br> Jabatan : ' .$this-> jabatan;
        echo '<br> Agama : ' .$this-> agama;
        echo '<br> Status : ' .$this-> status;
        echo '<br> Gaji Pokok : Rp, '.number_format($this->setGajiPokok($this->jabatan),0,',','.');
        echo '<br> Tunjangan Jabatan : Rp, '.number_format($this->setTunJab($this->jabatan),0,',','.');
        echo '<br> Tunjangan Keluarga : Rp, '.number_format($this->setTunKel($this->status),0,',','.');
        echo '<br> Zakat : Rp, '.number_format($this->setZakPro($this->agama),0,',','.');
        echo '<br> Gaji Bersih : Rp, '.number_format($this->gaBer($this->agama),0,',','.');
        echo '<hr>';
    }

}

?>