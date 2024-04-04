<?php
    include "connection.php";

    if(isset($_POST['SUBMIT'])){
            $username="admin";
            $password="pass";
            if ($username==$_POST['username']&&$password==$_POST['password']) {
                session_start();
                $_SESSION['user']=$username;
                header("Location: home.php");
            }
            else{
                // echo "username and password does not match";
                
                header("Location: login.php");
            }
        }
        
        // $sql = "INSERT INTO login(ID,UserName) VALUES ('$id','$usName')";

        // if(mysqli_query($conn,$sql)){
        //     echo "Submited";
        // }
        // else{
        //     echo "No";
        // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>

        *{
            margin:0px;
        }
        nav ul{
            flex:1;
            text-align:left;
            background-color: rgb(173,216,230);
            height:10vh;
        }

        nav ul li{
            display:inline-block;
            list-style:none;
            margin: 15px 5vh;
        }

        nav ul li a{
            text-decoration:none;
            color:black;
        }

        /* h1{
            margin:40vh 90vh 0 100vh;
            background-color:red;
        }

        form{
            border:1px solid black;
            background-color:pink;
            margin: 20vh 80vh 0 80vh;
            padding:30px;
            border-radius:20px;
        }

        label,input{
            margin-top:10px;
            margin-left:20px;
        }

        button{
            margin-top:10px; 
            margin-left:15vh;
           
        } */
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20vh 0 0 50vh;
            border:2px solid black;
        
        }
        th, td {
            text-align: left;
            padding: 8px;
            border:1px solid black;
        
        }

        th {
            background-color: pink;
            color: white;
        }

    </style>

</head>
<body>

    <nav>
        <ul>
            <li> <a href="Customer.php">HOME</a> </li>
            <li> <a href="newCust.php">NEW CUSTOMER</a> </li>
            <li> <a href="foodMenu.php">ALL MENU</a> </li>
        </ul>
    </nav>

    
    

</body>
</html>