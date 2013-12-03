<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<html lang="en">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <![endif]-->
        <title>RGBBunch. Find all RGB colours</title>
        <meta name="description" content="RGBBunch is a web site where you will find any RGB colour.">
		<meta name="keywords" content="RGBBunch, RGB, RGB colours, RGB colors, colors, colours">
        <meta name="viewport" content="width=device-width">
        <!--<meta name="google-translate-customization" content="2186d69e4bdb4e34-0d701518e501929b-g7097894e7162e305-f">-->
        <link href="/styles.css" type="text/css" rel="stylesheet" media="all"/>   
		<link rel="icon" type="image/x-icon" href="/favicon.png" />
        <!--<link href="https://plus.google.com/105898534671325004845" rel="publisher" />	-->
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	</head>
    <body>
        <!--[if lt IE 8]>
        <h2 class="chromeframe">Estás usando un navegador <strong>obsoleto</strong>. Por favor <a href="http://browsehappy.com/">actualiza tu navegador</a> o <a href="http://www.google.com/chromeframe/?redirect=true">activa Google Chrome Frame</a> para mejorar tu experiencia.</h2>
        <![endif]-->
        
        <!-- Add your site or application content here -->
         

        <div id="agrupar">
		<div id="cabecera"><header>
		<img id="img_cabecera" src="/public/img/logo.png" alt="logo">
		</header></div>
		<div id="menu"><nav>
		<ul>
		<li><a href="/">Home</a></li>
		<li><a href="/acercade">About</a></li>
		</ul>
		</nav></div>

		<div class="articulo"><article>
				<div class="seccion gradient"><section>
			<header>
				<h1>Here it is your colour</h1>
				<h2>And a bunch of similar ones</h2>
			</header>

			
			<?php
			if(isset($_GET['newColor']) && is_int($_GET['newColor']) && $_GET['newColor'] > 0 && $_GET['newColor'] < 0xFFFFFF)
			{
				$myColor = (string) dechex($_GET['newColor']);
			    $myBackgroundValue = '#' . str_repeat('0', 6 - strlen($myColor)) . $myColor;
				echo '<div id="myColor" style="background-color:' . $myBackgroundValue . '>' . $myBackgroundValue . '</div>';
			}
			
			?>
			
			<div id="allcolours">
			<?php
			
			$end = 0xffffff;
			$interval = 0x50;
			for ($i = 0; $i <= $end; $i += $interval) {
				//if( $i == 0xff0000 ) $interval *= 8;
				//elseif( $i == 0x00ff00 ) $interval *= 4;
			    $interval++;
			    $color = (string) dechex($i);
			    $backgroundValue = '#' . str_repeat('0', 6 - strlen($color)) . $color;
			    echo '<div class="colour" style="width: 6%; float: left; background: '.$backgroundValue.';"><a href="' . htmlentities( '/newcolor.php?newcolor=' . $i ) . '">'. $backgroundValue .'</a></div>';
			}
			
			?>
			</div>

			
    <br>
		</div>	
		</section></div>
		</article>
      <!--  <div id="columna"><aside>
		
<br>

		
		</aside></div>
		
	
		<!--</footer></div>-->
		<div id="pie"><footer>
				<a id="firma" href="http://msalsas.com" target="_blank">msalsas.com</a>
				</footer></div>
		

		
</div>
    </body>
</html>
