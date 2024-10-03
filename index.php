<?php

class Mobil
{

  // Property
  public $merek;
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
    echo 'Merek :' . $this->merek . '<br>';
    echo 'Model :' . $this->model . '<br>';
    echo 'Tahun :' . $this->tahun . '<br>';
    echo 'Warna :' . $this->warna . '<br>';
    echo 'Pemilik :' . $nama . '<br>';
    echo 'Keterangan :' . $ket . '<br>';
    echo '<br>';
  }

  public function stop()
  {
    echo 'mobil dimatikan';
  }
}

class Kendaraan extends Mobil
{
  public $jenis;

  public function bergerak()
  {
    echo 'kendaraan sedang bergerak';
  }
}

// Objek
$mobil = new Mobil();
$kendaraan = new Kendaraan();
$mobil->merek = 'Avanza';
$mobil->model = 'Nova';
$mobil->tahun = '2023';
$mobil->warna = 'Putih';

// Panggil Method
$ket = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus natus quos porro facilis error earum illum aliquid ullam autem id!';
$mobil->cek('Yeheskiel', $ket);
$kendaraan->merek = 'BMW';
$kendaraan->model = 'Nova';
$kendaraan->tahun = '2023';
$kendaraan->warna = 'Putih';
$kendaraan->cek('Ekel', '');
