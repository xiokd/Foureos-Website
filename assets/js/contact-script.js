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