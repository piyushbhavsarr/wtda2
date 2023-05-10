<?php
session_start();
if(!isset($_SESSION["attempts"])) {
    $_SESSION["attempts"] = 0;
}
if($_SESSION["attempts"] >= 3) {
    echo "Error: 3 Login attempts are over.";
    session_destroy();
} else {
    $correct_username = "admin";
    $correct_password = "password";
    if($_POST["username"] == $correct_username && $_POST["password"] == $correct_password) {
        $_SESSION["attempts"] = 0;
        header("Location: slip3awelcome.html");
    } else {
        $_SESSION["attempts"]++;
        echo "Error: Incorrect username or password.";
    }
}

?>