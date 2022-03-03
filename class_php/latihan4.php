<?php
class tes
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
    public function tampilkan2($obj)
    {
        echo 'Nama : ' . $obj->nama;
        echo "\n";
        echo 'NPM : ' . $obj->npm;
    }
}
class dzaky extends tes
{
}
