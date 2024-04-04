<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
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

        button{
            margin-top:30px; 
            margin-left:100vh;
            padding: 10px;
            cursor: pointer;
           
        }

        </style>
            <body>
            
                <table>
                <tr>
                <th> ID </th>
                <th> NAME </th>
                <th> AMOUNT </th>
                </tr>


    </style>
</head>
<body>
    <?php
        include "connection.php";
        include "home.php";


        $sql = "SELECT * FROM `Menu`";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0)
        {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr><td>" .$row['ID']. "</td>";
            echo "<td>" .$row['Name']. "</td>";
            echo "<td>" .$row['Price']. "</td></tr>";
        }
        echo "</table>";
        }
        else
        echo "0 results";
        
mysqli_close($conn);

    ?>
    <form method = "POST" action="FoodMenuUpdate.php"><button action="FoodMenuUpdate.php" type="submit">Update</button></form>

</body>
</html>

<?php
    include "connection.php";

    // isset($_POST['id']) &&

    if(isset($_POST['name'])&&isset($_POST['price']))
    {
        // $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];

        $sql = "INSERT INTO Menu(Name, Price) VALUES ('$name','$price')"; 
        if(mysqli_query($conn,$sql))
            echo "MENU UPDATED";
        else 
            echo "ERROR";
    }

?>

