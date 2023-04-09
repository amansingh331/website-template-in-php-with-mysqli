<!-- home section -->
<div id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-3"></div>
			<div class="col-md-7 col-sm-9">
				<h3>welcome to</h3>
				<h1>3D-Club Of NIT</h1>
				<h1>ROURKELA</h1>
			</div>
		</div>
	</div>
</div>

<!-- divider section -->
<div class="divider">
	<div class="container">
		<div class="row">
			<a href="?blogs=true" class="custom-card">
				<div class="col-md-4 col-sm-6">
					<div class="divider-wrapper divider-one">
						<i class="fa fa-laptop"></i>
						<h2>Blog</h2>
						<p>Take a look at the best blog on science and technology by clicking here.</p>

					</div>
				</div>
			</a>
			<a href="?projects=true" class="custom-card">
				<div class="col-md-4 col-sm-6">
					<div class="divider-wrapper divider-two">
						<i class="fa fa-mobile"></i>
						<h2>Project</h2>
						<p>We are building the best project. Let's take a look by clicking here. Stay tuned!</p>
					</div>
				</div>
			</a>

			<a href="?contact=true" class="custom-card">
				<div class="col-md-4 col-sm-12">
					<div class="divider-wrapper divider-three">
						<i class="fa fa-life-ring"></i>
						<h2>Contact Us</h2>
						<p>If you have something you would like to say or ask, please click on this and fill out the contact form.</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>


<!-- blog section -->
<div id="blog">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<h2>Recent Blog</h2>
			</div>
		</div>

	</div>
</div>

<?php
$query_for_recent_blog = "SELECT * FROM blogs ORDER BY blog_id DESC LIMIT 1";
$runquery_for_recent_blog = mysqli_query($db, $query_for_recent_blog);
while($data_for_recent_blog = mysqli_fetch_array($runquery_for_recent_blog)) { ?>
<div id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<img src="blog/assets/img/blog/<?= $data_for_recent_blog['blog_img'] ?>" class="img-responsive" alt="about img">
			</div>
			<div class="col-md-6 col-sm-12 about-des">
				<h2><?= $data_for_recent_blog['blog_heading'] ?></h2>

				<p>
				<?= $data_for_recent_blog['blog_short_des'] ?>
				</p>

				<a href="<?= $data_for_recent_blog['blog_link'] ?>" class="btn btn-default">LEARN MORE</a>
			</div>
		</div>
	</div>
</div>

<?php
}
?>


<!-- project section -->
<div id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<h2>Recent Projects</h2>
			</div>
		</div>

		<div class="row mt30">
			<?php
			$query4 = "SELECT * FROM project ORDER BY project_id DESC LIMIT 3";
			$runquery4 = mysqli_query($db, $query4);
			while ($data4 = mysqli_fetch_array($runquery4)) { ?>
				<div class="col-md-4 col-sm-4 col-xs-6">
					<a href="images/<?= $data4['project_image'] ?>" data-lightbox-gallery="portfolio-gallery"><img src="images/<?= $data4['project_image'] ?>" alt="portfolio img"></a>
				</div>
			<?php
			}
			?>
			<div class="col-md-12 col-sm-12">
				<a rel="nofollow" href="?projects=true" class="btn btn-default">View More</a>
			</div>
		</div>
	</div>
</div>