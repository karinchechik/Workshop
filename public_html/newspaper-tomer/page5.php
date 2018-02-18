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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="../includes/style/font.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../includes/style/visitor/jquery.mCustomScrollbar.css" />
    <link rel="stylesheet" type="text/css" href="../includes/style/newspaper/page-theme.css">
    <link rel="stylesheet" type="text/css" href="../includes/style/newspaper/page5.css">
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
<div class="page-container page5">
    <header class="row left-align">
        <div class="circle"><span>05</span></div>
        <div class="logo-container"><img class="logo" src="../includes/images/summary-logo.png"></div>
        <div class="date-container">
            <span class="currDayHebrewName"></span>
            <span class="separator">></span>
            <span class="hebrewDate"></span>
            <span class="separator">></span>
            <span class="gregorianDate"></span>
        </div>
    </header>

    <div class="articles-container row">
        <div class="top-pane">
            <div class="article-container article-click-container" data-article="<?php echo $article1["id"]?>" data-article-type="2">
                <div class="yome-border-container yome-border">
                    <div class="top-pane-articles-container">
                           <div class="titles-and-img-container">
                                <div class="title-container">
                                    <h2><?php echo $article1["main_title2"]?></h2>
                                    <h4><?php echo $article1["sub_title2"]?></h4>
                                </div>
                                <div class="image-container">
                                    <!--            <img class="content-img" src="data:image/jpeg;base64, <?php /*echo $article1["image2"] */?> ">;-->
                                    <img src="../includes/images/sample/medium-pic-temp.png"> </img>
                                </div>
                                 <div class="clear"></div>
                            </div>
                         </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <div class="writer-and-photographer-container">
                    <span><?php echo $article1["articleWriter"] ?> (צילום: <?php echo $article1["articlePhotographer1"] ?>)</span>
                </div>
                <div class="content-container">
                    <div class="content">
                        <?php echo $article1["articleMed"]?>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-pane">
            <div class="second-article-container article-click-container" data-article="<?php echo $article2["id"]?>" data-article-type="3">
                <div class="title-and-writer-container">
                    <h2><span class="blue-class">> </span><?php echo $article2["main_title3"]?></h2>
                    <span class="writer"><?php echo $article2["articleWriter"] ?></span>
                </div>
                <div class="content-container">
                    <div><?php echo $article2["articleSmall"]?></div>
                </div>
            </div>
            <div class="third-article-container article-click-container" data-article="<?php echo $article3["id"]?>" data-article-type="3">
                <div class="title-and-writer-container">
                    <h2><span class="blue-class">> </span><?php echo $article3["main_title3"]?></h2>
                    <span class="writer"><?php echo $article3["articleWriter"] ?></span>
                </div>
                <div class="content-container">
                    <div>
                        <?php echo $article3["articleSmall"] ?>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
</body>
</html>
