<?php
include 'library_db.php';

$student=$_GET['Student_Id'];

echo $student;
$sql=mysqli_query($con,"SELECT * FROM student WHERE Student_Id='$student'");
$result = mysqli_fetch_array($sql);

if(isset($_POST['update']))
{
	$StudentName = $_POST['StudentName'];
	$StudentAddress = $_POST['StudentAddress'];
	$sql2 = mysqli_query($con, "UPDATE student SET StudentName='$StudentName' , StudentAddress = '$StudentAddress' WHERE Student_Id ='$student'");

	if(!$sql2)
	{
		echo "Update Fail";
	}

	else
	{
		echo "Update Successful";
	}
}

?>

<title>Update Student Record</title>

<form action="" method="POST">

<table>
	<tr>
		<td>Student Name</td>
		<td>:</td>
		<td><input type="text" name="StudentName" value="<?php echo $result['StudentName']; ?>"></td>
	</tr>

	<tr>
		<td>Student Address</td>
		<td>:</td>
		<td><input type="text" name="StudentAddress" value="<?php echo $result['StudentAddress']; ?>"></td>
	</tr>

	<tr>
		<td>Student Username</td>
		<td>:</td>
		<td><input type="text" name="username" disabled value="<?php echo $result['username']; ?>"></td>
	</tr>

	<tr>
		<td><input type="submit" value="Update" name="update"></td>
	</tr>
</table>

</form>

<?php

?>