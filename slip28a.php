<?php
$db = mysqli_connect("hostname", "username", "password", "database_name");

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM Credentials WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);

    if (mysqli_num_rows($results) == 1) {
        echo "Valid";
    } else {
        echo "Invalid";
    }
}
?>