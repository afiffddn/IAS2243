<?php
include 'library_db.php';

$sql=mysqli_query($con, "SELECT * FROM student");

?>
<form action="search.php" method="post">
<table>
	<tr>
		<td>Student ID</td>
		<td>:</td>
		<td>
			<select name="student">
				<?php
                    while($row=mysqli_fetch_array($sql))
                    {
                    	echo "<option></option>";
                    }
				?>
			</select>
		</td>
	</tr>

	<tr>
		<td><input type="submit" value="Search" name="submit"></td>
	</tr>
</table>	
</form>