
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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
            $birth = $_POST['birth'];
            $web= $_POST['web'];
            $phone = $_POST['phone'];
            $city= $_POST['city'];
            $age = $_POST['age'];
            $degree = $_POST['degree'];
            $mail = $_POST['mail'];
            $free = $_POST['freelance'];
            $inser = "INSERT INTO about (id,birth_day,website,phone,city,age,degree,Mail,freelance) VALUES ('1', '$birth', '$web', '$phone' ,'$city','$age', '$degree','$mail' ,'$free')";
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
                    <label for="birth">Birthday</label>
                    <input type="text" name="birth" class="form-control"   >
                </div>
                <div class="form_group">
                    <label for="web">Website</label>
                    <input type="text" name="web" class="form-control"   >
                </div>
                <div class="form_group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control"   >
                </div>

                <div class="links">
                    <div class="form_group">
                        <label for="city">City</label>
                        <input type="text" name="city" class="form-control"   >
                    </div>
                    <div class="form_group">
                        <label for="age">Age</label>
                        <input type="text" name="age" class="form-control"   >
                    </div>
                    <div class="form_group">
                        <label for="degree">Degree</label>
                        <input type="text" name="degree" class="form-control"  >
                    </div>
                    <div class="form_group">
                        <label for="mail">Mail</label>
                        <input type="text" name="mail" class="form-control"  >
                    </div>
                    <div class="form_group">
                        <label for="freelance">Freelance</label>
                        <input type="text" name="freelance" class="form-control"  >
                    </div>
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


