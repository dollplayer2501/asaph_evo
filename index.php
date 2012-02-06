<?php 
// Asaph v1.0 - www.phoboslab.org 

define( 'ASAPH_PATH', '' );
require_once( ASAPH_PATH.'lib/asaph.class.php' );

header( 'Content-type: text/html; charset=utf-8' );

// Is mod_rewrite enabled? (see .htaccess)
if( isset($_GET['rw']) ) {
	define( 'ASAPH_LINK_PREFIX', Asaph_Config::$absolutePath );
	$params = explode( '/', $_GET['rw'] );
} else {
	define( 'ASAPH_LINK_PREFIX', Asaph_Config::$absolutePath.'?' );
	$params = empty($_GET) ? array() : explode( '/', key($_GET) );
}


// about page
if( !empty($params[0]) && $params[0] == 'about' ) {
	include( ASAPH_PATH.Asaph_Config::$templates['about'] );
}
// feed
else if( !empty($params[0]) && $params[0] == 'feed' ) {
	$asaph = new Asaph( Asaph_Config::$postsPerPage );
	$posts = $asaph->getPosts( 0 );
	include( ASAPH_PATH.Asaph_Config::$templates['feed'] );
} 
// tagcloud
else if( !empty($params[0]) && $params[0] == 'tagcloud' ) {
	$asaph = new Asaph(Asaph_Config::$postsPerPage);
	$posts = $asaph->getTagCloud( );
	include( ASAPH_PATH.Asaph_Config::$templates['tagcloud'] );
}
// blog tag
else if( !empty($params[0]) && $params[0] == 'tag' ) {
	$page = !empty($params[2]) ? $params[2]-1 : 0;
	
	$asaph = new Asaph( Asaph_Config::$postsPerPage );
	$posts = $asaph->getPosts( $page, $params[1] );
	$pages = $asaph->getPages();
	include( ASAPH_PATH.Asaph_Config::$templates['posts'] );
}
// blog single
else if(( !empty($params[0]) && $params[0] == 'post' )&&
        ( !empty($params[1]) && is_numeric($params[1]))) {
	$asaph = new Asaph( 0 );
	$post = $asaph->getSinglePost( $params[1] );
	include( ASAPH_PATH.Asaph_Config::$templates['single'] );
}
// blog normal
else {
	$page = !empty($params[1]) ? $params[1]-1 : 0;
	
	$asaph = new Asaph( Asaph_Config::$postsPerPage );
	$posts = $asaph->getPosts( $page );
	$pages = $asaph->getPages();
	include( ASAPH_PATH.Asaph_Config::$templates['posts'] );
}

?>