<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="design.php">
    <style>
        body{
            background-image: linear-gradient(rgb(238, 242, 242),rgb(62, 129, 139));
            margin-bottom: 27.4vh;
        } 

        section{
            background-color: pink;
            margin: 20vh 70vh 0 70vh;
            border-radius: 20px;
            box-shadow: 100px;
        }

        img{
            width: 100px;
            height: 100px;
            float: right;
            
        }

        h2{
            margin-left: 25vh;
            text-decoration: underline;
            text-underline-offset: 4px;
        }

        h3{
            margin-left: 20vh;
            text-decoration: underline;
            text-underline-offset: 4px;
        }

        form{
            padding: 20px;
        }

        label,input{
            margin-top: 8px;
            margin-left: 10px;
        }

        input{
            border-radius: 8px;
            border: none;
            height: 20px;
        }

        

        button{
            margin-top: 8px;
            margin-left: 25vh;
            padding: 8px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
        }

        button:hover{
            background-color: grey;
        }
    </style>
</head>
<body>
    <section>

        <form action="home.php" method="POST">
            <h2>CAFE</h2>
            <h3>LOGIN PAGE</h3>

            <!-- <div>
                <label for="name"> <b>UserID:</b> </label>
                <input type="number" name="Id" id="Id" placeholder="" required>
            </div> -->
            <img src="Images/logo.png" alt="">
            <div>
                <label for="name"> <b>UserName</b> </label>
                <input type="text" name="username" id="username" placeholder="Username" required>
            </div>

            <div>
                <label for="password"><b>Password</b> </label>
                <input type="password" name="password" id="password" placeholder="password" required>
            </div>

            <div>
                <input type="checkbox" onclick="myFunction()">Show Password
            
                <script>
                function myFunction() {
                    var x = document.getElementById("password");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                }
                </script>
            </div>
            <br>
            <div class="create">
                <label for="" style="margin-left:15vh; margin-top: 10px;">Don't have an account?</label>
                <a href="">Create</a>
            </div>

            <button type="submit" name="SUBMIT">SUBMIT</button>
        </form>
    </section>
    
</body>
</html>