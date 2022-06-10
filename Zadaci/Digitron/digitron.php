    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    Prvi broj: <input type="number" name="prvi">
    <br><br>
    Operacija
    <select name="operacija" id="operacija"> 
        <option value=""></option>
        <option value="plus">+</option>
        <option value="minus">-</option>
        <option value="podeljeno">/</option>
        <option value="puta">*</option>
    </select>
    <br><br>
    Drugi broj: <input type="number" name="drugi">
    <br><br>  
    <input type="submit" name="submit" value="Submit">  
     <br><br>

    <?php
       
        $resenje;
        $greska="Sva polja moraju biti popunjena";
        if(!empty($_POST["prvi"])||!empty($_POST["drugi"]))
        {
            if($_POST["operacija"]=="plus")
            {
                $resenje= $_POST["prvi"]+$_POST["drugi"];
            }
            else if($_POST["operacija"]=="minus")
            {
                $resenje= $_POST["prvi"]-$_POST["drugi"];
            }
            else if($_POST["operacija"]=="podeljeno")
            {
                 $resenje=$_POST["prvi"]/$_POST["drugi"];
            }
            else if($_POST["operacija"]=="puta")
            {
                $resenje= $_POST["prvi"]*$_POST["drugi"];
            }
           
        }
        else
        {
            echo $greska;
        }
        echo "Rezultat je ".$resenje;
    ?>