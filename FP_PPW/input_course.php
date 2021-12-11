<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Course</title>
</head>

<body>
    <style>
    body {
        background-image: url(https://cdn.idntimes.com/content-images/post/20190918/gedung-upn-1-r-011747ce97b876ce0b7dbf21b3bffe53_600x400.jpg);
        margin: auto;
        background-size: 100% 120%;
    }
    </style>

    <?php
include "db.php";
session_start();

//take the data that user inpute
if(isset($_POST['submit1'])){

    $courses = $_POST['course'];
    $semester = $_POST['semester'];
    $code = $_POST['code'];

    $syntax = mysqli_query($mydb,"INSERT INTO mata_kuliah VALUES('$courses','$semester','$code')");
?>

    <?php } ?>

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
                                        <td>Courses</td>
                                        <td><input type="text" name="course" required="true"></td>
                                    </tr>

                                    <tr>
                                        <td>Semester</td>
                                        <td><input type="int" name="semester" required="true"></td>
                                    </tr>

                                    <tr>
                                        <td>Code</td>
                                        <td><input type="int" name="code" required="true"></td>
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
                                    ?>
                                    <tr>
                                        <p>Inputed course complete, click <a href="admin-layer1.php">here</a> to Back to
                                            the Login Menu</p>
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