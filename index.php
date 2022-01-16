<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <?php
    include "css/form.php";
    ?>
</head>

<body>
    <div class="container">
        <div class="box">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <h1>Log-in</h1>
                <br>
                <input type="email" name="email" id="email" placeholder="Email" required />
                <br><br>
                <input type="password" name="password" id="password" placeholder="Password" required />
                <br><br>
                <input type="submit" value="Login" id="submit" />
                <br><br>
                <button>
                    <a href="signup.php">Sign up</a>
                </button>
            </form>
        </div>
    </div>
</body>

</html>
