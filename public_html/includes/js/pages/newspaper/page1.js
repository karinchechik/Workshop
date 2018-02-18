$(document).ready(function() {

	function showDateSection() {
		$("#day").text(getDateDay());
		$('#month').text(getDateMonth());
		$('#year').text(getDateYear());
		$('#currDayHebrewName').text(getDayInWeek());

		$('#hebrewDayDate').text(getHebrewDate().day);
		$('#hebrewMonthDate').text(getHebrewDate().month);
		$('#hebrewYearDate').text(getHebrewDate().year);
	}

	function getWeatherData() {
		jQuery.ajax({
	    	url: "http://api.openweathermap.org/data/2.5/group?id=293396,294801,295721,295277,295530,293100&units=metric&appid=718389442a6e5978d9cc4a5314278e55",
	    	success: getWeatherDataSuccess
		});
	}

	function getWeatherDataSuccess(data) {
		var citiesArr = data.list;

    	var telAviv = citiesArr[0];
    	var telAvivTemp = Math.floor(telAviv.main.temp);
    	var telAvivIcon = telAviv.weather[0].icon;

    	var jerusalem = citiesArr[1];
    	var jerusalemTemp = Math.floor(jerusalem.main.temp);
    	var jerusalemIcon = jerusalem.weather[0].icon;

    	var haifa = citiesArr[2];
    	var haifaTemp = Math.floor(haifa.main.temp);
    	var haifaIcon = haifa.weather[0].icon;

    	var eilat = citiesArr[3];
    	var eilatTemp = Math.floor(eilat.main.temp);
    	var eilatIcon = eilat.weather[0].icon;

        var beersheba = citiesArr[4];
    	var beershebaTemp = Math.floor(beersheba.main.temp);
    	var beershebaIcon = beersheba.weather[0].icon;

    	var zefat = citiesArr[5];
    	var zefatTemp = Math.floor(zefat.main.temp);
    	var zefatIcon = zefat.weather[0].icon;

        var iconPath = "../includes/images/weather/";
        $('#eilatApiWeather .city-temp-api-weather').html(eilatTemp + "&deg;");
        $('#eilatApiWeather .city-img-container-api-weather').append("<img class='city-icon-api-weather' src='"+iconPath+eilatIcon+".png'>");

        $('#beershebaApiWeather .city-temp-api-weather').html(beershebaTemp + "&deg;");
        $('#beershebaApiWeather .city-img-container-api-weather').append("<img class='city-icon-api-weather' src='"+iconPath+beershebaIcon+".png'>");

        $('#jerusalemApiWeather .city-temp-api-weather').html(jerusalemTemp + "&deg;");
        $('#jerusalemApiWeather .city-img-container-api-weather').append("<img class='city-icon-api-weather' src='"+iconPath+jerusalemIcon+".png'>");

        $('#telAvivApiWeather .city-temp-api-weather').html(telAvivTemp + "&deg;");
        $('#telAvivApiWeather .city-img-container-api-weather').append("<img class='city-icon-api-weather' src='"+iconPath+telAvivIcon+".png'>");

        $('#haifaApiWeather .city-temp-api-weather').html(haifaTemp + "&deg;");
        $('#haifaApiWeather .city-img-container-api-weather').append("<img class='city-icon-api-weather' src='"+iconPath+haifaIcon+".png'>");

        $('#zefatApiWeather .city-temp-api-weather').html(zefatTemp + "&deg;");
        $('#zefatApiWeather .city-img-container-api-weather').append("<img class='city-icon-api-weather' src='"+iconPath+zefatIcon+".png'>");

    }



	showDateSection();
	getWeatherData();

});