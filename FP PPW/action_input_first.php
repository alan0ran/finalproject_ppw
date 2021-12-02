<?php
include "db.php";
session_start();

//take the data that user inpute
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
    $course = "temporary";

    $syntax = mysqli_query($mydb,"INSERT INTO mahasiswa VALUES('$name','$nim','$semester','$gender','$place','$date','$address','$email','$phone_number','$course')");
?>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    
body {
    background-image: url(https://cdn.idntimes.com/content-images/post/20190918/gedung-upn-1-r-011747ce97b876ce0b7dbf21b3bffe53_600x400.jpg);
    margin: auto;
    background-size: 100% 120%;
}
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h2>Inputed data Successfull, click 
                            <a class="edit" href="course_input.php?nim=<?php echo $nim ?>">here</a> 
                            To Input Course</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<?php
}
?>

</html>