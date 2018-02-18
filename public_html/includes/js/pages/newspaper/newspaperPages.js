$(document).ready(function() {

	function showDateSection() {
		$('.currDayHebrewName').text(getDayInWeek());

		var hebrewDate = getHebrewDate();
		$('.hebrewDate').text(hebrewDate.day +" " + hebrewDate.month + " "+ hebrewDate.year );
		$('.gregorianDate').text(getDateDay() +"/"+ + getDateForeignMonth()+"/"  + getDateYear().toString().substr(2));

		$('.hebrewMonthDate').text(getHebrewDate().month);
		$('.hebrewYearDate').text(getHebrewDate().year);
	}

	$(".article-click-container").click(function(){
		var articleId = $(this).attr("data-article");
		var articleType=$(this).attr("data-article-type");
		getArticle(articleId, articleType);
	});

	function getArticle(articleId, articleType) {
		$.get("modalnewspaper.php?articleid="+articleId,function(data){
			data = JSON.parse(data);
			openModal(data, articleType);
			console.log(data);
		});
	}

	function openModal(data,articleType) {
		var newsrc= "data:image/jpeg;base64,";
		$("#modal-image").attr("src", newsrc + data.image1);
		$("#modalPage2").modal()
		if(articleType == "1"){
			$(".modal-main-title").html(data.main_title1);
			$(".modal-sub-title").html(data.sub_title1);
			$(".modal-writer-and-photographer").html(data.articleWriter);
			$(".modal-article-content").html(data.articleBig);
		}
		else if(articleType == "2"){
			$(".modal-main-title").html(data.main_title2);
			$(".modal-sub-title").html(data.sub_title2);
			$(".modal-writer-and-photographer").html(data.articleWriter);
			$(".modal-article-content").html(data.articleMed);
		}
		else if (articleType == "3"){
			$(".modal-main-title").html(data.main_title3);
			$(".modal-writer-and-photographer").html(data.articleWriter);
			$(".modal-article-content").html(data.articleSmall);
		}

	}
	$(".modal-content").mCustomScrollbar({
		scrollButtons : {
			enable : false
		},
		theme : "dark",
		scrollbarPosition : "inside"
	});

	showDateSection();


});