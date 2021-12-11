<?php
include "db.php";
session_start();

$nim = $_SESSION['nim'];

$syntax = $mydb->quertax = "select * from mahasiswa where nim = '$nim'";
$list = $mydb->query($syntax);
$data2 = $list->fetch_object();

$semester = $data2->semester;

?>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>course input</title>
</head>

<body>
    <style>
    body {
        background-image: url(https://cdn.idntimes.com/content-images/post/20190918/gedung-upn-1-r-011747ce97b876ce0b7dbf21b3bffe53_600x400.jpg);
        margin: auto;
        background-size: 100% 120%;
    }
    </style>
    <br>
    <table>
        <td>
            <h2 style="background-color:#F7F7F7">Input Course</h2>
        </td>
    </table>
    <?php
    $syntax2 = $mydb->quertax = "select * from mata_kuliah where semester = '$semester'";
    $list2 = $mydb->query($syntax2);
?>
    <form action="input-success.php?nim=<?php echo $nim ?>" method="post">
        <table class="table table-success table-striped">

            <td>Course</td>
            <td>semester</td>
            <td>code</td>
            <td>choose</td>

            <?php
while($data = $list2->fetch_object()) {
    ?>

            <tr>
                <td><?=$data->courses?></td>
                <td><?=$data->semester?></td>
                <td><?=$data->code?></td>
                <td><input type="checkbox" name="course[]" value="<?=$data->courses?>"></td>
            </tr>

            <?php } ?>
        </table>

        <input type="submit" name="submit" class="btn btn-primary">

    </form>

</body>

</html>