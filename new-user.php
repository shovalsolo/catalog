<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create new user</title>
    <link rel="stylesheet" type="text/css" href="src/style.css">
</head>
    <body>
    <header class="header">
        <h1>Create new user</h1>
    </header>
        <div class="flex flex-center pad-sml">

            <form action="add-user.php" method="post" class="pad-ex-sml margin-all-sml">
        
                Username: <input type="text" name="nusername" class="pad-ex-sml margin-all-lar"><br/>
                Password : <input type="password" name="npassword" class="pad-ex-sml margin-all-lar"><br/>

                <br/>
                <div class="flex flex-center">
                    <input type="submit">
                </div>
            </form>
        </div>
        <footer class="footer">
        <p class="flex flex-center">Copyright &copy; Solotech 2017</p>
        </footer>      
    </body>
</html>