<?php
//create a mySQL DB connection:
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

$tags = $_POST['tags'];
$fields = "";
foreach($tags as $tag)
{
	$fields.= $tag.",";
}
$fields = rtrim($fields,",");

$sql="INSERT INTO opinion
			(category, writer_name, date, main_title, sub_title, content)
			VALUES
			('".$fields."','".$_POST["writer_name"]."','".$_POST["date"]."','".$_POST["main_title"]."','".$_POST["sub_title"]."','".$_POST["content"]."')";

$result = mysqli_query($connection, $sql);
mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Yome</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="../includes/ckeditor/ckeditor.js"></script>
		<link rel="shortcut icon" href="../includes/images/logoYome.png"/>
		<link rel="stylesheet" type="text/css" href="../includes/style/admin/style.css">
	</head>
	<body>
		<header>
		</header>
		<main>
			<img class="slogo" src="../includes/images/yome-menu-slogo.png">
			<h1 class="main-con-title"><span class="end-sign">[</span> הזנת טורים ודעות <span class="start-sign">]</span></h1>
			<div id="row-content" class="row">
				<h3 class="postSuccess">הכתבה הועלתה לשרת בהצלחה!</h3>
				<div class="col-md-6 col-sm-6">
					<p class="btn-home"><a href="index.html" class="btn btn-primary btn-style" role="button">חזור לעמוד הראשי</a></p>
				</div>
				<div class="col-md-6 col-sm-6">
					<p><a href="opinion.html" class="btn btn-primary btn-new btn-style" role="button">צור כתבה חדשה</a></p>
				</div>
			</div>
		</main>
	</body>
</html>

