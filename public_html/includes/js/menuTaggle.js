$(document).ready(function(){
  
  	$(".category-li").click(function() {
  		$(".category-li").removeClass("selected");
  		$(this).addClass("selected");
  		
  		$(".section-container").addClass("hidden");
  		var sectionId = $(this).attr("data-target");
  		$(sectionId).removeClass("hidden");
  		
  		$(".rangeButtons button").removeClass("invisible");
  		if ($(".category-li.selected").is($(".category-li").eq(0))) {
  			$("#previous").addClass("invisible");
  		}
  		
  		var lastIndex = $(".category-li").length - 1;
  		if ($(".category-li.selected").is($(".category-li").eq(lastIndex))) {
  			$("#next").addClass("invisible");
  		}
  			
  	});
  	
  	$("#next").click(function() {
  		var nextCategory = $(".category-li.selected").next(".category-li");
  		if (nextCategory.length === 1) {
  			nextCategory.click();
  		}
  	});
  	
  	$("#previous").click(function() {
  		var previousCategory = $(".category-li.selected").prev(".category-li");
  		if (previousCategory.length === 1) {
  			previousCategory.click();
  		}
  	});
  		

	/**change color to blue on click- more pages section*/
	$("#editorRecommendations").change(function() {
		if (this.checked) {
			$("#editorRecommendations").parent().addClass("checked-class");
		} else {
			$("#editorRecommendations").parent().removeClass("checked-class");
		}
	});

	$("#columnistsAndOpinion").change(function() {
		if (this.checked) {
			$("#columnistsAndOpinion").parent().addClass("checked-class");
		} else {
			$("#columnistsAndOpinion").parent().removeClass("checked-class");
		}
	});
	
	$("#adsAndJobs").change(function() {
		if (this.checked) {
			$("#adsAndJobs").parent().addClass("checked-class");
		} else {
			$("#adsAndJobs").parent().removeClass("checked-class");
		}
	});
	
	$("#obituaries").change(function() {
		if (this.checked) {
			$("#obituaries").parent().addClass("checked-class");
		} else {
			$("#obituaries").parent().removeClass("checked-class");
		}
	});
	
	$("#leisureAndCrosswords").change(function() {
		if (this.checked) {
			$("#leisureAndCrosswords").parent().addClass("checked-class");
		} else {
			$("#leisureAndCrosswords").parent().removeClass("checked-class");
		}
	});

	/*****change color to blue on click- politics-page section******/
	$(".politics-menu-article").click(function() {
		var isChecked = $(this).hasClass("checked");
		$(".politics-menu-article").removeClass("checked");
		
		if (!isChecked) {
			$(this).addClass("checked");
		}
		
	});

	function buildSlider(){
		for(var i=1; i<17; i++){
			$('#ex'+i).slider({
				formatter: function(value) {
					return 'Current value: ' + value;
				}
			});
		
			$('#ex'+i).change(function() {
				var dataValue = $(this).attr("data-value");			
				$(this).parent().find("h3").get(0).className = "";
				$(this).parent().find("h3").addClass("title-value-"+dataValue);
				$(".tooltip.tooltip-main.top.in").addClass("hidden");
			});
		}
	}

	$("#createYome").click(function(){
		var ex1=$("#ex1").attr("data-value");
		var ex2=$("#ex2").attr("data-value");
		var ex3=$("#ex3").attr("data-value");
		var ex4=$("#ex4").attr("data-value");
		var ex5=$("#ex5").attr("data-value");
		var ex6=$("#ex6").attr("data-value");
		var ex7=$("#ex7").attr("data-value");
		var ex8=$("#ex8").attr("data-value");
		var ex9=$("#ex9").attr("data-value");
		var ex10=$("#ex10").attr("data-value");
		var ex11=$("#ex11").attr("data-value");
		var ex12=$("#ex12").attr("data-value");
		var ex13=$("#ex13").attr("data-value");
		var ex14=$("#ex14").attr("data-value");
		var ex15=$("#ex15").attr("data-value");
		var ex16=$("#ex16").attr("data-value");
		var politics=$(".politics-menu-article.checked").attr("id");
		var morePagesUserChoice = $(".checkbox.checked-class");
		
		var allSelected = [];
		for(i = 0 ;i < morePagesUserChoice.length; i++){
			allSelected.push( $(morePagesUserChoice[i]).find("input").attr("id") );
		}
		allSelected = allSelected.join(",");
		
		
		var summaryLink = "summary.html?bitahon="+ex1+"&yediot="+ex2+"&mishpatAndPlilim="+ex3+"&calcala="+ex4+"&politics="+ex5+"&hinoh="+ex6+"&sport="+ex7+"&televistion="+ex8+"&omanot="+ex9+"&madaAndTec="+ex10+"&music="+ex11+"&briot="+ex12+"&tahbora="+ex13+"&dat="+ex14+"&ofna="+ex15+"&taiarot="+ex16+"&politicsUserOpinion="+politics+"&moreOptions="+allSelected;
		window.location = summaryLink ;
			
	});

	/****scroll JS****/
	$("#interestsSec").mCustomScrollbar({
		scrollButtons : {
			enable : true
		},
		theme : "light-thick",
		scrollbarPosition : "outside"
	});
	
	
	buildSlider();
	$("#interDefinition").click();
});
