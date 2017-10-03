<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Category information</title>
    <link rel="stylesheet" type="text/css" href="src/style.css">
</head>
    <body>
        <div class="border-all">

			<?php
			echo "add-item.php";
			echo "adding a new item"

            $dbervername = "localhost"; //server name
            $dbUsername = "root"; // user name to login to db
            $dbPassword = "" ; // password to login to db
            $dbName = "catalog" ; // db name

            $connection = mysqli_connect($dbervername,$dbUsername,$dbPassword,$dbName) ; //a connection to db func ('env/ip','user','pass' ,'db name')

            if (!$connection){ // if not able to connect to server user/pass/host is not correct gives message
                die ("could not connect to data base"); // message for wrong connection
            }

            $query = "INSERT INTO $dbName(name, price, cnumber) VALUES (".$_POST['itemName'].",".$_POST['itemPrice'].",".$cname.")";

            $result = mysqli_query($connection,$query);

            ?>

        </div>    
    </body>
</html>