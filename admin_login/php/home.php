<h2>Edit Home Section</h2>
<?php
if (isset($_GET['msg'])) {

  if ($_GET['msg'] == 'updated') {
?>
    <div class="alert alert-success text-center" role="alert">
      Successfully Updated !
    </div>
  <?php
  }
  if ($_GET['msg'] == 'error') {
  ?>
    <div class="alert alert-danger text-center" role="alert">
      something wrong with your image please check type or size !
    </div>
<?php
  }
}
?>
<form method="post" action="php/uhome.php" enctype="multipart/form-data">
  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="name">facebook</label>
      <input type="text" name="social_link_facebook" value="<?= $data['social_link_facebook'] ?>" class="form-control" id="name" placeholder="Mohan Goswami">
    </div>

    <div class="form-group col-md-6">
      <label for="email">instagram</label>
      <input type="text" name="social_link_instagram" value="<?= $data['social_link_instagram'] ?>" class="form-control" id="email" placeholder="workwithmohan@gmail.com">
    </div>

    <div class="form-group col-md-6">
      <label for="twitter">youtube</label>
      <input type="text" class="form-control" value="<?= $data['social_link_youtube'] ?>" name="social_link_youtube" id="twitter" placeholder="https://twitter.com/MohanGo94273231">
    </div>

    <div class="form-group col-md-6">
      <label for="facebook">github</label>
      <input type="text" class="form-control" value="<?= $data['social_link_github'] ?>" name="social_link_github" id="facebook" placeholder="https://facebook.com/MohanGo94273231">
    </div>

    <div class="form-group col-md-6">
      <label for="instagram">linkedin</label>
      <input type="text" class="form-control" value="<?= $data['social_link_linkedin'] ?>" name="social_link_linkedin" id="instagram" placeholder="https://instagram.com/MohanGo94273231">
    </div>

    <div class="form-group col-md-6">
      <label for="skype">persident name</label>
      <input type="text" value="<?= $data['persident_name'] ?>" class="form-control" name="persident_name" id="skype" placeholder="@monu250">
    </div>

    <div class="form-group col-md-6">
      <label for="linkedin">phone no</label>
      <input type="text" class="form-control" value="<?= $data['persident_mobile_no'] ?>" name="persident_mobile_no" id="linkedin" placeholder="https://linkedin.com/MohanGo94273231">
    </div>
    <div class="form-group col-md-6">
      <label for="github">persident email</label>
      <input type="text" class="form-control" value="<?= $data['persident_email'] ?>" name="persident_email" id="github" placeholder="https://github.com/MohanGo94273231">
    </div>
    <div class="form-group col-md-6">
      <label for="linkedin">faculty name</label>
      <input type="text" class="form-control" value="<?= $data['faculty_name'] ?>" name="faculty_name" id="linkedin" placeholder="https://linkedin.com/MohanGo94273231">
    </div>
    <div class="form-group col-md-6">
      <label for="github">faculty position</label>
      <input type="text" class="form-control" value="<?= $data['faculty_position'] ?>" name="faculty_position" id="github" placeholder="https://github.com/MohanGo94273231">
    </div>
    <div class="form-group col-md-6">
      <label for="linkedin">faculty branch</label>
      <input type="text" class="form-control" value="<?= $data['faculty_branch'] ?>" name="faculty_branch" id="linkedin" placeholder="https://linkedin.com/MohanGo94273231">
    </div>
    <div class="form-group col-md-6">
      <label for="github">faculty mobile no</label>
      <input type="text" class="form-control" value="<?= $data['faculty_mobile_no'] ?>" name="faculty_mobile_no" id="github" placeholder="https://github.com/MohanGo94273231">
    </div>
    <div class="form-group col-md-6">
      <label for="linkedin">faculty email</label>
      <input type="text" class="form-control" value="<?= $data['faculty_email'] ?>" name="faculty_email" id="linkedin" placeholder="https://linkedin.com/MohanGo94273231">
    </div>

    <div class="form-group col-md-6">
      <label for="github">map link</label>
      <input type="text" class="form-control" value="<?= $data['map_link'] ?>" name="map_link" id="github" placeholder="https://github.com/MohanGo94273231">
    </div>
  </div>


  <input type="submit" name="save" class="btn btn-primary" value="Save Changes">
</form>