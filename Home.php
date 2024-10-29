<?php

class Home extends Controller {
    private $dt;
    private $df;

    public function __construct(){
        $this->dt = $this->loadmodel("barang");
        $this->df = $this->loadmodel("daftarBarang");
    }
    public function index() {
        echo "anda memanggil sction index \n";
    }
    
    public function index_home() {
        echo "anda memanggil action home \n";
    }

    public function lihatdata() {
       echo $this->dt->getData();
    }

    public function listbarang() {
        foreach ($this->df->getDataAll() as $item) {
            echo $item['id'] . " " . $item['nama'] . " " . $item['qty'];
            echo "<br />";
        }
    }
}
