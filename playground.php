<!DOCTYPE html>
<html>
<body>

<?php
  echo "Palindrom test";

  $txt = "Alla";
  // vänd om och jämför till ursprungliga bara med små bokstäver
  if(strtolower($txt) == strrev(strtolower($txt))){
    echo "<h2> $txt är en palindrom </h1>";
  } else {
    echo "<h2> $txt är inte en palindrom </h3>";
  }

  echo "<br><br>Pythagoras sats<br><br>";
  # kateter 
  $katet1 = 5;
  $katet2 = 6;
  # hypotenusa där rotteknet är istället (a^2 + b^2)^0,5
  $c = pow((pow($katet1, 2) + pow($katet2, 2)), 0.5);
  echo "$c";

  echo "<br><br>Metod exempel för hastighet <br><br>";


  # skapa metoden
  function globalSpeed(){
    // skapa globala variablen
    global $hastighet;
    $hastiget = 555;
    // kolla vilken hastighet om ange rätt sträng beroende på hastighet
    if ($hastiget < 6){
      echo "Långsamt";
    } else if ($hastighet > 6 && $hastighet < 20){
      echo "Lagom";
    } else if ($hastighet > 20 && $hastighet < 45){
      echo "Snabbt";
    } else {
      echo "Mycket snabbt";
    }
  }
  # kalla metoden
  globalSpeed();

  echo "<br><br>Addera alla nummer från en array<br><br>";

  function arraySum($ar){
    $sum = 0;
    // loopa igenom array 
    foreach ($ar as $num) {
      // bekräfta att elementet är ett nummer
      if (is_numeric($num)){
        // bekräftat att elementet är ett nummer, addera sedan till summan
        $sum += $num;
      } 
    }

    return $sum;
  }

  echo arraySum(array(123.5, 23, "nonNum", 11.5, TRUE));

?>



</body>
</html>
