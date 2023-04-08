<?php
    include "cdn.html";
    $conn=mysqli_connect('localhost','root','','downloads');
    if($conn)
    {
        echo"connection is successful";
    }
    else{
        echo"unable to connect";
    }
?>