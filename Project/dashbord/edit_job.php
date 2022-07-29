
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
        <title>edit job</title>
 
 </head>
 <body>
    <?php
          $showw= "SELECT * from jobs";
          $output= mysqli_query($connection, $showw);
          $row = mysqli_fetch_assoc($output);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
             
            $id= 13;
            $n_job_name = $_POST['job_name'];
            $n_job_description= $_POST['job_description'];
            $img_nm = $_FILES['image']['name'];
            $img_tm = $_FILES['image']['tmp_name'];
            $img_ext = strtolower(pathinfo($img_nm, PATHINFO_EXTENSION));
            $img_new_nm = strval(time() + rand(1, 1000000000). ".$img_ext");
            $img_path = 'uploads/images/' .$img_new_nm;
            move_uploaded_file($img_tm, $img_path);
            $updat = "UPDATE jobs SET id='$id' ,job_name='$n_job_name',job_description='$n_job_description', image='$img_new_nm'  WHERE id ='$id' ";

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
                    <label for="job_name">name of job</label>
                    <input type="text" name="job_name" class="form-control"  value="<?php echo htmlspecialchars($row['job_name']); ?>"  >
                </div>
                <div class="form_group">
                    <label for="job_description">description of job</label>
                    <input type="text" name="job_description" class="form-control"  value="<?php echo htmlspecialchars($row['job_description']); ?>"  >
                </div>
                <div class="form_group">
                    <label for="image">image for the job</label>
                    <input type="file" name="image" class="form-control"   >
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




