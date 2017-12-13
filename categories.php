<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categories information</title>
    <link rel="stylesheet" type="text/css" href="src/style.css">
</head>
    <body>
    <header class="header flex flex-jus-spa-aro">
        <h1>All Categories</h1>
        <div class="flex flex-dir-col">
            <h5 class="pad-ex-sml"><a href="new-item.php">Create new item</a></h5>
            <h5 class="pad-ex-sml"><a href="index.php">Logout</a></h5>
        </div>
    </header>
        <div >
        <div class="flex flex-jus-spa-bet">
            <!-- <h1 class="margin-all-ex-lar">All Categories</h1> -->
        <?php

        //Get values taht was passed from the form in the index.php login 
        $username = $_POST['username']; //getting username from post and inserting into parameter 
        $password = $_POST['password']; //getting password from post and inserting into parameter 


        //connect to the server and select DB

        $dbervername = "localhost"; //server name
        $dbUsername = "root"; // user name to login to db
        $dbPassword = "" ; // password to login to db
        $dbName = "catalog" ; // db name

        $connection = mysqli_connect($dbervername,$dbUsername,$dbPassword,$dbName) ; //a connection to db func ('env/ip','user','pass' ,'db name')

        if (!$connection){ // if not able to connect to server user/pass/host is not correct gives message
            die ("could not connect to data base"); // message for wrong connection
        }

        $query = "SELECT * FROM users WHERE username = '$username' and password = '$password'";//select query to check if the user is in the db

        
        $result = mysqli_query($connection,$query);
        $row = mysqli_fetch_assoc($result); //Fetch a result row as an associative array

        if ($row['username'] == $username && $row['password'] == $password ){ ?> 
        <!-- checking in the array that the user and pass from the fields are the same as in the db -->
            <p class="margin-all-ex-lar"> <!-- if this is correct will print the message -->
               <?php echo "login successful welcome : ".$row['username']; ?>
            </p>
        </div>
        <div class="flex flex-center">
            <h3>Select a catagory</h3>
        </div>
        <!-- Bringing the categoried from the db -->
            <?php
            $connection = mysqli_connect($dbervername,$dbUsername,$dbPassword,$dbName) ; //a connection to db func ('env/ip','user','pass' ,'db name')
            
            if (!$connection){ // if not able to connect to server user/pass/host is not correct gives message
                die ("could not connect to data base"); // message for wrong connection
            }
            
            $query = "SELECT * FROM categories";// getting all categories

            $result = mysqli_query($connection,$query); ?>

            <div class="categories">
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    
                    <form method="POST" action="category.php">

                        <div class="category flex flex-center flex-dir-col   margin-up-down-ex-lar pad-sml">
                            <div class="margin-all-ex-lar">
                                <button class="sub-btn" type="submit" name="cid" value="<?php echo $row['id']?>"><?php echo $row['cname']; ?></button>
                                <!-- Sending in the value the id and the category name-->
                            </div>
                            <div>
                                <?php echo "<img class='img' src='data:image/jpeg;base64," .base64_encode($row['image'])."'>"; ?>
                                <!-- Printing an image from the DB -->
                            </div>    
                        </div>
                    </form>
                <?php } ?>
            </div>

        <?php
        } else{
            header("Location: index.php");
            // if the user is not in the db returning to login page
        }
        ?>
        <footer class="footer">
        <p class="flex flex-center">Copyright &copy; Solotech 2017</p>
        </footer>   
    </body>
</html>