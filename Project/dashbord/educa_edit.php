
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
        <title>Education add</title>
 
 </head>
 <body>
    <?php
            $showw= "SELECT * from education";
            $output= mysqli_query($connection, $showw);
            $row = mysqli_fetch_assoc($output);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id=$row['id'];
  
            $level = $_POST['name'];
            $period= $_POST['period'];
            $messge =$_POST['desc'];
            $updat = "UPDATE education SET id='$id' ,educational_level='$level', period='$period', description='$messge'  WHERE id ='$id' ";

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
                    <label for="name">Educational level</label>
                    <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($row['educational_level']); ?>"   >
                </div>
                <div class="form_group">
                    <label for="period">Period</label>
                    <input type="text" name="period" class="form-control" value="<?php echo htmlspecialchars($row['period']); ?>"   >
                </div>
            
                <div class="form_group">
                    <label for="desc">description</label>
                    <input type="text" name="desc" class="form-control" value="<?php echo htmlspecialchars($row['description']); ?>"   >
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
