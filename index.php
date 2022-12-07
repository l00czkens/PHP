<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalkulator</title>
</head>
<body>
    <h1>
   <form method="POST" action="">
   <input type="text" name="liczba1" size="10">
   <select name="znak">
   <option>+</option>
   <option>-</option>
   <option>*</option>
   <option>/</option>
   </select>
   <input type="text" name="liczba2" size="10">
   <input type="submit" value="Oblicz">
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
   echo $liczba1." + ". $liczba2." = ".$wynik."<br>";

    
   
   function wyswietl($string, $int){
    return ($string * $int);
    }
    $wynik = wyswietl(420,123);
    echo  "420 * 123 = ".$wynik."<br>";


    function wyswietl2($string, $int){
    return ($string / $int);
    }
    $wynik2 = wyswietl2(420,20);
    echo "420 : 20 = " .$wynik2."<br>";



    function wyswietl3($string, $int){
    return ($string + $int);
    }
    $wynik3 = wyswietl3(420,123);
    echo "420 + 123 = "  .$wynik3."<br>";



    function wyswietl4($string, $int){
    return ($string - $int);
    }
    $wynik4 = wyswietl4(420,123);
    echo "420 - 123 = "  .$wynik4."<br>";
?>                                         
</h1>  
</body>
</html>  