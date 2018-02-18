$(document).ready(function(){
  
  	$(".category-li, #aboutAndHelp").click(function() {
  		$(".category-li, .category-li-special").removeClass("selected");
  		$(this).addClass("selected");
  		
  		$(".section-container").addClass("hidden");
  		var sectionId = $(this).attr("data-target");
  		$(sectionId).removeClass("hidden");
  	});

	$(".category-li").click(function() {
        $(".rangeButtons button").removeClass("invisible");
		if ($(".category-li.selected").is($(".category-li").eq(0))) {
			$("#previous").addClass("invisible");
		}

		var lastIndex = $(".category-li").length - 1;
		if ($(".category-li.selected").is($(".category-li").eq(lastIndex))) {
			$("#next").addClass("invisible");
		}
	});

    $("#aboutAndHelp").click(function() {
        $(".rangeButtons button").addClass("invisible");
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
		var url = "summary.html?";
		_.each(CATEGORIES_ARRAY.INTERESTS, function(interest) {
			var value = $("#"+ interest.id).find("input").attr("data-value");
			url += interest.id + "=" + value + "&";
		});

        var politicsChoice = $(".politics-menu-article.checked").attr("id");

        var additionalPagesArr = [];
        $("#morePagesSection .checkbox.checked-class").each(function(i, el) {
            additionalPagesArr.push($(el).find("input").attr("id"));
        });
        var additionalPagesStr = additionalPagesArr.join(",");

        url += "politicsChoice=" + politicsChoice + "&additionalPages=" + additionalPagesStr;

        window.location = url;
	});

	/****scroll JS****/
	$("#interestsSec, #aboutSection").mCustomScrollbar({
		scrollButtons : {
			enable : true
		},
		theme : "light-thick",
		scrollbarPosition : "outside"
	});

	/******load previous settings from DB******/
	$("#saveUsersDetailsButton").click(function(){
		var userId = $("#idNumberInput").val();
        var url = "summary.html?";

        $.get("fetchData.php?userid="+userId,function(data){
            console.log(data);
            data = JSON.parse(data);

            _.each(CATEGORIES_ARRAY.INTERESTS, function(interest) {
                var id = interest.id;
                var value= data[id];
                console.log(id +':'+ value);
                url += id+ "=" + value + "&";
            });

            var politicsUserChoice= data["political_pref"];
            url += "politicsChoice=" + politicsUserChoice;

            var additionalPagesArr = [];
            _.each(CATEGORIES_ARRAY.ADDITIONAL_PAGES, function(morePages) {
                var id = morePages.id;
                var value= data[id];
                console.log(id +':'+ value);
                if(value =="true"){
                    debugger;
                    additionalPagesArr.push(id);
                }
            });

            var additionalPagesStr= additionalPagesArr.join(",");
            url += "&additionalPages=" + additionalPagesStr;
            console.log(data);

            window.location= url;

            console.log(url);

        });
	});


	buildSlider();
	$("#interDefinition").click();
});
