$(document).ready(function () {

    var selections = {
        interests: [],
        politicsChoice: "",
        additionalPages: []
    };
    console.log(selections);

    $.urlParam = function (name) {
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        return results[1] || 0;
    };

    function fillValues() {

        _.each(CATEGORIES_ARRAY.INTERESTS, function (interest) { // iterate each object in INTERESTS array. "interest" is one object in the array.
            var value = $.urlParam(interest.id); // value = get the url parameter for the interest object. using its "id" attribute
            $("#" + interest.id + " .category-choice-number").text(value); // search for element with the same id as the interest id, and inside look for "choice-number" and there put the value
            $("#" + interest.id + " .category-name").addClass("title-value-" + value); // search for element with the same id as the interest id, inside look for "cateogry-name" and add class according to the value - "title-value"+value
/**add to every category her value and add class for the font weight foe each parameter in the array*/
            selections.interests.push({ // push new object to the selections interests array. the new object has the id of the category and its value.
                id: interest.id, // the id of the interest
                value: parseInt(value, 10) // because the value of the interest is String, we want it as number, so we need to "parseInt" it, with 10 base (Decimal... and not 2 base - binary)
            });
        });

        var politicsChoiceId = $.urlParam("politicsChoice");/*get the value of politics choice from the url*/
        var politicsChoiceObj = _.find(CATEGORIES_ARRAY.POLITICS, {id: politicsChoiceId}); // search in the POLITICS array for object with the same id as politicsChoiceId
        var politicsChoiceName = (politicsChoiceObj) ? politicsChoiceObj.heb : "לא נבחר";
        $("#politicsUserOpinion .category-choice-more").text(politicsChoiceName);//puting the value in the page
        selections.politicsChoice = politicsChoiceId || "";

        var additionalPages = $.urlParam("additionalPages");/*get the value from the url. remember: the value is list, separated by , */
        if (additionalPages) {
            var additionalPagesArr = $.urlParam("additionalPages").split(",");/* take the whole string and convert it to array. it is splited by , */
            _.each(additionalPagesArr, function (pageName) {/* iterate over the pages array. "pageName" is string. this is one of the pages the user selected */
                var div = $("<div>");
                var plusSpan = $("<span class='red-plus'>+</span>");
                var textObj = _.find(CATEGORIES_ARRAY.ADDITIONAL_PAGES, {id: pageName});
                var textSpan = $("<span class='text'>" + textObj.heb + "</span>");

                plusSpan.appendTo(div);
                textSpan.appendTo(div);
                div.appendTo($("#moreOptions"));

                selections.additionalPages.push(pageName);
            });
        }
        else {
            var div = $("<div>");//create new div
            var textSpan = $("<span class='text'>לא נבחר</span>");//create new span

            textSpan.appendTo(div);//append the span to the div
            div.appendTo($("#moreOptions")); //append the div to a div with id "moreOptions"
        }
    }

    function sortInterests() {
        var interestsSorted = _.sortBy(selections.interests, "value");
        interestsSorted.reverse();
        selections.interests = interestsSorted;
    }

    function saveSelectionsAsCookie() {
        var selectionsStr = JSON.stringify(selections);
        Cookies.set("yome_selections", selectionsStr, {expires: 1});
    }
    console.log($("#idNumberInput").val());

    $("#saveButton").click(function () {

        var data = {};
        _.each(selections.interests, function(interest) {
            data[interest.id] = interest.value;
        });

        data.politicsChoice = selections.politicsChoice;
        data.crosswords = _.contains(selections.additionalPages, "leisureAndCrosswords");
        data.evel = _.contains(selections.additionalPages, "obituaries");
        data.editorChoice = _.contains(selections.additionalPages, "editorRecommendations");
        data.adsAndJobs = _.contains(selections.additionalPages, "adsAndJobs");
        data.opinions = _.contains(selections.additionalPages, "columnistsAndOpinion");
        data.id=  $("#idNumberInput").val();
        data.phoneNumber = $("#phoneNumberInput").val();
        data.userName= $("#userNameInput").val();

        $.ajax({
            type: "POST",
            url: "summaryInsert.php",
            data: data,
            cache: false,
            success: function (result) {
                alert("ההגדרות נשמרו בהצלחה");
            }
        })

    });

    fillValues();
    sortInterests();
   saveSelectionsAsCookie();
});

