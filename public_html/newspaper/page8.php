<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 29/04/2016
 * Time: 12:52
 */

//$sql= "SELECT * FROM articles WHERE tags LIKE '%$category_for_article1%' ORDER BY date DESC LIMIT 1, 1"; /* returns the second article */
//$sql= "SELECT * FROM articles WHERE tags LIKE '%$category_for_article1%' ORDER BY date DESC LIMIT 2, 1"; /* returns the third article */

$dbhost = "localhost";
$dbuser = "karinch_karinch";
$dbpass = "88556633";
$dbname = "karinch_yome_db1";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
mysqli_set_charset($connection, "utf8");


$selections = json_decode($_COOKIE["yome_selections"]);
$category_article1 = $selections->interests[0]->id;
$category_article2 = $selections->interests[10]->id;
$category_article3 = $selections->interests[12]->id;

$sql_article1= "SELECT * FROM articles WHERE tags LIKE '%$category_article1%' ORDER BY date DESC LIMIT 2, 1"; /* returns the first article */
$sql_article2= "SELECT * FROM articles WHERE tags LIKE '%$category_article2%' ORDER BY date DESC LIMIT 0, 1"; /* returns the second article */
$sql_article3= "SELECT * FROM articles WHERE tags LIKE '%$category_article3%' ORDER BY date DESC LIMIT 0, 1";

$result_article1 = mysqli_query($connection, $sql_article1);
$result_article2 = mysqli_query($connection, $sql_article2);
$result_article3 = mysqli_query($connection, $sql_article3);

$article1 = mysqli_fetch_assoc($result_article1);
$article2 = mysqli_fetch_assoc($result_article2);
$article3 = mysqli_fetch_assoc($result_article3);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Yome</title>
		<link rel="shortcut icon" href="../includes/images/logoYome.png"/>

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href="../includes/style/font.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="../includes/style/admin/style.css">
		<link rel="stylesheet" type="text/css" href="../includes/style/visitor/page8.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	</head>
	<body>
		<header>
		</header>
		<main id="page8">
			<div class="wrapper">
				<div id="first-article">
					<?php
						/**first article in the page- bigOne [0]*/
						echo '<h1 class="main-title">' .$article1["main_title1"] . '</h1>';
						echo '<h3 class="sub-title">' .$article1["sub_title1"] . '</h3>';
						echo '<p class="writer-and-photographer">'. $article1["articleWriter"]."  "."|  צילום: " .$article1["articlePhotographer1"] .'</p>';
						echo '<div class="content">'. $article1["articleBig"] .'</div>';
					?>
					<img class="content-img" src="data:image/jpeg;base64, <?php echo $article1["image1"] ?> ">;

				</div>
				<div id="midContainer">
					<div id="second-article">
						<?php
							/**second article in the page- smallOne [9]*/
							echo '<h1 class="small-main-title">' .$article2["main_title3"] . '</h1>';
						/*	echo '<h3 class="small-sub-title">' .$article2["sub_title3"] . '</h3>';*/
							echo '<p class="writer-and-photographer">'. $article2["articleWriter"] .'</p>';
							echo '<div class="small-content">'. $article2["articleSmall"] .'</div>';
						?>
					</div>
					<div id="third-article">
						<?php
							/**third article in the page- smallOne [10]*/
							echo '<h1 class="small-main-title">' .$article3["main_title3"] . '</h1>';
						/*	echo '<h3 class="small-sub-title">' .$article3["sub_title3"] . '</h3>';*/
							echo '<p class="writer-and-photographer">'. $article3["articleWriter"] .'</p>';
							echo '<div class="small-content">'. $article3["articleSmall"] .'</div>';
						?>
					</div>
					<div class="clear"></div>
				</div>
				<img class="small-commercial">
			</div>
		</main>
	
	</body>
</html>