<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Category information</title>
    <link rel="stylesheet" type="text/css" href="src/style.css">
</head>
    <body>
        <header class="header">

        </header>
        <div class="flex flex-center">

            <?php
            // if (isset($POST['submit'])){

            // }
            
            $itemname = $_POST["itemname"];
            $itemprice = $_POST["itemprice"];
            $categories = $_POST["categories"];
            $imagename = $_FILES["myfile"]["name"];
            $imagetmp = addslashes (file_get_contents($_FILES['myfile']['tmp_name']));

            echo "<br><br><br><br>";
            

            $dbervername = "localhost"; //server name
            $dbUsername = "root"; // user name to login to db
            $dbPassword = "" ; // password to login to db
            $dbName = "catalog" ; // db name

            $connection = mysqli_connect($dbervername,$dbUsername,$dbPassword,$dbName) ; //a connection to db func ('env/ip','user','pass' ,'db name')

            if (!$connection){ // if not able to connect to server user/pass/host is not correct gives message
                die ("could not connect to data base"); // message for wrong connection
            }

            $query = "INSERT INTO item (name, price, cnumber, image, iname) VALUES ('$itemname','$itemprice','$categories','$imagetmp','$imagename')";

            $result = mysqli_query($connection,$query);
            if ($result){
                echo "<h2>New item was created</h2><br/>";
            }else {
                echo "<h2>Item was not created</h2>";
            }
            ?>

        </div> 
        <footer class="footer">
        <p class="flex flex-center">Copyright &copy; Solotech 2017</p>
        </footer>    
    </body>
</html>