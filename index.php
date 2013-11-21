<?php
require_once 'core/init.php';


// DB::getInstance();

// flash a message if exists // 
if(Session::exists('home')) {
	echo '<p>'.Session::flash('home').'</p>';
}