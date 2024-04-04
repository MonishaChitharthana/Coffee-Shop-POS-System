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
        <?php
            include "home.php";
        ?>
        </style>
            <body>
            <form method = "POST">
                <!-- <label for="search">Phone number:</label>
                <input type="tel" name="phone" id="phone" > 
                    <button type="button" value="Search">
                        Search
                    </button> -->
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
        
        include "newCustomer.php";
        
        $sql = "SELECT * FROM `login`";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0)
        {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr><td>" .$row['ID']. "</td>";
            echo "<td>" .$row['UserName']. "</td>";
            echo "<td>" .$row['Amount']. "</td></tr>";
        }
        echo "</table>";
        }
        else
        echo "0 results";
        
    mysqli_close($conn);

    ?>
    
</body>
</html>


