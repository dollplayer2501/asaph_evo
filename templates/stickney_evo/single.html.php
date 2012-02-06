<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?php echo htmlspecialchars( Asaph_Config::$title ) . ' - ' . htmlspecialchars( $post['title'] ); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo Asaph_Config::$absolutePath; ?>templates/stickney_evo/stickney.css" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php echo ASAPH_LINK_PREFIX; ?>feed" />
	<link rel="Shortcut Icon" href="<?php echo Asaph_Config::$absolutePath; ?>templates/stickney_evo/asaph.ico" />
	<script type="text/javascript" src="<?php echo Asaph_Config::$absolutePath; ?>templates/stickney_evo/whitebox.js"></script>
</head>
<body>

<div id="title">
	<em>
		<a href="<?php echo ASAPH_LINK_PREFIX; ?>about">about</a>
		|
		<a href="<?php echo ASAPH_LINK_PREFIX; ?>tagcloud">tagcloud</a>
	</em>
	<h1><a href="<?php echo Asaph_Config::$absolutePath; ?>"><?php echo htmlspecialchars( Asaph_Config::$title ); ?></a></h1>
</div>

	<div id="singleonly">
	<div class="post">
		<ul class="postInfo">
		<?php if( $post['image'] ) { ?>
			<li><?php echo $post['title']; ?></li>
		<?php } ?>
			<li><?php echo date('F j, Y G:i:s', $post['created']); ?></li>
			<?php if( count($post['tag']) > 0 ) { ?>
				<li>tag: 
				<?php foreach ($post['tag'] as $item) { ?>
					<a href="<?php echo ASAPH_LINK_PREFIX; ?>tag/<?php echo urlencode($item); ?>"><?php echo $item; ?></a>
				<?php } ?>
				</li>
			<?php } ?>
			<li>via: <a href="<?php echo $post['source']; ?>"><?php echo $post['sourceDomain']; ?></a></li>
		</ul>
		<?php if( $post['image'] ) { ?>
			<p>
			<a href="<?php echo $post['image']; ?>" rel="whitebox" title="<?php echo $post['title']; ?>">
				<img src="<?php echo $post['thumb']; ?>" alt="<?php echo $post['title']; ?>"/>
			</a>
			<br clear="all"/>
			<br clear="all"/>
			<?php echo nl2br($post['memo']); ?>
			</p>
		<?php } else { ?>
			<p>
				<?php echo nl2br($post['title']); ?>
			</p>
			<p>
				<?php echo nl2br($post['memo']); ?>
			</p>
		<?php } ?>
		<br class="clear"/>
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