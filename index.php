<?php

/**
	 * Plugin Name: RankScanner: Buzz
	 * Plugin URI: http://www.rankscanner.com/wordpress/
	 * Description: With RankScanner Buzz you can automatically get alerts about mentions of your brand, blog or any other specific keywords, that people are talking about on the web and social media.
	 * Version: 1.1.1
	 * Author: RankScanner
	 * Author URI: http://www.rankscanner.com/
	 * License: GPL2
 */
 
$PluginName = 'Buzz';

if(!function_exists('RankScanner_Buzz')) {
	function RankScanner_Buzz() {
		echo RankScanner_WriteContent('https://app.rankscanner.com/Domain/'.RankScanner_RootDomain().'/Buzz/?WP_Version=2');
	}
}

require_once 'App/Main.php';

 ?>