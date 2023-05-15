<?php

class mahasiswa{
    public $nim = "956";
    public $nama = "ismi";
    public $jurusan = "pplg";
    function tampil_biodata(){
        echo $this-> nim,"<br>";
        echo $this-> nama,"<br>";
        echo $this-> jurusan;
    }
}
$mahasiswa1= new mahasiswa();
    $mahasiswa1->nim = "956";
    $mahasiswa1->nama = "ismi";
    $mahasiswa1->jurusan = "pplg";

$mahasiswa1->tampil_biodata();

$mahasiswa1 = new mahasiswa("956","ismi","pplg");