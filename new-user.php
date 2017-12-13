<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create new user</title>
    <link rel="stylesheet" type="text/css" href="src/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> 
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
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>

    </body>
</html>