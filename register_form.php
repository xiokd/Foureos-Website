<?php

@include 'accountconfig.php';

    if(isset($_POST['submit'])) {

        $name = mysqli_real_escape_string($aConn,$_POST['name']);
        $email = mysqli_real_escape_string($aConn,$_POST['email']);
        $pass = md5($_POST['password']);
        $cpass = md5($_POST['conpassword']);
        $user_type = $_POST['user_type'];

        $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

        $result = mysqli_query($aConn, $select);

        if(mysqli_num_rows($result) > 0) {
            $error[] = 'user already exists.';

        }
        else {
            if($pass != $cpass) {
                $error[] = 'Passwords do not match.';
            }
            else {
                $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name', '$email', '$pass', '$user_type')";
                mysqli_query($aConn, $insert);
                header('location:login_form.php');
            }
        }

    };

?>

<?php
include_once("navbar.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="regFormContainer">
    <form action="" method="post">
        <h3>Create an Account</h3>

        <?php
        if(isset($error)) {
            foreach($error as $error) {
                echo '<span class="error-msg">' . $error . '</span>';
            };
        };

        ?>

        <input type="text" name="name" required placeholder="Full Name">
        <input type="email" name="email" required placeholder="Email Address">
        <input type="password" name="password" required placeholder="Password">
        <input type="password" name="conpassword" required placeholder="Confirm Password">
        <select name="user_type">
            <option value="user">user</option>
            <option value="admin">admin</option>
        </select>
        <input type="submit" name="submit" value="Register Now" class="form-btn">
        <p>already have an account? <a href="login_form.php">Log in here.</a></p>
    </form>


</div>
<?php
include_once("footer.html");
?>
</body>
</html>