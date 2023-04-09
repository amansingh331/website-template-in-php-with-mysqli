<h2>Edit blog Section</h2>
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
 <form method="post" action="php/ublog.php" enctype="multipart/form-data">
   <div class="form-row">
     <div class="form-group col-md-6">
       <label>blog Screenshot/Image (Minimum 600px X 600px, Maxsize 2mb)</label>
       <div class="custom-file">
         <input type="file" name="blog_img" class="custom-file-input" id="profilepic">
         <label class="custom-file-label" for="blog_img">Choose Pic...</label>
       </div>
     </div>

     <div class="form-group col-md-6 mt-auto">
       <label for="name">Heading</label>
       <input type="name" name="blog_heading" class="form-control" id="name" placeholder="ToDo List Maker">
     </div>



     <div class="form-group col-md-12">
       <label for="email">Short description</label>
       <input type="text" name="blog_short_des" class="form-control" id="email" placeholder="electrical">
     </div>
     <div class="form-group col-md-12">
       <label for="email">link</label>
       <input type="text" name="blog_link" class="form-control" id="email" placeholder="webdev head">
     </div>

     <div class="form-group col-md-2 ml-auto">
       <input type="submit" name="addblog" class="btn btn-primary" value="Add blog">
     </div>

 </form>
 <table class="table table-striped table-sm">
   <thead>
     <tr>
       <th>Id</th>
       <th>Image</th>
       <th>heading</th>
       <th>short description</th>
       <th>link</th>
       <th>Action</th>
     </tr>
   </thead>
   <tbody>
     <?php
      $query2 = "SELECT * FROM blogs";
      $queryrun2 = mysqli_query($db, $query2);
      $count = 1;
      while ($data2 = mysqli_fetch_array($queryrun2)) {
      ?>
       <tr>
         <div class="modal fade" id="modal<?= $data2['blog_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <h6 class="modal-title" id="exampleModalLabel">Edit blog</h6>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <div class="modal-body">
                 <form method="post" action="php/ublog.php" enctype="multipart/form-data">
                   <input type="hidden" name="blog_id" value="<?= $data2['blog_id'] ?>">
                   <div class="form-row">
                     <div class="form-group col-md-12">
                       <img src="../images/<?= $data2['blog_img'] ?>" class="oo img-thumbnail">
                     </div>
                     <div class="form-group col-md-6">
                       <label>Project Screenshot/Image (Minimum 600px X 600px, Maxsize 2mb)</label>
                       <div class="custom-file">
                         <input type="file" name="blog_img" class="custom-file-input" id="blog_img">
                         <label class="custom-file-label" for="blog_img">Choose Pic...</label>
                       </div>
                     </div>

                     <div class="form-group col-md-6 mt-auto">
                       <label for="name">heading</label>
                       <input type="text" name="blog_heading" value="<?= $data2['blog_heading'] ?>" class="form-control" id="blog_heading" placeholder="ToDo List Maker">
                     </div>



                     <div class="form-group col-md-12">
                       <label for="email">short desc</label>
                       <input type="text" name="blog_short_des" value="<?= $data2['blog_short_des'] ?>" class="form-control" id="email" placeholder="https://amanusingh.co">
                     </div>
                     <div class="form-group col-md-12">
                       <label for="email">link</label>
                       <input type="text" name="blog_link" value="<?= $data2['blog_link'] ?>" class="form-control" id="email" placeholder="https://amanusingh.co">
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
         <td><img src="../images/<?= $data2['blog_img'] ?>" class="oo img-thumbnail"></td>
         <td><?= $data2['blog_heading'] ?></td>
         <td><?= $data2['blog_short_des'] ?></td>
         <td><?= $data2['blog_link'] ?></td>
         <td>
           <a href="<?= $data2['blog_link'] ?>"> <button type="button" class="btn btn-success btn-sm">Visit</button></a>

           <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal<?= $data2['blog_id'] ?>">
             Edit
           </button> <a href="php/ublog.php?del=<?= $data2['blog_id'] ?>"><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
               Delete
             </button></a>
         </td>
       </tr>
     <?php $count++;
      } ?>
   </tbody>
 </table>