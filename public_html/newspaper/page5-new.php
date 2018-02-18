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
$category_article1 = $selections->interests[5]->id;


$sql_article1= "SELECT * FROM articles WHERE tags LIKE '%$category_article1%' ORDER BY date DESC LIMIT 0, 1"; /* returns the first article */


$result_article1 = mysqli_query($connection, $sql_article1);


$article1 = mysqli_fetch_assoc($result_article1);

/**first article in the page- midOne [5] */
    echo '<h2 class="med-main-title">' .$article2["main_title2"] . '</h2>';
    echo '<h4 class="med-sub-title">' .$article2["sub_title2"] . '</h4>';
    echo '<p class="writer-and-photographer">'. $article2["articlePhotographer2"] .'</p>';
    echo '<div class="med-content">'. $article2["articleMed"] .'</div>';
    echo '<img class="content-img">';
    echo '<hr>';

?>