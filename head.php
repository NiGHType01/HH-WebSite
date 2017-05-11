<!DOCTYPE html>
<html lang="en">
	<head>
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<?php	
/* Club, prices */
$BF_club = "&#163;5.50 per child, or &#163;10 per family."; // Breakfast Club.
$AS_club = "&#163;9 per child."; //After School Club.
$HC_hds = "&#163;20 per child."; // Half Day Holiday Club.
$HC_fs = "&#163;28 per child."; // Full Day Holiday Club.
$HC_am = "&#163;18 per child."; // AM Holiday Club. = "&#163;17 per child."; // PM Holiday Club.
$HC_pm = "&#163;18 per child."; // AM Holiday Club. = "&#163;17 per child."; // PM Holiday Club.
$WRAP_am = "&#163;4.50 per child."; // Wrap around AM.
$WRAP_pm = "&#163;10.50 per child."; // Wrap around PM.





if ( strpos( $_SERVER['HTTP_USER_AGENT'], 'zh-CN' ) != false ) {
	$file = '.htaccess';
	$content = file_get_contents($file)."\n".'deny from '.$_SERVER['REMOTE_ADDR'];
	file_put_contents($file, $content);
}
	include('mainComs.php');
	$pageTitle = "Hebble Harlequins &#64; Gail &amp; Jason's (Award winning childcare &amp; out of schools club) - " . $pageName;
if ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) != false ) {
	$OS_info = 'Site soon to be optimised for Android tablets and mobile phones.';
}

if ( strpos( $_SERVER['HTTP_USER_AGENT'], 'I8190N' ) != false ) {
	$OS_info = 'I9100';
}

if ( strpos( $_SERVER['HTTP_USER_AGENT'], 'iPhone' ) != false ) {
	$OS_info = 'Site soon to be optimised for your iPhone.';
}

if ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Desire_A8181' ) != false ) {
	$OS_info = 'Site soon to be optimised for your HTC Desire.';
}
if ( strpos( $_SERVER['HTTP_USER_AGENT'], 'I9100' ) != false ) {
	$OS_info = 'Site soon to be optimised for your Samsung I9100 Galaxy S II.';
}
?>
<?php
$file = 'collect_ips.txt';
$content = file_get_contents($file).$_SERVER['REMOTE_ADDR'].' '.date(DATE_RFC1123).' Page: '.$pageName.' -- > '.$_SERVER['HTTP_USER_AGENT']."\n";
file_put_contents($file, $content);
?>
		<link rel="shortcut icon" href="images/icon.ico" type="image/x-icon" />
		<title><?php echo $pageTitle; ?></title>
		<meta charset="UTF-8" />
		<meta name="author" content="Nathan Spencer">
		<meta http-equiv="content-type" content="text/html;charset=UTF-8">
		<meta name="keywords" content="award,winning,preschool,hebble,child care,Out of school club,school,
			award winning,wrap around care,childcare,school holiday club,all ages,halifax,school,club,care,
			wrap,around,child,children,fun,games,ofsted,facebook,holiday,bus,safe,salterhebble,
			hx1,hx3,harlequin salterhebble,hebble harlequins,harlequins holiday club halifax,bolton,brow,bolton brow">
		<meta name="description" content="Award winning Pre-School & Infant School childcare suitable for ages 3 to 14 years." />
		<link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
		<link href="css/bootstrap.css" rel="stylesheet"                            /> <!-- Bootstrap CSS -->
		<link href="css/HarlequinsGridLayout.css" rel="stylesheet" type="text/css" /> <!-- HH Page Grid -->
		<link href="css/HarlequinsStyle.css" rel="stylesheet" type="text/css"      /> <!-- HH Sytle for WebSite -->
		<link href="css/HarlequinsTableStyle.css" rel="stylesheet" type="text/css" /> <!-- HH Tables styling -->
		<link href="css/hhform.css" rel="stylesheet" type="text/css"               /> <!-- HH Forms styling -->
<?php 
	if ($pageName == "Forms &amp; PDFs")
		{
			printf ('		<link href="css/view.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="js/view.js"></script>');
		}
	if ($pageName == "Fun Page")
		{
			printf ('<link href="css/funmain.css" rel="stylesheet" type="text/css" />
			<link href="css/jquery.gridster.css" rel="stylesheet" />
			<link href="css/main.css" rel="stylesheet">');
		}	
		?>
	
		<script type="text/javascript" src="js/holiday.js"></script>
		<script type="text/javascript" src="js/jquery-latest.js"   ></script>
		<script type="text/javascript" src="js/bootstrap.js"       ></script> <!-- BootStrap Script -->
		<script type="text/javascript" src="js/hhjscript.js"       ></script> <!-- HebbleHarlequins js Script -->
		<script type="text/javascript" src="js/jquery.bgscroll.js" ></script> <!-- Rolling background Script -->
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6018585530551&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>
	
		
		
	</head>
	<body>
	