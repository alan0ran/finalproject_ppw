<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Data</title>
</head>

<body>

    <?php
include "db.php";
session_start();
?>
    <style>
    body {
        background-image: url(https://cdn.idntimes.com/content-images/post/20190918/gedung-upn-1-r-011747ce97b876ce0b7dbf21b3bffe53_600x400.jpg);
        margin: auto;
        background-size: 100% 120%;
    }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5 " style="background-color:#D3E4CD">
                        <h5 class="card-title text-center mb-5 fw-light fs-2">Input Data</h5>
                        <table>
                            <form action="" method="post">
                                <table>

                                    <tr>
                                        <td>Full name</td>
                                        <td><input type="text" name="name" required="true"></td>
                                    </tr>

                                    <tr>
                                        <td>NIM</td>
                                        <td><input type="text" name="nim" required="true"></td>
                                    </tr>

                                    <tr>
                                        <td>Password</td>
                                        <td><input type="password" name="password" required="true"></td>
                                    </tr>

                                    <tr>
                                        <td>Semester</td>
                                        <td><input type="number" name="semester" required="true"></td>
                                    </tr>

                                    <tr>
                                        <td>Gender</td>
                                        <td><input type="radio" name='gender' value='male' />male
                                            <input type="radio" name='gender' value='female' />female
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Place of Birth</td>
                                        <td><input type="text" name="place" required="true"></td>
                                    </tr>

                                    <tr>
                                        <td>Date of Birth</td>
                                        <td><input type="date" name="date" required="true"></td>
                                    </tr>

                                    <tr>
                                        <td>Address</td>
                                        <td><input type="text" name="address" required="true"></td>
                                    </tr>

                                    <tr>
                                        <td>E-mail</td>
                                        <td><input type="email" name="email" required="true"></td>
                                    </tr>

                                    <tr>
                                        <td>Phone number</td>
                                        <td><input type="text" name="phone_number" required="true"></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <br>
                                            <input type="submit" name="submit1" class="btn btn-primary" />
                                            <input type="reset" name="reset" value="reset" class="btn btn-danger" />
                                        </td>
                                    </tr>
                                    <?php
                                    if(isset($_POST['submit1'])){
                                            $name = $_POST['name'];
                                            $nim = $_POST['nim'];
                                            $semester = $_POST['semester'];
                                            $gender = $_POST['gender'];
                                            $place = $_POST['place'];
                                            $date = $_POST['date'];
                                            $address = $_POST['address'];
                                            $email = $_POST['email'];
                                            $phone_number = $_POST['phone_number'];
                                            $pass = $_POST['password'];

                                            $syntax = mysqli_query($mydb,"INSERT INTO mahasiswa VALUES('$name','$nim','$semester','$gender','$place','$date','$address','$email','$phone_number','$pass')");
                                            $syntax2 = mysqli_query($mydb,"INSERT INTO penyimpanan VALUES('$name','$nim','$semester','','')");
                                    ?>
                                        <tr>
                                            <p>Registration Complete, click <a href="session_destroy.php">here</a> to Back to the Login Menu</p>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>