

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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=\, initial-scale=1.0">
        <title>cv add</title>
 
 </head>
 <body>
    <?php
           $showw= "SELECT * from cv";
           $output= mysqli_query($connection, $showw);
           $row = mysqli_fetch_assoc($output);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id=1;
            $files = $_POST['down'];
            $done= $_POST['done'];
            $get = $_POST['get'];
            $happy= $_POST['happy'];
        
            $updat = "UPDATE cv SET id='$id', files_download='$files',project_done='$done',get_awared='$get',Happy_client='$happy' WHERE id ='$id' ";
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
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']).'?id=664544';?>" method="POST" id="my-form" >   
                <div class="form_group">
                    <label for="dowm">number of files Download</label>
                    <input type="text" name="down" class="form-control"  value="<?php echo htmlspecialchars($row['files_download']); ?>"   >
                </div>
                <div class="form_group">
                    <label for="done">number of project done</label>
                    <input type="text" name="done" class="form-control"  value="<?php echo htmlspecialchars($row['project_done']); ?>"   >
                </div>
                <div class="form_group">
                    <label for="get">number of get awared</label>
                    <input type="text" name="get" class="form-control"  value="<?php echo htmlspecialchars($row['get_awared']); ?>"   >
                </div>
 
                <div class="form_group">
                    <label for="happy">number of happy clients</label>
                    <input type="text" name="happy" class="form-control"  value="<?php echo htmlspecialchars($row['Happy_client']); ?>"   >
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


