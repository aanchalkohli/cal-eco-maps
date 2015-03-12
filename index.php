<!DOCTYPE html>
<html>

  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>
      Cal EcoMaps
    </title>



	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart', 'table']});
    </script>


	<link rel="stylesheet" href="assets/css/style.css" />


    <!-- Load javascript and css from mapbox api -->
    <script src='https://api.tiles.mapbox.com/mapbox.js/v1.6.2/mapbox.js'></script>
	<link href='https://api.tiles.mapbox.com/mapbox.js/v1.6.2/mapbox.css' rel='stylesheet' />
    <script src='https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.24.0/L.Control.Locate.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.24.0/L.Control.Locate.css' rel='stylesheet' />
	<script type="text/javascript">


    // Variables and functions can be outside the window load event
      var TQRG = "1k_R9v0tRK9Ut2HsKSWKviDd4ZDFGmNh550C-dCeK";
	  var PWMP = "12ORteQwTsrW8Zt2oeOcvy0u-AmfzFW473NuqYXcN";
	  var PIEC = "151J3h65WtIaBFxqIo7dTXjDrqYz_-bMv3i32Q3g5";
	  var Stats = "1s7wbOLCKHw4arNOUar8sUUn3OBsODjE_HjWZviXD";
	  var apiKey = "AIzaSyAM_cjZdUnAQMuv7-WMxWimmP72IUHjOrA";

	  // This is the variable that will hold the Mapbox map
	  var MAP;

	// After the page loads, add the MAP and click events
	$(window).load(function() {

	// The MAP, with coordinates and zoom from the iframe
	MAP = L.mapbox.map('map', 'calecomaps.iggm72f9').setView([33.984, -118.093], 10).addControl(L.mapbox.geocoderControl('calecomaps.iggm72f9', {
        keepOpen: false
    }));
	L.control.locate({locateOptions: {maxZoom:13}}).addTo(MAP);
	L.control.layers({
    'Base Map': L.mapbox.tileLayer('calecomaps.iggm72f9').addTo(MAP),
}, {
    'Sensitive Population Density': L.mapbox.tileLayer('calecomaps.7mig8k4v'),
    'California Protected Area': L.mapbox.tileLayer('calecomaps.toqu8nzc'),
	'Schools and Colleges': L.mapbox.tileLayer(
	'calecomaps.vavvh43i'),
}, {collapsed: false}).addTo(MAP);
MAP.legendControl.addLegend(document.getElementById('legend-content').innerHTML).addLegend(document.getElementById('legend-content2').innerHTML);

    // popup open event for the markers layer
    MAP.featureLayer.on('click', function(e) {

    	// get the id of clicked marker
    	// use console.log(e) to see the event object;
    	var trif_id = e.layer.feature.properties["TRIF ID"];

    	// replace href and set click event of link
    	$('.leaflet-popup-content a')
    		//.attr('href', 'javascript:void(0);') // reset the href
			.attr('href', '#CompanyName')
    		.unbind('click') // unbind any prior click events
    		.click(function() {
    			// add our click event
				$('#PIECV, #Table').css('height', '400px');
    			drawVisualization(trif_id);
				drawVisualization2(trif_id);
				drawVisualization3(trif_id);
				drawVisualization4(trif_id);

			});




    });

	// The click function -- don't actually need this anymore for clicks in the popups
	  	// var trif_id = "90063GRGND4116W";
	  $(".drawChart").click(function() {
		var trif_id = $(this).attr('id');
		drawVisualization(trif_id);
		drawVisualization2(trif_id);
		drawVisualization3(trif_id);
		drawVisualization4(trif_id);
	  });

	});

    // Functions should generally be outside the window load event
	  function drawVisualization(trif_id) {
		// get the data
		$.get("https://www.googleapis.com/fusiontables/v1/query", {sql:"SELECT * FROM "+TQRG+" WHERE TRIF_ID='"+trif_id+"'", key:apiKey}, function(response) {
			var columns = response.columns;

			// avoid an error if nothing returned, may want to add an error message here
			if (!response.rows) return;

			var toxicReleased2010 = response.rows[0][2];
			var toxicReleased2011 = response.rows[0][3];
			var toxicReleased2012 = response.rows[0][4];
			var LaAVG2010 = response.rows[0][5];
			var LaAVG2011 = response.rows[0][6];
			var LaAVG2012 = response.rows[0][7];
			var CAAVG2010 = response.rows[0][8];
			var CAAVG2011 = response.rows[0][9];
			var CAAVG2012 = response.rows[0][10];
			var USAVG2010 = response.rows[0][11];
			var USAVG2011 = response.rows[0][12];
			var USAVG2012 = response.rows[0][13];
			var Industry = response.rows[0][18];
			var Name = response.rows[0][1];
			var Color= response.rows[0][17];
			var QR2010 = response.rows[0][14];
			var QR2011 = response.rows[0][15];
			var QR2012 = response.rows[0][16]




			 // Create and populate the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Year');
        data.addColumn('number', 'Total Toxic Releases');
        data.addColumn('number', 'LA County '+ Industry +' Industry Average');
        data.addColumn('number', 'CA '+Industry+' Industry Average');
        data.addColumn('number', 'US '+Industry+' Industry Average');
        data.addRows([
          [String(QR2010),  Number(toxicReleased2010),      LaAVG2010,    	CAAVG2010, 			   USAVG2010],
          [String(QR2011),  Number(toxicReleased2011),      LaAVG2011,     CAAVG2011,             USAVG2011],
          [String(QR2012),  Number(toxicReleased2012),      LaAVG2012,       CAAVG2012,             USAVG2012],

        ]);

        // Create and draw the visualization.
        var ac = new google.visualization.ComboChart(document.getElementById('TotalQuantityReleased'));
        ac.draw(data, {
          title : Name+' Total Toxic Releases On and Off Site',
          width: 600,
          height: 400,
          vAxis: {title: "Total Quantity Released (lbs)", logScale: false},
          hAxis: {title: "Year"},
          legend: { position: 'right', maxLines: 2, textStyle: {fontSize: 11} },
          seriesType: "line",
          series: {0: {type: "bars", color: String(Color), visibleInLegend: true}, 1:{color: 'black'}, 2:{color: 'darkgray'}, 3:{color: 'darkorange'}}

			//String(Industry)

			});

		}, 'json');
      }

	  function drawVisualization2(trif_id) {
        $.get("https://www.googleapis.com/fusiontables/v1/query", {sql:"SELECT * FROM "+PWMP+" WHERE TRIF_ID='"+trif_id+"'", key:apiKey}, function(response) {
			var columns = response.columns;

			// avoid an error if nothing returned, may want to add an error message here
			if (!response.rows) return;

			var PPWMP2010 = response.rows[0][2];
			var PPWMP2011 = response.rows[0][3];
			var PPWMP2012 = response.rows[0][4];
			var LAAVG2010 = response.rows[0][6];
			var LAAVG2011 = response.rows[0][8];
			var LAAVG2012 = response.rows[0][10];
			var CAAVG2010 = response.rows[0][5];
			var CAAVG2011 = response.rows[0][7];
			var CAAVG2012 = response.rows[0][9];
			var Industry = response.rows[0][15];
			var Name = response.rows[0][1];
			var Color= response.rows[0][14]
			var PWX2010 = response.rows[0][11]
			var PWX2011 = response.rows[0][12]
			var PWX2012 = response.rows[0][13]


			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Year');
			data.addColumn('number', 'Percentage of  Waste Management Practices');
			data.addColumn('number', 'LA County '+Industry+' Industry Average');
			data.addColumn('number', 'California '+Industry+' Industry Average');
			data.addRows([
            [String(PWX2010),  Number(PPWMP2010),     Number(LAAVG2010),   Number(CAAVG2010)],
            [String(PWX2011),  Number(PPWMP2011),		Number(LAAVG2011),       Number(CAAVG2011)],
            [String(PWX2012),  Number(PPWMP2012),     Number(LAAVG2012),        Number(CAAVG2012)],

			]);


			// Create and draw the visualization.
			var ac = new google.visualization.ComboChart(document.getElementById('PWMPV'));
			ac.draw(data, {
				title: Name+' Percent of Waste Managed Through Recycling, Energy Recovery, and  Treatment',
				width: 600,
				height: 400,
			vAxis: {format:'#%', title: "% Waste Managed Out of Total Production Waste"},
			hAxis: {title: "Year"},
			legend: { position: 'right', maxLines: 2, textStyle: {fontSize: 12} },
			seriesType: "line",
			series: {0: {type: "bars", color: String(Color), visibleInLegend: true}, 1:{color: 'black'}, 2:{color: 'darkgray'}, 3:{color: 'darkorange'}}



			});

		}, 'json');
      }

	  function drawVisualization3(trif_id) {
        $.get("https://www.googleapis.com/fusiontables/v1/query", {sql:"SELECT * FROM "+PIEC+" WHERE TRIF_ID='"+trif_id+"'", key:apiKey}, function(response) {
			var columns = response.columns;

			// avoid an error if nothing returned, may want to add an error message here
			if (!response.rows) return;

			var Name = response.rows[0][1];
			var Rel2012 = response.rows[0][2];
			var Oth2012 = response.rows[0][3];
			var Color = response.rows[0][5];
			var OthColor = response.rows [0][4];
			var Industry = response.rows [0][6]



			var data = google.visualization.arrayToDataTable([
			['Facility', 'Total Quantity Released (lbs)'],
			[String(Name), Number(Rel2012)],
			['Other '+Industry+' Facilities', Number(Oth2012)]

			]);

			var options = {
            title: '2012 '+Name+' Share (Pounds) of Total Toxic Releases in the '+Industry+' Industry in the LA County',
			slices: {1: {offset: 0.1, color: String(OthColor),textStyle:{color: 'transparent'}}, 0: {color: String(Color)}},
            pieSliceTextStyle: {fontSize: 15, color: 'lightslategray'}, width: 600, height: 400,
			sliceVisibilityThreshold: 0


			};
			 new google.visualization.PieChart(document.getElementById('PIECV')).
            draw(data, options);
		}, 'json');
      }
	  function drawVisualization4(trif_id) {
	$.get("https://www.googleapis.com/fusiontables/v1/query", {sql:"SELECT * FROM "+Stats+" WHERE TRIF_ID='"+trif_id+"'", key:apiKey}, function(response) {
			var columns = response.columns;

			// avoid an error if nothing returned, may want to add an error message here
			if (!response.rows) return;

			var Name = response.rows[0][2];
			var TQR = response.rows[0][13];
			var Revenue = response.rows[0][9];
			var RevenueAVG = response.rows[0][10];
			var PWMP = response.rows[0][14];
			var CANCER = response.rows[0][11];
			var CPA = response.rows[0][15];
			var Schools = response.rows[0][16];
			var Score = response.rows[0][17];
			var Industry = response.rows [0][1];
			var address= response.rows [0] [3];
			var TXP= response.rows [0][18]

		$('#CompanyName').html("<h2 id=\"Name\"><span class=\"subheading\">Facility Name:</span> " + Name + "</h2>");
		$('#SCORE').html("<h2 id=\"Score\"><span class=\"subheading\">Environmental Impact Score:</span> " + Math.round(Score) + " out of 100 <a href='eismethodology.php' target='_blank'>[?]</a></h2>");
		$('#TypeIndustry').html("<h2 id=\"industry\"><span class=\"subheading\">Industry NAICS:</span> " + Industry + "</h2>");
		$('#Note').html("<h2 id=\"Note\"><span class=\"subheading\">Graphs: When the year is displayed as N/A, the facility did not report to the TRI for that year.</span> </h2>");
		$('#noteimpact').html("<h3 id=\"backtop\">A higher score implies a greater impact on the environment.</h3>");
		$('#top').html("<h3 id=\"backtop\"><a href=#>Back to top</a></h3>");
		$('#top2').html("<h3 id=\"backtop2\"><a href=#>Back to top</a></h3>");

      // Create and populate the data table.
      var data = google.visualization.arrayToDataTable([
        ['Facility Facts (2012)', 'Numbers'],
        ['Total Toxic Releases, On- and Off-Site <a href="TOTALTOXICRELEASES.php " target="_blank">[?]</a>', Number(TQR)+' pounds'],
		['Toxicity of Total Releases,On-Site', TXP+' toxicity x pounds'],
        ['Toxic Releases per $1000 of Revenue<a href="RPKR.php" target="_blank">[?]</a>', Number(Revenue).toFixed(5)+' pounds/$1000'],
        ['Toxic Releases per $1000 of Revenue, Los Angeles Average', Number(RevenueAVG)+' pounds/$1000'],
		['Waste Managed through Recycling, Energy Recovery, and Treatment<a href="PPWMA.php" target="_blank">[?]</a>', ((PWMP)*100).toFixed(2)+'%' ],
		['Regional Contribution to Lifetime Cancer Risk from Air Emissions<a href="CancerMethod.php" target="_blank">[?]</a>', Number(CANCER).toFixed(2)+' cancers per million' ],
		['California Protected Areas', CPA+' within a 1-mile radius' ],
		['Schools', Schools+' within a 1-mile radius'],
		['Address', address]

		
      ]);




      // Create and draw the visualization.
      visualization = new google.visualization.Table(document.getElementById('Table'));
        visualization.draw(data, {allowHtml: true});
    }, 'json');
      }




    google.setOnLoadCallback(drawVisualization);



      // google.setOnLoadCallback(drawVisualization(trif_id));

    </script>
  </head>
  <body>
<?php include_once("analyticstracking.php") ?>
<div class="wrapper">


<?php include('header.php'); ?>



<h3>Welcome!</h3> Cal EcoMaps is a tool to share and evaluate the environmental performance of Toxics Release Inventory (TRI) facilities in Los Angeles County through the <a href="eismethodology.php" target="_blank">Cal EcoMaps Environmental Impact Score</a>. Use the interactive map below to learn more about your facility or your neighborhood.  <br><br>


  	<!-- The div for the MAP -->

  	<div id="map"></div>
	<div id='legend-content' style='display: none;'>
  <div class='my-legend'>
  <div class='legend-title'>Industry Name</div>
  <div class='legend-scale'>
    <ul class='legend-labels'>
      <li><span style='background:MediumBlue'></span>Primary Metals</li>
    <li><span style='background:FireBrick;'></span>Petroleum</li>
    <li><span style='background:Gold;'></span>Chemicals</li>
    <li><span style='background:DarkGreen;'></span>Fabricated Metals</li>
	<li><span style='background:#6c6c6c;'></span>Other Industries</li>
    </ul>
  </div>
  <div class='legend-source'>Source: EPA Toxics Release Inventory</div>
  </div>

<style type='text/css'>
  .my-legend .legend-title {
    text-align: left;
    margin-bottom: 5px;
    font-weight: bold;
    font-size: 90%;
    }
  .my-legend .legend-scale ul {
    margin: 0;
    margin-bottom: 5px;
    padding: 0;
    float: left;
    list-style: none;
    }
  .my-legend .legend-scale ul li {
    font-size: 80%;
    list-style: none;
    margin-left: 0;
    line-height: 18px;
    margin-bottom: 2px;
    }
  .my-legend ul.legend-labels li span {
    display: block;
    float: left;
    height: 16px;
    width: 30px;
    margin-right: 5px;
    margin-left: 0;
    border: 1px solid #999;
    }
  .my-legend .legend-source {
    font-size: 70%;
    color: #999;
    clear: both;
    }
  .my-legend a {
    color: #777;
    }
</style>

</div>

<div id='legend-content2' style='display: none;'>
 <div class='my-legend2'>
  <div class='legend-title'>Population Density</div>
  <div class='legend-scale'>
    <ul class='legend-labels'>
      <li><span style='background:#D8BFD8;'></span>low</li>
      <li><span style='background:#4B0082;'></span>high</li>
    </ul>
  </div>
  <div class='legend-source'>Source: U.S. Census Bureau</div>
  </div>

  <style type='text/css'>
    .my-legend2 .legend-title {
      text-align: left;
      margin-bottom: 8px;
      font-weight: bold;
      font-size: 90%;
      }
    .my-legend2 .legend-scale ul {
      margin: 0;
      padding: 0;
      float: left;
      list-style: none;
      }
    .my-legend2 .legend-scale ul li {
      display: block;
      float: left;
      width: 50px;
      margin-bottom: 6px;
      text-align: center;
      font-size: 80%;
      list-style: none;
      }
    .my-legend2 ul.legend-labels li span {
      display: block;
      float: left;
      height: 15px;
      width: 50px;
      }
    .my-legend2 .legend-source {
      font-size: 70%;
      color: #999;
      clear: both;
      }
    .my-legend2 a {
      color: #777;
      }
  </style>
</div>



<br>
	<div id="CompanyName"></div>
	<div id="top"></div>
	<div id="TypeIndustry"></div><br>
	<div id="SCORE"></div>
    <div id="noteimpact"></div>
<br>
</div>
<div class="TABLEPIE">
	<div id="Table"></div>
	<div id="PIECV"></div>
    <div id="TotalQuantityReleased"></div>
	<div id="PWMPV"></div>
</div>
<div class="wrapper">
 <div id="Note"></div>
 <div id="top2"></div>
 <br><br>
<div id="footer"> <?php include('footer.php'); ?> </div>
<br>
<br>
 </div>
	 <!-- example link -->




</div>


</body>


</html>
