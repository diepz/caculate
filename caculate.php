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
<?php

    $a = $_POST["a"];
    $b = $_POST["b"];
    $operator = $_POST["operator"];
    try {
        switch ($operator) {
            case "/":
                if ($b == 0) {
                    throw new Exception("Ngu hơn bò.");
                }
                $total = $a / $b;
                break;
            case "+":
                $total = $a + $b;
                break;
            case "-":
                $total = $a - $b;
                break;
            case "*":
                $total = $a * $b;
                break;
        }
        echo $total;

    } catch (Exception $e) {
        echo $e ->getMessage();
    }



?>
</body>
</html>