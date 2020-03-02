<?php

    global $koneksi;

    $nameserver = "localhost";
    $username	= "root";
    $password	= "";
    $namadb		= "db_itstitan";

    $koneksi = mysql_connect($nameserver,$username,$password,$namadb);

    if(!$koneksi) {
    	 die("Koneksi Gagal".mysql_connect_error());
    }
?>