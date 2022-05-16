<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class config extends Controller
{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "eoq";
    
    function koneksidatabase()
    {
        //koneksi ke database mysql
        @mysql_pconnect($this->server, $this->username, $this->password) or die ("tidak ada koneksi database");
        //memilih database di mysql
        mysql_select_db ($this->database) or die ("database tidak ketemu");
    }

    
}

$d1 = new database();
$d1->koneksidatabase();