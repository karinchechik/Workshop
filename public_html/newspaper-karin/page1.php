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
$category_article1 = $selections->interests[1]->id;
$category_article2 = $selections->interests[0]->id;
$category_article3 = $selections->interests[2]->id;
$category_article4 = $selections->interests[3]->id;

$sql_article1= "SELECT * FROM articles WHERE tags LIKE '%$category_article1%' ORDER BY date DESC LIMIT 0, 1"; /* returns the first article */
$sql_article2= "SELECT * FROM articles WHERE tags LIKE '%$category_article2%' ORDER BY date DESC LIMIT 0, 1"; /* returns the first article */
$sql_article3= "SELECT * FROM articles WHERE tags LIKE '%$category_article3%' ORDER BY date DESC LIMIT 0, 1";
$sql_article4= "SELECT * FROM articles WHERE tags LIKE '%$category_article4%' ORDER BY date DESC LIMIT 0, 1";

$result_article1 = mysqli_query($connection, $sql_article1);
$result_article2 = mysqli_query($connection, $sql_article2);
$result_article3 = mysqli_query($connection, $sql_article3);
$result_article4 = mysqli_query($connection, $sql_article4);

$article1 = mysqli_fetch_assoc($result_article1);
$article2 = mysqli_fetch_assoc($result_article2);
$article3 = mysqli_fetch_assoc($result_article3);
$article4 = mysqli_fetch_assoc($result_article4);

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">

		<title>Yome</title>

		<link rel="shortcut icon" href="../includes/images/logoYome.png"/>

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href="../includes/style/font.css" rel="stylesheet" type="text/css">
		<!--<link rel="stylesheet" type="text/css" href="../includes/style/admin/style.css">-->
     <!--   <link href="../includes/style/visitor/index.css" rel="stylesheet" type="text/css">-->

        <link rel="stylesheet" type="text/css" href="css/page1.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!--JS-->
        <script type="text/javascript" src="../includes/js/libs/gematria.js"></script>
        <script type="text/javascript" src="../includes/js/utils/dateUtils.js"></script>
        <script type="text/javascript" src="../includes/js/utils/dateHebrewUtils.js"></script>
        <script type="text/javascript" src="../includes/js/pages/newspaper/page1.js"></script>
        
        <!--swipe-->
        <script src="jquery.js"></script>
		<script src="jquery.mobile-1.4.5.min.js"></script>
		<script src="swipe-page.js"></script>

        <style>
            #second-article{
                background-image: url('data:image/jpeg;base64, <?php echo $article2["image3"] ?>');
                background-repeat: no-repeat;
                background-size: cover;
            }
            #third-article {
                background-image: url('data:image/jpeg;base64, <?php echo $article3["image3"] ?>');
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
	</head>
	<body>
	<div data-role="page" id="firstpage" class="demo-page" data-title="firstpage" data-dom-cache="true" data-theme="b" data-next="page2">
		<main id="page1">
			<div class="wrapper">
				<div id="firstContainer">
					<div id="weatherContainer">
                        <div id="zefatApiWeather" class="city-weather-container">
                            <div class="city-name-api-weather">צפת</div>
                            <div class="city-info-api-weather">
                                <div class="city-temp-container-api-weather">
                                    <span class="city-temp-api-weather"></span>
                                </div>
                                <div class="city-img-container-api-weather"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div id="haifaApiWeather" class="city-weather-container with-space">
                            <div class="city-name-api-weather">חיפה</div>
                            <div class="city-info-api-weather">
                                <div class="city-temp-container-api-weather">
                                    <span class="city-temp-api-weather"></span>
                                </div>
                                <div class="city-img-container-api-weather"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div id="telAvivApiWeather" class="city-weather-container">
                            <div class="city-name-api-weather">תל אביב</div>
                            <div class="city-info-api-weather">
                                <div class="city-temp-container-api-weather">
                                    <span class="city-temp-api-weather"></span>
                                </div>
                                <div class="city-img-container-api-weather"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div id="jerusalemApiWeather" class="city-weather-container">
                            <div class="city-name-api-weather">ירושלים</div>
                            <div class="city-info-api-weather">
                                <div class="city-temp-container-api-weather">
                                    <span class="city-temp-api-weather"></span>
                                </div>
                                <div class="city-img-container-api-weather"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div id="beershebaApiWeather" class="city-weather-container with-space">
                            <div class="city-name-api-weather">באר שבע</div>
                            <div class="city-info-api-weather">
                                <div class="city-temp-container-api-weather">
                                    <span class="city-temp-api-weather"></span>
                                </div>
                                <div class="city-img-container-api-weather"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div id="eilatApiWeather" class="city-weather-container">
                            <div class="city-name-api-weather">אילת</div>
                            <div class="city-info-api-weather">
                                <div class="city-temp-container-api-weather">
                                    <span class="city-temp-api-weather"></span>
                                </div>
                                <div class="city-img-container-api-weather"></div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
					</div>
					<img id="logoImg" src="../includes/images/summary-logo.png">
					<div class="clear"></div>
				</div>
				<div id="secondContainer">
                    <div id="first-article-container" class="yome-border">
                        <div id="first-article">
                            <?php
                                echo '<h2 class="small-main-title">' .$article1["main_title2"] . '<h2>';
                                echo '<h3 class="samll-sub-title">' .$article1["sub_title2"] . '<h3>';
                            ?>
                            <p class="pageNumber"> עמ' 3 ></p>
                            <div class="clear"></div>
                        </div>
                    </div>
					<div id="dateContainer">
                        <p id="currDayHebrewName"></p>
                        <section id="hebrewAndForeignContainer">
                            <div id="hebrewMonthDateContainer">
                                <div id="hebrewDayDate"> כ"ב </div>
                                <div id="hebrewMonthDate">שבט תשע"ו</div>
                                <div id="hebrewYearDate">שבט תשע"ו</div>
                            </div>
                            <div id="foreignDate">
                                <div id="day"></div>
                                <div id="month"></div>
                                <div id="year"></div>
                            </div>
                            <div class="clear"></div>
                        </section>
					</div>
					<div class="clear"></div>
				</div>
				<div id="second-article">
                    <?php
                        echo '<h2 class="small-main-title">' .$article2["main_title0"] . '<h2>';
                        echo '<h3 class="small-sub-title">' .$article2["sub_title0"] . '</h3>';
                    ?>
                    <div class="photograpAndPageNumberContainer">
                        <p class="writer-and-photographer"></p>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
				</div>
				<div id="thirdContainer">
					<div id="third-article">
                          <!--  /**third article in the page- smallOne [2]*/-->
                        <?php
                            echo '<h2 class="small-main-title">' .$article3["main_title0"] . '<h2>';
                        ?>
                        <p class="pageNumber">עמ' 3 ></p>
                        <div class="clear"></div>
					</div>
                    <div id="forth-article-container" class="yome-border">
                        <div id="forth-article">
                        <!--    /**forth article in the page- smallOne [2]*/-->
                            <?php
                                echo '<h2 class="small-main-title">' .$article4["main_title2"] . '<h2>';
                                echo '<h3 class="small-sub-title">' .$article4["sub_title2"] . '</h3>';
                            ?>
                            <p class="pageNumber">עמ' 4 ></p>
                        </div>
                    </div>
					<div class="clear"></div>
				</div>
			</div>
            <button type="button"><a href="../newspaper2/page2.php">לעמ' הבא </a> </button>
		</main>
		</div>
	</body>
</html>