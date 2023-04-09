<div id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<h2>Gallery</h2>
				<!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p> -->
			</div>
		</div>

		<div class="row mt30">

			<?php
			$query4 = "SELECT * FROM gallery ORDER BY img_id";
			$runquery4 = mysqli_query($db, $query4);
			while ($data4 = mysqli_fetch_array($runquery4)) { ?>
				<div class="col-md-4 col-sm-4 col-xs-6">
					<a href="images/<?= $data4['img_url'] ?>" data-lightbox-gallery="portfolio-gallery"><img src="images/<?= $data4['img_url'] ?>" alt="portfolio img"></a>
				</div>
			<?php
			}
			?>
			<div class="col-md-12 col-sm-12">
				<a rel="nofollow" href="#" class="btn btn-default">View More</a>
			</div>
		</div>
	</div>
</div>