<?php

    $conn = new mysqli("localhost","root","","fgrf");

    if ($conn-> connect_error) 
    {
        echo "connection failed : ".$conn-> connect_error;
    }
?>