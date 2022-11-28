<?php
@include 'accountconfig.php';

session_start();

if(!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
}


?>

<?php
include_once("navbar.html");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<div class="logContainer">
    <div class="logContainerContent">
        <h3>Hello <span>Follower of John Oreo</span></h3>
        <h1>Welcome<span><?php echo " " . $_SESSION['user_name'] ?></span></h1>
        <p>This is the user page for the Followers of John.</p>
        <a href="login_form.php" class="btn">Log In</a>
        <a href="register_form.php" class="btn">Register</a>
        <a href="logout.php" class="btn">Logout</a>
    </div>


</div>
<?php
include_once("footer.html");
?>
</body>
</html>

