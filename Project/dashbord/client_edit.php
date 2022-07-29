

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
        <title>client edit</title>
 
 </head>
 <body>
    <?php
          $showw= "SELECT * from clients";
          $output= mysqli_query($connection, $showw);
          $row = mysqli_fetch_assoc($output);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id=3;
        
            $client_name = $_POST['client_name'];
            $client_description= $_POST['client_description'];
            $client_job= $_POST['client_job'];
            $img_n = $_FILES['image']['name'];
            $img_t = $_FILES['image']['tmp_name'];
            $img_ext = strtolower(pathinfo($img_n, PATHINFO_EXTENSION));
            $img_new_n = strval(time() + rand(1, 1000000000). ".$img_ext");
            $img_path = 'uploads/images/' .$img_new_n;
            move_uploaded_file($img_t, $img_path);
            $updat = "UPDATE clients SET id='$id' ,client_name='$client_name',client_description='$client_description',client_job='$client_job', image='$img_new_n'  WHERE id ='$id' ";

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
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']).'?id=664544';?>" method="POST" id="my-form" enctype="multipart/form-data">   
                <div class="form_group">
                    <label for="client_name">name of client</label>
                    <input type="text" name="client_name" class="form-control"  value="<?php echo htmlspecialchars($row['client_name']); ?>"  >
                </div>
                <div class="form_group">
                    <label for="client_description">description of client</label>
                    <input type="text" name="client_description" class="form-control"  value="<?php echo htmlspecialchars($row['client_description']); ?>"  >
                </div>
                <div class="form_group">
                    <label for="client_job">job of client</label>
                    <input type="text" name="client_job" class="form-control" value="<?php echo htmlspecialchars($row['client_job']); ?>"   >
                </div>
                <div class="form_group">
                    <label for="image">image for the client</label>
                    <input type="file" name="image" class="form-control"   >
                </div>
            
                <br>
                <button class="btn btn-primary" type="submit" id="save-btn">Edit</button>
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




