<!DOCTYPE html>
<!-- Index the first login page -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login catalog</title>
    <link rel="stylesheet" type="text/css" href="src/style.css"> <!--style css importing all css lib-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> 
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
                    <div class="frm margin-bot-big ">
                        <form method="POST" action="categories.php">  <!--On submit moving to categories.php with post-->
                            <div class="box flex flex-center flex-dir-col ">
                                <p class="pad-ex-sml">
                                    <label for="" class="pad-up-down-lar">User-name: </label> <br/>
                                    <input type="text" class="user" name="username">
                                </p>
                                <p class="pad-sml">
                                    
                                    <label for="" class="pad-up-down-lar">Password: </label> <br/>
                                    <input type="password" class="pass" name="password">
                                </p>
                                <p class="pad-sml">
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

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
    </body>
</html>