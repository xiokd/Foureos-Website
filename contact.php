<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/all.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Contact | John Oreo</title>
    </head>
    <body class="body-contact">
        <div>
            <?php
                include_once("navbar.html");
            ?>
            <div class="contact container-contact">    
                <form class="contact-form" action="contactform.php" method="post">
                    <h1 class="contact-title">Contact Me</h1>
                    <input type="text" name="name" class="contact-input" placeholder="Full Name" required>
                    <input type="email" name="email" class="contact-input" placeholder="Your Email" required>
                    <input type="text" name="subject" class="contact-input" placeholder="Subject" required>
                    <textarea name="message" class="contact-input" placeholder="Message" required></textarea>
                    <button type="submit" class="contact-button">Send</button>
                    <div class="form-message">
                        <div class="form-success">
                            The message was sent successfully!
                        </div>
                    </div>
                </form>
            </div> 
        </div>
<<<<<<< Updated upstream
=======
        <?php
        include_once("footer.html");
        ?>
>>>>>>> Stashed changes
    </body>
</html>