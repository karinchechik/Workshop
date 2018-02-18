/**
 * @author user
 */

function getDateDay() {
	var day = new Date();
	var dd = day.getDate();
	if (dd < 10) {
		dd = '0' + dd;
	}
	return dd;
}

function getDateMonth() {
	var month = new Array();
	month[0] = "ינואר";
	month[1] = "פברואר";
	month[2] = "מרץ";
	month[3] = "אפריל";
	month[4] = "מאי";
	month[5] = "יוני";
	month[6] = "יולי";
	month[7] = "אוגוסט";
	month[8] = "ספטמבר";
	month[9] = "אוקטובר";
	month[10] = "נובמבר";
	month[11] = "דצמבר";

	var d = new Date();
	var n = month[d.getMonth()];

	return n;
}
function getDateForeignMonth() {
	var month = new Array();
	month[0] = "1";
	month[1] = "2";
	month[2] = "3";
	month[3] = "4";
	month[4] = "5";
	month[5] = "6";
	month[6] = "7";
	month[7] = "8";
	month[8] = "9";
	month[9] = "10";
	month[10] = "11";
	month[11] = "12";

	var d = new Date();
	var n = month[d.getMonth()];

	return n;
}

function getDateYear() {
	var today = new Date();
	var yyyy = today.getFullYear();

	return yyyy;
}

function getDayInWeek() {
	var weekday = new Array(7);
	weekday[0] = "יום ראשון";
	weekday[1] = " יום שני";
	weekday[2] = " יום שלישי";
	weekday[3] = "יום רביעי";
	weekday[4] = " יום חמישי";
	weekday[5] = " יום שישי";
	weekday[6] = " יום שבת";

	var day = new Date();
	var n = weekday[day.getDay()];
	
	return n;
}
