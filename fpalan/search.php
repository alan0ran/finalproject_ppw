<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>

<body>
    <h2>Search Data</h2>
    <table>
        <form action="" method="post">

            <tr>
                <td>name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>nim</td>
                <td><input type="text" name="nim"></td>
            </tr>

            <tr>
                <td><input type="submit" name="search" value="search"></td>
            </tr>
        </form>
    </table>
</body>

<?php
include 'db.php';
if(isset($_POST['search'])){

    $name = $_POST['name'];
    $nim = $_POST['nim'];

    $syntax = mysqli_query($mydb, "SELECT * FROM mahasiswa WHERE full_name = '$name' AND nim = '$nim'");

    if(mysqli_num_rows($syntax) == 1){
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['nim'] = $nim;
        print "<br>";
        print "<h3>Here the data for student with nim ".$_SESSION['nim']."</h3>";
        print "<br>";
        ?>

        <table border="1">
            <tr>
                <td>name</td>
                <td>nim</td>
                <td>semester</td>
                <td>course</td>
                <td>action</td>
            </tr>

            <?php
                while($data = mysqli_fetch_array($syntax)){
            ?>

                <tr>
                    <td><?= print $data['full_name'];?></td>
                    <td><?= print $data['nim'];?></td>
                    <td><?= print $data['semester'];?></td>
                    <td><?= print $data['course'];?></td>
                    <td>
                        <a class="update" href="update.php?nim=<?php echo $data['nim']; ?>">Update</a> |
				        <a class="delete" href="delete.php?nim=<?php echo $data['nim']; ?>">Delete</a>
                    </td>
                </tr>    

            <?php
                }
            ?>

        </table>

        <?php
    }else{
        print "<h2>we can't found the data with $name and $nim that you input</h2>";
    }

}

?>

</html>
