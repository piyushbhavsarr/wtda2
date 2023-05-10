<?php
$teacherId = intval($_GET['teacherId']);

$dbconn = pg_connect("host=localhost dbname=mydb user=myuser password=mypassword")
    or die('Could not connect: ' . pg_last_error());

$query = "SELECT * FROM TEACHER WHERE tno = $1";
$result = pg_query_params($dbconn, $query, array($teacherId))
    or die('Query failed: ' . pg_last_error());

if ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "<h2>" . $line['tname'] . "</h2>";
    echo "<p>Qualification: " . $line['qualification'] . "</p>";
    echo "<p>Salary: $" . $line['salary'] . "</p>";
}

pg_free_result($result);
pg_close($dbconn);
?>