<?php
class person
{
    public $nama;
    public $npm;
    public function __construct($nama, $npm)
    {
        $this->nama = $nama;
        $this->npm = $npm;
    }
    public function tampilkan()
    {
        echo 'Nama : ' . $this->nama;
        echo "\n";
        echo 'NPM : ' . $this->npm;
    }
}
$data = new person('Dzaky Faishal Ariq', '1708561000003');
$data->tampilkan();
