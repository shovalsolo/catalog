<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Item information</title>
    <link rel="stylesheet" type="text/css" href="src/style.css">
</head>
    <body>
    <header class="header flex flex-jus-spa-aro">
        <h1>Item details</h1>
        <div class="flex flex-dir-col">
            <h5 class="pad-ex-sml"><a href="new-item.php">Create new item</a></h5>
            <h5 class="pad-ex-sml"><a href="index.php">Logout</a></h5>
        </div>
    </header>
        <div>

            <?php 
            echo "<br><br>";
            $item = $_POST['item'];

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
                            <div class="margin-all-ex-lar">
                                <?php echo "<img class='item-img' src='data:image/jpeg;base64," .base64_encode($row['image'])."'>"; ?>
                            </div>
                            <div class="item-div flex flex-center flex-dir-col margin-all-ex-lar">
                <form form method="POST" action="delete-item.php">
                    <button type="submit"  name="item" value="<?php echo $row['id']?>">Delete Item</button>
                </form>
            </div>
                    </div>
            <?php } ?>
        </div>
        <footer class="footer">
        <p class="flex flex-center">Copyright &copy; Solotech 2017</p>
        </footer> 
    </body>
</html>
