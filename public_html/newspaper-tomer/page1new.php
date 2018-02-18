<?php

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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="../includes/style/font.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../includes/style/visitor/jquery.mCustomScrollbar.css" />
    <link rel="stylesheet" type="text/css" href="../includes/style/newspaper/page-theme.css">
    <link rel="stylesheet" type="text/css" href="../includes/style/newspaper/page1new.css">
    <link rel="stylesheet" type="text/css" href="../includes/style/newspaper/modalnewspaper.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../includes/js/libs/jquery.mCustomScrollbar.concat.min.js"></script>

    <!--JS-->
    <script type="text/javascript" src="../includes/js/libs/gematria.js"></script>
    <script type="text/javascript" src="../includes/js/utils/dateUtils.js"></script>
    <script type="text/javascript" src="../includes/js/utils/dateHebrewUtils.js"></script>
    <script type="text/javascript" src="../includes/js/pages/newspaper/newspaperPages.js"></script>
    <script type="text/javascript" src="../includes/js/pages/newspaper/page1.js"></script>
</head>
<body>
<div class="page-container page1">
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
</div>

</body>
</html>