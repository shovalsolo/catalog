<?php
echo "new-item.php";
echo "adding a new item"

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Category information</title>
    <link rel="stylesheet" type="text/css" href="src/style.css">
</head>
    <body>
        <div class="border-all"> 

            <form method="POST" action="">
                <p>
                    <label for="">New item name: </label>
                    <input type="text" name="itemName" >
                </p>
                <p>
                    <label for="">New item price: </label>
                    <input type="number" name="itemPrice" min="0.01" step="0.01" max="2500"/>
                </p>
                <p>
                    <label for="">Item image: </label>
                    <input type="text" name="itemName" >
                </p>
                <p>
                    <input type="submit" class="add-item" value="Add item">
                </p>
            </form>
        </div>    
    </body>
</html>