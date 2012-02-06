<?php

class Asaph_Config {
	
	// This title is used in templates and the rss feed
	public static $title = 'Asaph ~ Phoboslab';
	
	// Domain name and path where Asaph is installed in
	//	public static $domain = 'localhost';
	public static $domain = 'subdomain.yourdomain.com';
	public static $absolutePath = '/asaph/';
	
	// If you want to be able to move/edit/delete generated files and folders 
	// with your ftp-client, it's likely you'll have to set chmod to 0777
	public static $defaultChmod = 0777;
	
	public static $postsPerPage = 9;
	public static $adminPostsPerPage = 9;
	
	// Templates
	public static $templates = array(
		'posts' => 'templates/stickney_evo/posts.html.php',
		'single' => 'templates/stickney_evo/single.html.php',
		'about' => 'templates/stickney_evo/about.html.php',
		'tagcloud' => 'templates/stickney_evo/tagcloud.html.php',
		'feed' => 'templates/rss.xml.php'
	);
	
	// Settings for your mysql database
	public static $db = array(
		'host' => 'localhost',
		'database' => 'asaph',
		'user' => 'root',
		'password' => '',
		'prefix' => 'asaph_'
	);
	
	// Image and thumbnail settings
	public static $images = array(
		'imagePath' => 'data/images/',
		'thumbPath' => 'data/thumbs/',
		'thumbWidth' => 256,
		'thumbHeight' => 192,
		'jpegQuality' => 80,
	);
}


// Don't edit anything below here, unless you know what you're doing

define( 'ASAPH_TABLE_POSTS',	Asaph_Config::$db['prefix'].'posts' );
define( 'ASAPH_TABLE_USERS',	Asaph_Config::$db['prefix'].'users' );

define( 'ASAPH_BASE_URL',		'http://'.Asaph_Config::$domain.Asaph_Config::$absolutePath );
define( 'ASAPH_POST_PHP',		ASAPH_BASE_URL.'admin/post.php' );
define( 'ASAPH_POST_JS',		ASAPH_BASE_URL.'admin/post.js.php' );
define( 'ASAPH_POST_CSS',		ASAPH_BASE_URL.'admin/templates/post.css' );

if( function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc() ) {
	$_GET = array_map( 'stripslashes', $_GET );
	$_POST = array_map( 'stripslashes', $_POST );
}

?>