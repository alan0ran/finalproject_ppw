<html>

<?php
include "db.php";

//take the data that user inpute
$name = $_POST['name'];
$nim = $_POST['nim'];
$semester = $_POST['semester'];
$gender = $_POST['gender'];
$place = $_POST['place'];
$date = $_POST['date'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];

//show the course that show by semester user inputed before
$syntax = $mydb->quertax = "select * from mata_kuliah";
$list = $mydb->query($syntax);
?>
<form action="" method="post" >
<table border="1">
<td>Course</td>
<td>semester</td>
<td>code</td>
<td>choose</td>

<?php
while($data = $list->fetch_object()) {
    ?>

<tr>
    <td><?=$data->courses?></td>
    <td><?=$data->semester?></td>
    <td><?=$data->code?></td>
    <td><input type="radio" name="course" value="<?=$data->courses?>"></td>
</tr>

<?php } ?>
</table>
<br>
<td><input type="submit" value="submit" name="submit" ></td>
</form>
<?php
if(isset($_POST['submit'])){
$courses = $_POST['course'];
}
$db = mysqli_query($mydb,"INSERT INTO user VALUES('$name','$nim','$semester','$gender','$place','$date','$address','$email','$phone_number','$courses')");
//$mydb->query($db);
?>
</html>