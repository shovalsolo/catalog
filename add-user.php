<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login catalog</title>
    <link rel="stylesheet" type="text/css" href="src/style.css">
</head>
    <body>
    <header class="header">

    </header>
        <div class="flex flex-center flex-dir-col margin-all-ex-lar">
            <?php 

            $nusername = $_POST["nusername"];
            $npassword = $_POST["npassword"];
            // echo $nusername;
            // echo $npassword;

            $dbervername = "localhost"; //server name
            $dbUsername = "root"; // user name to login to db
            $dbPassword = "" ; // password to login to db
            $dbName = "catalog" ; // db name

            $connection = mysqli_connect($dbervername,$dbUsername,$dbPassword,$dbName) ; //a connection to db func ('env/ip','user','pass' ,'db name')

            if (!$connection){ // if not able to connect to server user/pass/host is not correct gives message
                die ("could not connect to data base"); // message for wrong connection
            }

            $query = "INSERT INTO users (username, password) VALUES ('$nusername','$npassword')";

            //insert in to first null parameter is an id and automatic second is fruit name


            $result = mysqli_query($connection,$query);
            if ($result){
                echo "<h2>New user was created</h2><br/>";
            }else {
                echo "<h2>User was not created</h2>";
            }

            ?>
            <p>
                <a href="index.php" class="new-user">Back to login page</a>
            </p> 
        </div>
        <footer class="footer">
        <p class="flex flex-center">Copyright &copy; Solotech 2017</p>
        </footer>      
    </body>
</html>
