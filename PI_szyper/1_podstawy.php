<?php
  echo "Test<br>";
  $name = "Janusz";
  $surname = "Nowak";
  echo 'Imię: $name'.<br>;
  echo "Imię: $name";
  echo "Nazwisko: $surname";

  //typy danych

  $prawda = true;
  $fałsz = false;

  echo $prawda;
  echo $fałsz;

  //integer
  $bin = 0b1011;
  $oct = 012;
  $dec = 12;
  $hex = 0xc;

  echo "<br>0xC(16) = $hex";

  //składnia heredoc

  $name="Anna";

  $text = <<<KONIEC
    <hr>Heredoc 1
    <br>
    Imię: $name
    <hr>
  KONIEC;

  echo $text;

  $surname = "Kowalska";

  echo <<<L
    Heredoc2 <br>
    Imię: $name<br>
    Nazwisko: $surname<hr>
  L;

  // składnia nowdoc

  echo <<<'L'
    Nowdoc <br>
    Imię: $name<br>
    Nazwisko: $surname<hr>
  L;

  $city = "Poznań";

  echo "Nazwa zmiennej: \$city, wartość: $city";

?>
