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
  }

  public function stop()
  {
    echo 'mobil dimatikan';
  }
}

// Objek
$mobil = new Mobil();
$mobil->merek = 'Avanza';
$mobil->model = 'Nova';
$mobil->tahun = '2023';
$mobil->warna = 'Putih';

// Panggil Method
$ket = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus natus quos porro facilis error earum illum aliquid ullam autem id!';
$mobil->cek('Yeheskiel', $ket);
