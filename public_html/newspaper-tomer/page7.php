<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 21/05/2016
 * Time: 18:32
 */
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="../includes/style/font.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../includes/style/visitor/jquery.mCustomScrollbar.css" />
    <link rel="stylesheet" type="text/css" href="../includes/style/newspaper/page-theme.css">
    <link rel="stylesheet" type="text/css" href="../includes/style/newspaper/page7.css">
    <link rel="stylesheet" type="text/css" href="../includes/style/newspaper/modalnewspaper.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../includes/js/libs/jquery.mCustomScrollbar.concat.min.js"></script>

    <!--JS-->
    <script type="text/javascript" src="../includes/js/libs/gematria.js"></script>
    <script type="text/javascript" src="../includes/js/utils/dateUtils.js"></script>
    <script type="text/javascript" src="../includes/js/utils/dateHebrewUtils.js"></script>
    <script type="text/javascript" src="../includes/js/pages/newspaper/newspaperPages.js"></script>
</head>
<body>
    <div class="page-container page7">
        <header class="row left-align">
            <div class="circle"><span>07</span></div>
            <div class="logo-container"><img class="logo" src="../includes/images/summary-logo.png"></div>
            <div class="date-container">
                <span class="currDayHebrewName"></span>
                <span class="separator">></span>
                <span class="hebrewDate"></span>
                <span class="separator">></span>
                <span class="gregorianDate"></span>
            </div>
        </header>

        <div class="first-article article-click-container" data-article="<?php echo $article1["id"] ?>" data-article-type="1">
            <div class="content-container">
                <div class="content">
                    <h1><span><?php echo $article1["main_title1"] ?></span></h1>
                    <h3><?php echo $article1["sub_title1"] ?></h3>
                    <div class="writer-container">
                        <span><?php echo $article1["articleWriter"] ?> (צילום: <?php echo $article1["articlePhotographer1"] ?>)</span>
                    </div>
                    <div class="article-content">
                        <?php echo $article1["articleBig"] ?>  
                    </div>
                </div>
            </div>

            <div class="image-container">
                <!--<img src="data:image/jpeg;base64, <?php echo $article1["image1"] ?>">-->
                <img src="../includes/images/sample/big-pic-temp.png">
            </div>
        </div>
    </div>
</body>
</html>
