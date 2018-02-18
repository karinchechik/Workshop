<?php

//$sql= "SELECT * FROM articles WHERE tags LIKE '%$category_for_article1%' ORDER BY date DESC LIMIT 1, 1"; /* returns the second article */
//$sql= "SELECT * FROM articles WHERE tags LIKE '%$category_for_article1%' ORDER BY date DESC LIMIT 2, 1"; /* returns the third article */

$dbhost = "localhost";
$dbuser = "karinch_karinch";
$dbpass = "88556633";
$dbname = "karinch_yome_db1";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
mysqli_set_charset($connection, "utf8");


$selections = json_decode($_COOKIE["yome_selections"]);
$category_article1 = $selections->interests[2]->id;

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
		<!--modal-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href="../includes/style/font.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/page12.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!--scroll bar--->
		<script src="../includes/js/libs/jquery.mCustomScrollbar.concat.min.js"></script>
		<!--JS-->
		<script type="text/javascript" src="../includes/js/libs/gematria.js"></script>
		<script type="text/javascript" src="../includes/js/utils/dateUtils.js"></script>
		<script type="text/javascript" src="../includes/js/utils/dateHebrewUtils.js"></script>
		<script type="text/javascript" src="../includes/js/pages/newspaper/newsPaperPages.js"></script>
		<script type="text/javascript" src="../includes/js/pages/newspaper/newsPaperPages.js"></script>
	</head>
	<body>
		<main id="page9">
			<div class="wrapper">
                <header>
                    <div id="headerContainer">
                        <div id="circle">12</div>
                        <div id="dateContainer">
                            <img id="smallLogoImg" src="../includes/images/summary-logo.png">
                            <span id="currDayHebrewName"></span>
                            <span id="hebrewDate"></span>
                            <span id="foreignDate"></span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </header>
				<div id="first-article-container">
                    <div id="first-article" class="article-click-container" data-article-type="2" data-article="<?php echo $article1["id"]?>">
                        <div class="titles-and-img-container">
                            <div class="only-titles-container">
								<?php
								echo '<h1 class="main-title">' .$article1["main_title2"] . '</h1>';
								echo '<h3 class="sub-title">' .$article1["sub_title2"] . '</h3>';
								echo '<p class="writer-and-photographer">'. $article1["articleWriter"] .'  (צילם: '. $article1["articlePhotographer2"] .')'.'</p>';
								?>
                            </div>
                            <img class="content-img" src="data:image/jpeg;base64, <?php echo $article1["image1"] ?> ">
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
						<?php
						echo '<div class="content">'. $article1["articleMed"] .'</div>';
						?>
				    </div>
                </div>
				<div id="secondContainerBigCommercial">

                </div>
            </div>
		</main>
	</body>
</html>