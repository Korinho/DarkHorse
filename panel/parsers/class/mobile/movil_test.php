<?php
	include("Mobile_Detect.php");
	$detect = new Mobile_Detect();
	
	if ( $detect->isAndroidtablet() || $detect->isIpad() || $detect->isBlackberrytablet() ) {
		$movil = 1;
	} elseif( $detect->isAndroid() ) {
		$movil = 1;
	} elseif ( $detect->isIphone() ) {
		$movil = 1;
	} elseif ( $detect->isMobile() ) {
		$movil = 1;
	} else{
		$movil=0;
	}
	 
?>
