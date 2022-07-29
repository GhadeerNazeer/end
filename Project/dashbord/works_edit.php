
<?php
    include_once('includes/appStyle.php');
    include_once('includes/appJS.php');
    include_once('includes/DB_connection.php');
    include_once('includes/system_constants.php');


?>
<!DOCTYPE html>
<html lang="en">
    
 <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" co ntent="IE=edge">
        <meta name="viewport" content="width=\, initial-scale=1.0">
        <title>edit works</title>
 
 </head>
 <body>
    <?php
          $showw= "SELECT * from works";
          $output= mysqli_query($connection, $showw);
          $row = mysqli_fetch_assoc($output);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
             
            $id= 2;
            $n_lin =$_POST['link'];
           
            $img_nm = $_FILES['image']['name'];
            $img_tm = $_FILES['image']['tmp_name'];
            $img_ext = strtolower(pathinfo($img_nm, PATHINFO_EXTENSION));
            $img_new_nm = strval(time() + rand(1, 1000000000). ".$img_ext");
            $img_path = 'uploads/images/' .$img_new_nm;
            move_uploaded_file($img_tm, $img_path);
            $updat = "UPDATE works SET id='$id' , image='$img_new_nm' , link ='$n_lin'  WHERE id ='$id' ";

            $resut = mysqli_query($connection, $updat);

            if ($resut) {
                echo '<div class="row"><div class="col-12"><div class="alert alert-success">New record created</div></div></div>';				
            } else {
                echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed to create a new record</div></div></div>';				
            }
        }
   ?>
     <div class="container">
     <div class="row">
         <div class="col-12">    
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']).'?id=664544';?>" method="POST" id="my-form" enctype="multipart/form-data" >   
                 
                <div class="form_group">
                    <label for="image">image for the work</label>
                    <input type="file" name="image" class="form-control"   >
                </div>
                <div class="form_group">
                        <label for="link">link for the work</label>
                        <input type="text" name="link" class="form-control"  value="<?php echo htmlspecialchars($row['link']); ?>"  >
                    </div>
                <br>
                <button class="btn btn-primary" type="submit" id="save-btn">Save</button>
            </form>

         </div>

       </div> 
    </div>

     <script type="text/javascript">
         $('#save-btn').click(function(event){
             event.preventDefault();
             var result= confirm("Are you sure!");
             if(result==true){
                 $("#my-form").submit();
             }

         }
         
         );
     </script>
     
 </body>

</html>




