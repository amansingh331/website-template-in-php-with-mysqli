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
 <form method="post" action="php/ugallery.php" enctype="multipart/form-data">
   <div class="form-row">
     <div class="form-group col-md-6">
       <label>Person Screenshot/Image (Minimum 600px X 600px, Maxsize 2mb)</label>
       <div class="custom-file">
         <input type="file" name="img_url" class="custom-file-input" id="profilepic">
         <label class="custom-file-label" for="img_url">Choose Pic...</label>
       </div>
     </div>

     <div class="form-group col-md-2 ml-auto">
       <input type="submit" name="addpic" class="btn btn-primary" value="Add Pic">
     </div>

 </form>
 <table class="table table-striped table-sm">
   <thead>
     <tr>
       <th>Id</th>
       <th>Image</th>
       <th>Action</th>
     </tr>
   </thead>
   <tbody>
     <?php
      $query2 = "SELECT * FROM gallery";
      $queryrun2 = mysqli_query($db, $query2);
      $count = 1;
      while ($data2 = mysqli_fetch_array($queryrun2)) {
      ?>
       <tr>
         <div class="modal fade" id="modal<?= $data2['img_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <h6 class="modal-title" id="exampleModalLabel">Edit Portfolio</h6>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <div class="modal-body">
                 <form method="post" action="php/ugallery.php" enctype="multipart/form-data">
                   <input type="hidden" name="img_id" value="<?= $data2['img_id'] ?>">
                   <div class="form-row">
                     <div class="form-group col-md-12">
                       <img src="../images/<?= $data2['img_url'] ?>" class="oo img-thumbnail">
                     </div>
                     <div class="form-group col-md-6">
                       <label>Project Screenshot/Image (Minimum 600px X 600px, Maxsize 2mb)</label>
                       <div class="custom-file">
                         <input type="file" name="img_url" class="custom-file-input" id="img_url">
                         <label class="custom-file-label" for="img_url">Choose Pic...</label>
                       </div>
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
         <td><img src="../images/<?= $data2['img_url'] ?>" class="oo img-thumbnail"></td>
         <td><?= $data2['img_date'] ?></td>
         <td>

           <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal<?= $data2['img_id'] ?>">
             Edit
           </button> <a href="php/ugallery.php?del=<?= $data2['img_id'] ?>"><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
               Delete
             </button></a>
         </td>
       </tr>
     <?php $count++;
      } ?>
   </tbody>
 </table>