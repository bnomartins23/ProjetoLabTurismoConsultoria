<?php
// <!-- apos 2 1
// é a soma dos dois anteriores<?php
// valores iniciais 0,1
// 0,1,1,2,3,5,8,13 -->

function fibonacci($n){

    $n = $n - 2;
    $arrFibonacci = [0,1];

    if($n < 0){
        echo 0;
        echo "<br/>";
    } else {
        $count = 0;
        while($count <= $n){
            if($count > 0){
                $len = sizeof($arrFibonacci);
                $arrFibonacci[] = $arrFibonacci[$len-1]+$arrFibonacci[$len-2];
            }
            $count++;
        }
        // print_r($arrFibonacci);
        foreach($arrFibonacci as $fib){
            echo $fib." ";
        }
        echo "</br>";

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    fibonacci(8); //Exemplo
    fibonacci(4); //Caso 01
    fibonacci(5); //Caso 02
    fibonacci(8); //Caso 03
    fibonacci(1); //Caso 04
    fibonacci(3); //Caso 05
    fibonacci(10); //Caso 06
?>