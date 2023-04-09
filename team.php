<div id="team">
	<div class="container">

		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<h2>Meet the executive body!</h2>
				<!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p> -->
			</div>
		</div>

		<div class="row mt30">

			<?php
			$query5 = "SELECT * FROM team_member ORDER BY member_id";
			$runquery5 = mysqli_query($db, $query5);
			while ($data5 = mysqli_fetch_array($runquery5)) { ?>

				<?php
				if ($data5['member_body'] == "e") {
				?>
					<div class="col-md-4 col-sm-4 col-xs-9">
						<div class="team-wrapper">
							<img src="images/<?= $data5['member_image'] ?>" class="img-responsive" alt="team img">
							<h3><?= $data5['member_name'] ?></h3>
							<h4><?= $data5['member_position'] ?></h4>
							<p><?= $data5['member_branch'] ?></p>
						</div>

					</div>
				<?php
				}
				?>
			<?php
			}
			?>

		</div>



		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<h2>Meet the team member!</h2>
			</div>
		</div>

		<div class="row mt30">

			<?php
			$query5 = "SELECT * FROM team_member ORDER BY member_id";
			$runquery5 = mysqli_query($db, $query5);
			while ($data5 = mysqli_fetch_array($runquery5)) { ?>


				<?php
				if ($data5['member_body'] != "e") {
				?>
					<div class="col-md-4 col-sm-4 col-xs-9">
						<div class="team-wrapper">
							<img src="images/<?= $data5['member_image'] ?>" class="img-responsive" alt="team img">
							<h3><?= $data5['member_name'] ?></h3>
							<h4><?= $data5['member_position'] ?></h4>
							<p><?= $data5['member_branch'] ?></p>
						</div>

					</div>
				<?php } ?>
			<?php
			}
			?>

		</div>

	</div>
</div>