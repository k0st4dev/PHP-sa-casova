<?php

$grupaB = array("Ognjen", "Milosav", "Nikola", "Veljko", "Lazar", "Jovana", "Nikola", "Ognjen", "Ana", "Marija");
$arrlength= count($grupaB);
echo "Broj elemenata niza je ".$arrlength."<br>";
for($x = 0; $x < $arrlength; $x++) {
  echo $grupaB[$x];
  echo ",";
}
echo "<br>";
sort($grupaB);
echo "Sortiran niz"."<br>";
for($x = 0; $x < $arrlength; $x++) {
  echo $grupaB[$x];
  echo ",";
}
echo "<br>";
echo "<br>";
$nadimci = array("Ognjen1"=>"Kuks", "Milosav"=>"Somi", "Nikola1"=>"Krsman", "Veljko"=>"Kosta","Lazar"=>"Laki","Jovana"=>"Joca","Nikola2"=>"Dzondzi","Ognjen2"=>"Ogi","Ana"=>"Ana","Marija"=>"Maja");
foreach($nadimci as $x => $x_value) {
  echo  $x . "-" . $x_value;
  echo "<br>";
}
echo "<br>";
asort($nadimci);
foreach($nadimci as $x => $x_value) {
  echo  $x_value;
  echo "<br>";
}
echo "<br>";
array_push($grupaB, "Nevena");
$arrlength= count($grupaB);
for($x = 0; $x < $arrlength; $x++) {
  echo $grupaB[$x];
  echo "-";
}
echo "<br>";
shuffle($grupaB);
$arrlength= count($grupaB);
for($x = 0; $x < $arrlength; $x++) {
  echo $grupaB[$x];
  echo "-";
}
echo "<br>";
shuffle($nadimci);
$arrlength= count($nadimci);
for($x = 0; $x < $arrlength; $x++) {
  echo $nadimci[$x];
  echo "-";
}
echo "<br>";
echo "<br>";
$dnevnik = array(
    array('Nikola' , 'Marilovic' , 'Dzoksi','1' ),
    array('Ognjen' , 'Kukalj' , 'Kuki', '1' ),
    array('Ognjen' , 'Markovic' , 'Ogi','5' )
);

echo '<table border="1">';
echo '<tr><th>Ime</th><th>Prezime</th><th>Nadimak</th><th>Ocena</th></tr>';
foreach( $dnevnik as $ucenik )
{
    echo '<tr>';
    foreach( $ucenik as $key )
    {
        echo '<td>'.$key.'</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>