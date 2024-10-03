<?php

class Mobil {

    // Property
    public $merk; 
    public $model; 
    public $tahun; 
    public $warna;

    // Method
    public function start()
    {
        echo 'Mobil dinyalakan';
    }

    public function cek($nama, $ket)
    {
        echo 'Merek :' . $this->merk.'<br>';
        echo 'Model :' . $this->model.'<br>';
        echo 'Tahun :' . $this->tahun.'<br>';
        echo 'Warna :' . $this->warna.'<br>';
        echo 'Pemilik :' . $nama.'<br>';
        echo 'Keterangan :' . $ket.'<br>';
        echo '<br>';

    }

    public function stop()
    {
        echo 'Mobil dimatikan';
    }


}

 class Kendaraan extends Mobil  {
    public $jenis;

    public function bergerak()
    {
        echo 'Kendaraan sedang bergerak';
    }
 }



// Objek 
$mobil = new Mobil();
$kendaraan = new Kendaraan();
$mobil->merk = 'Avanza';
$mobil->model = 'Nova';
$mobil->tahun = 2023;
$mobil->warna = 'Putih';

// Panggil Method
$ket =' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ducimus alias ab quia sunt reprehenderit consequuntur possimus inventore tempore deserunt.';

$mobil->cek('Samuel',$ket);
$kendaraan->merk = 'BWM';
$kendaraan->model = 'Nova';
$kendaraan->tahun = 2023;
$kendaraan->warna = 'Putih';
$kendaraan->cek('Sam','');


