<?php

    session_start();
    include 'db.php';
    $nim = $_GET['nim'];
    $syntax = mysqli_query($mydb,"SELECT * FROM mahasiswa WHERE nim='$nim'");
    $data = mysqli_fetch_array($syntax);
    $semester = $data['semester'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>

    <form action="Aedit_action.php?nim=<?php echo $nim; ?>" method="post">
        <table class="table">
            <tr>
                <td>
                    <h2>Update data</h2>
                </td>
            </tr>

            <tr>
                <td>Full name</td>
                <td><input type="text" name="name" value="<?php echo $data['name'] ?>"></td>
            </tr>

            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" value="<?php echo $data['nim'] ?>"></td>
            </tr>

            <tr>
                <td>Semester</td>
                <td><input type="number" name="semester" value="<?php echo $data['semester'] ?>"> </td>
            </tr>

            <tr>
                <td>Gender</td>
                <td><input id="cek" type="radio" name='gender' value='male' />male
                    <input id="cek" type="radio" name='gender' value='female' />female
                </td>
            </tr>

            <tr>
                <td>Place of Birth</td>
                <td><input type="text" name="place" value="<?php echo $data['place'] ?>"> </td>
            </tr>

            <tr>
                <td>Date of Birth</td>
                <td><input type="date" name="date" value="<?php echo $data['date'] ?>"></td>
            </tr>

            <tr>
                <td>Address</td>
                <td><input type="text" name="address" value="<?php echo $data['address']?>" cols="22" rows="3"
                        name="address" value="<?php echo $data['address']?>"></td>
            </tr>

            <tr>
                <td>E-mail</td>
                <td><input type="email" name="email" value="<?php echo $data['email']?>"></td>
            </tr>

            <tr>
                <td>Phone number</td>
                <td><input type="text" name="phone_number" value="<?php echo $data['phone_number']?>"></td>
            </tr>

            <tr>
                <td>
                    <h2>Courses</h2>
                </td>
            </tr>

            <td>Course</td>
            <td>semester</td>
            <td>code</td>
            <td>choose</td>

            <?php
                $syntax = $mydb->quertax = "SELECT * from mata_kuliah WHERE semester = $semester";
                $list = $mydb->query($syntax);
                while($data = $list->fetch_object()) {
                ?>

            <tr>
                <td><?=$data->courses?></td>
                <td><?=$data->semester?></td>
                <td><?=$data->code?></td>
                <td><input id="cek" type="checkbox" name="course[]" value="<?=$data->courses?>"></td>
            </tr>

            <?php } ?>

            <tr>
                <td>
                    <br>
                    <input type="submit" name="submit" class="btn btn-primary">
                    <input type="reset" name="reset" class="btn btn-danger" />
                </td>
            </tr>

        </table>

    </form>

</body>

</html>