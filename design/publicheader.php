<?
global $LoggedUser, $SSL;
define('FOOTER_FILE',SERVER_ROOT.'/design/publicfooter.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?=display_str($PageTitle)?></title>
	<meta http-equiv="X-UA-Compatible" content="chrome=1; IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="referrer" content="none, no-referrer, same-origin" />
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
<? if ($Mobile) { ?>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0, user-scalable=no;" />
	<link href="<?=STATIC_SERVER ?>styles/mobile/style.css?v=<?=filemtime(SERVER_ROOT.'/static/mobile/style.css')?>" rel="stylesheet" type="text/css" />
<? } else {
	$styles = [];
	list($month, $day) = explode(' ', date('n d'));
	if (($month == 12 && $day >= 12) || ($month == 1 && $day < 4)) {
		$styles = array_merge($styles, ['red', 'green', 'white']);
	}
	$style = $styles[array_rand($styles)];
?>
	<link href="<?=STATIC_SERVER ?>styles/public/style<?=$style?>.css?v=<?=filemtime(SERVER_ROOT."/static/styles/public/style{$style}.css")?>" rel="stylesheet" type="text/css" />
<? } ?>
	<script src="<?=STATIC_SERVER?>functions/jquery.js" type="text/javascript"></script>
	<script src="<?=STATIC_SERVER?>functions/script_start.js?v=<?=filemtime(SERVER_ROOT.'/static/functions/script_start.js')?>" type="text/javascript"></script>
	<script src="<?=STATIC_SERVER?>functions/ajax.class.js?v=<?=filemtime(SERVER_ROOT.'/static/functions/ajax.class.js')?>" type="text/javascript"></script>
	<script src="<?=STATIC_SERVER?>functions/cookie.class.js?v=<?=filemtime(SERVER_ROOT.'/static/functions/cookie.class.js')?>" type="text/javascript"></script>
	<script src="<?=STATIC_SERVER?>functions/storage.class.js?v=<?=filemtime(SERVER_ROOT.'/static/functions/storage.class.js')?>" type="text/javascript"></script>
	<script src="<?=STATIC_SERVER?>functions/global.js?v=<?=filemtime(SERVER_ROOT.'/static/functions/global.js')?>" type="text/javascript"></script>
<? if ($Mobile) { ?>
	<script src="<?=STATIC_SERVER?>styles/mobile/style.js?v=<?=filemtime(SERVER_ROOT.'/static/mobile/style.js')?>" type="text/javascript"></script>
<? }
?>
</head>
<body>
<div id="head">
</div>
<table class="layout" id="maincontent">
	<tr>
		<td align="center" valign="middle">
			<div id="logo">
<? if (OPEN_REGISTRATION) { ?>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="login.php">Log in</a></li>
					<li><a href="register.php">Register</a></li>
				</ul>
<? } ?>
			</div>
