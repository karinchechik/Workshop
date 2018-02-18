/**
 * Created by user on 21/05/2016.
 */
$(document).ready(function() {
    var NUM_OF_PAGES =12;

    function getParamFromUrl(name) {
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        return results[1] || 0;
    }

    function loadPages() {
        var rightPage = parseInt(getParamFromUrl("rightPage"), 10);
        var leftPage = parseInt(getParamFromUrl("leftPage"), 10);

        var rightPagePath = "page"+rightPage+".php";
        var leftPagePath = "page"+leftPage+".php";

        $( ".right-page-container" ).load( rightPagePath);
        if (leftPage < NUM_OF_PAGES) {
            $( ".left-page-container" ).load( leftPagePath);
        }

        $(".right-page-button").toggleClass("hide", (rightPage == 2));
        $(".left-page-button").toggleClass("hide", (leftPage > NUM_OF_PAGES));
    }

    function onBackClick() {
        var currentRightPage = parseInt(getParamFromUrl("rightPage"), 10);
        var currentLeftPage = parseInt(getParamFromUrl("leftPage"), 10);

        var rightPage = currentRightPage - 2;
        var leftPage = currentLeftPage - 2;

        if (rightPage <= NUM_OF_PAGES && rightPage >= 2) {
            location.href = "newspaper.html?rightPage="+rightPage+"&leftPage="+leftPage;
        }
    }

    function onNextClick() {
        var currentRightPage = parseInt(getParamFromUrl("rightPage"), 10);
        var currentLeftPage = parseInt(getParamFromUrl("leftPage"), 10);

        var rightPage = currentRightPage + 2;
        var leftPage = currentLeftPage + 2;

        if (leftPage <= NUM_OF_PAGES+1 && leftPage >= 3) {
            location.href = "newspaper.html?rightPage="+rightPage+"&leftPage="+leftPage;
        }
    }

    loadPages();
    $(".right-page-button").bind("click", onBackClick);
    $(".left-page-button").bind("click", onNextClick);
});