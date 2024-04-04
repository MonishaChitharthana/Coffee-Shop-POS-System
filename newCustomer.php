<?php
    include "connection.php";

    // isset($_POST['id']) &&

    if(isset($_POST['name'])&&isset($_POST['amount']))
    {
        // $id = $_POST['id'];
        $name = $_POST['name'];
        $amt= $_POST['amount'];

        $sql = "INSERT INTO login(UserName, Amount) VALUES ('$name','$amt')"; 
        if(mysqli_query($conn,$sql))
            echo "REQUEST SUBMITTED";
        else 
            echo "ERROR";
    }

?>