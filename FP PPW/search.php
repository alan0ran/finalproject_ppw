<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>

<body>

    <style>
    body {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        font-family: 'Jost', sans-serif;
        background: #006600;
    }

    .main {
        width: 350px;
        height: 500px;
        background: red;
        overflow: hidden;
        background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
        border-radius: 10px;
        box-shadow: 5px 20px 50px #000;
    }

    #chk {
        display: none;
    }

    .login {
        position: relative;
        width: 100%;
        height: 100%;
    }

    label {
        color: #fff;
        font-size: 2.3em;
        justify-content: center;
        display: flex;
        margin: 60px;
        font-weight: bold;
        cursor: pointer;
        transition: .5s ease-in-out;
    }

    input {
        width: 60%;
        height: 20px;
        background: #e0dede;
        justify-content: center;
        display: flex;
        margin: 20px auto;
        padding: 10px;
        border: none;
        outline: none;
        border-radius: 5px;
    }

    button {
        width: 60%;
        height: 40px;
        margin: 10px auto;
        justify-content: center;
        display: block;
        color: #fff;
        background: #573b8a;
        font-size: 1em;
        font-weight: bold;
        margin-top: 20px;
        outline: none;
        border: none;
        border-radius: 5px;
        transition: .2s ease-in;
        cursor: pointer;
    }

    button:hover {
        background: #6d44b8;
    }

    #chk:checked~.login {
        transform: translateY(-500px);
    }

    #chk:checked~.login label {
        transform: scale(1);
    }

    #chk:checked~.signup label {
        transform: scale(.6);
    }
    </style>
    <form action="" method="POST">
        <div class="main">
            <input type="checkbox" id="chk" aria-hidden="true">

            <div class="login">
                <form action="" method="POST">
                    <label for="chk" aria-hidden="true">Search Data</label>
                    <input type="text" name="name" placeholder="name" required="">
                    <input type="nim" name="nim" placeholder="nim" required="">
                    <button type="submit" name="search">Search</button>
                </form>
            </div>
        </div>
    </form>
</body>

<?php
include 'db.php';

if(isset($_POST['search'])){
    $name = $_POST['name'];
    $nim = $_POST['nim'];

    $querry = "SELECT * FROM mahasiswa WHERE name='$name' AND nim='$nim'";
    $syntax = $mydb->query($querry);

    while($row = $syntax->fetch_object()){
        $name = $row->name;
		$nim = $row->nim;
    }

    $sql = mysqli_query($mydb,$querry);
    $check = mysqli_num_rows($sql);

    if($check>0){
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['nim'] = $nim;

        $_SESSION['name'] = $name;
		$_SESSION['nim'] = $nim;

        header("location:search_place.php");
    }else{
        ?>
<div style="background-color: #fff">

    <p>We can't find the data with name <?= $name ?> and nim <?= $nim ?> click <a href="layer1.php">here</a> to Back to The Menu </p>
</div>
<?php
    }
}

?>

</html>