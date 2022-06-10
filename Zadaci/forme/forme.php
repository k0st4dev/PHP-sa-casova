<html>
<body>
<?php
$nameErr = $emailErr ="";
$name = $email ="";
$br=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Morate uneti ime";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Dozvoljena su samo mala i velika slova";
    }
    else{
         $br++;
         $name="";
    }
  }
  
  
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Email nije u dobrom formatu";
    }
    else{
         $br++;
         $email="";
    }
  }
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
Ime: <input type="text" name="name"><br>
 <span class="error"><?php echo $nameErr;?></span>
  <br><br>
E-mail: <input type="text" name="email"><br>
<span class="error"><?php echo $emailErr;?></span>
  <br><br>
<!-- Pol: Zesnki<input type="radio" name="pol" value="Zesnki"><br>
     Muski<input type="radio" name="pol" value="Muski"><br> -->
<input type="submit" value="Potvrdi">
</form>


Ime je: <?php echo $_POST["name"]; ?><br>
Email je: <?php echo $_POST["email"]; ?><br>


</body>
</html>