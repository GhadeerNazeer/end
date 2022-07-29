
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

        $showw= "SELECT * from skills ";
        $output= mysqli_query($connection, $showw);
        $row = mysqli_fetch_assoc($output);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id= $row['id'];
            $n_skill_name = $_POST['skill_name'];
            $n_skill_progress= $_POST['skill_progress'];
            $updat = "UPDATE skills SET id='$id' ,skill_name='$n_skill_name',skill_progress='$n_skill_progress'  WHERE id ='$id' ";
            $resu= mysqli_query($connection, $updat);
  
            if ($resu) {
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
                    <input type="text" name="skill_name" class="form-control"  value="<?php echo htmlspecialchars($row['skill_name']); ?>" >
                </div>
                <div class="form_group">
                    <label for="skill_progress">progress of skill</label>
                    <input type="text" name="skill_progress" class="form-control"  value="<?php echo htmlspecialchars($row['skill_progress']); ?>" >
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