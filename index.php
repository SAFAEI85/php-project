<?php
require "./vendor/autoload.php";

use App\Classes\Database;
use App\Entities\Post_Entities;
use App\Entities\Setting_Entities;

$centos= new Database('posts',Post_Entities::class);
//tamiz($centos->data);



