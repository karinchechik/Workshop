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

$sql_article1= "SELECT * FROM articles WHERE tags LIKE '%".$category_article1."%' ORDER BY date DESC LIMIT 0, 1"; /* returns the first article */
$sql_article2= "SELECT * FROM articles WHERE tags LIKE '%$category_article2%' ORDER BY date DESC LIMIT 0, 1"; /* returns the first article */
$sql_article3= "SELECT * FROM articles WHERE tags LIKE '%$category_article3%' ORDER BY date DESC LIMIT 0, 1";

$result_article1 = mysqli_query($connection, $sql_article1);
$result_article2 = mysqli_query($connection, $sql_article2);
$result_article3 = mysqli_query($connection, $sql_article3);

$article1 = mysqli_fetch_assoc($result_article1);
$article2 = mysqli_fetch_assoc($result_article2);
$article3 = mysqli_fetch_assoc($result_article3);


/**first article in the page- smallOne [1]*/
    echo '<h1 class="main-title">' .$article1["date"] . '</h1>';
    echo '<h1 class="main-title">' .$article1["main_title3"] . '</h1>';
    echo '<h3 class="sub-title">' .$article1["sub_title3"] . '</h3>';
    echo '<p class="writer-and-photographer">'. $article1["articlePhotographer3"] .'</p>';
    echo '<p class="content">'. $article1["articleSmall"] .'</p>';
    echo "<p>כאן תהיה התמונה: </p>";
    echo '<img src="data:image/jpeg;base64,' . $article1['image1'] . '" width="290" height="290">';
    echo '<img class="content-img">';
    echo '<hr>';


/**second article in the page- smallOne [0] */
    echo '<h1 class="main-title">' .$article2["date"] . '</h1>';
    echo '<h1 class="main-title">' .$article2["main_title3"] . '</h1>';
    echo '<h3 class="sub-title">' .$article2["sub_title3"] . '</h3>';
    echo '<p class="writer-and-photographer">'. $article2["articlePhotographer3"] .'</p>';
    echo '<p class="content">'. $article2["articleSmall"] .'</p>';
    echo '<img class="content-img">';
    echo '<hr>';

/**third article in the page- smallOne [2]*/
    echo '<h1 class="main-title">' .$article3["date"] . '</h1>';
    echo '<h1 class="main-title">' .$article3["main_title3"] . '</h1>';
    echo '<h3 class="sub-title">' .$article3["sub_title3"] . '</h3>';
    echo '<p class="writer-and-photographer">'. $article3["articlePhotographer3"] .'</p>';
    echo '<p class="content">'. $article3["articleSmall"] .'</p>';
    echo '<img class="content-img">';
    echo '<hr>';

?>