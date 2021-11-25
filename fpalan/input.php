<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>

<body>
    <h2>INPUT DATA</h2>
    <br>
    <table>
        <form action="course_input.php" method="post">
            <table>

                <tr>
                    <td>Full name</td>
                    <td><input type="text" name="name"></td>
                </tr>

                <tr>
                    <td>NIM</td>
                    <td><input type="text" name="nim"></td>
                </tr>

                <tr>
                    <td>Semester</td>
                    <td><input type="number" name="semester"></td>
                </tr>

                <tr>
                    <td>Gender</td>
                    <td><input type="radio" name='gender' value='male' />male
                        <input type="radio" name='gender' value='female' />female
                    </td>
                </tr>

                <tr>
                    <td>Place of Birth</td>
                    <td><input type="text" name="place"></td>
                </tr>

                <tr>
                    <td>Date of Birth</td>
                    <td><input type="date" name="date"></td>
                </tr>

                <tr>
                    <td>Address</td>
                    <td><textarea cols="22" rows="3" name="address"></textarea></td>
                </tr>

                <tr>
                    <td>E-mail</td>
                    <td><input type="email" name="email"></td>
                </tr>

                <tr>
                    <td>Phone number</td>
                    <td><input type="text" name="phone_number"></td>
                </tr>

                <tr>
                    <td>Are you sure?</td> <!--lupa cara ngisi didalam radio buttonnya yes ato no -->
                    <td><input type="radio"></td>
                </tr>

                <tr>
                    <td>
                        <br>
                        <input type="submit" name="submit" value="submit" />
                        <input type="reset" name="reset" value="reset" />
                    </td>
                </tr>

            </table>
        </form>


</body>

</html>

