<?php
    include_once('includes/appStyle.php');
    include_once('includes/appJS.php');
    include_once('includes/DB_connection.php');
    include_once('includes/system_constants.php');


?>

<!DOCTYPE html>
<html>
<head>
	<title>View Skills</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name of skill</th>
							<th>progress of skill</th> 
							<th>EDIT</th>
							<th>DELETE</th>
						</tr>
					</thead>

					<tbody>
						<?php

						$limit = 5;
						$page = (!empty($_POST['page'])) ? $_POST['page'] : 1;

						$offset = ($page - 1) * $limit;

						$query = "SELECT id, skill_name ,skill_progress from skills limit $limit offset $offset";
						$result = mysqli_query($connection, $query);

						if (mysqli_num_rows($result) > 0) {
							while ($row = mysqli_fetch_assoc($result)) {
								echo '<tr>' . '<td>' . $row['id'] . '</td>' . '<td>' . $row['skill_name'] . '</td>' . '<td>' . $row['skill_progress'] . '</td>' . '</td>' . '<td><a href="work_skills_edit.php?id=' . $row['id'] . '">Edit</a></td>' . '<td><form action="delete_skill.php" method="POST"><input type="hidden" name="id" value="' . $row['id'] . '"> <button type="button" class="btn btn-danger" id="delete-btn"0>DELETE</button> </form></td>' . '</tr>';
							}
						}

						// mysqli_close($connection);

						?>
					</tbody>
				</table>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<?php

				$limit = 5;

				$count_query = "select count(id) as rows_no from skills";
				$count_result = mysqli_query($connection, $count_query);
				$count_row = mysqli_fetch_assoc($count_result);
				$rows_no = $count_row['rows_no'];

				$pages = ceil($rows_no / $limit);

				echo '<ul class="pagination">';
				for ($i = 1 ; $i <= $pages ; $i++) {
					echo '<li class="page-item"><a href="?page='. $i .'" class="page-link">' . $i .  '</a></li>';
				}
				echo '</ul>';

				?>
			</div>
		</div>
	</div>

</body>
</html>

<script type="text/javascript">
	$('#delete-btn').click(function (event) {
		event.preventDefault();

		var result = confirm("Are you sure?");

		if (result == true) {
			$(this).parent('form').submit();
		}
	});
</script>