<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Item information</title>
    <link rel="stylesheet" type="text/css" href="src/style.css">
</head>
    <body>
        <div class="border-all">

            <?php 

            echo "this is item.php page";
            echo "<br><br>";
            $item = $_POST['item'];

            echo "All Item information";

            $dbervername = "localhost"; //server name
            $dbUsername = "root"; // user name to login to db
            $dbPassword = "" ; // password to login to db
            $dbName = "catalog" ; // db name

            $connection = mysqli_connect($dbervername,$dbUsername,$dbPassword,$dbName) ; //a connection to db func ('env/ip','user','pass' ,'db name')

            if (!$connection){ // if not able to connect to server user/pass/host is not correct gives message
                die ("could not connect to data base"); // message for wrong connection
            }

            $query = "SELECT * FROM item WHERE id = $item";

            $result = mysqli_query($connection,$query);

            while ($row = mysqli_fetch_array($result)) { ?>
                    <div class="item-div flex flex-center flex-dir-col">
                            <div class="margin-up-down-lar">
                                <strong>
                                <span><?php echo $row['name']; ?></span>
                                <span> : $<?php echo $row['price']; ?></span>
                                </strong>
                            </div>    
                            <div>
                                <?php echo "<img class='item-img' src='data:image/jpeg;base64," .base64_encode($row['image'])."'>"; ?>
                            </div>
                    </div>
            <?php } ?>
        </div>
    </body>
</html>
