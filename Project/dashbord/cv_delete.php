


<?php

include_once('includes/appStyle.php');
include_once('includes/appJS.php');
include_once('includes/DB_connection.php');
include_once('includes/system_constants.php');


$sql = "DELETE FROM cv WHERE id=6";
$resu= mysqli_query($connection, $sql);

if ($resu) {
echo '<div class="row"><div class="col-12"><div class="alert alert-success">Record deleted successfully</div></div></div>'; 
} else {
echo '<div class="row"><div class="col-12"><div class="alert alert-success">Error deleting record</div></div></div>';     
}



?>
