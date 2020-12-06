<?php
	require_once 'rb-mysql.php';
    //server connetion
	R::setup('mysql:host=localhost;dbname=dars', 'root', 'root');

	R::ext('xdispense', function( $type ){ 
		return R::getRedBean()->dispense( $type ); 
	});

	session_start();

	$ru_months = array( 'января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря');