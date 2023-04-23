<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Weather Forcast</title>
  		<!-- CUSTOM CSS -->
		<link rel="stylesheet" type="text/css" href="inc/style.css">
	</head>
	<body>
		<!-- Logo Section -->
			<section class="container">
				<div class="col-100">
					<center>
						<img src="inc/img/logo.gif" id="logo">
					</center>
				</div>
			</section>
		<!-- Logo Section -->

		<!-- Search Section -->
			<section class="container search">				
		        <center>
			        <input type="text" value="" id="searchLocation" class="formControl">
			        <button type="button" name="searchBtn" class="searchBtn">Search</button>
		        </center>

				<div class="row">
					<div class="col-33">
						<div class="card">
							<p><b>Current:</b></p>
							<ul>
								<!-- <li><b>Day:</b> <span id="cDay"></span></li> -->
								<li><b>Date:</b> <span id="cDate"></span></li>
								<li><b>Time:</b> <span id="cTime"></span></li>
							</ul>
						</div>
					</div>

					<div class="col-33">						
						<div class="card" style="min-height: 100px;height: auto;">
							<p><b>Current Temperature:</b></p>
							<div id="currentTemperature">
								<img src="" class="icon">
								<p></p>
								<div class="row">
									<div class="col-50" id="cloud"></div>
									<div class="col-50" id="humidity"></div>									
								</div>
								<div class="row">
									<div class="col-50" id="celcius"></div>
									<div class="col-50" id="fahrenheit"></div>									
								</div>
							</div>
						</div>
					</div>

					<div class="col-33">						
						<div class="card">
							<p><b>Selected Location:</b></p>
							<p id="searchedLocation"></p>
							<p id="LocationLaTLon"></p>
						</div>
					</div>
				</div>
			</section>
		<!-- Search Section -->

		<!-- Result Section -->
			<section class="container result">
				<!-- Desk View Table -->
				<table class="temprature-table nonmob-table">
					<thead>
						<tr>
							<th>Monday <br> Temp.</th>
							<th>Tuesday <br> Temp.</th>
							<th>Wednesday <br> Temp.</th>
							<th>Thursday <br> Temp.</th>
							<th>Friday <br> Temp.</th>
							<th>Satday <br> Temp.</th>
							<th>Sunday <br> Temp.</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td id="day-0">
								<div class="tableTemperature">
									<img src="" class="tableIcon">
									<p></p>
									<div class="avgtemp_c"></div>
									<div class="avgtemp_f"></div>
									<div class="maxtemp_c"></div>
									<div class="maxtemp_f"></div>
									<div class="mintemp_c"></div>
									<div class="mintemp_f"></div>
								</div>
							</td>
							<td id="day-1">
								<div class="tableTemperature">
									<img src="" class="tableIcon">
									<p></p>
									<div class="avgtemp_c"></div>
									<div class="avgtemp_f"></div>
									<div class="maxtemp_c"></div>
									<div class="maxtemp_f"></div>
									<div class="mintemp_c"></div>
									<div class="mintemp_f"></div>
								</div>
							</td>
							<td id="day-2">
								<div class="tableTemperature">
									<img src="" class="tableIcon">
									<p></p>
									<div class="avgtemp_c"></div>
									<div class="avgtemp_f"></div>
									<div class="maxtemp_c"></div>
									<div class="maxtemp_f"></div>
									<div class="mintemp_c"></div>
									<div class="mintemp_f"></div>
								</div>
							</td>
							<td id="day-3">
								<div class="tableTemperature">
									<img src="" class="tableIcon">
									<p></p>
									<div class="avgtemp_c"></div>
									<div class="avgtemp_f"></div>
									<div class="maxtemp_c"></div>
									<div class="maxtemp_f"></div>
									<div class="mintemp_c"></div>
									<div class="mintemp_f"></div>
								</div>
							</td>
							<td id="day-4">
								<div class="tableTemperature">
									<img src="" class="tableIcon">
									<p></p>
									<div class="avgtemp_c"></div>
									<div class="avgtemp_f"></div>
									<div class="maxtemp_c"></div>
									<div class="maxtemp_f"></div>
									<div class="mintemp_c"></div>
									<div class="mintemp_f"></div>
								</div>
							</td>
							<td id="day-5">
								<div class="tableTemperature">
									<img src="" class="tableIcon">
									<p></p>
									<div class="avgtemp_c"></div>
									<div class="avgtemp_f"></div>
									<div class="maxtemp_c"></div>
									<div class="maxtemp_f"></div>
									<div class="mintemp_c"></div>
									<div class="mintemp_f"></div>
								</div>
							</td>
							<td id="day-6">
								<div class="tableTemperature">
									<img src="" class="tableIcon">
									<p></p>
									<div class="avgtemp_c"></div>
									<div class="avgtemp_f"></div>
									<div class="maxtemp_c"></div>
									<div class="maxtemp_f"></div>
									<div class="mintemp_c"></div>
									<div class="mintemp_f"></div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>

				<!-- Mobile View Table -->
				<table class="temprature-table mob-table">
					<tr>
						<th>Monday <br> Temp.</th>						
						<td id="day-0">
							<div class="tableTemperature">
								<img src="" class="tableIcon">
								<p></p>
								<div class="avgtemp_c"></div>
								<div class="avgtemp_f"></div>
								<div class="maxtemp_c"></div>
								<div class="maxtemp_f"></div>
								<div class="mintemp_c"></div>
								<div class="mintemp_f"></div>
							</div>
						</td>
					</tr>
					<tr>
						<th>Tuesday <br> Temp.</th>
						<td id="day-1">
							<div class="tableTemperature">
								<img src="" class="tableIcon">
								<p></p>
								<div class="avgtemp_c"></div>
								<div class="avgtemp_f"></div>
								<div class="maxtemp_c"></div>
								<div class="maxtemp_f"></div>
								<div class="mintemp_c"></div>
								<div class="mintemp_f"></div>
							</div>
						</td>
					</tr>
					<tr>
						<th>Wednesday <br> Temp.</th>
						<td id="day-2">
							<div class="tableTemperature">
								<img src="" class="tableIcon">
								<p></p>
								<div class="avgtemp_c"></div>
								<div class="avgtemp_f"></div>
								<div class="maxtemp_c"></div>
								<div class="maxtemp_f"></div>
								<div class="mintemp_c"></div>
								<div class="mintemp_f"></div>
							</div>
						</td>
					</tr>
					<tr>
						<th>Thursday <br> Temp.</th>
						<td id="day-3">
							<div class="tableTemperature">
								<img src="" class="tableIcon">
								<p></p>
								<div class="avgtemp_c"></div>
								<div class="avgtemp_f"></div>
								<div class="maxtemp_c"></div>
								<div class="maxtemp_f"></div>
								<div class="mintemp_c"></div>
								<div class="mintemp_f"></div>
							</div>
						</td>
					</tr>
					<tr>
						<th>Friday <br> Temp.</th>
						<td id="day-4">
							<div class="tableTemperature">
								<img src="" class="tableIcon">
								<p></p>
								<div class="avgtemp_c"></div>
								<div class="avgtemp_f"></div>
								<div class="maxtemp_c"></div>
								<div class="maxtemp_f"></div>
								<div class="mintemp_c"></div>
								<div class="mintemp_f"></div>
							</div>
						</td>
					</tr>
					<tr>
						<th>Satday <br> Temp.</th>
						<td id="day-5">
							<div class="tableTemperature">
								<img src="" class="tableIcon">
								<p></p>
								<div class="avgtemp_c"></div>
								<div class="avgtemp_f"></div>
								<div class="maxtemp_c"></div>
								<div class="maxtemp_f"></div>
								<div class="mintemp_c"></div>
								<div class="mintemp_f"></div>
							</div>
						</td>
					</tr>
					<tr>
						<th>Sunday <br> Temp.</th>
						<td id="day-6">
							<div class="tableTemperature">
								<img src="" class="tableIcon">
								<p></p>
								<div class="avgtemp_c"></div>
								<div class="avgtemp_f"></div>
								<div class="maxtemp_c"></div>
								<div class="maxtemp_f"></div>
								<div class="mintemp_c"></div>
								<div class="mintemp_f"></div>
							</div>
						</td>
					</tr>
				</table>
			</section>
		<!-- Result Section -->
	</body>
</html>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script type="text/javascript">
	// From INPUT Tag
	$('.searchBtn').click(function(e){
	   e.preventDefault();
	   $('.searchBtn').attr("disabled","disabled");
		searchLocation = $("#searchLocation").val();
		//alert(searchLocation)
		$.post( "action.php", { type: 'checkTemprature', location: searchLocation })      
	      .done(function( data ) {
	        //console.log(data);
	        jsn = JSON.parse(data);
	        console.log(jsn)

	        if (jsn.error.length != 0) {
	   			$('.searchBtn').removeAttr("disabled");
	        	alert(jsn.error.message);
	        	return false;
	        }else{	        	
	   			$('.searchBtn').removeAttr("disabled");
		        local = jsn.location;
		        current = jsn.current;
		        jday0 = jsn.day0;
		        jday1 = jsn.day1;
		        jday2 = jsn.day2;
		        jday3 = jsn.day3;
		        jday4 = jsn.day4;
		        jday5 = jsn.day5;
		        jday6 = jsn.day6;

		        //Date and Time 
		        tdate = local.localtime;
		        myarray = tdate.split(' ');
		        $("#cDate").text(myarray[0]);
		        $("#cTime").text(myarray[1]);


		        // Location
		        $("#searchedLocation").text(local.name+', '+local.region+', '+local.country);
		        $("#LocationLaTLon").text('Latitude: '+local.lat+'Longitude: '+local.lon);


		        // Temprature
		        $("#humidity").html("<b>Humidity:</b> "+ current.humidity +'%');
		        $("#cloud").html("<b>Cloud:</b> "+ current.cloud +'%');
		        $("#celcius").html("<b>Temp.:</b> "+ current.temp_c +'°C');
		        $("#fahrenheit").html("<b>Temp.:</b> "+ current.temp_f +'°F');
		        $("#currentTemperature img").attr('src',current.condition.icon);
		        $("#currentTemperature p").html("<i>"+ current.condition.text +"</i>");

		        // Table
				checkDay(jday0.date, jday0);
				checkDay(jday1.date, jday1);
				checkDay(jday2.date, jday2);
				checkDay(jday3.date, jday3);
				checkDay(jday4.date, jday4);
				checkDay(jday5.date, jday5);
				checkDay(jday6.date, jday6);
	        }
	      })
	});

	function checkDay(day, data) {
		id = "";
		switch (new Date(day).getDay()) {
		  case 0:
		    id = "#day-0";
		    break;
		  case 1:
		    id = "#day-1";
		    break;
		  case 2:
		    id = "#day-2";
		    break;
		  case 3:
		    id = "#day-3";
		    break;
		  case 4:
		    id = "#day-4";
		    break;
		  case 5:
		    id = "#day-5";
		    break;
		  case  6:
		    id = "#day-6";
		}

	    $(id+" .tableTemperature img").attr("src",data.day.condition.icon);
	    $(id+" .tableTemperature p").html("<i>"+ data.day.condition.text +"</i>");
	    $(id+" .tableTemperature .avgtemp_c").html("<b>Average:</b> "+ data.day.avgtemp_c +'°C');
	    $(id+" .tableTemperature .avgtemp_f").html("<b>Average: "+ data.day.avgtemp_f +'°F');
	    $(id+" .tableTemperature .maxtemp_c").html("<b>Max:</b> "+ data.day.maxtemp_c +'°C');
	    $(id+" .tableTemperature .maxtemp_f").html("<b>Max:</b> "+ data.day.maxtemp_f +'°F');
	    $(id+" .tableTemperature .mintemp_c").html("<b>Min:</b> "+ data.day.mintemp_c +'°C');
	    $(id+" .tableTemperature .mintemp_f").html("<b>Min:</b> "+ data.day.mintemp_f +'°F');
	}
	
</script>