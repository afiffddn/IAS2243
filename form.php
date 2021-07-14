<html>
<head>
  <title>Form Interaction using PHP</title>

</head>
<body>
	<form action="form_process.php" method="POST">
	<table>
	<tr>
       <td> Name </td>
        <td>:</td>
        <td><input type="text" name="first_name"></td>
    </tr>

    <tr>
    	<td> Gender </td>
    	<td> : </td>
    	<td>
    		<input type="radio" name="gender" value="Female">Female
    		<input type="radio" name="gender" value="Male">Male
    	</td>
    </tr>

    <tr>
    	<td>Subject</td>
    	<td> : </td>
    	<td>
    		<select name="subject">
    			<option value="WAD"> Web Based Application</option>
    			<option value="Java">Java Programming</option>
    		</select>
    	</td>
    </tr>

    <tr>
    	<td><input type="submit" name="submit" value="register"></td>
    </tr>
	</table>
</form>
</body>
</html>