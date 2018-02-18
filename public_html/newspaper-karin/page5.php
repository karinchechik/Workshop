<?php

$dbhost = "localhost";
$dbuser = "karinch_karinch";
$dbpass = "88556633";
$dbname = "karinch_yome_db1";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
mysqli_set_charset($connection, "utf8");


$selections = json_decode($_COOKIE["yome_selections"]);
$category_article1 = $selections->interests[2]->id;
$category_article2 = $selections->interests[2]->id;
$category_article3 = $selections->interests[3]->id;

$sql_article1= "SELECT * FROM articles WHERE tags LIKE '%$category_article1%' ORDER BY date DESC LIMIT 0, 1"; /* returns the first article */
$sql_article2= "SELECT * FROM articles WHERE tags LIKE '%$category_article2%' ORDER BY date DESC LIMIT 1, 1"; /* returns the second article */
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
		<!--modal-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href="../includes/style/font.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/page5.css">

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
		<main id="page5">
			<div class="wrapper">
                <header>
                    <div id="headerContainer">
                        <div id="dateContainer">
                            <span id="currDayHebrewName"></span>
                            <span id="hebrewDate"></span>
                            <span id="foreignDate"></span>
                            <img id="smallLogoImg" src="../includes/images/summary-logo.png">
                        </div>
                        <div id="circle">05</div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </header>
				<div id="first-article" class="article-click-container" data-article-type="2" data-article="<?php echo $article1["id"]?>">
                   <!-- <div class="yome-border">-->
                            <div class="titles-and-img-container">
                                <div class="title-container">
                                    <?php
                                    /**first article in the page- miduem [2]*/
                                        echo '<h1 class="main-title">' .$article1["main_title2"] . '</h1>';
                                        echo '<h3 class="sub-title">' .$article1["sub_title2"] . '</h3>';
                                    ?>
                               </div>
                                <img class="content-img" src="data:image/jpeg;base64, <?php echo $article1["image"] ?> ">;
                                <div class="clear"></div>
                            </div>
                   <!-- </div>-->
                    <div class="clear"></div>
                    <?php
                        echo '<p class="writer-and-photographer">'. $article1["articleWriter"] .'  (צילם: '. $article1["articlePhotographer2"] .')'.'</p>';
                        echo '<div class="content">'. $article1["articleMed"] .'</div>';
                    ?>
				</div>
				<div id="second-and-third-article-container">
					<div id="second-article" class="article-click-container" data-article-type="3" data-article="<?php echo $article2["id"]?>">
                        <div class="title-and-writer-container ">
                            <?php
                                echo '<h2 class="small-main-title">'.'<span class="blue-class">> </span>'.$article2["main_title3"] . '</h2>';
                                echo '<p class="writer-and-photographer">'. $article2["articleWriter"] .'</p>';
                            ?>
                        </div>
                       <?php
							/**second article in the page- smallOne [3] */
							echo '<div class="small-content">'. $article2["articleSmall"] .'</div>';
						?>
					</div>
                    <div id="third-article" class="article-click-container" data-article-type="3" <?php echo $article3["id"]?>>
                        <div class="title-and-writer-container ">
                            <?php
                            echo '<h2 class="small-main-title">'.'<span class="blue-class">> </span>'.$article3["main_title3"] . '</h2>';
                            echo '<p class="writer-and-photographer">'. $article3["articleWriter"] .'</p>';
                            ?>
                        </div>
                        <?php
                        /**second article in the page- smallOne [3] */
                        echo '<div class="small-content">'. $article3["articleSmall"] .'</div>';
                        ?>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
		</main>
		<button type="button"><a href="page6.php">לעמ' הבא </a> </button>
	</body>
</html>