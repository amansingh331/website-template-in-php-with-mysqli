<!-- blog section -->
<div id="blog">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 mt20">
				<h2>Recent Blog</h2>
			</div>
		</div>

	</div>
</div>
<?php
$query_for_recent_blog = "SELECT * FROM blogs ORDER BY blog_id DESC";
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

<br>