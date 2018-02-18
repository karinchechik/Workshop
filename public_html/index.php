<?php
$dbhost = "localhost";
$dbuser = "karinch_karinch";
$dbpass = "88556633";
$dbname = "karinch_yome_db1";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
mysqli_set_charset($connection, "utf8");


$selections = json_decode($_COOKIE["yome_selections"]);

$sql_article1= "SELECT * FROM articles WHERE tags LIKE '%bitahon%' ORDER BY date DESC LIMIT 0, 1"; /* returns the first article */
$sql_article2= "SELECT * FROM articles WHERE tags LIKE '%yadiout%' ORDER BY date DESC LIMIT 0, 1"; /* returns the second article */
$sql_article3= "SELECT * FROM articles WHERE tags LIKE '%calcala%' ORDER BY date DESC LIMIT 0, 1";
$sql_article4= "SELECT * FROM articles WHERE tags LIKE '%politics%' ORDER BY date DESC LIMIT 0, 1";


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
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yome</title>

        <link rel="shortcut icon" href="../includes/images/logoYome.png"/>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="includes/style/font.css" rel="stylesheet" type="text/css">
        <link href="includes/style/visitor/index.css" rel="stylesheet" type="text/css">

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

        <!--JS-->
        <script type="text/javascript" src="includes/js/libs/gematria.js"></script>
        <script type="text/javascript" src="includes/js/utils/dateUtils.js"></script>
        <script type="text/javascript" src="includes/js/utils/dateHebrewUtils.js"></script>
        <script type="text/javascript" src="includes/js/utils/categoriesEnum.js"></script>
        <script type="text/javascript" src="includes/js/libs/marquee.js"></script>
        <script type="text/javascript" src="includes/js/pages/visitor/index.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <header>
                <!--<div class="col-sm-6">-->
                <section id="logoContainer">
                    <a href="#" id="logo"></a>
                </section>
                <div class="apiWeatherSection">
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
                <!--<section id="dateContainer">-->
                    <div id="dateContainer"><!--class="col-sm-6">-->
                        <p id="currDayHebrewName"></p>
                        <p id="hebrewMonthDate">
                            <span id="hebrewDayDate"> כ"ב </span>
                            <span id="hebrewMonthYearDate">שבט תשע"ו</span>
                        </p>
                        <p>
                            <span id="day"></span>
                            <span id="month"></span>
                            <span id="year"></span>
                        </p>
                        <div id="redFlatBox"></div>
                    </div>
                <div class="clear"></div>
            </header>
            <main>

                <div class="marquee">
                    <?php
                    echo '<span class="animated-title">'." ביטחון: ".'</span>'.'<span>'. $article1["sub_title2"] ." >> ".'</span>'.'<span class="animated-title">'." ידיעות מהעולם: ".'</span>'.'<span>'. $article2["sub_title2"] ." >> ".'</span>'.
                       '<span class="animated-title">'." כלכלה וצרכנות: ".'</span>'.'<span>'. $article3["sub_title2"] ." >> ".'</span>'.'<span class="animated-title">'." פוליטיקה: ".'</span>'.'<span>'. $article4["sub_title2"] ." >> ".'</span>';
                    ?>
                </div>
                <div>
                    <a id="linkCreateButton" href="userpref1.html">
                        <img id="main_pic" src="includes/images/enterscreen-grp.png">
                        <img id="createButton" src="includes/images/generate-yome-big.png"/>
                    </a>
                    <span id="rightBrackets"></span>
                </div>
            </main>
        </div>
    </body>
</html>
