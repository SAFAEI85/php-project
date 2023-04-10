<?php
require "./vendor/autoload.php";

use App\Classes\Database;
use App\Entities\Post_Entities;
 
$db=new Database("posts" , Post_Entities::class);