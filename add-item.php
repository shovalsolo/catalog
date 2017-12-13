<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Category information</title>
    <link rel="stylesheet" type="text/css" href="src/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> 
</head>
    <body>
        <header class="header">

        </header>
        <div class="flex flex-center flex-dir-col">

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
                echo "<p><h2>New item was created</h2></p><br/><br/>";
               
            }else {
                echo "<h2>Item was not created</h2>";
            }
          
            ?>
            <div class="item-div flex flex-center flex-dir-col margin-all-ex-lar">
                <h5 class="pad-ex-sml bgc-green"><a href="index.php">Back to Login page</a></h5>
            </div>
        </div> 
        <footer class="footer">
        <p class="flex flex-center">Copyright &copy; Solotech 2017</p>
        </footer>  
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>

    </body>
</html>