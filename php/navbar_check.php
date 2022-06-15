<?php
error_reporting(E_ALL ^ E_WARNING); 
session_start();
if(isset($_SESSION['id'])){
    include('php/navbar_in.php');
}
else{
    include('php/navbar_out.php');
}
?>

 