<?php

$dbhost = "localhost";
$dbuser = "karinch_karinch";
$dbpass = "88556633";
$dbname = "karinch_yome_db1";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
mysqli_set_charset($connection, "utf8");

//testing connection success
if (mysqli_connect_errno()) {
    die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
}
/*************************************************/
$articleId = $_GET['articleid'];
$sql="SELECT * FROM `articles` WHERE `id`='".$articleId."' ";
$result = mysqli_query($connection, $sql);
$articleId = mysqli_fetch_assoc($result);
mysqli_close($connection);

echo json_encode($articleId, JSON_UNESCAPED_UNICODE);
exit();

?>