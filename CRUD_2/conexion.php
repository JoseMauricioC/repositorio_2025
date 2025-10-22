<?php
$con = new mysqli("localhost", "root", "","bd_agenda");

if($con->connect_error){
    die("conexion fallida ".$con->connect_error);
}

?>