   <h2>User Messages & Querys</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Subject</th>
              <th>Message</th>
              <th>Date</th>
              <th>ip_info</th>
              <th>browser</th>
            </tr>
          </thead>
          <tbody>
            
             <?php
    $query="SELECT * FROM contact ORDER BY contact_id DESC";
      $queryrun=mysqli_query($db,$query);
      $count=0;
      while($data=mysqli_fetch_array($queryrun)){
          ?>
          <tr>
          <td>#<?=$count+1?></td>
              <td><?=$data['contact_name']?></td>
              <td><?=$data['contact_email']?></td>
              <td><?=$data['contact_subject']?></td>
              <td><?=$data['contact_message']?></td>
              <td><?=$data['contact_date']?></td>
              <td><?=$data['contact_ip']?></td>
              <td><?=$data['contact_browser']?></td>
            </tr>
          <?php
              $count++;
      }
      if($count==0){ ?>
          <td colspan="5" align="center"> Currenty There Is No Messages or Queries !</td>
      <?php }
        ?>
              
          </tbody>
        </table>
      </div>