<?php

@include 'accountconfig.php';

session_start();

if(isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($aConn,$_POST['name']);
    $email = mysqli_real_escape_string($aConn,$_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['conpassword']);
    $user_type = $_POST['user_type'];

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($aConn, $select);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        if($row['user_type'] == 'admin') {
            $_SESSION['admin_name'] = $row['name'];
            header('location:adminpage.php');
        }

        else if ($row['user_type'] == 'user') {
            $_SESSION['user_name'] == $row['name'];
            header('location:userpage.php');
        }
    }

    else {
        $error[] = 'incorrect email or password';
        }

};

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="regFormContainer">
    <form action="" method="post">
        <h3>Login</h3>
        <?php
        if(isset($error)) {
            foreach($error as $error) {
                echo '<span class="error-msg">' . $error . '</span>';
            };
        };

        ?>
        <input type="email" name="email" required placeholder="Email Address">
        <input type="password" name="password" required placeholder="Password">
        <input type="submit" name="submit" value="Register Now" class="form-btn">
        <p>Not in The Group? <a href="register_form.php">Join Us...</a></p>
    </form>


</div>

</body>
</html>