
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
        <title>Experience add</title>
 
 </head>
 <body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
             
  
            $level = $_POST['name'];
            $period= $_POST['period'];
            $messge =$_POST['desc'];
    
            $inser = "INSERT INTO experience ( educational_level ,period ,description) VALUES ( '$level', '$period' ,'$messge' )";
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
                    <label for="name">Experience level</label>
                    <input type="text" name="name" class="form-control"   >
                </div>
                <div class="form_group">
                    <label for="period">Period</label>
                    <input type="text" name="period" class="form-control"   >
                </div>
            
                <div class="form_group">
                    <label for="desc">description</label>
                    <input type="text" name="desc" class="form-control"   >
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

