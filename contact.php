<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/all.css">
        <link rel="stylesheet" href="assets/css/style_test.css">
        <title>Contact | John Oreo</title>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    </head>
    <body class="body-background">
        <?php
            include_once("navbar.php");
        ?>
        <div class="body-content">
            <div class=form-container> 
            <form class="contact-form" action="">
                    <h1 class="contact-title">Contact Me</h1>
                    <input type="text" name="name" id="name" class="contact-input" placeholder="Full Name">
                    <input type="email" name="email" id="email" class="contact-input" placeholder="Your Email">
                    <input type="text" name="subject" id="subject" class="contact-input" placeholder="Subject">
                    <textarea name="message" id="message" class="contact-input" placeholder="Message"></textarea>
                    <button type="submit" id="submit" class="contact-button">Send</button>
                    <div class="form-message" id="display-message"></div>
                </form>
            </div>
        </div>

        <?php
          include_once("footer.html");
        ?>

        <script type="text/javascript" src="assets/js/contact-script.js"></script>
    </body>
</html>