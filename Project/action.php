
    <?php
 
        include_once('dashbord/includes/DB_connection.php');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
            $nm = $_POST['name'];
            $email= $_POST['email'];
            $subject= $_POST['subject'];
            $comment= $_POST['comments'];
    
            $inser = "INSERT INTO contact (id,name,email,subject,messge) VALUES ('1', '$nm', '$email', '$subject' ,'$comment')";
            $resut = mysqli_query($connection, $inser);

            if ($resut) {
                echo '<div class="row"><div class="col-12"><div class="alert alert-success">New record created</div></div></div>';				
            } else {
                echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed to create a new record</div></div></div>';				
            }
        }
   ?>



