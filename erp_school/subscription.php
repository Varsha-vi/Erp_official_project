<?php
require_once "./includes/config.php";
// Subscription
$email = "";
$emailErr = "";

if (isset($_POST["subscribe"])) {
    // echo "Working";
    $email = $_POST["email"];

    if (empty($email)) {
        $emailErr = "This field can't be empty.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = 'Email is invalid';
    }



    if (empty($emailErr)) {


        $sql = "INSERT INTO subscription (email) VALUES (:email)";

        if ($stmt = $connect->prepare($sql)) {

            $stmt->bindParam(":email", $param_email);

            $param_email = $email;

            if ($stmt->execute()) {
                // echo "form submitted successfully";
            } else {
                echo "Error";
            }
        }
        unset($stmt);
    }
    unset($connect);
}
