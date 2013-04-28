<?php 
include "googleanalytics.class.php";
try {
	/* 
	 * Google Analytics - Request Data
	 * Require: Email account, Password
	 */
	$email = "andro0929@gmail.com";
	$password = "feather0929";

	$profile_id = 'ga:65748357';		// Format: 'ga:XXXXXXXX'
	$start  = date('Y-m-d', strtotime('-7 days', strtotime('now')));
	$finish = date('Y-m-d', strtotime('now'));

	$ga = new GoogleAnalytics($email,$password);
	$ga->setProfile($profile_id);
	$ga->setDateRange($start, $finish);		// Format: 'yyyy-mm-dd'

	$report = $ga->getReport(array(
		'dimensions' => urlencode('ga:date, ga:country'),
		'metrics' => urlencode('ga:pageviews, ga:visitors'),
		'sort' => '-ga:pageviews'
	));

	//print out the $report array
	print "<h1>Google Analytics - Request Data Using PHP</h1>
		<p>The following data shows traffic of last 7 days of this website.</p>
	";
	print "<pre>";
	print_r($report);
	print "</pre>";
	
} catch (Exception $e) { 
	print 'Error: ' . $e->getMessage(); 
}

?>
<a href="https://github.com/andro0929/gaphp"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>