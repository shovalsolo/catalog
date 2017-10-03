<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categories information</title>
    <link rel="stylesheet" type="text/css" href="src/style.css">
</head>
    <body>
        <div class="border-all">

        <h1>You are in categories.php</h1>
        <p>In this page we need to bring all the categores</p>
        <?php

        //Get values taht was passed from the form in the index.php login 
        $username = $_POST['username'];
        $password = $_POST['password'];


        //connect to the server and select DB

        $dbervername = "localhost"; //server name
        $dbUsername = "root"; // user name to login to db
        $dbPassword = "" ; // password to login to db
        $dbName = "catalog" ; // db name

        $connection = mysqli_connect($dbervername,$dbUsername,$dbPassword,$dbName) ; //a connection to db func ('env/ip','user','pass' ,'db name')

        if (!$connection){ // if not able to connect to server user/pass/host is not correct gives message
            die ("could not connect to data base"); // message for wrong connection
        }

        $query = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
        //insert in to first null parameter is an id and automatic second is fruit name

        $result = mysqli_query($connection,$query);
        $row = mysqli_fetch_assoc($result);

        if ($row['username'] == $username && $row['password'] == $password ){
            echo "login success !!! welcome ".$row['username'];
            $connection = mysqli_connect($dbervername,$dbUsername,$dbPassword,$dbName) ; //a connection to db func ('env/ip','user','pass' ,'db name')
            
            if (!$connection){ // if not able to connect to server user/pass/host is not correct gives message
                die ("could not connect to data base"); // message for wrong connection
            }
            
            $query = "SELECT * FROM categories";

            $result = mysqli_query($connection,$query); ?>

            <div class="categories">
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    
                    <form method="POST" action="category.php">

                        <div class="category flex flex-center flex-dir-col border-all-sml bor-radius-sml">
                            <button type="submit" name="cname" value="<?php echo $row['id']?>"><?php echo $row['cname']; ?></button>
                            <div>
                                <?php echo "<img class='img' src='data:image/jpeg;base64," .base64_encode($row['image'])."'>"; ?>
                            </div>    
                        </div>
                    </form>
                <?php } ?>
            </div>

        <?php
        } else{
            header("Location: index.php");
        }
        ?>
    </body>
</html>