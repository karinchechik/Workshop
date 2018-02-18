<?php
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

//Get data from DB
$sql= "SELECT * FROM articles WHERE id=57";
$result = mysqli_query($connection, $sql);
if (!$result) {
	die("DB query failed.");	
}

$selections = json_decode($_COOKIE["yome_selections"]);
$category_article1 = $selections->interests[0]->id;
$category_article2 = $selections->interests[0]->id;

$sql_article1= "SELECT * FROM articles WHERE tags LIKE '%$category_article1%' ORDER BY date DESC LIMIT 0, 1"; /* returns the first article */
$sql_article2= "SELECT * FROM articles WHERE tags LIKE '%$category_article2%' ORDER BY date DESC LIMIT 1, 1"; /* returns the second article */

$result_article1 = mysqli_query($connection, $sql_article1);
$result_article2 = mysqli_query($connection, $sql_article2);

$article1 = mysqli_fetch_assoc($result_article1);
$article2 = mysqli_fetch_assoc($result_article2);


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

		<link rel="stylesheet" type="text/css" href="../includes/style/visitor/page2.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	</head>
	<body>
		<header>
		</header>
		<main id="page2">
			<div class="wrapper">
				<div id="first-article">
					<?php
					/**first article in the page- bigOne [0]*/
					echo '<h1 class="main-title">' .$article1["main_title1"] . '</h1>';
					echo '<h3 class="sub-title">' .$article1["sub_title1"] . '</h3>';
					echo '<p class="writer-and-photographer">'. $article1["articlePhotographer1"] .'</p>';
					echo '<div class="content">'. $article1["articleBig"] .'</div>';
					?>
					<img class="content-img" src="data:image/jpeg;base64, <?php echo $article1["image1"] ?> ">;
					<!--<h1 class="main-title">Lorem Ipsum</h1>
					<h3 class="sub-title">Lorem Ipsum הוא פשוט טקסט גולמי של תעשיית ההדפסה וההקלדה. Lorem Ipsum היה טקסט סטנדרטי עוד במאה ה-16, כאשר הדפסה לא ידועה לקחה מגש של דפוס ועירבלה אותו כדי ליצור סוג של ספר דגימה. ספר זה שרד לא רק חמש מאות שנים אלא גם את הקפיצה לתוך ההדפסה האלקטרונית, ונותר כמו שהוא ביסודו. ספר זה הפך פופולרי יותר בשנות ה-60 עם ההוצאה לאור של גליון פונטי המכיל פסקאות של Lorem Ipsum.</h3>
					<p class="writer-and-photographer">גילי אביוב</p>
					<p class="content"> מה זה Lorem Ipsum?
						Lorem Ipsum הוא פשוט טקסט גולמי של תעשיית ההדפסה וההקלדה. Lorem Ipsum היה טקסט סטנדרטי עוד במאה ה-16, כאשר הדפסה לא ידועה לקחה מגש של דפוס ועירבלה אותו כדי ליצור סוג של ספר דגימה. ספר זה שרד לא רק חמש מאות שנים אלא גם את הקפיצה לתוך ההדפסה האלקטרונית, ונותר כמו שהוא ביסודו. ספר זה הפך פופולרי יותר בשנות ה-60 עם ההוצאה לאור של גליון פונטי המכיל פסקאות של Lorem Ipsum. ועוד יותר לאחרונה עם פרסום תוכנות המחשב האישי כגון Aldus page maker שמכיל גרסאות של Lorem Ipsum.
						בניגוד לטענה הרווחת, Lorem Ipsum אינו סתם טקסט רנדומלי. יש לו שורשים וחלקים מתוך הספרות הלטינית הקלאסית מאז 45 לפני הספירה. מה שהופך אותו לעתיק מעל 2000 שנה. ריצ'רד מקלינטוק, פרופסור לטיני בקולג' של המפדן-סידני בורג'יניה, חיפש את אחת המילים המעורפלות ביותר בלטינית - consectetur - מתוך פסקאות של Lorem Ipsum ודרך ציטוטים של המילה מתוך הספרות הקלאסית, הוא גילה מקור בלתי ניתן לערעור. Lorem Ipsum מגיע מתוך מקטע 1.10.32 ו- 1.10.33 של "de Finibus Bonorum et Malorum" (הקיצוניות של הטוב והרע) שנכתב על ידי קיקרו ב-45 לפני הספירה. ספר זה הוא מאמר על תאוריית האתיקה, שהיה מאוד מפורסם בתקופת הרנסנס. השורה הראשונה של "Lorem ipsum dolor sit amet", שמופיעה בטקסטים של Lorem Ipsum, באה משורה במקטע 1.10.32
						זוהי עובדה מבוססת שדעתו של הקורא תהיה מוסחת על ידי טקטס קריא כאשר הוא יביט בפריסתו. המטרה בשימוש ב-Lorem Ipsum הוא שיש לו פחות או יותר תפוצה של אותיות, בניגוד למלל '� יסוי � יסוי � יסוי', ונותן חזות קריאה יותר.הרבה הוצאות מחשבים ועורכי דפי אינטרנט משתמשים כיום ב-Lorem Ipsum כטקסט ברירת המחדל שלהם, וחיפוש של 'lorem ipsum' יחשוף אתרים רבים בראשית דרכם.גרסאות רבות נוצרו במהלך השנים, לעתים בשגגה לעיתים במכוון (זריקת בדיחות וכדומה). ש המון גרסאות זמינות לפסקאות של Lorem Ipsum. אבל רובם עברו שינויים בצורה זו או אחרת, על ידי השתלת הומור או מילים אקראיות שלא נראות אפילו מעט אמינות. אם אתה הולך להשתמש במקטעים של של Lorem Ipsum אתה צריך להיות בטוח שאין משהו מביך חבוי בתוך הטקסט. כל מחוללי הטקסט של Lorem Ipsum שנמצאים ברשת האינטרנט מכוונים לחזור על טקסטים מוגדרים מראש לפי הנדרש. וזה הופך אותנו למחוללי טקסט אמיתיים ראשונים באינטרנט. אנו משתמשים במילון עם מעל 200 ערכים בלטינית משולבים במבני משפטים על מנת לשוות לטקט מראה הגיוני. ולכן הטקסט של Lorem Ipsum לעולם לא יכיל טקסטים חוזרים, הומור, או מילים לא מאופייניות וכדומה
					</p>
					<img class="content-img">-->
				</div>
				<div id="second-article">
					<?php
					/**second article in the page- smallOne [0] */
					echo '<h3 class="small-main-title">' .$article2["main_title3"] . '</h3>';
					echo '<h4 class="small-sub-title">' .$article2["sub_title3"] . '</h4>';
					echo '<p class="writer-and-photographer">'. $article2["articlePhotographer3"] .'</p>';
					echo '<div class="small-content">'. $article2["articleSmall"] .'</div>';
					echo '<img class="content-img">';
					/*<h3 class="small-main-title">Lorem Ipsum</h3>
					<h4 class="small-sub-title">Lorem Ipsum הוא פשוט טקסט גולמי של תעשיית ההדפסה וההקלדה. Lorem Ipsum היה טקסט סטנדרטי עוד במאה ה-16, כאשר הדפסה לא ידועה לקחה מגש של דפוס ועירבלה אותו כדי ליצור סוג של ספר דגימה.</h4>
					<p class="writer-and-photographer">גילי אביוב</p>
					<p class="small-content">בניגוד לטענה הרווחת, Lorem Ipsum אינו סתם טקסט רנדומלי. יש לו שורשים וחלקים מתוך הספרות הלטינית הקלאסית מאז 45 לפני הספירה. מה שהופך אותו לעתיק מעל 2000 שנה. ריצ'רד מקלינטוק, פרופסור לטיני בקולג' של המפדן-סידני בורג'יניה, חיפש את אחת המילים המעורפלות ביותר בלטינית - consectetur - מתוך פסקאות של Lorem Ipsum ודרך ציטוטים של המילה מתוך הספרות הקלאסית, הוא גילה מקור בלתי ניתן לערעור. Lorem Ipsum מגיע מתוך מקטע 1.10.32 ו- 1.10.33 של "de Finibus Bonorum et Malorum" (הקיצוניות של הטוב והרע) שנכתב על ידי קיקרו ב-45 לפני הספירה. ספר זה הוא מאמר על תאוריית האתיקה, שהיה מאוד מפורסם בתקופת הרנסנס. השורה הראשונה של "Lorem ipsum dolor sit amet", שמופיעה בטקסטים של Lorem Ipsum, באה משורה במקטע 1.10.32
						הפסקאות הסטנדרטיות של Lorem Ipsum שהיו בשימוש מאז המאה ה-16 משוחזרות בתחתית הדף לאלה שמעונייניםץ מקטעים 1.10.32 ו- 1.10.33 מתוך "de Finibus Bonorum et Malorum" של קיקרו משוחזרים גם כן בצורתן המקורית מלווים בגרסה האנגלית משנת 1914, שתורגם על ידי ה. רקהם.
					</p>*/
					?>
					<img class="content-img" src="data:image/jpeg;base64, <?php echo $article2["image3"] ?> ">;
				</div>
				<div class="clear"></div>
			</div>
		</main>
		<button type="button"><a href="page3.php">לעמ' הבא </a> </button>
	</body>
</html>

<?php
mysqli_close($connection);
?>