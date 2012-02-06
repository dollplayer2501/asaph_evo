<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?php echo htmlspecialchars( Asaph_Config::$title ); ?> - tagcloud</title>
	<link rel="stylesheet" type="text/css" href="<?php echo Asaph_Config::$absolutePath; ?>templates/stickney_evo/stickney.css" />
	<link rel="Shortcut Icon" href="<?php echo Asaph_Config::$absolutePath; ?>templates/stickney_evo/asaph.ico" />
	<script type="text/javascript" src="<?php echo Asaph_Config::$absolutePath; ?>templates/stickney_evo/whitebox.js"></script>
</head>
<body>

<div id="title">
	<em>
		<a href="<?php echo ASAPH_LINK_PREFIX; ?>about">about</a>
		|
		tagcloud
	</em>
	<h1><a href="<?php echo Asaph_Config::$absolutePath; ?>"><?php echo htmlspecialchars( Asaph_Config::$title ); ?></a> - <a href="<?php echo ASAPH_LINK_PREFIX ?>tagcloud">tagcloud</a></h1>
</div>

<div id="singleonly">
	<div id="postscript">
<h2>tagcloud</h2>
<p>
<?php
	define( MAX_SIZE, 12 );
	define( MIN_SIZE, 6 );

	if ( count($posts) > 0 ) {
		$max_qty = max( array_values($posts) );
		$min_qty = min( array_values($posts) );
		$spread = $max_qty - $min_qty;
		if ( $spread == 0 ) {
			$spread = 1;
		}
		$step = (MAX_SIZE - MIN_SIZE) / $spread;
		$i = 0;
		foreach( $posts as $key => $val ) {
			$size = (int)round(MIN_SIZE + (($val - $min_qty) * $step));
			$post[$key] = array(
					'count' => $val,
					'size' => $size
				);
		}

		foreach( $post as $key => $val ) {
			echo '<a href="'.ASAPH_LINK_PREFIX.'tag/'.rawurlencode($key).'" style="font-size:'.$val['size'].'pt;">'.$key.'</a>'."\n";
		}
	} else {
		echo "no tags!";
	}
?>
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