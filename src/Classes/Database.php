<?php

namespace App\Classes;

class Database
{
    private $databasefile;
    public $data;

    public function __construct($filename , $entitis)
    {
        $this->databasefile = "./database/".$filename.".json";
        $file = fopen($this->databasefile , 'r+');
        $database=fread($file,filesize($this->databasefile));
        fclose($file);
        $data=json_decode($database,true);
        $this->data=array_map(function($code) use ($entitis)
        {
            return new $entitis($code);
        },$data);
    }

    public function setdata($newdata)
    {
        $this->data=$newdata;
        $newdata= array_map(function($obj)
        {
            return $obj->toArray();
        },$newdata);

        $newdata= json_encode($newdata);

        $file = fopen($this->databasefile,'w+');
        fwrite($file,$newdata);
        fclose($file);
    }
}

