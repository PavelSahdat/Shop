<?php

$connect = new mysqli('localhost','root','','school');

    if($connect){
       echo "successfull";
        // die(mysqli_error($connect));
    }
    
?>