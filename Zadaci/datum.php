<?php
date_default_timezone_set("Europe/Belgrade");
echo "Trenutni datum je: ".date("d.m.Y.")."<br>";
echo "Trenutno vreme je: ". date("h:i")."<br>";

$sati = date("h");
if($sati>=6 && $sati<10)
echo "Dobro jutro!";
else if($sati>=10 && $sati<18)
echo "Dobar dan!";
else if($sati>=18 && $sati<23)
echo "Dobro vece!";
else if($sati>=23 && $sati<6)
echo "Na spavanje!";
echo "<br>";


$now = new DateTime();
$future_date = new DateTime('2022-06-24 19:15:00');

$interval = $future_date->diff($now);

echo "Preostalo vreme do kraja skolske godine je:"."<br>";
echo $interval->format("%a dana, %h sati, %i minuta, %s sekundi");
?>