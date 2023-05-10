<?php
$db = mysqli_connect("hostname", "username", "password", "database_name");

if (isset($_GET['ename'])) {
    $ename = $_GET['ename'];

    $query = "SELECT * FROM EMP WHERE ename='$ename'";
    $results = mysqli_query($db, $query);

    if (mysqli_num_rows($results) == 1) {
        $employee = mysqli_fetch_assoc($results);
        echo "<p>Employee Number: " . $employee['eno'] . "</p>";
        echo "<p>Employee Name: " . $employee['ename'] . "</p>";
        echo "<p>Designation: " . $employee['designation'] . "</p>";
        echo "<p>Salary: " . $employee['salary'] . "</p>";
    }
}
?>