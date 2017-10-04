<?php
echo "new-item.php";
echo "<br/><br/>";

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Category information</title>
    <link rel="stylesheet" type="text/css" href="src/style.css">
</head>
    <body>
    <header class="header">
         <h1>Add a new item </h1>
    </header>
        <div class="flex flex-center"> 
        
            <form enctype="multipart/form-data" method="POST" action="add-item.php">
                <p class="margin-all-ex-lar">
                    <label for="">New item name: </label>
                    <input type="text" name="itemname" >
                </p>
                <p class="margin-all-ex-lar">
                    <label for="">New item price: </label>
                    <input type="number" name="itemprice" min="0.01" step="0.01" max="2500"/>
                </p>
                <p class="margin-all-ex-lar">
                    <label for="">Item image: </label>
                    <input type="file" name="myfile" >
                    <select name="categories">
                        <option value="1">Food</option>
                        <option value="2">Drink</option>
                        <option value="3">Shoes</option>
                    </select>
                </p>
                <!-- <p class="margin-all-ex-lar">
                    <select name="categories">
                        <option value="1">Food</option>
                        <option value="2">Drink</option>
                        <option value="3">Shoes</option>
                    </select>
                </p> -->
                <p class="flex flex-center margin-all-ex-lar">
                    <input type="submit" value="Add item">
                </p>
            </form>
        </div>
        <footer class="footer">
        <p class="flex flex-center">Copyright &copy; Solotech 2017</p>
        </footer>     
    </body>
</html>