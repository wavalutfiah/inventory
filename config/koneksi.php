<?php
//variable
$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'inventory_wavalutfiah_xi1';

$conn = mysqli_connect($hostname,$username,$password,$database_name);

if(!$conn) {
    die('koneksi gagal'. mysqli_connect_error());
}