<?php
$sn="localhost";
$user = "root";
$psw = "";
$db = "tuto";

$conn = mysqli_connect($sn,$user,$psw,$db);

if(!$conn){
    die("Connection non établie" . mysqli_connect_error());
}else{
    echo "Connection etablie";
}