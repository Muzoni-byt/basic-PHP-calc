<?php
// Grab data from the form(num1,oparator type, num2) and run using some of class methods created inside the calc.class file
declare(strict_types=1);
 include 'class.autoload.inc.php';

 $oper = $_POST["oper"];
 $num1 = $_POST["num1"];
 $num2 = $_POST["num2"];

 $calc = new calc($oper, (int)$num1, (int)$num2);

 try{
      echo $calc->calculator();
 }
 catch(TypeError $e){
    echo "Error!:" .$e->getMessage();
 }
?>