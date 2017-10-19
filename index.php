<!DOCTYPE html>
<!-- Index the first login page -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login catalog</title>
    <link rel="stylesheet" type="text/css" href="src/style.css"> <!--style css importing all css lib-->
</head>
    <body>
    <header class="header">
    <h3>PRODUCT CATALOG</h3>
    </header>
        <div>
            <div class="flex flex-center pad-up-down-lar ">
            <h1>Login to catalog</h1>
            </div>
                <div class="flex flex-center">
                    <div class="frm margin-bot-big">
                        <form method="POST" action="categories.php">  <!--On submit moving to categories.php with post-->
                            <div class="box flex flex-center flex-dir-col ">
                                <p class="pad-sml">
                                    <label for="" class="pad-up-down-lar">User-name: </label> <br/>
                                    <input type="text" class="user" name="username"><br/>
                                </p>
                                <p class="pad-sml">
                                    <br/>
                                    <label for="" class="pad-up-down-lar">Password: </label> <br/>
                                    <input type="password" class="pass" name="password"><br/>
                                </p>
                                <p class="pad-sml">
                                    <br/>
                                    <input type="submit" class="sub-btn pad-sml" value="Login">
                                </p>
                                <p>
                                    <a href="new-user.php" class="new-user">Create new user</a>
                                </p> 
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        <footer class="footer">
        <p class="flex flex-center">Copyright &copy; Solotech 2017</p>
        </footer>     
    </body>
</html>