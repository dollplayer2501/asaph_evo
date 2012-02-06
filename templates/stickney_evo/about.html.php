<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?php echo htmlspecialchars( Asaph_Config::$title ); ?> - about</title>
	<link rel="stylesheet" type="text/css" href="<?php echo Asaph_Config::$absolutePath; ?>templates/stickney_evo/stickney.css" />
	<link rel="Shortcut Icon" href="<?php echo Asaph_Config::$absolutePath; ?>templates/stickney_evo/asaph.ico" />
	<script type="text/javascript" src="<?php echo Asaph_Config::$absolutePath; ?>templates/stickney_evo/whitebox.js"></script>
</head>
<body>

<div id="title">
	<em>
		about
		|
		<a href="<?php echo ASAPH_LINK_PREFIX; ?>tagcloud">tagcloud</a>
	</em>
	<h1><a href="<?php echo Asaph_Config::$absolutePath; ?>"><?php echo htmlspecialchars( Asaph_Config::$title ); ?></a> - <a href="<?php echo ASAPH_LINK_PREFIX ?>about">about</a></h1>
</div>

<div id="singleonly">
	<div id="postscript">
<h2>about</h2>
<p>
	This 'original' microblog is powered by <a href="http://www.phoboslab.org/projects/asaph">Asaph</a>.<br />
	dollplayer2501 add some function.<br />
	 - tag and tag cloud<br />
	 - add memo field<br />
</p>
	</div>
</div>

<div id="pages">
	<div class="pageInfo">
		&nbsp;
	</div>
	
	<div class="pageLinks">
		<a href="<?php echo ASAPH_LINK_PREFIX; ?>">home</a>
	</div>
	<div class="clear"></div>
</div>

</body>
</html>