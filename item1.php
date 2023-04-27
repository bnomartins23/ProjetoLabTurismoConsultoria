<?php

// 1) Você consegue ordernar?

function buildArr($n, $arr){

    $output1 = array();     
    
    $arrRepeat = array();     
    $arrNoRepeat = array();   
    
    $count = 1;
    //verificar repetidos e não repetidos
    // separar [[3,1,4],[8,8,2,2]]
    // reodernar [1,3,4,2,2,8,8]
    
    
    foreach($arr as $chave => $a){
    
        while($count <= $n){
            //
            if($arr[$count-1] == $a) {
                // $arrRepeat[] = $a;
                
                if(in_array($a, $arrNoRepeat)){
                    $arrRepeat[$chave] = $a;
                    unset($arrNoRepeat[$chave]);
                } else {
                    $arrNoRepeat[$chave] = $a;
                }
            } 
    
    
            $count++;
            
        }
        $count = 1;
    }
    
    $arr1 = array_sort($arrNoRepeat);
    $arr2 = array_sort($arrRepeat);

    $output1 = array_merge($arr1, $arr2);

    foreach($output1 as $out){
        echo $out." ";
    }

    echo "<br/>";

}

function array_sort($arr){
    if(empty($arr)) return $arr;
    foreach($arr as $k => $a){
        if(!is_array($a)){
            sort($arr); // could be any kind of sort
            return $arr;
        }else{
            $arr[$k] = array_sort($a);
        }
    }
    return $arr;
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
    <?php
    buildArr(7, [1,2,3,7,1,8,2]);           // Exemplo
    buildArr(5, [3,1,2,2,4]);               // Caso 1
    buildArr(10, [8,4,4,1,1,1,5,5,5,5]);    // Caso 2
    buildArr(7, [3,7,8,1,1,2,2]);           // Caso 3
    ?>
</body>
</html>

<?php



