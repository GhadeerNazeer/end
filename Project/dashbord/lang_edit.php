

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
        <title>language edit</title>
 
 </head>
 <body>
    <?php
            $showw= "SELECT * from lang";
            $output= mysqli_query($connection, $showw);
            $row = mysqli_fetch_assoc($output);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id= 3;
            $lang_name = $_POST['lang_name'];
            $lang_desc= $_POST['lang_desc'];
            $lang_val =$_POST['lang_val'];
    
            $updat = "UPDATE lang SET id='$id' ,lang_name='$lang_name', lang_desc='$lang_desc', val='$lang_val'  WHERE id ='$id' ";

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
                    <label for="lang_name">name of language</label>
                    <input type="text" name="lang_name" class="form-control" value="<?php echo htmlspecialchars($row['lang_name']); ?>"   >
                </div>
                <div class="form_group">
                    <label for="lang_desc">description of language</label>
                    <input type="text" name="lang_desc" class="form-control" value="<?php echo htmlspecialchars($row['lang_desc']); ?>"   >
                </div>
            
                <div class="form_group">
                    <label for="lang_val">evaluate of langauge</label>
                    <input type="text" name="lang_val" class="form-control" value="<?php echo htmlspecialchars($row['val']); ?>"   >
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