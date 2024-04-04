<?php
include 'home.php';
?>

<html>
    <head>
        <title>New Customer</title>
        <style>
        h1{
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
            cursor: pointer;
        }
        </style>
    </head>
<body>
<form action="foodMenu.php" method="post">
        
        <div>
            <label for="id"> <b>Food ID:</b> </label><br>
            <input type="number" name="id" id="id" required>
        </div>

        <div>
            <label for="name"> <b>Food Name:</b> </label><br>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="price"><b>Price:</b> </label><br>
            <input type="number" name="price" id="price" required>
        </div>

        <button type="submit">SUBMIT</button>

    </form>
</body>
    
</html>


