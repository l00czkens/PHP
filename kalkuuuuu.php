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
<input type="text" name="liczba1" size="10">
<select name="znak">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select>
<input type="text" name="liczba2" size="10">
<input type="submit" value="wykonaj" name="submit">
</form>
<?php 

$liczba1 = $_POST['liczba1'];
$liczba2 = $_POST['liczba2'];
$znak = $_POST['znak'];
$wynik = "";

switch ($znak)
{
 case "+":
   $wynik = $liczba1+$liczba2;
   break;
 case "-":
   $wynik = $liczba1-$liczba2;
   break;
 case "*":
   $wynik = $liczba1*$liczba2;
   break;
 case "/":
   $wynik = $liczba1/$liczba2;
   break;
}

//laczenie z baza dancyh
$conn = mysqli_connect("localhost","root","", "kalk");

//wstawianie wyniku z kalkuklatora
$sql = "INSERT INTO kalkulator(wynik) VALUES('$wynik')";
if (mysqli_query($conn, $sql)) {
  echo "dodano rekords";
} else {
  echo "nie dodano " . $sql . ":-" . mysqli_error($conn);
}

//wyswietla wynik
echo $wynik

?>
</body>
</html>