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
/*$data= json_decode($_GET['data'],true);*/
/*$data = $_POST['bitahon'];*/

$sql ="INSERT INTO user_pref
(user_name, user_id,phone_number,political_pref,editorRecommendations,columnistsAndOpinion,adsAndJobs,obituaries,leisureAndCrosswords,
bitahon,mishpatAndPlilim,yediot,calcala,politics, hinoh,sport,televistion,omanot,madaAndTec,music,briot,tahbora,dat,ofna,taiarot )
VALUES ('".$_POST["userName"]."','".$_POST["id"]."','".$_POST["phoneNumber"]."','".$_POST["politicsChoice"]."','".$_POST["editorChoice"]."','".$_POST["opinions"]."','".$_POST["adsAndJobs"]."','".$_POST["evel"]."','".$_POST["crosswords"]."',
'".$_POST["bitahon"]."','".$_POST["mishpatAndPlilim"]."','".$_POST["yediot"]."','".$_POST["calcala"]."',
'".$_POST["politics"]."','".$_POST["hinoh"]."','".$_POST["sport"]."','".$_POST["televistion"]."','".$_POST["omanot"]."','".$_POST["madaAndTec"]."',
'".$_POST["music"]."','".$_POST["briot"]."','".$_POST["tahbora"]."','".$_POST["dat"]."','".$_POST["ofna"]."','".$_POST["taiarot"]."')";


$result = mysqli_query($connection, $sql);
mysqli_close($connection);
?>