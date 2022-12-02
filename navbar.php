<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/all.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Navbar</title>
    </head>
    <body>
        <div>
            <a href="login_form.php">LOG IN</a>
        </div>
        <header>
            <div class="logo">
                <a href="/">
                    John Oreo
                </a>
                <a href="adminpage.php">
                    <i class="fa-solid fa-cookie-bite"></i>
                </a>
            </div>

            <nav>
                <ul class="nav-links">
                    <li><a href="aboutme.php">About</a></li>
                    <li><a href="currentprojects.php">Projects</a></li>
                    <li><a href="resume.php">Resume</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <?php
                        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                            echo '<li><a href="logout.php">Log Out</a></li>';
                        }
                        else {
                            echo '<li><a href="login_form.php">Log In</a></li>';
                        }
                    ?>
                </ul>
            </nav>

        </header>      
    </body>
</html>