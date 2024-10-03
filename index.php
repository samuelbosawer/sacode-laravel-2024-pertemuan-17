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

    }

    public function stop()
    {
        echo 'Mobil dimatikan';
    }


}

// Objek 
$mobil = new Mobil();
$mobil->merk = 'Avanza';
$mobil->model = 'Nova';
$mobil->tahun = 2023;
$mobil->warna = 'Putih';

// Panggil Method
$ket =' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ducimus alias ab quia sunt reprehenderit consequuntur possimus inventore tempore deserunt.';

$mobil->cek('Samuel',$ket);



