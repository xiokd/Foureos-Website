<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/all.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Resume | John Oreo</title>
    </head>
    <body>
        <?php
        session_start();
            include_once("navbar.php");
        ?>

        <div class="resume-content">
            <div class="resumeImage">
                <img src="assets/images/JohnOreoResume1024_1.jpg" alt="The Resume of the Great." />
            </div>
        </div>

        <?php
        include_once("footer.html");
        ?>

    </body>
</html>