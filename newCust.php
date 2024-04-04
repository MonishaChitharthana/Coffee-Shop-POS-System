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
<form action="Customer.php" method="post">
        
        <!-- <div>
            <label for="id"> <b>Customer ID:</b> </label><br>
            <input type="number" name="id" id="id" placeholder="id" required>
        </div> -->

        <div>
            <label for="name"> <b>Customer Name:</b> </label><br>
            <input type="text" name="name" id="name" placeholder="name" required>
        </div>

        <!-- <div>
            <label for="phone"><b>Phone:</b> </label><br>
            <input type="tel" name="phone" id="phone" required>
        </div> -->
        
        <div>
            <label for="amount"><b>TopUP Amount:</b> </label><br>
            <input type="number" name="amount" id="amount" placeholder="amount" required>
        </div>

        <button type="submit">SUBMIT</button>

    </form>
</body>
    
</html>


