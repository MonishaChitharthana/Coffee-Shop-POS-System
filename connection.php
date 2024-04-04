<?php

    $conn=mysqli_connect('localhost','root','','shop');

    if(!$conn){
        echo mysqli_connect_error();
    }
    // else{
    //     echo "Connected";
    // }
?>