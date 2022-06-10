<?php
// define variables and set to empty values
$nameErr = $comErr = $emailErr =  "";
$name = $comment = $email =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Obavezno polje";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Dozvoljeno je samo unosenje slova i praznik znakova";
    }
  }

if (empty($_POST["email"])) {
    $emailErr = "";
  } else {
    $email = test_input($_POST["email"]);
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Pogresan email format";
  }

  if (empty($_POST["comment"])) {
    $comErr = "Obavezno polje";
  } else {
    $comment = test_input($_POST["comment"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Ime: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <br><br>
  Komentar: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <span class="error">* <?php echo $comErr;?></span>
  <br><br>
  Omiljeni grad?<br>
     <input type="checkbox" name="grad[]" value="Beograd"/>Beograd  <br>
     <input type="checkbox" name="grad[]" value="Nis"/>Nis  <br>
     <input type="checkbox" name="grad[]" value="Kragujevac"/>Kragujevac  <br>
  <br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Uneli ste:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "<br>";
$check = $_POST['grad'];
  if(empty($check)) 
  {
    echo("Niste nista selektovali.");
  } 
  else 
  {
    $N = count($check);
    
    for($i=0; $i < $N; $i++)
    {
      echo($check[$i] . " ");
    }
  }
?>
