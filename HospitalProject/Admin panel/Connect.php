<?php

$host="localhost";
$user="root";
$password="freshmololuwa";
$db="oduduwa_hospital";
$port="3307";



$data= mysqli_connect($host,$user,$password,$db,$port);
if(!$data)
{
    die(mysqli_error($data));
}

?>