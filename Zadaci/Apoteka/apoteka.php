<?php
function test_input($data) {
    $data = trim($data);
    
    return $data;
}
        $kolErr="";
        $kol1=$kol2=$kol3="";
        $g=0;
        $datum=date('d/m/y');
        $time=localtime();
        $sel=$_POST['izbor'];
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            
            if($_POST["andol"]==0&&$_POST["aspirin"]==0&&$_POST["vitaminc"]==0)
            {
                $kolErr="Morate barem nesto naruciti!";
                $g++;
            } else
            {
                if (empty($_POST["andol"])) {
                   $kol1 = 0;
                } else {
                    $kol1 = test_input($_POST["andol"]);
                }
                if (empty($_POST["aspirin"])) {
                    $kol2 = 0;
                } else {
                    $kol2 = test_input($_POST["aspirin"]);
                }
                if (empty($_POST["vitaminc"])) {
                   $kol3 = 0;
                } else {
                    $kol3 = test_input($_POST["vitaminc"]);
                }
            }
                if($g==0)
                {
                    echo "<b>Datum porudzbine: </b>" . $datum . "<br><br>" . "<b>Vreme porudzbine: </b>" . ($time[2]+2) . ":" . $time[1] . "<br><br>";
                    echo "<b>Ukupna porudzbina iznosi: </b>" . ($kol1+$kol2+$kol3) . "<br><br>";
                    echo "<b>Andol: </b>" . $kol1 . "<br>" . "<b>Aspirin: </b>" . $kol2 . "<br>" . "<b>Vitamin C: </b>" . $kol3 . "<br><br>";
                    echo "<b>Ukupna cena: </b>" . ($kol1*150+$kol2*95+$kol3*280) . "<br><br>";
                    echo "<b>Cena sa porezom: </b>" . (($kol1*150+$kol2*95+$kol3*280)*1.08) . "<br><br>";
                    if($sel!="Redovan")
                    {
                        echo "<b>Hvala! Dodjite nam opet!</b>";
                    } else
                    {
                        
                    }
                } else
                {
                    echo $kolErr;
                }
        }
    ?>