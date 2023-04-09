<?php
// Include visitor log script 
// include_once 'include/log.php';
require_once "admin_login/include/lib_front/lib.php";
include('admin_login/include/database_config.php');
$query = "SELECT * FROM social_link";
$runquery = mysqli_query($db, $query);
if (!$db) {
	header("location:index-2.html");
}
$data = mysqli_fetch_array($runquery);

// this is for contact message submit
if (isset($_POST['submit_msg'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];


	$query = "INSERT INTO contact (contact_name,contact_email,contact_subject,contact_message) ";
	$query .= "VALUES('$name','$email','$subject','$message')";
	$run = mysqli_query($db, $query);
	if ($run) {
		$message1 = "Your message has been sent!";
		echo "<script type='text/javascript'>alert('$message1');</script>";
	} else {
		$message2 = "Your message has not been sent!, please try again later!";
		echo "<script type='text/javascript'>alert('$message2');</script>";
	}
	header("Refresh: 0");
}


// this is for newsletter submit 
if (isset($_POST['submit_newsletter'])) {
	$email = $_POST['newsletter_email'];


	$query = "INSERT INTO newsletter (newsletter_email) ";
	$query .= "VALUES('$email')";
	$run = mysqli_query($db, $query);
	if ($run) {
		$message1 = "Thank you for Subscribe us!";
		echo "<script type='text/javascript'>alert('$message1');</script>";
	} else {
		$message2 = "Subscription not done!, please try again later!";
		echo "<script type='text/javascript'>alert('$message2');</script>";
	}
	header("Refresh: 0");
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>

<body>


	<div class="container">
		<div class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">
					<h1>3D</h1>
				</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Home</a></li>
					<li><a href="?events=true">Events</a></li>
					<li><a href="?projects=true">Projects</a></li>
					<li><a href="?blogs=true">Blogs</a></li>
					<li><a href="?gallery=true">Gallery</a></li>
					<li><a href="?team=true">Team</a></li>
					<li><a href="?contact=true">Contact Us</a></li>
					<li><a href="?sign=true">Signup/Signin</a></li>
					<!-- <li><a href="login/logout-user.php">Logout</a></li> -->
				</ul>
			</div>








		</div>
	</div>
	<?php
	if (isset($_GET['events'])) {
		include('events.php');             //events
	} else if (isset($_GET['projects'])) {
		include('projects.php');              //projects
	} else if (isset($_GET['blogs'])) {
		include('blog/index.php');            //blogs
	} else if (isset($_GET['gallery'])) {
		include('gallery.php');               //gallery
	} else if (isset($_GET['team'])) {
		include('team.php');                  //team
	} else if (isset($_GET['contact'])) {
		include('contact.php');                 //contact
	} else if (isset($_GET['sign'])) {
		include('login/index.php');             //login
	} else if (isset($_GET['welcome'])) {
		include('login/welcome.php');           //for dashboard page after login 
	} else {
		include('home.php');                    //home
	}
	?>


	<?php include('footer.php'); ?>


</body>

</html>