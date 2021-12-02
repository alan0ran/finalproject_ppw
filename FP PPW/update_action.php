<?php
include 'db.php';
$nim = $_GET['nim'];
session_start();

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $new = $_POST['nim'];
    $semester = $_POST['semester'];
    $gender = $_POST['gender'];
    $place = $_POST['place'];
    $date = $_POST['date'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $course = implode(',', $_POST['course']);

    $syntax = "UPDATE mahasiswa SET name='$name',nim=$new,semester='$semester',gender='$gender',place='$place',date='$date',address='$address',email='$email',phone_number='$phone_number',courses='$course' WHERE nim=$nim";
    $mydb->query($syntax);

    

}else{
    echo "gagal";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Overview</title>
</head>

<body>

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
            <td><?php echo $name ?></td>
        </tr>

        <tr>
            <td>NIM</td>
            <td><?php echo $new ?></td>
        </tr>

        <tr>
            <td>Semester</td>
                <td><?php echo $semester ?></td>
            </tr>

            <tr>
                <td>Gender</td>
                <td><?php echo $gender ?></td>
            </tr>

            <tr>
                <td>Place of Birth</td>
                <td><?php echo $place ?></td>
            </tr>

            <tr>
                <td>Date of Birth</td>
                <td><?php echo $date ?></td>
            </tr>

            <tr>
                <td>Address</td>
                <td><?php echo $address ?></td>
            </tr>

        <tr>
            <td>E-mail</td>
            <td><?php echo $email ?></td>
        </tr>

        <tr>
            <td>Phone number</td>
            <td><?php echo $phone_number ?></td>
        </tr>

        <tr>
            <td>Courses</td>
            <td><?php echo $course ?></td>
        </tr>

    </table>
    <a class="btn btn-primary" href="update.php?nim=<?php echo $nim ?>">Edit</a>
    <a class="btn btn-primary" href="session_destroy.php">Back</a>

</body>

</html>