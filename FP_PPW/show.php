<html>

<head>
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>Show</title>
</head>

<body>
    <table class="table table-success table-striped">
        <th>Course</th>
        <th>semester</th>
        <th>code</th>

        <?php
            include 'db.php';
            $syntax = $mydb->quertax = "select * from mata_kuliah";
            $list = $mydb->query($syntax);
            while($data = $list->fetch_object()) {
        ?>

        <tr>
            <td><?=$data->courses?></td>
            <td><?=$data->semester?></td>
            <td><?=$data->code?></td>
        </tr>

        <?php } ?>
    </table>
    <a class="btn btn-primary" href="user-layer1.php">Back</a>
</body>

</html>