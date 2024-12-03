<?php
 declare(strict_types=1);
 include 'includes/class.autoload.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="includes/calc.inc.php" method="post">
     <p>My Own Calculator!</p>
     <input type = "number" name="num1" placeholder="first number"><br><br>
     <select name="oper">
        <option value = "add">Addition</option>
        <option value = "sub">Subtraction</option>
        <option value = "div">Division</option>
        <option value = "mul">Multiplication</option>
     </select><br><br>
     <input type="number" name="num2" placeholder="second number"><br><br>
     <button type="submit" name="submit">Calculate</button>
    </form>
</body>
</html>