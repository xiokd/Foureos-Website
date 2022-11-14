<?php
    include_once('config.php');

    $name = mysqli_real_escape_string($conn, $_POST['name1']);
    $email = mysqli_real_escape_string($conn, $_POST['email1']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject1']);
    $message = mysqli_real_escape_string($conn, $_POST['message1']);

    $sql = "INSERT INTO contact_info (name, email, subject, message)
    VALUES(?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        die(mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "ssss",
                        $name,
                        $email,
                        $subject,
                        $message);

    mysqli_stmt_execute($stmt);

    echo '<div class="form-success">
            The message was sent successfully!
        </div>';

    $conn->close();
?>