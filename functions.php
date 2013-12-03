<?php

function echoColors( $accuracy=8, $iniColor=0 )
{
	$accuracy = intval( $accuracy ) ? intval( $accuracy ) : 8;
	$iniColor = intval( $iniColor );
	
	$mask = array(
				'rMask' => 0xFF0000,
				'gMask' => 0xFF00,
				'bMask' => 0xFF
				);
	$rColor = ( $mask['rMask'] & $iniColor ) >> 16; 
	$gColor = ($iniColor & $mask['gMask']) >> 8;
	$bColor = $iniColor & $mask['bMask'];

	for( $r = 0; $r < 10 ; $r += 1 )
	{
		$newRColor = $rColor - $r * $accuracy + 5;
		
		if( $newRColor < 0 ) $newRColor = $rColor + $r * $accuracy;
		if( $newRColor > 0xFF ) $newRColor = $rColor - $r * $accuracy;
		if( $newRColor < 0 ) $newRColor = 0;
		for( $g = 0; $g < 10 ; $g += 1 )
		{
			$newGColor = $gColor - $g * $accuracy + 5;

			if( $newGColor < 0 ) $newGColor = $gColor + $g * $accuracy;
			if( $newGColor>0xFF ) $newGColor = $gColor - $g * $accuracy;
			if( $newGColor < 0 ) $newGColor = 0;
			for( $b = 0; $b < 10 ; $b += 1 )
			{		
				$newBColor = $bColor - $b * $accuracy + 5 ;
				
				if( $newBColor < 0 ) $newBColor = $bColor + $b * $accuracy;
				if( $newBColor>0xFF ) $newBColor = $bColor - $b * $accuracy;
				if( $newBColor < 0 ) $newBColor = 0;
				
				$newRGBColor = ( $newRColor << 16 ) | ( $newGColor << 8 ) | $newBColor;
	
				$color = (string) dechex( $newRGBColor );

				$backgroundValue = strtoupper('#' . str_repeat('0', 6 - strlen($color)) . $color);
				echo '<div class="color" style="background: '.$backgroundValue.';"><a href="' . htmlentities( $_SERVER['PHP_SELF'].'?newColor=' . $newRGBColor . '&accuracy=' . $accuracy . '#myColor' ) . '">'. $backgroundValue .'</a></div>';
			}
		}
	}
}
