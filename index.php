<?php

$operator = $_POST['operator'];
$a = $_POST['numA'];
$b = $_POST['numB'];

function result($a, $b, $operator){

    if (is_numeric($a) && is_numeric($b)){

        switch ($operator) {
            case '-': echo "Разность $a и $b равна " . ($a - $b);
                break;
            case '+': echo "Сумма $a и $b равна " . ($a + $b);
                break;
            case '*': echo "Произведение $a и $b равно " . ($a * $b);
                break;
            case '/': echo "Частное $a и $b равно " . round($a / $b, 3);
                break;
        }
    } else {
        echo "Нужно ввести цифры";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">
       <fieldset style="width: 45%"><br>
           Число "A" <input type="number" name="numA" value="<?=isset($_POST['numA'])? : "" ?>"><br><br>
           <select name="operator" id="" >
               <option value="*" name="multiply">Умножить "*"</option>
               <option value="/" name="divide">Делить "/"</option>
               <option value="+" name="plus">Сложить "+"</option>
               <option value="-" name="minus">Вычесть "-"</option>
           </select><br><br>
           Число "B" <input type="number" name="numB" value="<?=isset($_POST['numB'])? : "" ?>"><br><br>
           <input type="submit" name="count" value="Результат">
           <p>Ответ:</p>
           <p><?=isset($_POST['count'])? result($a, $b, $operator): "" ?><p>
       </fieldset>
</form>

</body>
</html>
