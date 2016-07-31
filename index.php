<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Smart Travel - Effective Travel Tool</title>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!--
<script src="script/moment.js"></script>

<script src="script/bootstrap-datetimepicker.min.js"></script>
-->

<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>

<script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/a549aa8780dbda16f6cff545aeabc3d71073911e/src/js/bootstrap-datetimepicker.js"></script>

<script src="script/script.js"></script>

<script src="script/fakeLoader.min.js"></script>

<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="css/loading.css">

<!-- Add fancyBox -->
<link rel="stylesheet" href="jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

<script type="text/javascript" src="jquery.fancybox.pack.js?v=2.1.5"></script>

<link href='http://fonts.googleapis.com/css?family=Coming+Soon' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,300italic,300' rel='stylesheet' type='text/css'>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60967803-1', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body>
<div id="fakeLoader"></div>
<div id="bodyFrame" class="col-lg-12">
	<div id="header" class="col-lg-12">
		<div id="logo" class="col-lg-6">
			<a href="http://smarttravel.hippocreative.com.au/">
				<img src="images/logo_2.png" alt="Smart Travel" />
			</a>
		</div>
		<div id="poweredLogo" class="col-lg-6">

		</div>
	</div>
	<div id="mainFrame" class="col-lg-12 col-md-12">
		<div id="searchArea">
			<p>
				<input type="text" class="form-control" placeholder="Depature Address"
			</p>
			<p>
				<input type="text" class="form-control" placeholder="Arrival Address">
			</p>
			<p id="datetimepicker1" class="input-group date">
		    	<input type="text" placeholder="Depart/Arrive Time ..." class="form-control">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </p>
			<p>
				<label class="checkbox-inline">
				  <input type="checkbox" id="inlineCheckbox1" value="option1"> bus
				</label>
				<label class="checkbox-inline">
				  <input type="checkbox" id="inlineCheckbox2" value="option2"> car
				</label>
				<label class="checkbox-inline">
				  <input type="checkbox" id="inlineCheckbox3" value="option3"> motorcycles
				</label>
				<label class="checkbox-inline">
				  <input type="checkbox" id="inlineCheckbox4" value="option3"> bicycles
				</label>
				<label class="checkbox-inline">
				  <input type="checkbox" id="inlineCheckbox5" value="option3"> skateboard
				</label>
				<label class="checkbox-inline">
				  <input type="checkbox" id="inlineCheckbox6" value="option3"> walking
				</label>
				<label class="checkbox-inline">
				  <input type="checkbox" id="inlineCheckbox7" value="option3"> disabled access friendly
				</label>
				<a class="btn btn-default floatRight" onclick="planJourney()" href="javascript:void(0)">Plan Journey</a>
			</p>

		</div>
		<div id="mapArea">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d418338.88332647615!2d138.33100948867212!3d-34.99988251387408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ab735c7c526b33f%3A0x4033654628ec640!2sAdelaide+SA!5e0!3m2!1sen!2sau!4v1469926453491" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div id="resultArea" class="hiden">
			<div data-example-id="" class="bs-example">
				<h4>Depature: 5 Peel Street, Adelaide, South Australia <span style="margin-left: 30px;">Arrival: 49 Edward Street, Norwood SA 5067</span></h4>
				<p>Depature time: 1:35 pm / 3rd August 2016</p>
				<p></p><hr><p></p>
				<p>We noticed the address you searched is realted to the bussiness <strong>Centrelink</strong></p>
				<p>business hour: Monday to Friday 9:00 am to 5:00 pm</p>
				<p>phone: 1800 057 111 / email: info@humanservices.gov.au</p>
				<p>peak time: 10:30 am - 3:25 pm, consider plan youe visit in off-peak time to save your waiting time</p>
				<p>please check <a href="https://www.humanservices.gov.au/customer/dhs/centrelink" target="_blank">Centrelink website</a> before you come in, you may find the information or the form you need online.</p>
			</div>
			<div id="resultMap" class="hiden">
				<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d13085.389236200193!2d138.607430894233!3d-34.92282564233857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e3!4m5!1s0x6ab0cf28327c4fdb%3A0x975243d49ba0b1e5!2s5+Peel+St%2C+Adelaide+SA+5000!3m2!1d-34.923707!2d138.5981306!4m5!1s0x6ab0c95985cb5c7b%3A0x487e4bbf54bcf492!2s49+Edward+Street%2C+Norwood+SA+5067!3m2!1d-34.9205776!2d138.63409869999998!5e0!3m2!1sen!2sau!4v1469933982207" width="800" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<!--
			<div data-example-id="" class="bs-example">
				<h4>bus</h4>
				<p>Depature time: 1:35 pm / Arrival time: 2:05 pm / travel time: 30 mins</p>
			</div>
			-->
			<table class="table table-hover" width="100%">
				<thead>
					<tr>
						<th>#</th>
						<th>transportation</th>
						<th>travel time</th>
						<th>cost</th>
						<th>Calorie consumed</th>
						<th>carbon dioxide emissions</th>
						<th>disabled access friendly</th>
						<th>info</th>
					</tr>
				</thead>
				<tbody>
					<tr class="info">
						<td>1</td>
						<td>bus</td>
						<td>35 mins</td>
						<td>$5.2</td>
						<td>50 calories</td>
						<td>0.21 litre</td>
						<td>yes</td>
						<td><a class="various" href="#inline_bus"><img src="images/alert5.png"></a></td>
					</tr>
					<tr class="warning">
						<td>2</td>
						<td>car</td>
						<td>18 mins</td>
						<td>$8.9 (include parking)</td>
						<td>25 calories</td>
						<td>0.56 litre</td>
						<td>yes</td>
						<td><a class="various" href="#inline_bus"><img src="images/alert5.png"></a></td>
					</tr>
					<tr class="warning">
						<td>3</td>
						<td>motorcycles</td>
						<td>23 mins</td>
						<td>$4.9 (include parking)</td>
						<td>68 calories</td>
						<td>0.46 litre</td>
						<td>no</td>
						<td><a class="various" href="#inline_bus"><img src="images/alert5.png"></a></td>
					</tr>
					<tr class="success">
						<td>4</td>
						<td>bicycles</td>
						<td>32 mins</td>
						<td>$0</td>
						<td>125 calories</td>
						<td>0.00 litre</td>
						<td>no</td>
						<td><a class="various" href="#inline_bike"><img src="images/alert5.png"></a></td>
					</tr>
					<tr class="success">
						<td>5</td>
						<td>walking</td>
						<td>58 mins</td>
						<td>$0.00</td>
						<td>225 calories</td>
						<td>0.00 litre</td>
						<td>no</td>
						<td><a class="various" href="#inline_walk"><img src="images/alert5.png"></a></td>
					</tr>
				</tbody>
			</table>		
		</div>	
	</div>
	<div id="footer" class="col-lg-12">
		<p>
			© 2016 <a href="http://smarttravel.hippocreative.com.au/index.php" target="_blank" title="Smart Travel">Smart Travel</a> | Powered by <a href="http://hippocreative.com.au/" target="_blank" title="Hippo Creative">Hippo Creative</a>
		</p>
	</div>
</div>
<div id="inline_bus" style="display:none;">
	<div data-example-id="" class="bs-example col-md-6">
		<h4>route info</h4>
		<p></p><hr><p></p>
		<p>
			<span><img alt="point" title="point" src="images/point.png"></span>
			&nbsp;Walk north on King William Rd towards Albert St&nbsp;-&nbsp;<small><em>53 m</em></small>
		</p>
		<p></p><hr><p></p>
		<p>
			<span><img alt="point" title="point" src="images/point.png"></span>
			&nbsp;Turn left onto Albert St&nbsp;-&nbsp;<small><em>850 m</em></small>
		</p>
		<p></p><hr><p></p>
		<p>
			<span><img alt="point" title="point" src="images/point.png"></span>
			&nbsp;Slight left to stay on Albert St&nbsp;-&nbsp;<small><em>16 m</em></small>
		</p>
		<p></p><hr><p></p>
		<p>
			<span><img alt="point" title="point" src="images/point.png"></span>
			&nbsp;Continue straight onto Railway Terrace S&nbsp;-&nbsp;<small><em>40 m</em></small>
		</p>
		<p></p><hr><p></p>
		<p>
			<span><img alt="point" title="point" src="images/point.png"></span>
			&nbsp;Turn left onto Goodwood Rd&nbsp;-&nbsp;<small><em>40 m</em></small>
		</p>
		<p></p><hr><p></p>
	</div>
	<div data-example-id="" class="bs-example col-md-6">
		<h4>tips for bus</h4>
		<p></p><hr><p></p>
		<p>
			<span><img width="20px" height="20px" alt="lightbulb" title="lightbulb" src="images/lightbulb16.png"></span>
			total walking time 10 mins
		</p>
		<p></p><hr><p></p>
		<p>
			<span><img width="20px" height="20px" alt="lightbulb" title="lightbulb" src="images/lightbulb16.png"></span>
			bus depature in every 10 mins
		</p>
		<p></p><hr><p></p>
		<p>
			<span><img width="20px" height="20px" alt="lightbulb" title="lightbulb" src="images/lightbulb16.png"></span>
			bring your student card or Concession card to save
		</p>
		<p></p><hr><p></p>
		<p>
			<span><img width="20px" height="20px" alt="lightbulb" title="lightbulb" src="images/lightbulb16.png"></span>
			travel in interpeak time to save cost
		</p>
		<p></p><hr><p></p>
		<p>
			<span><img width="20px" height="20px" alt="lightbulb" title="lightbulb" src="images/lightbulb16.png"></span>
			please consider to bring an umbrella
		</p>
		<p></p><hr><p></p>  
	</div>
</div>
<div id="inline_bike" style="display:none;">
	<div data-example-id="" class="bs-example col-md-6">
		<h4>route info</h4>
		<p></p><hr><p></p>
		<p>
			<span><img alt="point" title="point" src="images/point.png"></span>
			&nbsp;Walk north on King William Rd towards Albert St&nbsp;-&nbsp;<small><em>53 m</em></small>
		</p>
		<p></p><hr><p></p>
		<p>
			<span><img alt="point" title="point" src="images/point.png"></span>
			&nbsp;Turn left onto Albert St&nbsp;-&nbsp;<small><em>850 m</em></small>
		</p>
		<p></p><hr><p></p>
		<p>
			<span><img alt="point" title="point" src="images/point.png"></span>
			&nbsp;Slight left to stay on Albert St&nbsp;-&nbsp;<small><em>16 m</em></small>
		</p>
		<p></p><hr><p></p>
		<p>
			<span><img alt="point" title="point" src="images/point.png"></span>
			&nbsp;Continue straight onto Railway Terrace S&nbsp;-&nbsp;<small><em>40 m</em></small>
		</p>
		<p></p><hr><p></p>
		<p>
			<span><img alt="point" title="point" src="images/point.png"></span>
			&nbsp;Turn left onto Goodwood Rd&nbsp;-&nbsp;<small><em>40 m</em></small>
		</p>
		<p></p><hr><p></p>
	</div>
	<div data-example-id="" class="bs-example col-md-6">
		<h4>tips for bike</h4>
		<p></p><hr><p></p>
		<p>
			<span><img width="20px" height="20px" alt="lightbulb" title="lightbulb" src="images/lightbulb16.png"></span>
			55% route has bike paths
		</p>
		<p></p><hr><p></p>
		<p>
			<span><img width="20px" height="20px" alt="lightbulb" title="lightbulb" src="images/lightbulb16.png"></span>
			85% road crossing has traffic signals
		</p>
		<p></p><hr><p></p>
		<p>
			<span><img width="20px" height="20px" alt="lightbulb" title="lightbulb" src="images/lightbulb16.png"></span>
			58% route in the residential area (40km Zone)
		</p>
		<p></p><hr><p></p>
		<p>
			<span><img width="20px" height="20px" alt="lightbulb" title="lightbulb" src="images/lightbulb16.png"></span>
			The closest bike rack is only 50 meters away
		</p>
		<p></p><hr><p></p>
		<p>
			<span><img width="20px" height="20px" alt="lightbulb" title="lightbulb" src="images/lightbulb16.png"></span>
			please consider the weather situation (shower today)
		</p>
		<p></p><hr><p></p>  
	</div>
</div>
<div id="inline_walk" style="display:none;">
	<div data-example-id="" class="bs-example col-md-6">
		<h4>route info</h4>
		<p></p><hr><p></p>
		<p>
			<span><img alt="point" title="point" src="images/point.png"></span>
			&nbsp;Walk north on King William Rd towards Albert St&nbsp;-&nbsp;<small><em>53 m</em></small>
		</p>
		<p></p><hr><p></p>
		<p>
			<span><img alt="point" title="point" src="images/point.png"></span>
			&nbsp;Turn left onto Albert St&nbsp;-&nbsp;<small><em>850 m</em></small>
		</p>
		<p></p><hr><p></p>
		<p>
			<span><img alt="point" title="point" src="images/point.png"></span>
			&nbsp;Slight left to stay on Albert St&nbsp;-&nbsp;<small><em>16 m</em></small>
		</p>
		<p></p><hr><p></p>
		<p>
			<span><img alt="point" title="point" src="images/point.png"></span>
			&nbsp;Continue straight onto Railway Terrace S&nbsp;-&nbsp;<small><em>40 m</em></small>
		</p>
		<p></p><hr><p></p>
		<p>
			<span><img alt="point" title="point" src="images/point.png"></span>
			&nbsp;Turn left onto Goodwood Rd&nbsp;-&nbsp;<small><em>40 m</em></small>
		</p>
		<p></p><hr><p></p>
	</div>
	<div data-example-id="" class="bs-example col-md-6">
		<h4>tips for walk</h4>
		<p></p><hr><p></p>
		<p>
			<span><img width="20px" height="20px" alt="lightbulb" title="lightbulb" src="images/lightbulb16.png"></span>
			85% route has footh paths
		</p>
		<p></p><hr><p></p>
		<p>
			<span><img width="20px" height="20px" alt="lightbulb" title="lightbulb" src="images/lightbulb16.png"></span>
			85% road crossing has traffic signals
		</p>
		<p></p><hr><p></p>
		<p>
			<span><img width="20px" height="20px" alt="lightbulb" title="lightbulb" src="images/lightbulb16.png"></span>
			58% route in the residential area (40km Zone)
		</p>
		<p></p><hr><p></p>
		<p>
			<span><img width="20px" height="20px" alt="lightbulb" title="lightbulb" src="images/lightbulb16.png"></span>
			you could burne 221 calories
		</p>
		<p></p><hr><p></p>
		<p>
			<span><img width="20px" height="20px" alt="lightbulb" title="lightbulb" src="images/lightbulb16.png"></span>
			please consider the weather situation (shower today)
		</p>
		<p></p><hr><p></p>  
	</div>
</div>
</body>
</html>
