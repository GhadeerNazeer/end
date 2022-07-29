 
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
        <title>post edit</title>
 
 </head>
 <body>
    <?php
          $showw= "SELECT * from posts";
          $output= mysqli_query($connection, $showw);
          $row = mysqli_fetch_assoc($output);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id=6;
            $post_name = $_POST['post_name'];
            $post_date= $_POST['post_date'];
            $post_desc =$_POST['post_desc'];
            $num =$_POST['num'];
            $img_nk = $_FILES['image']['name'];
            $img_tk = $_FILES['image']['tmp_name'];
            $img_ext = strtolower(pathinfo($img_nk, PATHINFO_EXTENSION));
            $img_new_k = strval(time() + rand(1, 1000000000). ".$img_ext");
            $img_path = 'uploads/images/' .$img_new_k;
            move_uploaded_file($img_tk, $img_path);
            $updat = "UPDATE posts SET id='$id' ,post_name='$post_name',post_date='$post_date',post_desc='$post_desc',number_of_comments='$num' ,image='$img_new_k'  WHERE id ='$id' ";

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
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']).'?id=664544';?>" method="POST" id="my-form" enctype="multipart/form-data">   
                                        <div class="form_group">
                                            <label for="post_name">name of the post</label>
                                            <input type="text" name="post_name" class="form-control"  value="<?php echo htmlspecialchars($row['post_name']); ?>"  >
                                        </div>
                                        <div class="form_group">
                                            <label for="post_date">date of the post</label>
                                            <input type="text" name="post_date" class="form-control" value="<?php echo htmlspecialchars($row['post_date']); ?>"   >
                                        </div>
                                    
                                        <div class="form_group">
                                            <label for="post_desc">description of the post</label>
                                            <input type="text" name="post_desc" class="form-control" value="<?php echo htmlspecialchars($row['post_desc']); ?>"   >
                                        </div>
                                        <div class="form_group">
                                            <label for="num">number of comments of the post</label>
                                            <input type="number" name="num" class="form-control"  value="<?php echo htmlspecialchars($row['number_of_comments']); ?>"  >
                                        </div>
                                        <div class="form_group">
                                            <label for="image">image for the post</label>
                                            <input type="file" name="image" class="form-control"   >
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




