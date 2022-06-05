<?php
    session_start();
    $conn = mysqli_connect('localhost', 'root','','ratemyprroffesor');
    if (mysqli_connect_errno())
    {
        header('failed_msg.php');
    }

?>