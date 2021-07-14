<?php
include 'library_db.php';

$sql = mysqli_query($con, "SELECT * FROM subject");
$sql2 = mysqli_query($con, "SELECT * FROM subject");
?>

<form>
    <table>
        <tr>
            <td>Subject </td>
            <td>: </td>
            <td>
                <select name="Subject">
                <?php

                 while($row=mysqli_fetch_array($sql)) 
                 {
                    echo "<option>$row[SubjectCode]"." "."$row[SubjectName]</option>";
                }   
                ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Subject </td>
            <td>: </td>
            <td>
                <?php
                 while($row=mysqli_fetch_array($sql2)) 
                 {
                    echo "<input type='checkbox' name='subject'>$row[SubjectCode]"." "."$row[SubjectName]";
                    echo "<br>";
                 }
                ?>
                </select>
            </td>
        </tr>
    </table>
</form>