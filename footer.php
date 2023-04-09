<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-5 col-sm-4">
				<h1>3D</h1>
				<p>3D-CLUB, NIT ROURKELA Design by
					<a rel="nofollow" href="<?= $data['copy_right_site_name'] ?>" target="_parent"><u><?= $data['copy_right_name'] ?></u></a>.
					
				</p>
				<h3>President</h3>
				<p><i class="fa fa-user"></i><?= $data['persident_name'] ?></p>
				<p><i class="fa fa-phone"></i><?= $data['persident_mobile_no'] ?></p>
				<p><i class="fa fa-envelope-o"></i><?= $data['persident_email'] ?></p>
				
			</div>

			<div class="col-md-3 col-sm-4">
				<h3>Faculty Advisor</h3>
				<p><i class="fa fa-user"></i><?= $data['faculty_name'] ?></p>
				<p><i class="fa fa-info"></i><?= $data['faculty_position'] ?></p>
				<p><i class="fa fa-book"></i><?= $data['faculty_branch'] ?></p>
				<p><i class="fa fa-phone"></i><?= $data['faculty_mobile_no'] ?></p>
				<p><i class="fa fa-envelope-o"></i><?= $data['faculty_email'] ?></p>
			</div>

			<div class="col-md-4 col-sm-4 newsletter">
				<h3>Newsletter</h3>
				<p>We not share your information!</p>
				<div class="input-group">
					<form action="" method="post">
						<input name="newsletter_email" type="email" placeholder="Enter your email" class="form-control" required>
						<button type="submit" name="submit_newsletter" value="submit_newsletter" class="btn email">Submit</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</footer>
<!-- copyright section -->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<p>Copyright © 2022 <a rel="nofollow" href="<?= $data['copy_right_site_name'] ?>" target="_parent"><u><?= $data['copy_right_name'] ?></u></a></p>
			</div>
			<div class="col-md-6 col-sm-6">
				<ul class="social-icons">
					<?php
					if ($data['social_link_facebook'] != "") {
					?>
						<li><a href="<?= $data['social_link_facebook'] ?>" class="fa fa-facebook"></a></li>
					<?php }
					if ($data['social_link_instagram'] != "") {
					?>
						<li><a href="<?= $data['social_link_instagram'] ?>" class="fa fa-instagram"></a></li>
					<?php }
					if ($data['social_link_linkedin'] != "") {
					?>
						<li><a href="<?= $data['social_link_linkedin'] ?>" class="fa fa-linkedin"></a></li>
										<?php }
					if ($data['social_link_youtube'] != "") {
					?>
					<li><a href="<?= $data['social_link_youtube'] ?>" class="fa fa-youtube"></a></li>
					<?php }
					if ($data['social_link_github'] != "") {
					?>
					<li><a href="<?= $data['social_link_github'] ?>" class="fa fa-github"></a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div>


<!-- javascript js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/custom.js"></script>