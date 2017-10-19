<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Item information</title>
    <link rel="stylesheet" type="text/css" href="src/style.css">
</head>
    <body>
    <header class="header flex flex-jus-spa-aro">
        <h1>Item deleted</h1>
        <div class="flex flex-dir-col">
            <h5 class="pad-ex-sml"><a href="new-item.php">Create new item</a></h5>
            <h5 class="pad-ex-sml"><a href="index.php">Logout</a></h5>
        </div>
    </header>
        <div>

            <?php 
            echo "<br><br>";
            $item = $_POST['item'];
            // echo $item;

            $dbervername = "localhost"; //server name
            $dbUsername = "root"; // user name to login to db
            $dbPassword = "" ; // password to login to db
            $dbName = "catalog" ; // db name

            $connection = mysqli_connect($dbervername,$dbUsername,$dbPassword,$dbName) ; //a connection to db func ('env/ip','user','pass' ,'db name')

            if (!$connection){ // if not able to connect to server user/pass/host is not correct gives message
                die ("could not connect to data base"); // message for wrong connection
            }

            $query = "DELETE FROM item WHERE id = $item";

            $result = mysqli_query($connection,$query); ?>
            <div class="item-div flex flex-center flex-dir-col margin-all-ex-lar">
                <h5 class="pad-ex-sml">Item was deleted!</h5>
                <h5 class="pad-ex-sml bgc-green"><a href="index.php">Back to Login page</a></h5>
            </div>
        </div>
        <footer class="footer">
        <p class="flex flex-center">Copyright &copy; Solotech 2017</p>
        </footer> 
    </body>
</html>