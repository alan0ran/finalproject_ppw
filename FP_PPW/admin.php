<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
        background-image: url(https://cdn.idntimes.com/content-images/post/20190918/gedung-upn-1-r-011747ce97b876ce0b7dbf21b3bffe53_600x400.jpg);
    }

    .main {
        width: 350px;
        height: 500px;
        background: red;
        overflow: hidden;
        background-color: #006600;
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
                    <label for="chk" aria-hidden="true">Admin Login</label>
                    <input type="text" name="username" placeholder="username" required="true">
                    <input type="password" name="password" placeholder="password" required="true">
                    <button type="submit" name="login">Login</button>
                </form>
                <center>
                    <table>
                    <?php
include 'db.php';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $querry = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $syntax = $mydb->query($querry);

    while($row = $syntax->fetch_object()){
        $username = $row->username;
		$password = $row->password;
    }

    $sql = mysqli_query($mydb,$querry);
    $check = mysqli_num_rows($sql);

    if($check>0){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        header("location:admin-layer1.php");
    }else{
        ?>
<div style="color:#fff">

    <p>We can't find the data with username <?= $username ?> click <a href="index.php">here</a> to Back to The Menu </p>
</div>
<?php
    }
}

?>
                    </table>
                </center>
            </div>
        </div>
    </form>
</body>

</html>