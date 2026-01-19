<?php
require_once "./includes/config.php";

if (isset($_POST['send'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if (empty($username) || empty($email) || empty($subject) || empty($message)) {
        header('location:contact.php?error');
    } else {


        $sql = "INSERT INTO contact (username, email, subject, message) VALUES (:username, :email, :subject, :message)";

        if ($stmt = $connect->prepare($sql)) {
            $stmt->bindParam(":username", $param_username);
            $stmt->bindParam(":email", $param_email);
            $stmt->bindParam(":subject", $param_subject);
            $stmt->bindParam(":message", $param_message);

            $param_username = $username;
            $param_email = $email;
            $param_subject = $subject;
            $param_message = $message;

            if ($stmt->execute()) {
                header('location:contact.php?success');
            }
        }
    }
} else {
    header("location: contact.php");
}
