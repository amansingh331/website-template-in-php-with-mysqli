   <h2>Newsletter</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Email</th>
              <th>Date</th>
              <th>ip_info</th>
              <th>browser</th>
            </tr>
          </thead>
          <tbody>
            
             <?php
    $query="SELECT * FROM newsletter ORDER BY newsletter_id DESC";
      $queryrun=mysqli_query($db,$query);
      $count=0;
      while($data=mysqli_fetch_array($queryrun)){
          ?>
          <tr>
          <td>#<?=$count+1?></td>
              <td><?=$data['newsletter_email']?></td>
              <td><?=$data['newsletter_date']?></td>
              <td><?=$data['newsletter_ip']?></td>
              <td><?=$data['newsletter_browser']?></td>
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