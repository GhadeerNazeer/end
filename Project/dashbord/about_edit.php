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
        <title>about add</title>
 
 </head>
 <body>
    <?php
           $showw= "SELECT * from about";
           $output= mysqli_query($connection, $showw);
           $row = mysqli_fetch_assoc($output);
   
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id=$row['id'];
  
            $n_birth = $_POST['birth'];
            $n_web= $_POST['web'];
            $n_phone = $_POST['phone'];
            $n_city= $_POST['city'];
            $n_age = $_POST['age'];
            $n_degree = $_POST['degree'];
            $n_mail = $_POST['mail'];
            $n_free = $_POST['freelance'];
            
            $fr = $_POST['visit_office'];

            $updat = "UPDATE about SET id='$id' ,birth_day='$n_birth', website='$n_web',phone ='$n_phone',city='$n_city',age= '$n_age', degree= '$n_degree',Mail= '$n_mail', freelance='$n_free',visit_office='$fr'  WHERE id ='$id' ";
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
                    <label for="birth">Birthday</label>
                    <input type="text" name="birth" class="form-control" value="<?php echo htmlspecialchars($row['birth_day']); ?>"   >
                </div>
                <div class="form_group">
                    <label for="web">Website</label>
                    <input type="text" name="web" class="form-control"  value="<?php echo htmlspecialchars($row['website']); ?>"  >
                </div>
                <div class="form_group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control"  value="<?php echo htmlspecialchars($row['phone']); ?>"  >
                </div>

                <div class="links">
                    <div class="form_group">
                        <label for="city">City</label>
                        <input type="text" name="city" class="form-control" value="<?php echo htmlspecialchars($row['city']); ?>"   >
                    </div>
                    <div class="form_group">
                        <label for="age">Age</label>
                        <input type="text" name="age" class="form-control"  value="<?php echo htmlspecialchars($row['age']); ?>"  >
                    </div>
                    <div class="form_group">
                        <label for="degree">Degree</label>
                        <input type="text" name="degree" class="form-control" value="<?php echo htmlspecialchars($row['degree']); ?>"  >
                    </div>
                    <div class="form_group">
                        <label for="mail">Mail</label>
                        <input type="text" name="mail" class="form-control"  value="<?php echo htmlspecialchars($row['Mail']); ?>" >
                    </div>
                    <div class="form_group">
                        <label for="freelance">Freelance</label>
                        <input type="text" name="freelance" class="form-control"  value="<?php echo htmlspecialchars($row['freelance']); ?>" >
                    </div>
                    <div class="form_group">
                        <label for="visit_office">visit office</label>
                        <input type="text" name="visit_office" class="form-control"  value="<?php echo htmlspecialchars($row['visit_office']); ?>" >
                    </div>
                </div>
        
                <br>
                <button class="btn btn-primary" type="submit" id="save-btn">Save</button> </form>
            

            <a href="about_delete.php"> <button class="btn btn-danger" type="submit" id="save-btn">delete</button>
               </a>

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


