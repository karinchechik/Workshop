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

//Get data from DB
$sql= "SELECT * FROM articles WHERE id=57";
$result = mysqli_query($connection, $sql);
if (!$result) {
	die("DB query failed.");	
}

$selections = json_decode($_COOKIE["yome_selections"]);
$category_article1 = $selections->interests[0]->id;

$sql_article1= "SELECT * FROM articles WHERE tags LIKE '%$category_article1%' ORDER BY date DESC LIMIT 0, 1"; /* returns the first article */

$result_article1 = mysqli_query($connection, $sql_article1);

$article1 = mysqli_fetch_assoc($result_article1);
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

		<link rel="stylesheet" type="text/css" href="../newspaper2/css/page2.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</head>
	<body>
		<header>
		</header>
		<main id="page2">
			<div class="wrapper">
				<div id="first-article">
					<img class="content-img" src="data:image/jpeg;base64, <?php echo $article1["image1"] ?> ">
					<div id="titlesContainer">
						<?php
						/**first article in the page- bigOne [0]*/
						echo '<h1 class="main-title">' .$article1["main_title1"] . '</h1>';
						echo '<h3 class="sub-title">' .$article1["sub_title1"] . '</h3>';
						?>
					</div>
					<div class="clear"></div>
					<div id="mainArticleContainer">
						<?php
						echo '<p class="writer-and-photographer">'. $article1["articlePhotographer1"] .'</p>';
						echo '<div class="content">'. $article1["articleBig"] .'</div>';
						?>
					</div>
				</div>
			</div>
		</main>
		<button type="button"><a href="page3.php">לעמ' הבא </a> </button>
	</body>
</html>

<?php
mysqli_close($connection);
?>