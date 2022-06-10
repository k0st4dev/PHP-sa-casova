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
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if($_POST["adresa"]=="")
            {
                $kolErr="Morate uneti adresu!";
                $g++;
            }

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
                { echo "Datum porudzbine: " . $datum ." i vreme porudzbine: " . ($time[2]+2) . ":" . $time[1] . "<br>";
                    echo "Ukupna kolicina lekova iznosi: " . ($kol1+$kol2+$kol3) . "<br>";
                    echo "Andol: " . $kol1 . "<br>" . "Aspirin: " . $kol2 . "<br>" . "Vitamin C: " . $kol3 . "<br>";
                    echo "Ukupna cena: " . ($kol1*150+$kol2*95+$kol3*280) . "<br>";
                    echo "Cena sa porezom: " . (($kol1*150+$kol2*95+$kol3*280)*1.08) . "<br>";                              
                }  
                else
                {
                    echo $kolErr;
                }
        }
        $datum1= "Datum ".$datum." i vreme ".($time[2]+2) . ":" . $time[1] . "\n";
        $racun="Racun ".($kol1*150+$kol2*95+$kol3*280)."\n";
        $kolicina="Kolicina ".($kol1+$kol2+$kol3)."\n";
        $cenapdv="Cena sa PDVOM ".(($kol1*150+$kol2*95+$kol3*280)*1.08)."\n";
        $myfile = fopen("racun.txt", "w") or die("Unable to open file!");
        fwrite($myfile, $racun);
        echo "<br>";
        fwrite($myfile,$kolicina);
        echo "<br>";
        fwrite($myfile,$cenapdv);
        echo "<br>";
        fwrite($myfile,$datum1);
        echo "<br>";
        fclose($myfile);






    ?>