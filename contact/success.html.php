<!DOCTYPE html>
<html lang="en">
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
    <?php include '../includes/header.inc.html.php'; ?>
    <main>
        <h1>Thank you!</h1>
        <p>Our records show you submitted the following:<br>
            Your Name: <?php echo htmlspecialchars($myName, ENT_QUOTES, 'UTF-8'); ?><br>
            Email: <?php echo htmlspecialchars($myEmail, ENT_QUOTES, 'UTF-8'); ?><br>
            Question: <?php echo htmlspecialchars($myQuestion, ENT_QUOTES, 'UTF-8'); ?><br>
        </p>
    </main>
    <?php include '../includes/footer.inc.html.php'; ?>
</div>
</body>
</html>