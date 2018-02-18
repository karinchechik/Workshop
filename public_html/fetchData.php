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
$userId = $_GET['userid'];
$sql="SELECT * FROM `user_pref` WHERE `user_id`='".$userId."' ORDER BY `id` DESC LIMIT 0, 1";
$result = mysqli_query($connection, $sql);
$userPref = mysqli_fetch_assoc($result);
mysqli_close($connection);

echo json_encode($userPref, JSON_UNESCAPED_UNICODE);
exit();

?>