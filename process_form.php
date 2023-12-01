<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Process the data as needed (e.g., send emails, store in a database)

    // Redirect to a thank you page
    header("Location: index.html");
    exit();
}

?>
