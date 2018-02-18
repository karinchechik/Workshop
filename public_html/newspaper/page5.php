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
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Yome</title>

		<link rel="shortcut icon" href="../includes/images/logoYome.png"/>

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href="../includes/style/font.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="../includes/style/admin/style.css">
		<link rel="stylesheet" type="text/css" href="../includes/style/visitor/page5.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	</head>
	<body>
		<header>
		</header>
		<main id="page5">
			<div class="wrapper">
				<div id="containerBigCommrcial">
					<img id="bigCommrcial" src="">
				</div>
				<div id="first-article">
					<?php
						/**first article in the page- midOne [5] */
						echo '<h2 class="med-main-title">' .$article1["main_title2"] . '</h2>';
						echo '<h4 class="med-sub-title">' .$article1["sub_title2"] . '</h4>';
						echo '<p class="writer-and-photographer">'. $article1["articleWriter"]."  "."|  צילום: " .$article1["articlePhotographer1"] .'</p>';
						echo '<div class="med-content">'. $article1["articleMed"] .'</div>';
					?>
					<img class="content-img" src="data:image/jpeg;base64, <?php echo $article1["image2"] ?> ">;
				<!--	<h2 class="med-main-title">לורן אפיסם</h2>
					<h4 class="med-sub-title">Lorem Ipsum הוא פשוט טקסט גולמי של תעשיית ההדפסה וההקלדה. Lorem Ipsum היה טקסט סטנדרטי עוד במאה ה-16, כאשר הדפסה לא ידועה לקחה מגש של דפוס ועירבלה אותו כדי ליצור סוג של ספר דגימה.</h4>
					<p class="writer-and-photographer">קארין צ'צ'יק</p>
					<p class="med-content">
						מה זה Lorem Ipsum? Lorem Ipsum הוא פשוט טקסט גולמי של תעשיית ההדפסה וההקלדה. Lorem Ipsum היה טקסט סטנדרטי עוד במאה ה-16, כאשר הדפסה לא ידועה לקחה מגש של דפוס ועירבלה אותו כדי ליצור סוג של ספר דגימה. ספר זה שרד לא רק חמש מאות שנים אלא גם את הקפיצה לתוך ההדפסה האלקטרונית, ונותר כמו שהוא ביסודו. ספר זה הפך פופולרי יותר בשנות ה-60 עם ההוצאה לאור של גליון פונטי המכיל פסקאות של Lorem Ipsum. ועוד יותר לאחרונה עם פרסום תוכנות המחשב האישי כגון Aldus page maker שמכיל גרסאות של Lorem Ipsum. בניגוד לטענה הרווחת, Lorem Ipsum אינו סתם טקסט רנדומלי. יש לו שורשים וחלקים מתוך הספרות הלטינית הקלאסית מאז 45 לפני הספירה. מה שהופך אותו לעתיק מעל 2000 שנה. ריצ'רד מקלינטוק, פרופסור לטיני בקולג' של המפדן-סידני בורג'יניה, חיפש את אחת המילים המעורפלות ביותר בלטינית - consectetur - מתוך פסקאות של Lorem Ipsum ודרך ציטוטים של המילה מתוך הספרות הקלאסית, הוא גילה מקור בלתי ניתן לערעור. Lorem Ipsum מגיע מתוך מקטע 1.10.32 ו- 1.10.33 של "de Finibus Bonorum et Malorum" (הקיצוניות של הטוב והרע) שנכתב על ידי קיקרו ב-45 לפני הספירה. ספר זה הוא מאמר על תאוריית האתיקה, שהיה מאוד מפורסם בתקופת הרנסנס. השורה הראשונה של "Lorem ipsum dolor sit amet", שמופיעה בטקסטים של Lorem Ipsum, באה משורה במקטע 1.10.32 זוהי עובדה מבוססת שדעתו של הקורא תהיה מוסחת על ידי טקטס קריא כאשר הוא יביט בפריסתו. המטרה בשימוש ב-Lorem Ipsum הוא שיש לו פחות או יותר תפוצה של אותיות, בניגוד למלל '� יסוי � יסוי � יסוי', ונותן חזות קריאה יותר.הרבה הוצאות מחשבים ועורכי דפי אינטרנט משתמשים כיום ב-Lorem Ipsum כטקסט ברירת המחדל שלהם, וחיפוש של 'lorem ipsum' יחשוף אתרים רבים בראשית דרכם.גרסאות רבות נוצרו במהלך השנים, לעתים בשגגה לעיתים במכוון (זריקת בדיחות וכדומה). ש המון גרסאות זמינות לפסקאות של Lorem Ipsum.
					</p>
					<img class="med-content-img">-->
				</div>
				<div class="clear"></div>
			</div>
			<button type="button"><a href="page6.php">לעמ' הבא </a> </button>
		</main>
	</body>
</html>