<div id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<h2>Get in touch</h2>
                <p>If you have something to say or ask, please use this contact form to send your message.</p>
			</div>
			<div class="col-md-8 col-sm-8 mt30">
				<form action="" method="post" role="form">
					<div class="col-md-6 col-sm-6">
                        <label for="name">NAME</label>
                        <input name="name" type="text" class="form-control" id="name" required>
                      <label for="email">EMAIL</label>
                        <input name="email" type="email" class="form-control" id="email" required>
						<label for="email">SUBJECT</label>
                        <input name="subject" type="text" class="form-control" id="name" required>
					</div>
					<div class="col-md-6 col-sm-6">
						<label for="message">MESSAGE</label>
						<textarea name="message" rows="9" class="form-control" id="message" required></textarea>
					</div>
                    <div class="col-md-6 col-sm-6">
                    	<button type="submit" name="submit_msg" value="submit_msg" class="btn btn-default">SEND</button>
                    </div>
				</form>
			</div>
			
			<div class="col-md-4 col-sm-4 address">
			<br>
			<br>
			<br>
				<div>
					<h3>Email</h3>
					<p><i class="fa fa-envelope-o"></i>&nbsp;&nbsp;<?= $data['persident_email'] ?></p>
				</div>
				<div>
					<h3>Phones</h3>
					<p><i class="fa fa-phone"></i>&nbsp;&nbsp;<?= $data['persident_mobile_no'] ?></p>
				</div>
			</div>
			<div class="col-md-12 col-sm-12 mt20">
            	<h3>Location</h3>
				<div class="google_map mt20">
					<div id="map-canvas"></div>
				</div>
			</div>
		</div>
	</div>
</div>		

