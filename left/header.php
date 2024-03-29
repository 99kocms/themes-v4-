<?php
defined('ROOT') OR exit('No direct script access allowed');
include_once(THEMES.$core->getConfigVal('theme').'/functions.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<?php eval($core->callHook('frontHead')); ?>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php show::titleTag(); ?></title>
	<base href="<?php show::siteUrl(); ?>/" />
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
	<meta name="description" content="<?php show::metaDescriptionTag(); ?>" />
	<link rel="icon" href="" />
	<?php show::linkTags(); ?>
	<?php show::scriptTags(); ?>
	<?php eval($core->callHook('endFrontHead')); ?>
</head>
<body>
<div id="mobile_menu"></div>
<div id="container">
	<div id="container_right"></div>
	<div id="container_left">
		<div id="header">
			<div id="header_content">
				<p id="siteName"><a href="<?php show::siteUrl(); ?>"><?php show::siteName(); ?></a></p>
				<ul id="navigation">
					<?php show::mainNavigation(); ?>
				</ul>
			</div>
		</div>
		<div id="body">
			<div id="content" class="<?php show::pluginId(); ?>">
				<?php show::mainTitle(); ?>