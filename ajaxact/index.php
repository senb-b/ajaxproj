<?php
require ('database/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ajax and jQuery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="assets/jquery-3.6.1.min.js"></script>
  <script type="text/javascript" src="assets/script.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>

<section class="container mb-3 mt-3">
	<div class="row" >
		<div class="card">
			<div class="card-header mb-4">
				Ajax & Jquery
			</div>
			<h4>Add Student</h4>	
				<form method="POST" id="addform">
						<input type="text" class="form-control" id="id" required placeholder="ID" name="id"><br>
						<input type="text" class="form-control" id="name" required placeholder="Name" name="name"><br>
						<input type="text" class="form-control" id="age" required placeholder="Age" name="age"><br>
						<input type="text" class="form-control mb-4" id="Course" required placeholder="Course" name="course">
				<input class="btn btn-success" type="submit" value="Submit" name="btnSbmt">
				</form>

			
			<div id="viewRecords">
					<table id="mytable" class="table table-striped-sm">
						<thead class="thead-dark">
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Age</th>
								<th>Course</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody class="tbody">
						</tbody>
					</table>
				</div>

		</div>
	</div>
	<div class ="card mt-4">
		<div class="card-header">
			Edit Student Info
		</div>
		<form id="editForm">
			<input type="number" class="form-control" name="id" id="id" required min="0">
			<input type="text" class="form-control" name="name" required>
			<input type="number" class="form-control" name="age" required  min="0" max="99">
			<input type="text" class="form-control" name="course" required>
			<input type="submit" class="btn btn-success" id="insert" />
		</form>
	
		</div>

</section>
	

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
</body>
</html>

