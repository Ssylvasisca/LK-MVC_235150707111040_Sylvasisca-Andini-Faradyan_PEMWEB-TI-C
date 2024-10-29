<?php

class Index {
    public function __construct(){
        echo "anda berada pada controller index \n";       
    }
    public function index() {
        echo "anda memanggil sction index \n";
    }
    
    public function index_home(){
        echo "anda memanggil action home \n";
    }
}
