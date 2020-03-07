<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,500&display=swap" rel="stylesheet">
	<link rel="stylesheet/less" type="text/css" href="style/template.less" />
	<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script>
		/*----------------------------
       Photo Slideshow
------------------------------*/
		var i = 0;
		var images = [];
		var time = 3000;

		//image list
		images[0] = "pictures/ace1.jpg";
		images[1] = "pictures/ace2.jpg";
		images[2] = "pictures/ace3.jpg";
		images[3] = "pictures/ace4.jpg";
		images[4] = "pictures/ace5.jpg";
		images[5] = "pictures/ace6.jpg";
		images[6] = "pictures/ace7.jpg";
		images[7] = "pictures/ace8.jpg";
		images[8] = "pictures/ace9.jpg";
		images[9] = "pictures/ace10.jpg";
		images[10] = "pictures/ace11.jpg";

		// Change Image

		function changeImg() {
			document.slide.src = images[i];

			if (i < images.length - 1) {
				i++;
			} else {
				i = 0;
			}

			setTimeout("changeImg()", time);
		}

		window.onload = changeImg;

	</script>

	<title>Template </title>
</head>

<body>

	<div id="centerwrap">
        
        
		<?php include "../includes/header.inc.html.php"; ?>
				
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-36251023-1']);
			_gaq.push(['_setDomainName', 'jqueryscript.net']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();

		</script>
		<script>
			$('.menu-toggle').click(function() {

				$('ul').toggleClass('opening');
				$(this).toggleClass('open');

			})

		</script>

<body>
	<div id="wrapper">
		<main>
			<h1>Register your course</h1>
			<form method="post" action="index.php" id="inquiryForm">
				<!--<input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent" />-->
				<label for="event">Event Date: </label>
				<select id="event" name="eventlist" form="eventform">
					<option value = "saturday">Saturday Event</option>
					<option value = "sunday">Sunday Event</option>
				</select>
				<label for="event">Athlete or Voluteer: </label>
				<select id="athleteVoluteer" name="athleteVoluteer" form="athletevoluteerform">
					<option value = "athlete">Athlete</option>
					<option value = "sunday">Volunteer</option>
				</select>
				<label for="name">Full Name:</label>
				<input type="text" name="name" id="name">
				<label for="age">Age:</label>
				<input type="text" name="age" id="age">
				<label for="myEmail">E-mail:</label>
				<input type="text" name="email" id="email">
				<label for="gender">Gender:</label>
				<select id="gender" name="gender" form="gender">
					<option value="male">Male</option>
					<option value="female">Female</option>
					<option value="other">Other</option>
				</select>
				<label for="contName">Emergency Contact Name: </label>
				<input type="text" name="contName" id="contName">
				<label for="contNumber">Emergency Contact Number: </label>
				<input type="int" name="contNumber" id="contNumber">
				<label for="age">Emergency Contact Age:</label>
				<input type="int" name="contAge" id="contAge">
				<label for="accomodations">Let Us Know If There Are Any Accomodations needed</label>
				<textarea form="inquiryForm" rows="10" cols="50" name="accomodations" id="accomodations"></textarea>
				<input id="mySubmit" type="submit" value="Submit">
			</form>


		</main>
		<?php include "../includes/footer.inc.html.php"; ?>
	</div>
</body>

</html>
