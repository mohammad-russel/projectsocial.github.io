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
<?php
if (isset($_POST['submit'])) {
    include "php/config.php";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $image_name = $_FILES['image']['name'];
    $image_tmpname = $_FILES['image']['tmp_name'];

    move_uploaded_file($image_tmpname, "userimage/" . $image_name);
    $usersql = "INSERT INTO user(fname,lname,num,mail,pass,propic) VALUES ('{$fname}','{$lname}','{$number}','{$email}','{$password}','{$image_name}' )";
    $usersql1 = "SELECT * FROM user WHERE mail='{$email}' ";
    $userresult1 = mysqli_query($con, $usersql1);
    if (mysqli_num_rows($userresult1)) {
        echo "Email Are Allready Exist";
    } else {
        $userresult = mysqli_query($con, $usersql);
        header("location:index.php");
    }
}


?>

<body>
    <div class="container">
        <div class="box">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <h1>Sign-Up</h1>
                <br>
                <input type="text" name="fname" id="fname" placeholder="First Name" required />
                <br><br>
                <input type="text" name="lname" id="lname" placeholder="Last Name" required />
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

                <input type="submit" name="submit" value="Sign up" id="submit" />
                <br><br>
                <button>
                    <a href="index.php">Login</a>
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