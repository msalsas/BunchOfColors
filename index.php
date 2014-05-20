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
        <title>BunchOfColors. Find all RGB colours</title>
        <meta name="description" content="BunchOfColors is a web application that lets you get and compare RGB colors.">
		<meta name="keywords" content="BunchOfColors, RGB, RGB colours, RGB colors, colors, colours">
        <meta name="viewport" content="width=device-width">
        <link href="/styles.css" type="text/css" rel="stylesheet" media="all"/>   
		<link rel="icon" type="image/x-icon" href="/img/favicon.png" />
	</head>
        <body itemscope itemtype="http://schema.org/WebApplication">
		<meta itemprop="name" content="BunchOfColors" />
		<meta itemprop="image" content="http://bunchofcolors.com/img/logo2.png" /> 	
		<meta itemprop="url" content="http://bunchofcolors.com" /> 	
		<meta itemprop="author" content="Manolo Salsas Durán" /> 		
		<meta itemprop="about" content="Online free application to get and compare RGB colors" />
		<meta itemprop="applicationCategory" content="Colors" />
        <meta itemprop="thumbnailUrl" content="http://bunchofcolors.com/img/logo2.png" /> 
        <!--[if lt IE 8]>
        <h2 class="chromeframe">You are using an <strong>obsolete</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">enable Google Chrome Frame</a> to enhance your experience.</h2>
        <![endif]-->
        
        <?php include_once("analyticstracking.php") ?>
        <div id="tw">
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://bunchofcolors.com" data-lang="en" data-text="BunchOfColors.com - A free online application to get and compare RGB colors."></a>
        </div>
		<!-- Place this tag where you want the +1 button to render. -->
		<div id="gplus"><div class="g-plusone" data-href="http://bunchofcolors.com"></div></div>
		<div id="about"><a href="/about.html">About</a></div>
		<!-- Place this tag after the last +1 button tag. -->
		<script type="text/javascript">
		window.___gcfg = {
		  lang: 'en-EN',
		  parsetags: 'onload'
		};
		(function() {
		    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		    po.src = 'https://apis.google.com/js/plusone.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		  })();
		</script>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		
        <div id="agrupar">
			<div id="cabecera"><header>
				<img id="fondo_cabecera" src="/img/rainbow-line-background2.jpg" alt="fondo" />
				<div id="logo"><a href="http://bunchofcolors.com"><img id="img_cabecera" src="/img/logo2.png" alt="logo" width="400" /></a></div>	
			</header></div>			
	
			<div class="articulo"><article>
				<div class="seccion gradient"><section>
					<header>
						<h1>Welcome to BunchOfColors</h1>
						<h2>Choose a color</h2>
					</header>
					<?php
					$newColor = 0;
					$accuracy = 0;
					$accuracy = isset( $_GET['accuracy'] ) ? abs( intval( $_GET['accuracy'] ) ) : 8;
					$newColor = isset( $_GET['newColor'] ) ? abs( intval( $_GET['newColor'], 0 ) ) : 0xFF8822; 
				
					if( $accuracy < 1 ) $accuracy = 1;
					if( $accuracy > 25 ) $accuracy = 25;
					
					echo '<div id="commonColors">'; 
					echo '<div class="commonColor" style="background: #5C4B51"><a href="' . htmlentities( $_SERVER['PHP_SELF'].'?newColor=0x5C4B51&accuracy=' . $accuracy . '#myColor' ) . '"> #5C4B51 </a></div>';
					echo '<div class="commonColor" style="background: #8CBEB2"><a href="' . htmlentities( $_SERVER['PHP_SELF'].'?newColor=0x8CBEB2&accuracy=' . $accuracy . '#myColor' ) . '"> #8CBEB2 </a></div>';
					echo '<div class="commonColor" style="background: #F2EBBF"><a href="' . htmlentities( $_SERVER['PHP_SELF'].'?newColor=0xF2EBBF&accuracy=' . $accuracy . '#myColor' ) . '"> #F2EBBF </a></div>';
					echo '<div class="commonColor" style="background: #F3B562"><a href="' . htmlentities( $_SERVER['PHP_SELF'].'?newColor=0xF3B562&accuracy=' . $accuracy . '#myColor' ) . '"> #F3B562 </a></div>';
					echo '<div class="commonColor" style="background: #F06060"><a href="' . htmlentities( $_SERVER['PHP_SELF'].'?newColor=0xF06060&accuracy=' . $accuracy . '#myColor' ) . '"> #F06060 </a></div>';
					echo '<div class="commonColor" style="background: #108F97"><a href="' . htmlentities( $_SERVER['PHP_SELF'].'?newColor=0x108F97&accuracy=' . $accuracy . '#myColor' ) . '"> #108F97 </a></div>';
					echo '<div class="commonColor" style="background: #FF8B6B"><a href="' . htmlentities( $_SERVER['PHP_SELF'].'?newColor=0xFF8B6B&accuracy=' . $accuracy . '#myColor' ) . '"> #FF8B6B </a></div>';
					echo '<div class="commonColor" style="background: #FFE39F"><a href="' . htmlentities( $_SERVER['PHP_SELF'].'?newColor=0xFFE39F&accuracy=' . $accuracy . '#myColor' ) . '"> #FFE39F </a></div>';
					echo '<div class="commonColor" style="background: #16866D"><a href="' . htmlentities( $_SERVER['PHP_SELF'].'?newColor=0x16866D&accuracy=' . $accuracy . '#myColor' ) . '"> #16866D </a></div>';
					echo '<div class="commonColor" style="background: #103636"><a href="' . htmlentities( $_SERVER['PHP_SELF'].'?newColor=0x103636&accuracy=' . $accuracy . '#myColor' ) . '"> #103636 </a></div>';
					echo '</div></section></div>';
					
					if( $newColor >= 0 && $newColor <= 0xFFFFFF )
					{
						$myColor = (string) dechex($newColor);
					    $myBackgroundValue = strtoupper('#' . str_repeat('0', 6 - strlen($myColor)) . $myColor);
						echo '<div id="myColor" style="background-color:' . $myBackgroundValue . '">' . $myBackgroundValue . '</div>';
						$iniColor = $newColor;
					}
					elseif( $newColor < 0 ) 
					{
						echo '<div id="myColor" style="background-color: #000000"> #000000 </div>';
						$iniColor = 0x000000;
					} else {
						echo '<div id="myColor" style="background-color: #FFFFFF"> #FFFFFF </div>';
						$iniColor = 0xFFFFFF;
					}
					
					echo '<div id="buttons">';
					//Accuracy
					echo '<div id="accuracy">';
					echo '<div class="accurate"><a href="' . htmlentities( $_SERVER['PHP_SELF'].'?newColor=' . $newColor . '&accuracy=' . ($accuracy-1) . '#myColor' ) . '">';
					if( $accuracy === 1 ) echo '<img src="/img/small/botonmasmax.png" alt="more accurate" width="60"  /> </a></div>';
					else echo '<img src="/img/small/botonmas.png" alt="more accurate" width="60"  /> </a></div>';
					
					echo '<div class="accurate"><a href="' . htmlentities( $_SERVER['PHP_SELF'].'?newColor=' . $newColor . '&accuracy=' . ($accuracy+1) . '#myColor' ) . '">';
					if( $accuracy === 25 ) echo '<img src="/img/small/botonmenosmax.png" alt="more accurate" width="60"  /> </a></div>';
					else echo '<img src="/img/small/botonmenos.png" alt="more accurate" width="60"  /> </a></div>';
					echo '</div>';
					
					//Luminance
					echo '<div id="luminance">';
					//$mean = $newColor ? intval( ( ( 0.2126 * ( ( $newColor >> 16 ) & 0xFF ) ) + ( 0.7152 * ( ( $newColor >> 8 ) & 0xFF ) ) + ( 0.0722 / ( $newColor & 0xFF ) ) ) / 3 ) : 0;
					if( ( ( $newColor >> 16 ) & 0xFF ) <= 0xFA && ( ( $newColor >> 8 ) & 0xFF ) <= 0xFA  && ( $newColor & 0xFF ) <= 0xFA  ) 
					{	
						$newColorMoreLuminance = str_repeat('0', 2 - strlen( dechex( intval( 5 + ( ( $newColor >> 16 ) & 0xFF ) ) ) ) ) . dechex( intval( 5 + ( ( $newColor >> 16 ) & 0xFF ) ) ) . str_repeat('0', 2 - strlen( dechex( intval( 5 + ( ( $newColor >> 8 ) & 0xFF ) ) ) ) ) . dechex( intval( 5 + ( ( $newColor >> 8 ) & 0xFF ) ) ) . str_repeat('0', 2 - strlen( dechex( intval( 5 + ( $newColor & 0xFF ) ) ) ) ) . dechex( intval( 5 + ( $newColor & 0xFF ) ) );				
						echo '<div class="luminance"><a href="' . htmlentities( $_SERVER['PHP_SELF'].'?newColor=0x' . $newColorMoreLuminance . '&accuracy=' . $accuracy . '#myColor' ) . '"><img src="/img/small/bottonmoreluminance.png" alt="more luminance" width="60"  /> </a></div>';
					} else
					{ 																							
						echo '<div class="luminance"><a href="' . htmlentities( $_SERVER['PHP_SELF'].'?newColor=' . $newColor . '&accuracy=' . $accuracy . '#myColor' ) . '"><img src="/img/small/bottonmaxluminance.png" alt="max luminance" width="60"  /> </a></div>';
					}

					if( ( ( $newColor >> 16 ) & 0xFF ) >= 5 && ( ( $newColor >> 8 ) & 0xFF ) >= 5  && ( $newColor & 0xFF ) >= 5  ) 
					{
						$newColorLessLuminance = str_repeat('0', 2 - strlen( dechex( intval( - 5 + ( ( $newColor >> 16 ) & 0xFF ) ) ) ) ) . dechex( intval( - 5 + ( ( $newColor >> 16 ) & 0xFF ) ) ) . str_repeat('0', 2 - strlen( dechex( intval( - 5 + ( ( $newColor >> 8 ) & 0xFF ) ) ) ) ) . dechex( intval( - 5 + ( ( $newColor >> 8 ) & 0xFF ) ) ) . str_repeat('0', 2 - strlen( dechex( intval( - 5 + ( $newColor & 0xFF ) ) ) ) ) . dechex( intval( - 5 + ( $newColor & 0xFF ) ) );				
						echo '<div class="luminance"><a href="' . htmlentities( $_SERVER['PHP_SELF'].'?newColor=0x' . $newColorLessLuminance . '&accuracy=' . $accuracy . '#myColor' ) . '"><img src="/img/small/bottonlessluminance.png" alt="less luminance" width="60"  /> </a></div>';
					
					} else
					{
						echo '<div class="luminance"><a href="' . htmlentities( $_SERVER['PHP_SELF'].'?newColor=' . $newColor . '&accuracy=' . $accuracy . '#myColor' ) . '"><img src="/img/small/bottonminluminance.png" alt="min luminance" width="60"  /> </a></div>';
					}
					echo '</div></div>';

					echo '<div id="allColors">';
					
					include_once('functions.php');
					echoColors( $accuracy, $iniColor );
					
					?>
					</div>
			
			</article></div>
			
			<div id="footer"><footer>
				<div id="links_footer"><span class="licencia">© 2013 Manolo Salsas   </span><a class="licencia" href="http://www.gnu.org/licenses/agpl-3.0-standalone.html" target="_blank">GNU Affero General Public License</a>
				<span>   |   </span><a id="firma" href="http://msalsas.com" target="_blank">msalsas.com</a></div>
			</footer></div>
	
		</div>
    </body>
</html>
