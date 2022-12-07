<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
    <input placeholder="Login" type="text" name="login"><br>
    <input placeholder="Password" type="text" name="pass"><br>
    <input value="Zaloguj" type="submit">

    </form>
    <?php
if(isset($_POST['login']) && isset($_POST['password'])){
    echo "Login POST: ". $_POST['login']."<br>";
    $login = $_POST['login'];
    $password = $_POST['passowrd'];
    echo "Password POST: ". $_POST['password']."<br>";
    $du = mysqli_connect("127.0.0.1","root","","users");
    $wynik = mysqli_query($du, "SELECT login, password FROM us WHERE login = '$login';");
   
    $record = mysqli_fetch_assoc($wynik);
    if(($_POST["login"] == $record["login"]) &&
    ($_POST["password"] == $record["password"])){
        echo "Zalogowałeś się <br>";
        echo "Login MySQL: ". $record['login']."<br>";
    }else{
        echo "Nie masz konta";
    }
}
   
    ?>
</body>
</html>