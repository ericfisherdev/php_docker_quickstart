<?php

$connect = mysqli_connect(
    'db',
    'php_user',
    'password',
    'exampledb'
);

$table_name = "example_post";
$query = "SELECT * FROM $table_name";
$response = mysqli_query($connect, $query);

echo "<h1>PHP - DB test</h1>";
echo "<p>This script just checks that the database is up and running. If two posts are listed below then you can safely overwrite this file.</p>";
echo "<strong>Checking $table_name for two records: </strong>";
while($i = mysqli_fetch_assoc($response)) {
    echo "<div style='padding:4px; margin:8px; border: 1px solid #000'>";
    echo "<p>".$i['title']."</p>";
    echo "<p>".$i['body']."</p>";
    echo "<p>".$i['date_created']."</p>";
    echo "</div>";
}