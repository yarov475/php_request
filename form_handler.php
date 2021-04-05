<?php
require_once './db_connect.php';
if (!$link) {
    die('<p style="color:red">' . mysqli_connect_errno() . ' - ' . mysqli_connect_error() . '</p>');
}

$comment = $_POST['comment'];

echo "<p>Вы подключились к MySQL!  $comment </p>";

$sql = "INSERT INTO  test (comment) VALUES ('$comment')";
if (mysqli_query($link, $sql)) {
    echo "New record  $comment created successfully" ;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
mysqli_close($link);
