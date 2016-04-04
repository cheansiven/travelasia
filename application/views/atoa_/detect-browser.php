<?php

	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') )
	{
		echo '<link rel="stylesheet" type="text/css" href="'.base_url().'public/css/firefox.css">';
	}
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') )
	{
		//echo '<link rel="stylesheet" type="text/css" href="css/opera.css">';
	}
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') )
	{
		//echo '<link rel="stylesheet" type="text/css" href="css/safari.css">';
	}
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') )
	{
		//echo '<link rel="stylesheet" type="text/css" href="css/msie.css">';
		//echo "MSIE 8.0";
	}
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 9.0') )
	{
		echo '<link rel="stylesheet" type="text/css" href="'.base_url().'public/css/msie9.0.css">';
		//echo "MSIE 9.0";
	}
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 7.0') )
	{
		//echo '<link rel="stylesheet" type="text/css" href="css/msie7.0.css">';
		//echo "'MSIE 7.0";
	}
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 6.0') )
	{
		//echo '<link rel="stylesheet" type="text/css" href="css/msie.css">';
	}
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') )
	{
		//echo '<link rel="stylesheet" type="text/css" href="css/chrome.css">';
	}
?>