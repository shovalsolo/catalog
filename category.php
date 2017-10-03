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

            echo "this is categoty.php page";
            echo "<br><br>";
            $cname = $_POST['cname'];
            
            if ($cname==1){?>
                <h1>Food categoty</h1>
            <?php }
            elseif($cname==2){?>
                <h1>Drink categoty</h1>
            <?php }
            elseif($cname==3){?>
                <h1>Shoes categoty</h1>
            <?php }
            else{?>
                <h1>New categoty</h1>
            <?php }

            $dbervername = "localhost"; //server name
            $dbUsername = "root"; // user name to login to db
            $dbPassword = "" ; // password to login to db
            $dbName = "catalog" ; // db name

            $connection = mysqli_connect($dbervername,$dbUsername,$dbPassword,$dbName) ; //a connection to db func ('env/ip','user','pass' ,'db name')

            if (!$connection){ // if not able to connect to server user/pass/host is not correct gives message
                die ("could not connect to data base"); // message for wrong connection
            }

            $query = "SELECT * FROM item WHERE cnumber = $cname";

            $result = mysqli_query($connection,$query);

            while ($row = mysqli_fetch_array($result)) { ?>
            <hr>
                <form method="POST" action="item.php">
                    <div class="items">
                            <?php echo "<br>"; ?>
                            <button type="submit" name="item" value="<?php echo $row['id']?>"><?php echo $row['name']; ?></button>
                            <span> : $<?php echo $row['price']; ?></span>
                    </div>
                </form>
               
            <?php } ?>


            <hr>
            
            <p>
                <a href="new-item.php" class="new-item">Create item</a>
            </p> 

            <?php 

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