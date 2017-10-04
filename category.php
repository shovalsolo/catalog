<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Category information</title>
    <link rel="stylesheet" type="text/css" href="src/style.css">
</head>
    <body>
    <header class="header flex flex-jus-spa-aro">
        <h1>Category</h1>
        <div class="flex flex-dir-col ">
            <h5 class="pad-ex-sml"><a href="new-item.php" >Create new item</a></h5>
            <h5 class="pad-ex-sml"><a href="index.php">Logout</a></h5>
        </div>
    </header>
        <div >

            <?php 

            echo "<br><br>";
            $cname = $_POST['cname'];
            
            if ($cname==1){?>
                <h1 class="flex flex-center margin-all-ex-lar">Food categoty</h1>
            <?php }
            elseif($cname==2){?>
                <h1 class="flex flex-center margin-all-ex-lar">Drink categoty</h1>
            <?php }
            elseif($cname==3){?>
                <h1 class="flex flex-center margin-all-ex-lar">Shoes categoty</h1>
            <?php }
            else{?>
                <h1 class="flex flex-center margin-all-ex-lar">New categoty</h1>
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
                    <div class="items margin-all-ex-lar">
                            <?php echo "<br>"; ?>
                            <button type="submit"  name="item" value="<?php echo $row['id']?>"><?php echo $row['name']; ?></button>
                            <span> : $<?php echo $row['price']; ?></span>
                    </div>
                </form>
               
            <?php } ?>


            <hr>
            
            <p class="flex flex-center margin-up-down-lar pad-sml">
                <a href="new-item.php" class="new-item bgc-blue pad-sml">Create new item</a>
            </p> 


        </div>
        <footer class="footer">
        <p class="flex flex-center">Copyright &copy; Solotech 2017</p>
        </footer>     
    </body>
</html>