<?php
$temperatura=array("-15°C","-10°C","-5°C","-3°C","-1°C","0°C","1°C","3°C","5°C","10°C","15°C","20°C","23°C","25°C","30°C");

$brt = count($temperatura);

$stepeni=-1;

$l=0;

for($x = 0; $x < $brt; $x++) {
    if($temperatura[$x]==$stepeni){
            $l=$x;
    }
}

if($l<3){
    echo "<img src='hladno.jpg' >"."Veoma hladno vreme";
}
else if($l<8 && $x>2){
echo "<img src='sneg.jpg' >"."Sneg";
}
else if($l>7 ){
    echo "<img src='sunce.jpg' >"."Suncano vreme";
}
echo "<br>";
for($x=0;$x<$brt;$x++)
{
    if($temperatura[$x]>0)
    {
        echo $temperatura[$x]."<br>";
    }
}

?>