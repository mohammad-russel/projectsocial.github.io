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
                <h1>Sign-Up</h1>
                <br>
                <input type="fullname" name="fullname" id="fullname" placeholder="Full Name" required />
                <br><br>
                <input type="number" name="number" id="number" placeholder="Number" required />
                <br><br>
                <input type="email" name="email" id="email" placeholder="Email" required />
                <br><br>
                <input type="password" name="password" id="password" placeholder="Password" required />
                <br><br>
                <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display: none;"></p>
                <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
                <p><img id="output" width="100" /></p>

                <input type="submit" value="Sign up" id="submit" />
                <br><br>
                <button>
                    <a href="index.html">Login</a>
                </button>
            </form>
        </div>
    </div>
</body>
<script>
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>

</html>