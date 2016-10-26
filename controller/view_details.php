<?php
include('../config/mysqliConnect.php');
include('../views/assets.php');
// get id from url
if(isset($_GET['id']))
{
   $id = $_GET['id'];
$query = "SELECT * FROM news WHERE id =$id";
// execute query
$select = mysqli_query($conn, $query);
if(mysqli_num_rows($select) > 0)
{
   $latest_news = mysqli_fetch_assoc($select);
   ?>
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                 <div class="page-header">
                  <h4 class="text-center">New Details</h4>
                 </div>
                 <div class="col-md-3">
                  <div class="page-header">
                     <h5 class="text-center"> Categories</h5>
                     
                  </div>
                  <?php
                    $cat = "select * from categories";
                    $get_cat = mysqli_query($conn, $cat);
                    if(mysqli_num_rows($get_cat) > 0)
                    {
                      echo "<ul>";
                      while ($rec = mysqli_fetch_assoc($get_cat)) {
                         
                        ?>
                           <li>
                           <a href="view_details.php?c_id=<?php echo $rec['id']; ?>"><?php echo $rec['name']; ?></a></li>
                        <?php

                      }
                      echo "</ul>";
                    }
                  ?>
                     
                 </div>
                 <div class="col-md-6">
                   <div class="page-header">
                     <h5><?php echo $latest_news['title'];  ?></h5>
                   </div>
                   <p class="text-muted">
                     <div class="col-md-12">
                     <div class="col-md-2">
                      <img src="../uploads/<?php echo $latest_news['photo']; ?>">
                     </div>
                     <div class="col-md-8">
                      <?php echo $latest_news['content']; ?>
                     </div>
                     </div>
                     
                   </p>
                   <p><strong>Author:</strong>
                     <?php echo $latest_news['author']; ?>
                   </p>
                   <p><strong>Location:</strong>
                     <?php echo $latest_news['location']; ?>
                   </p>
                 </div>
                 <div class="col-md-3">
                  <div class="page-header">
                     <h5 class="text-center">Related News</h5>
                  </div>
                  <?php
                      $c_id = $latest_news['category'];
                      $related_news = "SELECT * FROM news WHERE category= $c_id";
                      $run_q1 = mysqli_query($conn, $related_news);
                      if(mysqli_num_rows($run_q1) > 0 )
                      {
                        echo "<ul>";
                        while ($rel = mysqli_fetch_assoc($run_q1)) {
        
                          echo "<li><a href=''>".$rel['title']."</a></li>";
                        }
                        echo "</ul>";
                      }
                     ?>
                 </div>
              </div>
            </div>
        </div>
   <?php
}
 
}
if(isset($_GET['c_id']))
{
   ?>
    <div class="container">
       <div class="page-header">
         <h3 class="text-center">Categories</h3>
       </div>
      <div class="col-md-12">
      <div class="col-md-3">
        <?php
                    $cat = "select * from categories";
                    $get_cat = mysqli_query($conn, $cat);
                    if(mysqli_num_rows($get_cat) > 0)
                    {
                      echo "<ul>";
                      while ($rec = mysqli_fetch_assoc($get_cat)) {
                         
                        ?>
                           <li>
                           <a href="view_details.php?c_id=<?php echo $rec['id']; ?>"><?php echo $rec['name']; ?></a></li>
                        <?php

                      }
                      echo "</ul>";
                    }
                  ?>
            <div class="page-header">
              <p>Related News</p>
            </div>
       </div>
       <div class="col-md-9">
         <?php
          $c_id = $_GET['c_id'];
          $q = "SELECT * FROM news WHERE category=$c_id";
          $run_q = mysqli_query($conn,$q);
          if(mysqli_num_rows($run_q) > 0)
          {
             while ($cat = mysqli_fetch_assoc($run_q)) {
                $content = $cat['content'];
                $str = substr($content, 0,100);
                ?>
                  <div class="row" style="padding:20px; border-bottom:1px solid gray;">
                    <h5>
                      <a href="view_details.php?id=<?php  echo $cat['id'];?>"><?php echo $cat['title'];?></a>
                     </h5>
                    <span><?php echo $str; ?>   <a href="view_details.php?id=<?php  echo $cat['id'];?>" >Read More ... </a></span>
                  </div>
                <?php
             }
             
          }
        ?>
    </div>
   </div>
   </div>

    
    <?php
}

?>

