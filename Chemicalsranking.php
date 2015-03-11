<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>Chemicals Industry Ranking</title>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart', 'table']});
    </script>
    <script type="text/javascript">
	function drawTTR() {
        // Create and populate the data table.
        var tox = new google.visualization.DataTable();
        tox.addColumn('string', 'Facility Name');
        tox.addColumn('number', 'Total Quantity Released');
        tox.addColumn('number', 'LA County Chemicals Industry Average (lbs)');
        tox.addColumn('number', 'CA Chemicals Industry Average (lbs)');
        tox.addColumn('number', 'US Chemicals Industry Average (lbs)');
        tox.addRows([ 
          ['AIR  PROUDCTS CHEMICALS INC',  100748.61, 5186, 9802, 152734],
          ['POLYPEPTIDE GROUP',  36019, 5186, 9802, 152734],
          ['AMERICAS STYRENICS LLC',  29037, 5186, 9802, 152734],
          ['3M DRUG DELIVERY SYSTEMS',  22167.1, 5186, 9802, 152734],
          ['US BORAX INC',  18403.87, 5186, 9802, 152734],
          ['INEOS POLYPROPYLENE LLC',  17700, 5186, 9802, 152734],
          ['AIRGAS DRY ICE',  17481, 5186, 9802, 152734],
          ['AIR LIQUIDE LARGE INDUSTRIES US LP - EL SEGUNDO',  16668, 5186, 9802, 152734],
          ['AIR LIQUIDE INDUSTRIAL USLP',  14511.02, 5186, 9802, 152734],
          ['PHIBRO-TECH INC',  13447, 5186, 9802, 152734],
       
        ]);
      
        // Create and draw the visualization.
        var tac = new google.visualization.ComboChart(document.getElementById('ToxicReleases'));
        tac.draw(tox, {
          title : 'Chemicals Industry: 2012 Ten Facilities with Highest Total Toxic Releases On- and Off-Site in Los Angeles County',
          vAxis: {title: "Total Toxic Releases (lbs)"},
          hAxis: {title: "Facility Name (n=76)"},
          legend: {position: 'side'},
          seriesType: "line",
          series: {0: {type: "bars", color: 'yellow', visibleInLegend: true}, 1:{color: 'black'}, 2:{color: 'darkgray'}, 3:{color: 'darkorange'}}
          
         
          
        });
      }
	  

      google.setOnLoadCallback(drawTTR);
    </script>
	
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type="text/javascript">
      function drawRev() {
        // Create and populate the data table.
        var rev = new google.visualization.DataTable();
        rev.addColumn('string', 'Facility Name');
        rev.addColumn('number', 'Toxic Releases in lbs/$1,000 of Revenue');
        rev.addColumn('number', 'LA County Chemicals Industry Average (lbs/$1000)');
        rev.addColumn('number', 'CA Chemicals Industry Average (lbs/$1000)');
        rev.addRows([ 
          ['US BORAX INC',  67.41, 1.41, 0.53],
          ['AIR PRODUCTS & CHEMICALS INC - LONG BEACH',  5.07, 1.41, 0.53],
          ['AIR PRODUCTS & CHEMICALS INC - WILMINGTON',  2.63, 1.41, 0.53],
          ['POLYPEPTIDE GROUP',  2.03, 1.41, 0.53],
          ['PHARMAVITE LLC', 1.64, 1.41, 0.53],
          ['RHODIA INC',  1.48, 1.41, 0.53],
          ['AIRGAS DRY ICE',  0.89, 1.41, 0.53],
          ['3M DRUG DELIVERY SYSTEMS',  0.77, 1.41, 0.53],
          ['AIR LIQUIDE LARGE INDUSTRIES US LP - EL SEGUNDO',  0.74, 1.41, 0.53],
          ['INEOS POLYPROPYLENE LLC', 0.49, 1.41, 0.53],
       
        ]);
      
        // Create and draw the visualization.
        var acr = new google.visualization.ComboChart(document.getElementById('Revenue'));
        acr.draw(rev, {
          title : 'Chemicals Industry: 2012 Ten Facilities with Highest Toxic Releases per $1000 Revenue in Los Angeles County',
          vAxis: {title: "Toxic Releases in lbs/$1,000 of Revenue"},
          hAxis: {title: "Facility Name (n=76)"},
          legend: {position: 'side'},
          seriesType: "line",
          series: {0: {type: "bars", color: 'yellow', visibleInLegend: true}, 1:{color: 'black'}, 2:{color: 'darkgray'}}
          
         
          
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
        toxp.addColumn('number', 'LA County Chemicals Industry Average (Toxicity x lbs)');
        toxp.addColumn('number', 'CA Chemicals Industry Average (Toxicity x lbs)');
		toxp.addColumn('number', 'US Chemicals Metals Industry Average (Toxicity x lbs)');
        toxp.addRows([ 
          ['RRHODIA INC', 13616910, 391235, 835402, 678901294],
          ['BAXTER BIOSCIENCE LOS ANGELES PLANT',  2773508, 391235, 835402, 678901294],
          ['ASHLAND SPECIALTY CHEMICAL CO',  1704468, 391235, 835402, 678901294],
          ['REICHHOLD INC - AZUSA PLANT',  1503001, 391235, 835402, 678901294],
          ['TESORO SULFUR RECOVERY PLANT', 1077482, 391235, 835402, 678901294],
          ['AIR PRODUCTS & CHEMICALS INC (90023PCFCN3305E)',  1034973, 391235, 835402, 678901294],
          ['ARKEMA COATING RESINS PLANT',  1014680, 391235, 835402, 678901294],
          ['ENGINEERED POLYMER SOLUTIONS INC', 999925, 391235, 835402, 678901294],
          ['ARNCO',  906000, 391235, 835402, 678901294],
          ['AIR LIQUIDE LARGE INDUSTRIES US LP - EL SEGUNDO', 778740, 391235, 835402, 678901294],
       
        ]);
      
        // Create and draw the visualization.
        var atox = new google.visualization.ComboChart(document.getElementById('TPounds'));
        atox.draw(toxp, {
          title : 'Chemicals Industry: 2012 Ten Facilities with Highest Toxicity of Total Releases in Los Angeles County',
          vAxis: {title: "Total On-Site Releases (Toxicity x lbs)"},
          hAxis: {title: "Facility Name (n=76)"},
          legend: {position: 'side'},
          seriesType: "line",
          series: {0: {type: "bars", color: 'yellow', visibleInLegend: true}, 1:{color: 'black'}, 2:{color: 'darkgray'}, 3:{color: 'darkorange'}}
          
         
          
        });
      }
      

      google.setOnLoadCallback(drawTPounds);
    </script>
	
	
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type="text/javascript">
      function drawPWMA() {
        // Create and populate the data table.
        var pwma = new google.visualization.DataTable();
        pwma.addColumn('string', 'Facility Name');
        pwma.addColumn('number', 'Percent of Preferred Waste Management Activities');
        pwma.addColumn('number', 'LA County Chemicals Industry Average');
        pwma.addColumn('number', 'CA Chemicals Industry Average');
        pwma.addRows([ 
          ['DECCO US PHSTHAR VEST INC',  100, 95.52, 95.29],
          ['LEVLAD',  100, 95.52, 95.29],
          ['HENKEL ELECTRONIC MATERIALS LLC',  99.99, 95.52, 95.29],
          ['BACHEM AMERICAS INC',  99.94, 95.52, 95.29],
          ['AMERICAN POLYMERS CORP DBA POLYCOAT PRODUCTS', 99.92, 95.52, 95.29],
          ['HUNTSMAN ADVANCED MATERIALS AMERICAS INC - LA SITE',  99.90, 95.52, 95.29],
          ['ARNCO',  99.78, 95.52, 95.29],
          ['PHIBRO-TECH INC', 99.57, 95.52, 95.29],
          ['PEPTISYNTHA INC',  99.50, 95.52, 95.29],
          ['GRIFOLS BIOLOGICALS INC', 99.47, 95.52, 95.29],
       
        ]);
      
        // Create and draw the visualization.
        var acp = new google.visualization.ComboChart(document.getElementById('PWMA'));
        acp.draw(pwma, {
          title : 'Chemicals Industry: 2012 Ten Facilties in Preferred Waste Management Activites (Recycling, Energy Recovery, Treatment)',
          vAxis: {title: "% = [Preferred Waste Management Activites (lbs)] / [Total Production Waste (lbs)]"},
          hAxis: {title: "Facility Name (n=76)"},
          legend: {position: 'side'},
          seriesType: "line",
          series: {0: {type: "bars", color: 'yellow', visibleInLegend: true}, 1:{color: 'black'}, 2:{color: 'darkgray'}}
          
         
          
        });
      }
      

      google.setOnLoadCallback(drawPWMA);
    </script>
	
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type="text/javascript">
      function drawCancerRisk() {
        // Create and populate the data table.
        var lcr = new google.visualization.DataTable();
        lcr.addColumn('string', 'Facility Name');
        lcr.addColumn('number', 'Lifetime Cancer Estimate per million');
        lcr.addColumn('number', 'LA County Chemicals Industry Average');
        lcr.addRows([ 
          ['AMVAC CHEMICAL CORP', 29.14, 2.99],
          ['POLYPEPTIDE GROUP',  10.94, 2.99],
          ['MARCHEM TECHNOLOGIES LLC',  8.62, 2.99],
          ['ARKEMA COATING RESINS PLANT', 3.74, 2.99],
          ['IPS CORP', 0.61, 2.99],
          ['NORAC INC',  0.57, 2.99],
          ['AIR LIQUIDE LARGE INDUSTRIES US LP - EL SEGUNDO',  0.14, 2.99],
          ['AIR PRODUCTS & CHEMICALS INC', 0.10, 2.99],
          ['POLYCHEMIE INC',  0.02, 2.99],
          ['PLASKOLITE WEST INC', 0.01, 2.99],
       
        ]);
      
        // Create and draw the visualization.
        var acl = new google.visualization.ComboChart(document.getElementById('CancerRisk'));
        acl.draw(lcr, {
          title : 'Chemicals Industry: 2012 Ten Facilities with Highest Regional Contribution to Lifetime Cancer Risk from Air Emission in Los Angeles County',
          vAxis: {title: "Air Emissions Lifetime Cancer Estimate (number of cancers in one million people)"},
          hAxis: {title: "Facility Name (n=76)"},
          legend: {position: 'side'},
          seriesType: "line",
          series: {0: {type: "bars", color: 'yellow', visibleInLegend: true}, 1:{color: 'black'}}
          
         
          
        });
      }
      

      google.setOnLoadCallback(drawCancerRisk);
    </script>
</head>
<body>
<div class="wrapper"> 
<?php include('header.php'); ?>
<div align="center"><h2>Total Toxic Releases <a href="TOTALTOXICRELEASES.php " target="_blank">[?]</a></h2></div>
<div id="ToxicReleases"></div><br>
<div align="center"><h2>Releases per $1000 Revenue <a href="rpkr.php" target="_blank">[?]</a></h2></div>
<div id="Revenue"></div><br>
<div align="center"><h2>Toxicity of Total Releases</h2></div>
<div id="TPounds"></div><br>
<div align="center"><h2>Percent of Preferred Waste Management Activities<a href="ppwma.php" target="_blank">[?]</a></h2></div>
<div id="PWMA"></div><br>
<div align="center"><h2>Regional Contribution to Lifetime Cancer Risk<a href="cancermethod.php" target="_blank">[?]</a></h2></div>
<div id="CancerRisk"></div>
<div id="footer"> <?php include('footer.php'); ?> </div>
</div>
</body></html>