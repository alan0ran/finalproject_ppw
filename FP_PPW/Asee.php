<?php
include 'db.php';
session_start();
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>

<body>
    <table class="table">
        <tr style="background-color:#99CCFF">
            <th>Name</th>
            <th>NIM</th>
            <th>Semester</th>
            <th>Courses</th>
            <th colspan="2">Action</th>
        </tr>

        <?php
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];

        $query = mysqli_query($mydb,"SELECT * FROM penyimpanan");
        while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
        <th><?php echo $data['name'] ?></th>
        <th><?php echo $data['nim'] ?></th>
        <th><?php echo $data['semester'] ?></th>
        <th><?php echo $data['courses'] ?></th>
        <th><a href="Aedit.php?nim=<?=$data['nim']?>" class="btn btn-primary">Edit</a>
        <a href="Adelete.php?nim=<?=$data['nim']?>" class="btn btn-primary">Delete Data</a></th>
        </tr>
        <?php } ?>

    </table>
    <a class="btn btn-primary" href="admin-layer1.php">Back</a>

</body>

</html>