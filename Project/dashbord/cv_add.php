
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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
            $files = $_POST['down'];
            $done= $_POST['done'];
            $get = $_POST['get'];
            $happy= $_POST['happy'];
        
            $inser = "INSERT INTO cv ( files_download,project_done,get_awared,Happy_client) VALUES ( '$files', '$done', '$get' ,'$happy' )";
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
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']).'?id=664544';?>" method="POST" id="my-form" >   
                <div class="form_group">
                    <label for="dowm">number of files Download</label>
                    <input type="text" name="down" class="form-control"   >
                </div>
                <div class="form_group">
                    <label for="done">number of project done</label>
                    <input type="text" name="done" class="form-control"   >
                </div>
                <div class="form_group">
                    <label for="get">number of get awared</label>
                    <input type="text" name="get" class="form-control"   >
                </div>
 
                <div class="form_group">
                    <label for="happy">number of happy clients</label>
                    <input type="text" name="happy" class="form-control"   >
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

