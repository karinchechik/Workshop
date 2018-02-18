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

    $image0= addslashes($_FILES['image0']['tmp_name']);
    $name0= addslashes($_FILES['image0']['name']);
    $image0= file_get_contents($image0);
    $image0= base64_encode($image0);
	
    $image= addslashes($_FILES['image1']['tmp_name']);
    $name= addslashes($_FILES['image1']['name']);
    $image= file_get_contents($image);
    $image= base64_encode($image);
	
	$image2= addslashes($_FILES['image2']['tmp_name']);
    $name2= addslashes($_FILES['image2']['name']);
    $image2= file_get_contents($image2);
    $image2= base64_encode($image2);
	
	$image3= addslashes($_FILES['image3']['tmp_name']);
    $name3= addslashes($_FILES['image3']['name']);
    $image3= file_get_contents($image3);
    $image3= base64_encode($image3);

$tags = $_POST['tags'];
$fields = "";
foreach($tags as $tag)
{
	$fields.= $tag.",";
}
$fields = rtrim($fields,",");

$politics = $_POST['politics'];
$politics_fields = "";
foreach($politics as $politic)
{
	$politics_fields.= $politic.",";
}
$politics_fields = rtrim($politics_fields,",");

/*$sql="INSERT INTO articles
			(tags, main_title0, main_title1, main_title2, main_title3, sub_title0, sub_title1, sub_title2, sub_title3, articlePicture1, articlePicture2, articlePicture3, articlePicture0, image0, image1, image2, image3, articleBig, articleMed, articleSmall, articleWriter, date, articlePhotographer0, articlePhotographer1, articlePhotographer2, articlePhotographer3, politics, editChoice)
			VALUES
			('".$fields."','".$_POST["main_title0"]."','".$_POST["main_title1"]."','".$_POST["main_title2"]."','".$_POST["main_title3"]."','".$_POST["sub_title0"]."','".$_POST["sub_title1"]."','".$_POST["sub_title2"]."','".$_POST["sub_title3"]."',
			'$name','$name2','$name3', '$name0', '$image0', '$image', '$image2', '$image3','".$_POST["articleBig"]."','".$_POST["articleMed"]."','".$_POST["articleSmall"]."','".$_POST["articleWriter"]."','".$_POST["date"]."',
			'".$_POST["articlePhotographer0"]."','".$_POST["articlePhotographer1"]."','".$_POST["articlePhotographer2"]."','".$_POST["articlePhotographer3"]."','".$politics_fields."','".$_POST["editChoice"]."')";
*/

$sql="INSERT INTO articles
			(tags, main_title0, main_title1, main_title2, main_title3, sub_title0, sub_title1, sub_title2, sub_title3, articlePicture1, articlePicture2, articlePicture3,articlePicture0, image0, image1, image2, image3, articleBig, articleMed, articleSmall, articleWriter, date, articlePhotographer0, articlePhotographer1, articlePhotographer2, articlePhotographer3, politics, editChoice)
			VALUES
			('".$fields."','".$_POST["main_title0"]."','".$_POST["main_title1"]."','".$_POST["main_title2"]."','".$_POST["main_title3"]."','".$_POST["sub_title0"]."','".$_POST["sub_title1"]."','".$_POST["sub_title2"]."','".$_POST["sub_title3"]."',
			'$name','$name2','$name3','$name0','$image0','$image', '$image2', '$image3','".$_POST["articleBig"]."','".$_POST["articleMed"]."','".$_POST["articleSmall"]."','".$_POST["articleWriter"]."','".$_POST["date"]."',
			'".$_POST["articlePhotographer0"]."','".$_POST["articlePhotographer1"]."','".$_POST["articlePhotographer2"]."','".$_POST["articlePhotographer3"]."','".$politics_fields."','".$_POST["editChoice"]."')";
	
	
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
			<h1 class="main-con-title"><span class="end-sign">[</span> יצירת כתבה <span class="start-sign">]</span></h1>
			<div id="row-content" class="row">
				<h3 class="postSuccess">הכתבה הועלתה לשרת בהצלחה!</h3>
				<div class="col-md-6 col-sm-6">
					<p class="btn-home"><a href="index.html" class="btn btn-primary btn-style" role="button">חזור לעמוד הראשי</a></p>
				</div>
				<div class="col-md-6 col-sm-6">
					<p><a href="content.html" class="btn btn-primary btn-new btn-style" role="button">צור כתבה חדשה</a></p>
				</div>
			</div>
		</main>
	</body>
</html>

