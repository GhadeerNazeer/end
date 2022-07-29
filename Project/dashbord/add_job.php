
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
        <title>adding job</title>
 
 </head>
 <body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
             
  
            $job_name = $_POST['job_name'];
            $job_description= $_POST['job_description'];
            $img_nm = $_FILES['image']['name'];
            $img_tm = $_FILES['image']['tmp_name'];
            $img_ext = strtolower(pathinfo($img_nm, PATHINFO_EXTENSION));
            $img_new_nm = strval(time() + rand(1, 1000000000). ".$img_ext");
            $img_path = 'uploads/images/' .$img_new_nm;
            move_uploaded_file($img_tm, $img_path);
    
            $inser = "INSERT INTO jobs( job_name ,job_description , image) VALUES ( '$job_name', '$job_description' ,'$img_new_nm')";
            $resut = mysqli_query($connection, $inser);

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
                    <input type="text" name="job_name" class="form-control"   >
                </div>
                <div class="form_group">
                    <label for="job_description">description of job</label>
                    <input type="text" name="job_description" class="form-control"   >
                </div>
                <div class="form_group">
                    <label for="image">image for the job</label>
                    <input type="file" name="image" class="form-control" >
                </div>
            
                <br>
                <button class="btn btn-primary" type="submit" id="save-btn">Add</button>
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