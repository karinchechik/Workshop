<?php
$dbhost = "localhost";
$dbuser = "karinch_karinch";
$dbpass = "88556633";
$dbname = "karinch_yome_db1";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
mysqli_set_charset($connection, "utf8");

$selections = json_decode($_COOKIE["yome_selections"]);
$category_commercial = $selections->interests[1]->id;

$sql_commercial= "SELECT * FROM commercials WHERE category LIKE '%$category_commercial%' ORDER BY id DESC LIMIT 0, 1 ";

$result_commercial = mysqli_query($connection, $sql_article1);

$commercial = mysqli_fetch_assoc($result_article1);


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Yome</title>
		<link rel="shortcut icon" href="../includes/images/logoYome.png"/>
        <!--modal-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href="../includes/style/font.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../includes/style/visitor/jquery.mCustomScrollbar.css" />

		<link rel="stylesheet" type="text/css" href="css/page4.css">

		<!-- Bootstrap Core JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!--scroll bar--->
        <script src="../includes/js/libs/jquery.mCustomScrollbar.concat.min.js"></script>
        <!--JS-->
        <script type="text/javascript" src="../includes/js/libs/gematria.js"></script>
        <script type="text/javascript" src="../includes/js/utils/dateUtils.js"></script>
        <script type="text/javascript" src="../includes/js/utils/dateHebrewUtils.js"></script>
        <script type="text/javascript" src="../includes/js/pages/newspaper/newsPaperPages.js"></script>
    </head>
	<body>
		<main id="page4">
			<div class="wrapper">
				<div id="first-article" class="article-click-container">
                    <div id="temp">
                          </div>
                   <img class="big-commercial" src="data:image/jpeg;base64, <?php echo $commercial["image"] ?> ">
				</div>
			</div>
		</main>
		<button type="button"><a href="page9.php">לעמ' הבא </a> </button>
	</body>
</html>
