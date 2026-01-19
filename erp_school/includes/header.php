<?php require_once("./includes/config.php"); ?>

<?php 
$title = "";
if ($_SERVER["REQUEST_URI"] === "/iqdigit/about.php") {
  $title = "ER App - About US";
} elseif ($_SERVER["REQUEST_URI"] === "/iqdigit/vision.php") {
  $title = "ER App  - Our Mission & Vision";
} elseif ($_SERVER["REQUEST_URI"] === "/iqdigit/why-us.php") {
  $title = "ER App  - Why Choose Us ?";
} elseif ($_SERVER["REQUEST_URI"] === "/iqdigit/partners.php") {
  $title = "ER App - Our partners";
} elseif ($_SERVER["REQUEST_URI"] === "/iqdigit/contact.php" || $_SERVER["REQUEST_URI"] === "/iqdigit/contact.php?error" || $_SERVER["REQUEST_URI"] === "/iqdigit/contact.php?success") {
  $title = "ER App - Contact Us";
}
else {
  $title = "ER App ";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title; ?></title>
    <!-- Favicon -->
    <link rel="icon" href="./images/iqdigit-favicon.png">
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <!-- External CSS -->
    <link rel="stylesheet" href="./style.css" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Animate On Scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  </head>
  <body>