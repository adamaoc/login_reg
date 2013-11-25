<?php
require_once 'core/init.php';


// DB::getInstance();

// flash a message if exists // 
if(Session::exists('home')) {
	echo '<p>'.Session::flash('home').'</p>';
}

$user = new User();
if($user->isLoggedIn()) {
	// echo 'Logged In';
	?>
		<p>Hello <a href="#"><?php echo escape($user->data()->username): ?></a>!</p>

		<ul>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	<?php
} else {
	echo '<p>You need to <a href="login.php">login</a> or <a href="register.php">register</a>.</p>';
}