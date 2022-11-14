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
            include_once("navbar.html");
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

        <script>
            $(document).ready(function() {
                $("#submit").click(function() {
                    var name = $("#name").val();
                    var email = $("#email").val();
                    var subject = $("#subject").val();
                    var message = $("#message").val();

                    var datastring = 'name1=' + name + '&email1=' + email + '&subject1=' + subject + '&message1=' + message;

                    if(name == '' || email == '' || subject == '' || message == '') {
                        $("#display-message").html('<div class="form-error"> Please fill in all fields </div>');
                    } else {
                            $.ajax({
                                type: "POST",
                                url: "processor.php",
                                data: datastring,
                                cache: false,
                                success: function(result) {
                                    $("#display-message").html(result);
                                }
                            });
                    }

                    return false;
                });
            });
        </script>   
    </body>
</html>