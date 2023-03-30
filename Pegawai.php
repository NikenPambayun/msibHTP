<?php
class Pegawai{
    protected $nip;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;
    static $jml = 0;

    public function __construct($nip, $nama, $jabatan, $agama, $status){
        $this -> nip = $nip;
        $this -> nama = $nama;
        $this -> jabatan = $jabatan;
        $this -> agama = $agama;
        $this -> status = $status;
        self::$jml++;
    }
    public function setGajiPokok($jabatan){
        $this->jabatan = $jabatan;
        switch($jabatan){
            case 'Manager': $gapok = 15000000; break;
            case 'Asisten': $gapok = 10000000; break;
            case 'Kepala Bagian': $gapok = 7000000; break;
            case 'Staff': $gapok = 5000000; break;
            default: $gapok = 0;
        }
        return $gapok;
    }
    public function cetak(){
        echo 'NIP : '.$this -> nip;
        echo '<br> Nama Pegawai : '.$this -> nama;
        echo '<br> Jabatan : '.$this -> jabatan;
        echo '<br> Agama : '.$this -> agama;
        echo '<br> Status : '.$this -> status;
        echo '<br> Gaji Pokok : Rp. '.number_format($this->setGajiPokok($this->jabatan), 0, ',', '.');
        echo '<hr>';
    }
}
?>