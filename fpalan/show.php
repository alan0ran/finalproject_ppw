<html>

<table border="1">
<td>Course</td>
<td>semester</td>
<td>code</td>

<?php
include 'db.php';
$syntax = $mydb->quertax = "select * from mata_kuliah";
$list = $mydb->query($syntax);
while($data = $list->fetch_object()) {
    ?>

<tr>
    <td><?=$data->courses?></td>
    <td><?=$data->semester?></td>
    <td><?=$data->code?></td>
</tr>

<?php } ?>
</table>

</html>