<?php 


function mostValue($a, $b, $v)
{

    $lista = [0,0,0,0,0];
    $len = sizeof($v)-1;
    $count = 0;

    // $a = [1,2,3];
    // $b = [2,4,5];
    // $v = [10,5,12];
    

    $count = 1;
    while($count <= $len){

        $range = $b[$count] -  $a[$count];

        foreach(range($a[$count], $a[$count]+$range) as $c){
            @$lista[$c] = $lista[$c] + $v[$count];

        }

        $count++;
    }

    echo "O maior valor da lista é ".max($lista);
    echo "<hr/>";

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
//Caso de teste 01
$a = [1,2,3];
$b = [2,4,5];
$v = [10,5,12];
mostValue($a, $b, $v); // Infelizmnete não consegui 

//Caso de teste 02
$a = [1,2,3];
$b = [2,5,4];
$v = [100,100,100];
mostValue($a, $b, $v); // Infelizmnete não consegui 

//Caso de teste 0327
$a = [29,9,21,8,15,11,14,5,11,5,16,3,15,29,9,33,30,11,3,29,4,1,12,25,3,12,3,8,8,12];
$b = [40,26,31,22,23,24,22,22,30,25,24,10,22,35,20,34,38,31,32,35,24,38,18,32,39,37,26,39,11,37];
$v = [787,219,214,719,102,83,321,300,832,29,577,905,335,254,20,351,564,969,11,267,531,892,825,99,107,131,640,483,194,502];
mostValue($a, $b, $v); // Infelizmnete não consegui 

//Caso de teste 04
$a = [19,4,5,19,5,10,21,13,12,15,8,21,20,13,13,15,14,20,10,16,25,5,17,8,22,19,5,21,23,2];
$b = [28,23,6,33,9,13,39,18,26,30,9,23,21,40,23,15,35,39,18,27,40,9,20,20,37,37,5,29,30,8];
$v = [419,680,907,582,880,438,294,678,528,261,48,131,7,65,901,914,704,522,379,8,536,190,809,453,298,122,186,184,625,960];
mostValue($a, $b, $v); // Infelizmnete não consegui 

?>