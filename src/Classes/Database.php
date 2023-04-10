<?php

namespace App\Classes;

class Database
{
    private $databasefile;
    public $data;

    public function __construct($filename , $entity)
    {
        $this->databasefile = "./database/".$filename.".json";
        $file = fopen($this->databasefile , 'r+');
        $database=fread($file,filesize($this->databasefile));
        fclose($file);
        $data=json_decode($database,true);
        $this->data=array_map(function($code) use ($entity)
        {
            $obj= new ($entity)();
            $obj -> set_id($code["id"]);
            $obj -> set_titel($code["titel"]);
            $obj -> set_content($code["content"]);
            $obj -> set_category($code["category"]);
            $obj -> set_view($code["view"]);
            $obj -> set_image($code["image"]);
            $obj -> set_date($code["date"]);
            return $obj;
        },$data);
    }
}