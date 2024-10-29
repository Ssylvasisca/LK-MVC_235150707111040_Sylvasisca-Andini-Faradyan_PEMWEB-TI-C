<?php 

class Controller{
    //handle model :
    //1. cek apakah file model ada?
    //2. jika ada, maka require kelas model
    //3. instansiasi pada kelas model

    public function loadmodel($model){
        if (file_exists('apps/models/'.$model.'.php')){
            require_once('apps/models/'.$model.'.php');
            $model = new $model;
        }
        return $model;
    }
}