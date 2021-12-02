<!DOCTYPE html>
<html lang="en">
<head>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    
<center>
        <table>
            <tr>
                <td style="background-color:#99CCFF">
                    <center>Clear Inventory Data</center>
                </td>
            </tr>
            <tr>

                <?php
        include 'db.php';
        $nim = $_GET["nim"];
        $syntax = mysqli_query($mydb,"SELECT * FROM mahasiswa WHERE nim='$nim'");
        $data = mysqli_fetch_array($syntax)
        ?>

                <td>Are You Sure You Want To Remove The Data with Student Number <?php echo $data['nim']?> ?</td>
            </tr>
            <tr> 
                <th><a href="delete_action.php?nim=<?=$data['nim']?>" class="btn btn-primary">delete</a>
                <a href="search_place.php" class="btn btn-primary">cancel</a></th>
            </tr>

        </table>
    </center>


</body>
</html>