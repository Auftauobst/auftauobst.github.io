<!DOCTYPE html>
<html lang="de">
<link rel="shortcut icon" type="image/png" href="img/icon.png">
<link rel="stylesheet" href="css/index.css">
<html>
<head>
<title>Polynomdivision Rechner</title>
</head>
<body>

<h1 class="header">Dies ist ein Polynomdivisions Rechner</h1>
<form action="" method="post" class="form"> 
<div class="inputfilds">
<div>
<input class="x3" name="3x" type="number" placeholder="Polynom dritten Grades bitte hier eintragen(x<sup>3</sup>)">x<sup>3</sup></input>
</div>
<div>
<input class="x3" name="2x" type="number" placeholder="Polynom zweiten Grades bitte hier eintragen(x<sup>2</sup>)">x<sup>2</sup></input>
</div>
<div>
<input class="x3" name="x" type="number"placeholder="Polynom ersten Grades bitte hier eintragen(x)">x</input>
</div>
<div>
<input class="x3" name="y"type="number" placeholder="Y-Achsenabschnitt bitte hier eintragen(z.B. +4)"></input>
</div>
<div>
<input class="x3" name="T"type="number" placeholder="Den von Ihnen zuvor ermittelten Teiler bitte hier eintragen"></input>
</div>
</div>

<button class="btn" name="btn" type="submit">Nach langer Überlegung bestätige ich meine Eingabe</button>
</form>
<?php
if (isset($_POST['btn'])) {
    $xdrei = $_POST['3x'];
    $xzwei = $_POST['2x'];
    $teiler = $_POST['T'];
    $x = $_POST['x'];
    $y = $_POST['y'];

$namex3 = $_POST['3x'];
$namex2 = $_POST['2x'];
$namex = $_POST['x']; //7 
$namey = $_POST['y'];
$teiler = $_POST['T'];

echo '<p>Hinweise!!!:</br>
 -Sollte es ein Bruch geben so Multiplizieren Sie dies im Dezimalbereich, bis es kein Komma mehr gibt. WICHTIG! Am Ende wieder zurück Dividieren</br>
 -Ändern Sie das Vorzeichen des Teilers um Kein Error zu erhalten!</p>';
 if (empty($teiler)) {
    if ($namex3 * (-6) ** 3 + $namex2 * (-6) ** 2 + $namex * (-6) + $namey === 0) {
        $teiler = -6;
    
    }
    elseif ($namex3 * (-5) ** 3 + $namex2 * (-5) ** 2 + $namex * (-5) + $namey === 0) {
        $teiler = -5;
       
    }
    elseif ($namex3 * (-4) ** 3 + $namex2 * (-4) ** 2 + $namex * (-4) + $namey === 0) {
        $teiler = -4;
        
    }
    elseif ($namex3 * (-3) ** 3 + $namex2 * (-3) ** 2 + $namex * (-3) + $namey === 0) {
        $teiler = -3;
       
    }
    elseif ($namex3 * (-2) ** 3 + $namex2 * -(2) ** 2 + $namex * (-2) + $namey === 0) {
        $teiler = -2;
      
    }
    elseif ($namex3 * (-1) ** 3 + $namex2 * (-1) ** 2 + $namex * (-1) + $namey === 0) {
        $teiler = -1;
      
    }
    elseif ($namex3 * (1) ** 3 + $namex2 * (1) ** 2 + $namex * (1) + $namey === 0) {
        $teiler = 1;
      
    }
    elseif ($namex3 * (2) ** 3 + $namex2 * (2) ** 2 + $namex * (2) + $namey === 0) {
        $teiler = 2;
        
    }
    elseif ($namex3 * (3) ** 3 + $namex2 * (3) ** 2 + $namex * (3) + $namey === 0) {
        $teiler = 3;
       
    }
    elseif ($namex3 * (4) ** 3 + $namex2 * (4) ** 2 + $namex * (4) + $namey === 0) {
        $teiler = 4;
      
    }
    elseif ($namex3 * (5) ** 3 + $namex2 * (5) ** 2 + $namex * (5) + $namey === 0) {
        $teiler = 5;
       
    }    
    elseif ($namex3 * (6) ** 3 + $namex2 * (6) ** 2 + $namex * (6) + $namey === 0) {
        $teiler = 6;
        
    }
    else {
        echo'Der Teiler konnte nicht ermittelt werden';
        exit();
    }
}
$teilera = $teiler * -1;

$a1 = $namex3 * $teiler;
$a2 = $namex2 + $a1;
$a3 = $a2 * $teiler;

$a4 = $namex + $a3;
 $format = 'Sie Gaben an: %+dx<sup>3</sup> %+dx<sup>2</sup> %+dx %+d </br>';
 echo sprintf($format, $namex3, $namex2, $namex, $namey, $teiler);
 $format5 = 'Der Teiler beträgt: %+d</br>';
 echo sprintf($format5, $teiler);
 $format1 = 'Die Vorbreitung zur Division: (%+dx<sup>3</sup> %+dx<sup>2</sup> %+dx %+d):(x%+d)</br>';
 echo sprintf($format1, $namex3, $namex2, $namex, $namey, $teiler);
echo $teilera;
if ($namex3 * ($teiler) ** 3 + $namex2 * ($teiler) ** 2 + $namex * ($teiler) + $namey === 0){
    echo 'Das Polynom ergab mittels des Teilers 0. Der Vorgang kann fortgesetzt werden.</br>';
    $format2 = '(%+dx<sup>3</sup> %+dx<sup>2</sup> %+dx %+d):(x%+d)= %+dx<sup>2</sup></br>';
    echo sprintf($format2, $namex3, $namex2, $namex, $namey, $teiler, $namex3);
    $format3 = '(%+dx<sup>3</sup> %+dx<sup>2</sup> %+dx %+d):(x%+d)= %+dx<sup>2</sup> %+dx</br>';
    echo sprintf($format3, $namex3, $namex2, $namex, $namey, $teiler, $namex3, $a2);
    $format4 = '<p class="loesung">(%+dx<sup>3</sup> %+dx<sup>2</sup> %+dx %+d):(x%+d)= %+dx<sup>2</sup> %+dx %+d</p></br>';
    echo sprintf($format4, $namex3, $namex2, $namex, $namey, $teiler, $namex3, $a2, $a4);

    echo 'P-Q Formel:</br>';
    if ($namex3 =! 1) {
        echo'x<sup>2</sup> muss eine eins betragen!';
        exit();
    }
    else {
        # code...
   
    $p = $a2;
    $q = $a4;

    $bsfac = ($p/2)*($p/2)-$q;
    if($bsfac < 0){
        $bsfac *= -1;
    }

    echo'Sie gaben für p an:'.$p.'</br>';
    echo'Sie gaben für q an:'.$q.'</br>';
    

    $plusErgebnis = -($p/2) + sqrt($bsfac);
    $minusErgebnis = -($p/2) - sqrt($bsfac);
    echo 'x1 = '.$plusErgebnis.'</br>';
    echo 'x2 = '.$minusErgebnis.'</br>'; 
    echo 'x3 = 0';
  }
    
    exit;
}

else {
    echo 'Fatal-ERROR:';
    echo($namex3 * $teilera * $teilera * $teilera - $namex2 * $teilera* $teilera - $namex * $teilera - $namey);
   // echo('</br>');
  //  echo($namex3);
  //  echo($namex2);
  //  echo($namex);
  //  echo($namey);
    exit;
}


}


    

?>
<p>erstellt von Hasenkamp</p>
</body>
</html>