<?php
$user_id = $_REQUEST['id'];

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


$sql= "SELECT * FROM user_pref WHERE user_id=" .$user_id;
$result = mysqli_query($connection, $sql);

if(!$result) {
      die('Could not get data: ' . mysql_error());
}

$user_id= $row['user_id'];
$bitahon= $row['bitahon'];
$yediot= $row['yediot'];
$mishpatAndPlilim= $row['mishpatAndPlilim'];
$calcala= $row['calcala'];
$politics= $row['politics'];
$hinoh= $row['hinoh'];
$sport= $row['sport'];
$televistion= $row['televistion'];
$omanot= $row['omanot'];
$madaAndTec= $row['madaAndTec'];
$music= $row['music'];
$briot= $row['briot'];
$tahbora= $row['tahbora'];
$dat= $row['dat'];
$ofna= $row['ofna'];
$taiarot= $row['taiarot'];


echo $bitahon;

mysqli_close($connection);
?>
<!--
<h2>Result:</h2>
<table>
<tr>
<td>Yes:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($yes/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($yes/($no+$yes),2)); ?>%
</td>
</tr>
<tr>
<td>No:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($no/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($no/($no+$yes),2)); ?>%
</td>
</tr>
</table>

-->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Yome</title>
	
		<link rel="shortcut icon" href="includes/images/yomeLogo.png">
		
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="includes/style/font.css" rel="stylesheet" type="text/css">
		<link href="includes/style/visitor/rangsSlider.css" rel="stylesheet" type="text/css">
		<link href="includes/style/visitor/awesome-bootstrap-checkbox.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link href="includes/style/visitor/userpref1.css" rel="stylesheet" type="text/css">
		<link href="includes/style/visitor/modal.css" rel="stylesheet" type="text/css">
		
		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->


		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://underscorejs.org/underscore-min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="includes/js/libs/jquery.mCustomScrollbar.concat.min.js"></script>
		<link rel="stylesheet" href="includes/style/visitor/jquery.mCustomScrollbar.css" />

		<!--JS-->
		<script type="text/javascript" src="includes/js/libs/bootstrap-slider.js"></script>
		<script type="text/javascript" src="includes/js/utils/categoriesEnum.js"></script>
		<script type="text/javascript" src="includes/js/pages/visitor/userpref.js"></script>
		<script type="text/javascript" src="includes/js/pages/visitor/userpref1.js"></script>


	</head>
	<body>
		<div id="wrapper">
			<aside>
				<div>
					<nav class="nav">
						<li id="firstOption"><span></span></li>
						<li id="loadSettings" class="category-li-special" data-target="#interestsSec">
							<span class="icon"></span>
							<span class="definiton" data-toggle="modal" data-target="#loadUserPreviousSettings">טען הגדרות קודמות</span>
						</li>
						<li id="interDefinition" class="category-li" data-target="#interestsSec">
							<span class="icon"></span>
							<span class="definiton">הגדרת תחומי עניין</span>
						</li>
						<li id="politicsChoice" class="category-li" data-target="#politicsMenuOption">
							<span class="icon"></span>
							<span class="definiton">בחירת דעה פוליטית</span>
						</li>
						<li id="morePages" class="category-li" data-target="#morePagesSection">
							<span class="icon"></span>
							<span class="definiton">עמודים נוספים</span>
						</li>
						<li id="aboutAndHelp" class="category-li-special" data-target="#aboutSection">
							<span class="icon"></span>
							<span class="definiton">אודות </span>
						</li>
						<li id="lastOption"></li>
					</nav>
				</div>
			</aside>
			<section id="rangeContainer">
				<section id="rangeSec">
					<header>
						<a href="index.html" id="logo"></a>
					</header>
					<main class="yome-border">
						<section id="mainContent">
							<section id="interestsSec" class="section-container">
								<article class="attribute-container" id="bitahon">
									<div class="attribute opening-line">
										<h3>ביטחון</h3>
										<input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="5" data-slider-step="1" data-slider-value="3"/>
									</div>
									<div class="numbers">
										<span>0</span>
										<span>1</span>
										<span>2</span>
										<span>3</span>
										<span>4</span>
										<span>5</span>
									</div>
								</article>
								<article class="attribute-container" id="yediot">
									<div class="attribute">
										<h3>ידיעות מהעולם</h3>
										<input id="ex2" data-slider-id='ex2Slider' type="text" data-slider-min="0" data-slider-max="5" data-slider-step="1" data-slider-value="3"/>
									</div>
									<div class="numbers">
										<span>0</span>
										<span>1</span>
										<span>2</span>
										<span>3</span>
										<span>4</span>
										<span>5</span>
									</div>
								</article>
								<article class="attribute-container" id="mishpatAndPlilim">
									<div class="attribute">
										<h3>משפט ופלילים</h3>
										<input id="ex3" data-slider-id='ex3Slider' type="text" data-slider-min="0" data-slider-max="5" data-slider-step="1" data-slider-value="3"/>
									</div>
									<div class="numbers">
										<span>0</span>
										<span>1</span>
										<span>2</span>
										<span>3</span>
										<span>4</span>
										<span>5</span>
									</div>
								</article>
								<article class="attribute-container" id="calcala">
									<div class="attribute">
										<h3>כלכלה וצרכנות</h3>
										<input id="ex4" data-slider-id='ex4Slider' type="text" data-slider-min="0" data-slider-max="5" data-slider-step="1" data-slider-value="3"/>
									</div>
									<div class="numbers">
										<span>0</span>
										<span>1</span>
										<span>2</span>
										<span>3</span>
										<span>4</span>
										<span>5</span>
									</div>
								</article>
								<article class="attribute-container" id="politics">
									<div class="attribute">
										<h3>פוליטיקה</h3>
										<input id="ex5" data-slider-id='ex5Slider' type="text" data-slider-min="0" data-slider-max="5" data-slider-step="1" data-slider-value="3"/>
									</div>
									<div class="numbers">
										<span>0</span>
										<span>1</span>
										<span>2</span>
										<span>3</span>
										<span>4</span>
										<span>5</span>
									</div>
								</article>
								<article class="attribute-container" id="hinoh">
									<div class="attribute">
										<h3>חינוך וחברה</h3>
										<input id="ex6" data-slider-id='ex6Slider' type="text" data-slider-min="0" data-slider-max="5" data-slider-step="1" data-slider-value="3"/>
									</div>
									<div class="numbers">
										<span>0</span>
										<span>1</span>
										<span>2</span>
										<span>3</span>
										<span>4</span>
										<span>5</span>
									</div>
								</article>
								<article class="attribute-container" id="sport">
									<div class="attribute">
										<h3>ספורט</h3>
										<input id="ex7" data-slider-id='ex7Slider' type="text" data-slider-min="0" data-slider-max="5" data-slider-step="1" data-slider-value="3"/>
									</div>
									<div class="numbers">
										<span>0</span>
										<span>1</span>
										<span>2</span>
										<span>3</span>
										<span>4</span>
										<span>5</span>
									</div>
								</article>
								<article class="attribute-container" id="televistion">
									<div class="attribute">
										<h3>טלויזיה ובידור</h3>
										<input id="ex8" data-slider-id='ex8Slider' type="text" data-slider-min="0" data-slider-max="5" data-slider-step="1" data-slider-value="3"/>
									</div>
									<div class="numbers">
										<span>0</span>
										<span>1</span>
										<span>2</span>
										<span>3</span>
										<span>4</span>
										<span>5</span>
									</div>
								</article>
								<article class="attribute-container" id="omanot">
									<div class="attribute">
										<h3>אומנות ותרבות</h3>
										<input id="ex9" data-slider-id='ex9Slider' type="text" data-slider-min="0" data-slider-max="5" data-slider-step="1" data-slider-value="3"/>
									</div>
									<div class="numbers">
										<span>0</span>
										<span>1</span>
										<span>2</span>
										<span>3</span>
										<span>4</span>
										<span>5</span>
									</div>
								</article>
								<article class="attribute-container" id="madaAndTec">
									<div class="attribute">
										<h3>מדע וטכנולוגיה</h3>
										<input id="ex10" data-slider-id='ex10Slider' type="text" data-slider-min="0" data-slider-max="5" data-slider-step="1" data-slider-value="3"/>
									</div>
									<div class="numbers">
										<span>0</span>
										<span>1</span>
										<span>2</span>
										<span>3</span>
										<span>4</span>
										<span>5</span>
									</div>
								</article>
								<article class="attribute-container" id="music">
									<div class="attribute">
										<h3>מוזיקה</h3>
										<input id="ex11" data-slider-id='ex11Slider' type="text" data-slider-min="0" data-slider-max="5" data-slider-step="1" data-slider-value="3"/>
									</div>
									<div class="numbers">
										<span>0</span>
										<span>1</span>
										<span>2</span>
										<span>3</span>
										<span>4</span>
										<span>5</span>
									</div>
								</article>
								<article class="attribute-container" id="briot">
									<div class="attribute">
										<h3>בריאות וטבע</h3>
										<input id="ex12" data-slider-id='ex12Slider' type="text" data-slider-min="0" data-slider-max="5" data-slider-step="1" data-slider-value="3"/>
									</div>
									<div class="numbers">
										<span>0</span>
										<span>1</span>
										<span>2</span>
										<span>3</span>
										<span>4</span>
										<span>5</span>
									</div>
								</article>
								<article class="attribute-container" id="tahbora">
									<div class="attribute">
										<h3>תחבורה</h3>
										<input id="ex13" data-slider-id='ex13Slider' type="text" data-slider-min="0" data-slider-max="5" data-slider-step="1" data-slider-value="3"/>
									</div>
									<div class="numbers">
										<span>0</span>
										<span>1</span>
										<span>2</span>
										<span>3</span>
										<span>4</span>
										<span>5</span>
									</div>
								</article>
								<article class="attribute-container" id="dat">
									<div class="attribute">
										<h3>דת</h3>
										<input id="ex14" data-slider-id='ex14Slider' type="text" data-slider-min="0" data-slider-max="5" data-slider-step="1" data-slider-value="3"/>
									</div>
									<div class="numbers">
										<span>0</span>
										<span>1</span>
										<span>2</span>
										<span>3</span>
										<span>4</span>
										<span>5</span>
									</div>
								</article>
								<article class="attribute-container" id="ofna">
									<div class="attribute">
										<h3>אופנה</h3>
										<input id="ex15" data-slider-id='ex15Slider' type="text" data-slider-min="0" data-slider-max="5" data-slider-step="1" data-slider-value="3"/>
									</div>
									<div class="numbers">
										<span>0</span>
										<span>1</span>
										<span>2</span>
										<span>3</span>
										<span>4</span>
										<span>5</span>
									</div>
								</article>
								<article class="attribute-container" id="taiarot">
									<div class="attribute">
										<h3>תיירות</h3>
										<input id="ex16" data-slider-id='ex16Slider' type="text" data-slider-min="0" data-slider-max="5" data-slider-step="1" data-slider-value="3"/>
									</div>
									<div class="numbers">
										<span>0</span>
										<span>1</span>
										<span>2</span>
										<span>3</span>
										<span>4</span>
										<span>5</span>
									</div>
								</article>
							</section>

							<!---politics option menu--->
							<section id="politicsMenuOption" class="section-container">
								<div id="politicsWrapper" class="opening-line">
									<article class="politics-menu-article" id="hbaytHyudi">
										<span class="politicsIcon"></span>
										<span class="politicsDefintion special right-icon">הבית היהודי</span>
									</article>
									<article class="politics-menu-article right-article" id="licod">
										<span class="politicsIcon right-icon"></span>
										<span class="politicsDefintion">הליכוד</span>
									</article>
									<article class="politics-menu-article" id="yahdotAtora">
										<span class="politicsIcon"></span>
										<span class="politicsDefintion special right-icon">יהדות התורה</span>

									</article>
									<article class="politics-menu-article right-article" id="hamachna">
										<span class="politicsIcon right-icon"></span>
										<span class="politicsDefintion special">המחנה הציוני</span>
									</article>
									<article class="politics-menu-article" id="shace">
										<span class="politicsIcon"></span>
										<span class="politicsDefintion right-icon">ש"ס</span>
									</article>
									<article class="politics-menu-article right-article" id="hareshima">
										<span class="politicsIcon right-icon"></span>
										<span class="politicsDefintion special">הרשימה המשותפת</span>
									</article>
									<article class="politics-menu-article" id="israelBeytino">
										<span class="politicsIcon"></span>
										<span class="politicsDefintion special right-icon">ישראל ביתנו</span>
									</article>
									<article class="politics-menu-article right-article" id="yeshAtid">
										<span class="politicsIcon right-icon"></span>
										<span class="politicsDefintion">יש עתיד</span>
									</article>
									<article class="politics-menu-article" id="meratz">
										<span class="politicsIcon"></span>
										<span class="politicsDefintion right-icon">מרצ</span>
									</article>
									<article class="politics-menu-article right-article" id="kulanu">
										<span class="politicsIcon right-icon"></span>
										<span class="politicsDefintion">כולנו</span>
									</article>
									<div class="clear"></div>
								</div>
							</section>

							<!---------more pages section-------------->

							<section id="morePagesSection" class="section-container">
								<div id="morePagesWrapper" class="opening-line">
									<div class="checkbox">
										<input type="checkbox" id="editorRecommendations">
										<label for="editorRecommendations">
											<p class="definition-checkbox">המלצות העורך</p>
										</label>
									</div>
									<div class="checkbox">
										<input type="checkbox" id="columnistsAndOpinion">
										<label for="columnistsAndOpinion">
											<p class="definition-checkbox">טורים ודעות</p>
										</label>
									</div>
									<div class="checkbox">
										<input type="checkbox" id="adsAndJobs">
										<label for="adsAndJobs">
											<p class="definition-checkbox">מודעות לוח ודרושים</p>
										</label>
									</div>
									<div class="checkbox">
										<input type="checkbox" id="obituaries">
										<label for="obituaries">
											<p class="definition-checkbox">מודעות אבל</p>
										</label>
									</div>
									<div class="checkbox">
										<input type="checkbox" id="leisureAndCrosswords">
										<label for="leisureAndCrosswords">
											<p class="definition-checkbox">עמודי פנאי [תשבצים]</p>
										</label>
									</div>
								</div>
							</section>
							<!-----about section------>
							<section id="aboutSection" class="section-container">
								<div id="aboutSectionWrapper" class="opening-line">
									<p>
										<img src="includes/images/yome-textlogo.png">
										הוא ממשק תוכן חדשני, המאפשר למשתמש לקבוע את דירוג המידע בהתאם להעדפותיו ובחירותיו.
									</p>
									<p>
										אם בעבר היה זה העורך שהיה קובע עבורנו מה תהיה ידיעה ראשית, מה ידיעה משנית ומה ידיעה שאינה חשובה כלל - כשפעמים רבות בחירתו הושפעה משיקולים שהינם זרים עבור הקורא (דוגמת אג'נדה פוליטית או שיקול כלכלי) - כיום אפשרות הבחירה עוברת לידי הקורא.
									</p>
									<p>
										בעזרת דירוג תחומי העניין השונים בין 0 ל-5, סימון דעה פוליטית מייצגת והעדפות נוספות, הממשק יציג את התוכן - ידיעות חדשותיות, טורי דעה ואפילו פרסומות - בהתאמה לבחירת המשתמש: תחום עניין שקיבל דירוג גבוה יופיע בעמודים הראשונים ובהיקף נרחב של מספר המילים והתמונות, ואילו נושא שהמשתמש דירג בדירוג נמוך יופיע בהיקף מצומצם או לא יופיע כלל.
									</p>
									<p>
										<img src="includes/images/yome-textlogo.png"> הינו ממשק ידידותי ונוח לשימוש המאפשר לכל משתמש לקבל את התוכן בצורה מדורגת על פי תחומי העניין האישיים, בגירסה דיגיטלית או בגירסה מודפסת, כך שב-<img src="includes/images/yome-textlogo.png"> תקבלו את מה שמעניין. אתכם.
									</p>
								</div>
							</section>


							<!--------Buttons------->
							<div class="rangeButtons">
								<button id="next" type="button">
									הבא
								</button>
								<button id="createYome" type="button">
									<img src="includes/images/generate-yome-small.png">
								</button>
								<button id="previous" type="button">
									הקודם
								</button>
							</div>
						</section>
					</main>
					<!--<div id="rightLineMorePages"></div>-->
				</section>
			</section>
			<div class="clear"></div>
		</div>
			<!-- Modal load user settings -->
		<div class="modal fade" id="loadUserPreviousSettings" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title" id="loadUserPreviousSettingsLabel">טען הגדרות קודמות</h4>
					</div>
					<div class="modal-body">
						<label class="user-details-modal-lable id-number-class"> 
							<span class="title-lable">ת"ז:</span>
							<input type="text" id="idNumberInput" name=""/>
						</label>
					</div>
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" id="saveUsersDetailsButton">
							טען
						</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal creat Yome 
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content" id="myModalUserOptions">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">צור יומי</h4>
		      </div>
		      <div class="modal-body">
		    
		      </div>
		      <div class="modal-footer">
		        <button type="button" data-dismiss="modal" id="closeButton">סגור</button>  
		      </div>
		    </div>
	 	 </div>
		</div>-->
		
	
		
		<script>
		    (function($){
		        $(window).load(function(){
		            $("#interestsSec").mCustomScrollbar({
		            	scrollButtons:{enable:true},
						theme:"light-thick",
						scrollbarPosition:"outside"
		            });
		        });
		    })(jQuery);
		</script>

	</body>
	</html>