<?php
$serverName="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="phpprototype1";


$conn = mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);

if(!$conn){
    die("Connetion failed: ". mysqli_connect_error())
}