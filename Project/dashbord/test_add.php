
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
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>add</title>
 
 </head>
 <body>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $job = $_POST['job'];
        $description = $_POST['description'];
        $facebook = $_POST['fb'];
        $twitter = $_POST['tw'];
        $linkedin = $_POST['In'];
        $github = $_POST['Gt'];
		$img_name = $_FILES['image']['name'];
		$img_tmp = $_FILES['image']['tmp_name'];
		$img_ext = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));
		$img_new_name = strval(time() + rand(1, 1000000000)) . ".$img_ext";
		$img_path = 'uploads/images/' . $img_new_name;
		move_uploaded_file($img_tmp, $img_path);
        $insert = "INSERT INTO main (name, job, description ,facebook, twitter,linkedin,github,image) VALUES ('$name', '$job', '$description' ,'$facebook','$twitter', '$linkedin','$github' ,'$img_new_name')";

        $result = mysqli_query($connection, $insert);

        if ($result) {
            echo '<div class="row"><div class="col-12"><div class="alert alert-success">New record created</div></div></div>';				
        } else {
            echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed to create a new record</div></div></div>';				
        }
    }

   ?>

     <div class="container">
     <div class="row">
         <div class="col-12">    
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']).'?id564544';?>" method="POST" id="my-form" enctype="multipart/form-data">   
                <div class="form_group">
                    <label for="name">name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($row['name']); ?>" >
                </div>
                <div class="form_group">
                    <label for="job">job</label>
                    <input type="text" name="job" class="form-control" value="<?php echo htmlspecialchars($row['job']); ?>" >
                </div>
                <div class="form_group">
                    <label for="description">description</label>
                    <input type="text" name="description" class="form-control" value="<?php echo htmlspecialchars($row['description']); ?>" >
                </div>

                <div class="links">
                    <div class="form_group">
                        <label for="fb">Facebook</label>
                        <input type="text" name="fb" class="form-control" value="<?php echo htmlspecialchars($row['facebook']); ?>" >
                    </div>
                    <div class="form_group">
                        <label for="tw">Twitter</label>
                        <input type="text" name="tw" class="form-control" value="<?php echo htmlspecialchars($row['twitter']); ?>">
                    </div>
                    <div class="form_group">
                        <label for="In">Linkedin</label>
                        <input type="text" name="In" class="form-control" value="<?php echo htmlspecialchars($row['linkedin']); ?>">
                    </div>
                    <div class="form_group">
                        <label for="Gt">Github</label>
                        <input type="text" name="Gt" class="form-control" value="<?php echo htmlspecialchars($row['github']); ?>">
                    </div>
                </div>
            <br>
                <div class="form_group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control" >
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





