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
		<p>Hello <a href="profile.php?user=<?php echo escape($user->data()->username); ?>">
			<?php echo escape($user->data()->username); ?></a>!</p>

		<ul>
			<li><a href="logout.php">Logout</a></li>
			<li><a href="update.php">Update</a></li>
			<li><a href="changepassword.php">Change Password</a></li>
		</ul>
	<?php

	if($user->hasPermission('admin')) {
		echo '<p>You are an admin.</p>';
	}

} else {
	echo '<p>You need to <a href="login.php">login</a> or <a href="register.php">register</a>.</p>';
}