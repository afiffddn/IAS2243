<table border="1">
	<tr>
		<th>Student ID</th>
		<th>Student Name</th>
		<th>Student Address</th>
		<th>Date</th>
	</tr>
<?php  

include 'library_db.php';
//follow the library soon

$sql = mysqli_query($con,"SELECT * FROM student AS a INNER JOIN registration AS b ON a.Student_Id = b.Student_Id WHERE a.Student_Id= 1 OR a.Student_Id=2" ); 

while($row=mysqli_fetch_array($sql))
{
	echo "<tr>";
	echo "<td>$row[Student_Id]</td>";
	echo "<td>$row[StudentName]</td>";
	echo "<td>$row[StudentAddress]</td>";
	echo "<td>$row[Date]</td>";
	echo "</tr>";
}
?>
</table>