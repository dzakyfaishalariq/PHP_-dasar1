<?php
class latihan1
{
    public $nama = 'Dzaky faishalariq';
    public $kelas = 'XI RPL 2';
    public function get_nama()
    {
        echo 'Nama anda : ' . $this->nama;
        echo '<br>';
        echo 'Kelas anda : ' . $this->kelas;
    }
}
$nilai = new latihan1();
$nilai->get_nama();
