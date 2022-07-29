
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
        <title>skill add</title>
 
 </head>
 <body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
             
  
            $skill_name = $_POST['skill_name'];
            $skill_progress= $_POST['skill_progress'];
    
            $inser = "INSERT INTO skills ( skill_name ,skill_progress) VALUES ( '$skill_name', '$skill_progress' )";
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
                    <label for="skill_name">name of skill</label>
                    <input type="text" name="skill_name" class="form-control"   >
                </div>
                <div class="form_group">
                    <label for="skill_progress">progress of skill</label>
                    <input type="text" name="skill_progress" class="form-control"   >
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