 <h2>Edit Portfolio Section</h2>
 <?php
  if (isset($_GET['msg'])) {

    if ($_GET['msg'] == 'updated') {
  ?>
     <div class="alert alert-success text-center" role="alert">
       Project Successfully Added !
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
 <form method="post" action="php/uteam.php" enctype="multipart/form-data">
   <div class="form-row">
     <div class="form-group col-md-6">
       <label>Person Screenshot/Image (Minimum 600px X 600px, Maxsize 2mb)</label>
       <div class="custom-file">
         <input type="file" name="member_image" class="custom-file-input" id="profilepic">
         <label class="custom-file-label" for="member_image">Choose Pic...</label>
       </div>
     </div>

     <div class="form-group col-md-6 mt-auto">
       <label for="name">Name</label>
       <input type="name" name="member_name" class="form-control" id="name" placeholder="ToDo List Maker">
     </div>
     <div class="form-group col-md-12">
       <label for="email">eb</label>
       <input type="text" name="member_body" class="form-control" id="email" placeholder="e aur null">
     </div>


     <div class="form-group col-md-12">
       <label for="email">Branch</label>
       <input type="text" name="member_branch" class="form-control" id="email" placeholder="electrical">
     </div>
     <div class="form-group col-md-12">
       <label for="email">position</label>
       <input type="text" name="member_position" class="form-control" id="email" placeholder="webdev head">
     </div>

     <div class="form-group col-md-2 ml-auto">
       <input type="submit" name="addmember" class="btn btn-primary" value="Add Member">
     </div>

 </form>
 <table class="table table-striped table-sm">
   <thead>
     <tr>
       <th>Id</th>
       <th>Image</th>
       <th>Name</th>
       <th>eb</th>
       <th>Branch</th>
       <th>position</th>
       <th>Action</th>
     </tr>
   </thead>
   <tbody>
     <?php
      $query2 = "SELECT * FROM team_member";
      $queryrun2 = mysqli_query($db, $query2);
      $count = 1;
      while ($data2 = mysqli_fetch_array($queryrun2)) {
      ?>
       <tr>
         <div class="modal fade" id="modal<?= $data2['member_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <h6 class="modal-title" id="exampleModalLabel">Edit Portfolio</h6>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <div class="modal-body">
                 <form method="post" action="php/uteam.php" enctype="multipart/form-data">
                   <input type="hidden" name="member_id" value="<?= $data2['member_id'] ?>">
                   <div class="form-row">
                     <div class="form-group col-md-12">
                       <img src="../images/<?= $data2['member_image'] ?>" class="oo img-thumbnail">
                     </div>
                     <div class="form-group col-md-6">
                       <label>Project Screenshot/Image (Minimum 600px X 600px, Maxsize 2mb)</label>
                       <div class="custom-file">
                         <input type="file" name="member_image" class="custom-file-input" id="member_image">
                         <label class="custom-file-label" for="member_image">Choose Pic...</label>
                       </div>
                     </div>

                     <div class="form-group col-md-6 mt-auto">
                       <label for="name">Name</label>
                       <input type="name" name="member_name" value="<?= $data2['member_name'] ?>" class="form-control" id="name" placeholder="ToDo List Maker">
                     </div>

                     <div class="form-group col-md-12">
                       <label for="email">eb</label>
                       <input type="text" name="member_body" value="<?= $data2['member_body'] ?>" class="form-control" id="email" placeholder="e aur null">
                     </div>

                     <div class="form-group col-md-12">
                       <label for="email">Branch</label>
                       <input type="text" name="member_branch" value="<?= $data2['member_branch'] ?>" class="form-control" id="email" placeholder="branch">
                     </div>
                     <div class="form-group col-md-12">
                       <label for="email">position</label>
                       <input type="text" name="member_position" value="<?= $data2['member_position'] ?>" class="form-control" id="email" placeholder="position">
                     </div>

                   </div>


                   <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <input type="submit" class="btn btn-primary" name="pupdate" value="Update">
                 </form>
               </div>
             </div>
           </div>
         </div>
         <td>#<?= $count ?></td>
         <td><img src="../images/<?= $data2['member_image'] ?>" class="oo img-thumbnail"></td>
         <td><?= $data2['member_name'] ?></td>
         <td><?= $data2['member_body'] ?></td>
         <td><?= $data2['member_branch'] ?></td>
         <td><?= $data2['member_position'] ?></td>
         <td>
           <a href="<?= $data2['member_branch'] ?>"> <button type="button" class="btn btn-success btn-sm">Visit</button></a>

           <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal<?= $data2['member_id'] ?>">
             Edit
           </button> <a href="php/uteam.php?del=<?= $data2['member_id'] ?>"><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
               Delete
             </button></a>
         </td>
       </tr>
     <?php $count++;
      } ?>
   </tbody>
 </table>