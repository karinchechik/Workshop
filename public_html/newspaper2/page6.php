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
        <link rel="stylesheet" href="../includes/style/visitor/jquery.mCustomScrollbar.css" />

		<link rel="stylesheet" type="text/css" href="css/page6.css">
        <link rel="stylesheet" type="text/css" href="css/modalnewspaper.css">

		<!-- Bootstrap Core JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!--scroll bar--->
        <script src="../includes/js/libs/jquery.mCustomScrollbar.concat.min.js"></script>
        <!--JS-->
        <script type="text/javascript" src="../includes/js/libs/gematria.js"></script>
        <script type="text/javascript" src="../includes/js/utils/dateUtils.js"></script>
        <script type="text/javascript" src="../includes/js/utils/dateHebrewUtils.js"></script>
        <script type="text/javascript" src="../includes/js/pages/newspaper/newsPaperPages.js"></script>
        <script type="text/javascript" src="../includes/js/pages/newspaper/page2.js"></script>
    </head>
	<body>
		<main id="page6">
			<div class="wrapper">
				<header>
					<div id="headerContainer">
                        <div id="circle">06</div>
                        <div id="dateContainer">
                            <img id="smallLogoImg" src="../includes/images/summary-logo.png">
                            <span id="currDayHebrewName"></span>
                            <span id="hebrewDate"></span>
                            <span id="foreignDate"></span>
                        </div>
                        <div class="clear"></div>
					</div>
				</header>
				<div id="first-article" class="article-click-container" data-article="<?php echo $article1["id"]?>" data-article-type="2">
					<div id="titlesContainer">
                        <?php
                        /**first article in the page- medeum [0]*/
                            echo '<h1 class="main-title">' .$article1["main_title2"] . '</h1>';
                            echo '<h3 class="sub-title">' .$article1["sub_title2"] . '</h3>';
                        ?>
					</div>
					<div id="mainArticleContainer">
                        <?php
                        echo '<p class="writer-and-photographer">'. $article1["articleWriter"] .'</p>';
                        echo '<div class="small-content">'. $article1["articleMed"] .'</div>';
                        ?>
					</div>
				</div>
                <div id="secondAndThirdArticleContainer">
                    <div id="second-article" class="article-click-container" data-article="<?php echo $article2["id"]?>" data-article-type="3">
                        <h3 class="small-main-title"><span class="blue-class">> </span>כותרת כתבה קטנה תחום עניין 3 עד 50 תוים םםםםםםם םם</h3>
                        <p class="writer-and-photographer">שם הכתב</p>
                        <div class="small-content">
                            <p>קבוצת סטודנטיות מאוניברסיטת בר-אילן פנו להנהלת המוסד בבקשה לקבל מועד מיוחד לבחינות, מאחר ובתאריך הבחינה הן אמורות ללדת. ע"פ הנהלים הקיימים, במידה וייכשלו במועד ב' הן יהיו זכאיות למועד נוסף, אך הוא עלול להיות בשנה שלאחר מכן.</p>
                            <p>"אני אמורה ללדת בינואר, בדיוק בתחילת תקופת המבחנים. לארבעת המבחנים הראשונים לא אוכל לגשת. פניתי להנהלת המחלקה ולאוניברסיטה, כי אם אכשל במועד ב,' לא יכתבו מבחן נוסף עבורי ועבור חברות שנמצאות במצב דומה לשלי", סיפרה אחת הסטודנטיות שיזמו את המהלך, "צריך להיות נוהל אחיד לסטודנטיות שעומדות להפוך לאימהות בכל המוסדות בישראל, כפי שעשו את זה למען חיילי מילואים עם מועד בחינה מיוחד"</p>
                        </div>
                    </div>
                    <div id="third-article" class="article-click-container" data-article="<?php echo $article3["id"]?>" data-article-type="3">
                        <h3 class="small-main-title"><span class="blue-class">> </span>כותרת כתבה קטנה תחום עניין 3 עד 50 תוים םםםםםםם םם</h3>
                        <p class="writer-and-photographer">שם הכתב</p>
                        <div class="small-content">
                            <p>קבוצת סטודנטיות מאוניברסיטת בר-אילן פנו להנהלת המוסד בבקשה לקבל מועד מיוחד לבחינות, מאחר ובתאריך הבחינה הן אמורות ללדת. ע"פ הנהלים הקיימים, במידה וייכשלו במועד ב' הן יהיו זכאיות למועד נוסף, אך הוא עלול להיות בשנה שלאחר מכן.</p>
                            <p>"אני אמורה ללדת בינואר, בדיוק בתחילת תקופת המבחנים. לארבעת המבחנים הראשונים לא אוכל לגשת. פניתי להנהלת המחלקה ולאוניברסיטה, כי אם אכשל במועד ב,' לא יכתבו מבחן נוסף עבורי ועבור חברות שנמצאות במצב דומה לשלי", סיפרה אחת הסטודנטיות שיזמו את המהלך, "צריך להיות נוהל אחיד לסטודנטיות שעומדות להפוך לאימהות בכל המוסדות בישראל, כפי שעשו את זה למען חיילי מילואים עם מועד בחינה מיוחד"</p>
                        </div>
                    </div>
                </div>
			</div>
		</main>
		<button type="button"><a href="page8.php">לעמ' הבא </a> </button>

        <!-- Modal add user name and phone number -->
        <div class="modal fade" id="modalPage2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-yome-border" role="document" >
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="close-circle">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="modal-body">
                            <body>
                            <img id="modal-image">
                            <h1 class="modal-main-title"></h1>
                            <h3 class="modal-sub-title"></h3>
                            <p class="modal-writer-and-photographer"></p>
                            <div class="modal-article-content"></div>
                            </body>
                        </div>
                    </div>
                </div>
        </div>
	</body>
</html>

<!--
<?php
mysqli_close($connection);
?>-->
