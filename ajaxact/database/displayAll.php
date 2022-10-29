<?php
require ('connect.php');

$query = "SELECT * FROM students";


$result = mysqli_query($connection , $query);
	if(mysqli_num_rows($result) > 0)
{
while ($row = mysqli_fetch_array($result)) {
					echo "<tr>"
						."<td>".$row['id']."</td>"
						."<td>".$row['name']."</td>"
						."<td>".$row['age']."</td>"
						."<td>".$row['course']."</td>"
						."<td>"
							
							."<button class='edit btn btn-success' value='".$row['id']."'>Edit</button> "
							."<button class = 'delete btn btn-warning'  value='".$row['id']."'>Delete</button>"
						."</td>"
						."</tr>";
				}


}
else
{
	echo ' <h5 style="text-align:center"><i class="la la-search"></i> No Result Found<h5>';
}

?>