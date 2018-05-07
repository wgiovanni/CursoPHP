<?php
require_once 'config.php';

$queryResult = $pdo->query("SELECT * FROM users");
?>
<html>
	<head>
		<title>DataBases with Platzi</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<body>
		<div class='container'>
		<h1>List Users</h1>
		<a href="index.php">Home</a>
		<table class="table">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php
				while($row = $queryResult->fetch(PDO::FETCH_ASSOC)){
					echo '<tr>';
					echo '<td>' . $row['name'];
					echo '<td>' . $row['email'];
					echo '<td><a href="update.php?id=' . $row['id'] . '">Edit</a></td>';
					echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';
					echo '</tr>';
				}
			?>
		</table>
		</div>

	</body>
</html>