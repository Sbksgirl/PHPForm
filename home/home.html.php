<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,500&display=swap" rel="stylesheet">
	<link rel="stylesheet/less" type="text/css" href="../style/template.less"/>
	<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
	<!--<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>-->
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
		
		<header>

        <div class="wrapper">
		<?php include "includes/header.inc.html.php"; ?>
	</div>
	
			</header>
		
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

})</script>

        <main>
			<?php echo htmlspecialchars($content['header'], ENT_QUOTES, 'UTF-8'); ?>
        <?php echo $content['description']; ?>
			<div id = "row">
				<div id = "column">
            <div id="h1">
                <h1>Header 1</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis volutpat orci in dui mattis pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean urna tellus, vehicula pharetra tellus vitae, egestas dignissim purus. Donec a aliquet risus. Etiam efficitur sit amet justo ac tincidunt. Aliquam rhoncus egestas ligula at rhoncus. Mauris varius risus at sapien eleifend commodo.

                    Donec vitae tortor aliquam, cursus odio non, accumsan massa. Aliquam eget lorem in arcu porta sagittis. Proin et aliquam sem. Nulla vehicula diam non nulla suscipit, in efficitur justo posuere. Ut finibus vel ante nec rhoncus. Aenean ligula neque, ornare sed odio et, hendrerit fringilla est. Proin facilisis nisl odio, sit amet commodo metus commodo et. Vivamus eget urna ex. Suspendisse laoreet nulla sed ligula gravida, nec porttitor velit volutpat.</p>
            </div>
				</div>

				<div id ="column">
            <div id="h2">
                <h1>Header 2</h1>
                <p>Vivamus vel consequat ligula. Aenean malesuada eget enim id ultricies. Pellentesque tincidunt turpis et dapibus tincidunt. Duis sit amet felis vitae magna scelerisque malesuada. Mauris molestie tempor augue ac porta. Fusce nibh nibh, pulvinar in metus et, faucibus pharetra urna. Duis eget metus condimentum, porta felis in, feugiat turpis. Quisque tempus elementum massa, sit amet ultrices est luctus quis.

                    In hac habitasse platea dictumst. In egestas ante vel purus pulvinar ornare. Nulla vel eros cursus, venenatis dui vitae, malesuada orci. Donec auctor justo vitae eros accumsan dapibus. Maecenas imperdiet nibh diam, quis volutpat ante laoreet a. Aliquam erat volutpat. In porta nulla sit amet felis volutpat, a suscipit felis scelerisque. Mauris ornare tristique lacus. Donec gravida lorem in arcu efficitur, vel dignissim turpis dapibus.</p>
            </div>
				</div>

            <div id = "column">
				<div id="h3">
                <h1>Header 3</h1>
                <p>Suspendisse potenti. Nullam blandit velit vitae quam suscipit ullamcorper. Cras rutrum a massa sodales placerat. Mauris a velit ornare, faucibus leo in, scelerisque orci. Cras vitae ligula finibus, eleifend velit eget, venenatis ligula. Ut massa dolor, ultrices at maximus sit amet, facilisis eget odio. Morbi congue ornare nulla, at tristique mi convallis quis. Proin magna nisi, fermentum vel sem sit amet, vulputate cursus quam. Nam libero ipsum, bibendum ac tellus quis, commodo fermentum orci. Cras nec posuere dolor. Nunc ac dolor metus. Duis non ligula nunc. In ultricies volutpat mauris, eu fermentum mi tristique nec. Nam vel rhoncus tortor.</p>
            </div>
				</div>
				
				<div id = "column2">
				<div id="h4">
                <h2>Header 4</h2>
                <p>Suspendisse potenti. Nullam blandit velit vitae quam suscipit ullamcorper. Cras rutrum a massa sodales placerat. Mauris a velit ornare, faucibus leo in, scelerisque orci. Cras vitae ligula finibus, eleifend velit eget, venenatis ligula. Ut massa dolor, ultrices at maximus sit amet, facilisis eget odio. Morbi congue. Suspendisse potenti. Nullam blandit velit vitae quam suscipit ullamcorper. Cras rutrum a massa sodales placerat. Mauris a velit ornare, faucibus leo in, scelerisque orci. Cras vitae ligula finibus, eleifend velit eget, venenatis ligula. Ut massa dolor, ultrices at maximus sit amet, facilisis eget odio. Morbi congue ornare nulla,s</p>	
            </div>
					<div id = "column2">
					<div id="image2"><img src="pictures/ace18.jpg"></div></div>
					
				</div>
		
				<div id="h5">
                <h2>Header 5</h2>
                <p>Suspendisse potenti. Nullam blandit velit vitae quam suscipit ullamcorper. Cras rutrum a massa sodales placerat. Mauris a velit ornare, faucibus leo in, scelerisque orci. Cras vitae ligula finibus, eleifend velit eget, venenatis ligula. Ut massa dolor, ultrices at maximus sit amet, facilisis eget odio. Morbi congue ornare nulla, at tristique mi convallis quis. Proin magna nisi, fermentum vel sem sit amet, vulputate cursus quam. Nam libero ipsum, bibendum ac tellus quis, commodo fermentum orci. Cras nec posuere dolor. Nunc ac dolor metus. Duis non ligula nunc. In ultricies volutpat mauris, eu fermentum mi tristique nec. Nam vel rhoncus tortor.</p>
            </div>
				</div>

        </main>
		
		<?php include "includes/footer.inc.html.php"; ?>

    </div>
</body>

</html>
