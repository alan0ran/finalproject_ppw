<?php
session_start();
include 'db.php';

if(isset($_POST['submit'])){
    $course = implode(',', $_POST['course']);
    $nim = $_GET['nim'];

    $syntax = "UPDATE penyimpanan SET courses='$course' WHERE nim='$nim'";
    $mydb->query($syntax);
}

?>

<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
</head>

<body>

    <center>
        <h2>Data Succesfully Added</h2>
    </center>

        <?php
            $query = mysqli_query($mydb,"SELECT * FROM penyimpanan WHERE nim='$nim' ");
            while($data = mysqli_fetch_array($query)){
        ?>
        <table class="table">

        <tr>
            <td>
                <h2>
                    Data Overview
                </h2>
            </td>
        </tr>

        <tr>
            <td>Full name</td>
            <td><?php echo $data['name'] ?></td>
        </tr>

        <tr>
            <td>NIM</td>
            <td><?php echo $data['nim'] ?></td>
        </tr>

        <tr>
            <td>Semester</td>
            <td><?php echo $data['semester'] ?></td>
        </tr>

        <tr>
            <td>Courses</td>
            <td><?php echo $data['courses'] ?></td>
        </tr>

    </table>
<?php } ?>
<a class="btn btn-primary" href="user-layer1.php">Back</a>
</body>

</html>
