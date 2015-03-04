<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>Primary Metals Industry Ranking</title>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type="text/javascript">
      function drawTTR() {
        // Create and populate the data table.
        var tox = new google.visualization.DataTable();
        tox.addColumn('string', 'Facility Name');
        tox.addColumn('number', 'Total Quantity Released');
        tox.addColumn('number', 'LA County Primary Metals Industry Average (lbs)');
        tox.addColumn('number', 'CA Primary Metals Industry Average (lbs)');
        tox.addColumn('number', 'US Primary Metals Industry Average (lbs)');
        tox.addRows([ 
          ['QUEMETCO INC',  2823310.54, 102411, 65454, 238111],
          ['EXIDE TECHNOLOGIES',  210110.98, 102411, 65454, 238111],
          ['WESTERN TUBE & CONDUIT CORP',  15822.60, 102411, 65454, 238111],
          ['CONSOLIDATED FOUNDRIES POMONA',  9319.10, 102411, 65454, 238111],
          ['TECHNI-CAST CORP',  5050.22, 102411, 65454, 238111],
          ['HERAEUS PRECIOUS METALS NA LLC',  2853.47, 102411, 65454, 238111],
          ['PAC FOUNDRIES - INDUSTRY',  1723, 102411, 65454, 238111],
          ['PACIFIC ALLOY CASTINGS',  1669.45, 102411, 65454, 238111],
          ['LIGHT METALS INC',  868.31, 102411, 65454, 238111],
          ['PRECISION SPECIALTY METALS INC', 562.59, 102411, 65454, 238111],
       
        ]);
      
        // Create and draw the visualization.
        var tac = new google.visualization.ComboChart(document.getElementById('ToxicReleases'));
        tac.draw(tox, {
          title : 'Primary Metals Industry: 2012 Ten Facilities with Highest Total Toxic Releases On- and Off-Site in Los Angeles County',
          vAxis: {title: "Total Toxic Releases (lbs)"},
          hAxis: {title: "Facility Name (n=30)"},
          legend: {position: 'side'},
          seriesType: "line",
          series: {0: {type: "bars", color: 'blue', visibleInLegend: true}, 1:{color: 'black'}, 2:{color: 'darkgray'}, 3:{color: 'darkorange'}}
          
         
          
        });
      }
      

      google.setOnLoadCallback(drawTTR);
    </script>
	
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type="text/javascript">
      function drawRev() {
        // Create and populate the data table.
        var rev = new google.visualization.DataTable();
        rev.addColumn('string', 'Facility Name');
        rev.addColumn('number', 'Toxic Releases in lbs/$1,000 of Revenue');
        rev.addColumn('number', 'LA County Primary Metals Industry Average (lbs/$1000)');
        rev.addColumn('number', 'CA Primary Metals Industry Average (lbs/$1000)');
        rev.addRows([ 
          ['QUEMETCO INC',  49.33, 3.32, 2.25],
          ['EXIDE TECHNOLOGIES',  44.81, 3.32, 2.25],
          ['CONSOLIDATED FOUNDRIES POMONA',  1.00, 3.32, 2.25],
          ['TECHNI-CAST CORP',  0.31, 3.32, 2.25],
          ['PAC FOUNDRIES INC',  0.25, 3.32, 2.25],
          ['WESTERN TUBE & CONDUIT CORP',  0.16, 3.32, 2.25],
          ['PACIFIC ALLOY CASTINGS INC',  0.15, 3.32, 2.25],
          ['STRELITZ CO',  0.06, 3.32, 2.25],
          ['HERAEUS PRECIOUS METALS NA LLC',  0.05, 3.32, 2.25],
          ['P KAY METAL INC', 0.02, 3.32, 2.25],
       
        ]);
      
        // Create and draw the visualization.
        var acr = new google.visualization.ComboChart(document.getElementById('Revenue'));
        acr.draw(rev, {
          title : 'Primary Metals Industry: 2012 Ten Facilities with Highest Toxic Releases per $1000 Revenue in Los Angeles County',
          vAxis: {title: "Toxic Releases in lbs/$1,000 of Revenue"},
          hAxis: {title: "Facility Name (n=30)"},
          legend: {position: 'side'},
          seriesType: "line",
          series: {0: {type: "bars", color: 'blue', visibleInLegend: true}, 1:{color: 'black'}, 2:{color: 'darkgray'}}
          
         
          
        });
      }
      

      google.setOnLoadCallback(drawRev);
    </script>
	
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type="text/javascript">
      function drawTPounds() {
        // Create and populate the data table.
        var toxp = new google.visualization.DataTable();
        toxp.addColumn('string', 'Facility Name');
        toxp.addColumn('number', 'Total On-Site Releases (Toxicity x lbs)');
        toxp.addColumn('number', 'LA County Primary Metals Industry Average (Toxicity x lbs) ');
        toxp.addColumn('number', 'CA Primary Metals Industry Average (Toxicity x lbs)');
		toxp.addColumn('number', 'US Primary Metals Industry Average (Toxicity x lbs)');
        toxp.addRows([ 
          ['CONSOLIDATED FOUNDRIES POMONA', 1548000000, 52228243, 27617641, 584256245],
          ['EXIDE TECHNOLOGIES',  14382926, 52228243, 27617641, 584256245],
          ['P KAY METAL INC',  801680, 52228243, 27617641, 584256245],
          ['HERAEUS PRECIOUS METALS NA LLC',  759408, 52228243, 27617641, 584256245],
          ['CERTIFIED ALLOY PRODUCTS INC', 565800, 52228243, 27617641, 584256245],
          ['MILLER CASTINGS INC',  565800, 52228243, 27617641, 584256245],
          ['LIGHT METALS INC',  295434, 52228243, 27617641, 584256245],
          ['PRECISION SPECIALTY METALS INC', 229613, 52228243, 27617641, 584256245],
          ['PAC FOUNDRIES-INDUSTRY',  225800, 52228243, 27617641, 584256245],
          ['QUEMETCO INC', 215315, 52228243, 27617641, 584256245],
       
        ]);
      
        // Create and draw the visualization.
        var atox = new google.visualization.ComboChart(document.getElementById('TPounds'));
        atox.draw(toxp, {
          title : 'Primary Metals Industry: 2012 Ten Facilities with Highest Toxicity of Total Releases in Los Angeles County',
          vAxis: {title: "Total On-Site Releases (Toxicity x lbs)"},
          hAxis: {title: "Facility Name (n=30)"},
          legend: {position: 'side'},
          seriesType: "line",
          series: {0: {type: "bars", color: 'blue', visibleInLegend: true}, 1:{color: 'black'}, 2:{color: 'darkgray'}, 3:{color: 'darkorange'}}
          
         
          
        });
      }
      

      google.setOnLoadCallback(drawTPounds);
    </script>
	
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type="text/javascript">
      function drawVisualization() {
        // Create and populate the data table.
        var pwma = new google.visualization.DataTable();
        pwma.addColumn('string', 'Facility Name');
        pwma.addColumn('number', 'Percent of Preferred Waste Management Activities');
        pwma.addColumn('number', 'LA County Primary Metals Industry Average');
        pwma.addColumn('number', 'CA Primary Metals Industry Average');
        pwma.addRows([ 
          ['CAST-RITE CORP',  100, 88.96, 88.51],
          ['SAPA EXTRUDER INC',  100, 88.96, 88.51],
          ['BROWN-PACIFIC INC',  99.99, 88.96, 88.51],
          ['P KAY METAL INC',  99.99, 88.96, 88.51],
          ['DAVIS WIRE CORP', 99.97, 88.96, 88.51],
          ['PRECISION SPECIALTY METALS INC',  99.91, 88.96, 88.51],
          ['THOROCK METALS INC',  99.89, 88.96, 88.51],
          ['HERAEUS PRECIOUS METALS NA LLC', 99.85, 88.96, 88.51],
          ['WESTERN TUBE & CONDUIT CORP',  99.40, 88.96, 88.51],
          ['ACME CASTINGS INC', 98.82, 88.96, 88.51],
       
        ]);
      
        // Create and draw the visualization.
        var acp = new google.visualization.ComboChart(document.getElementById('PWMA'));
        acp.draw(pwma, {
          title : 'Primary Metals Industry: 2012 Ten Facilties in Preferred Waste Management Activites (Recycling, Energy Recovery, Treatment)',
          vAxis: {title: "% = [Preferred Waste Management Activites (lbs)] / [Total Production Waste (lbs)]"},
          hAxis: {title: "Facility Name (n=30)"},
          legend: {position: 'side'},
          seriesType: "line",
          series: {0: {type: "bars", color: 'blue', visibleInLegend: true}, 1:{color: 'black'}, 2:{color: 'darkgray'}}
          
         
          
        });
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script>
	
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type="text/javascript">
      function drawVisualization() {
        // Create and populate the data table.
        var lcr = new google.visualization.DataTable();
        lcr.addColumn('string', 'Facility Name');
        lcr.addColumn('number', 'Lifetime Cancer Estimate per million');
        lcr.addColumn('number', 'LA County Primary Metals Industry Average');
        lcr.addRows([ 
          ['EXIDE TECHNOLOGIES', 9270.65, 1.71],
          ['PACIFIC ALLOY CASTINGS',  7.53, 1.71],
          ['P KAY METAL INC',  7.33, 1.71],
          ['PAC FOUNDRIES INDUSTRY',  3.82, 1.71],
          ['CERTIFIED ALLOY PRODUCTS INC', 3.82, 1.71],
          ['MILLER CASTINGS INC',  3.82, 1.71],
          ['WEST COAST FOUNDRY',  1.37, 1.71],
          ['STRATEGIC MATERIALS CORP', 1.36, 1.71],
          ['QUEMETCO INC',  0.90, 1.71],
          ['HERAEUS PRECIOUS METALS NA LLC', 0.88, 1.71],
       
        ]);
      
        // Create and draw the visualization.
        var acl = new google.visualization.ComboChart(document.getElementById('CancerRisk'));
        acl.draw(lcr, {
          title : 'Primary Metals Industry: 2012 Ten Facilities with Highest Regional Contribution to Lifetime Cancer Risk from Air Emission in Los Angeles County',
          vAxis: {title: "Air Emissions Lifetime Cancer Estimate (number of cancers in one million people)"},
          hAxis: {title: "Facility Name (n=30)"},
          legend: {position: 'side'},
          seriesType: "line",
          series: {0: {type: "bars", color: 'blue', visibleInLegend: true}, 1:{color: 'black'}}
          
         
          
        });
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script>
</head>
<body>
<div class="wrapper"> 
<?php include('header.php'); ?>
<div align="center"><h2>Total Toxic Releases <a href="TOTALTOXICRELEASES.php " target="_blank">[?]</a></h2></div>
<div id="ToxicReleases"></div><br>
<div align="center"><h2>Releases per $1000 Revenue <a href="RPKR.php" target="_blank">[?]</a></h2></div>
<div id="Revenue"></div><br>
<div align="center"><h2>Toxicity of Total Releases</h2></div>
<div id="TPounds"></div><br>
<div align="center"><h2>Percent of Preferred Waste Management Activities<a href="PPWMA.php" target="_blank">[?]</a></h2></div>
<div id="PWMA"></div><br>
<div align="center"><h2>Regional Contribution to Lifetime Cancer Risk<a href="CancerMethod.php" target="_blank">[?]</a></h2></div>
<div id="CancerRisk"></div>
<div id="footer"> <?php include('footer.php'); ?> </div>
</div>
</body></html>