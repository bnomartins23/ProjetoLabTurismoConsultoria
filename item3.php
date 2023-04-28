<?php 


$s = "aeiaaioooau";
function magicLetter($s)
{

    $arrs = array_values(str_split($s)); //11
    // $arrs = explode("", $s);
    // $arrs = preg_split('/[a-z]*/', $s, -1, PREG_SPLIT_NO_EMPTY);

    $arrval = [];

    $len = strlen($s)-1; //10

    $count = 0;

    while($count <= $len) {
        //procurar a primeiro
        //+1 comparar com o anterior

        // if(!empty($arrval)) {
        //     if(in_array('a', $arrval)) {
        //         if(($arrs[$count] == 'a') && (end($arrval) == 'a')) {
        //             $arrval[$count] = $arrs[$count];
        //         }
        //     }

        //     if(in_array('e', $arrval)) {
        //         if(end($arrval) == 'e') {
        //             $arrval[$count] = $arrs[$count];
        //         }
        //     } elseif($arrs[$count] == 'e' && end($arrval) == 'a') {
        //         $arrval[$count] = $arrs[$count];

        //     } elseif (in_array('i', $arrval)) {
        //         if(end($arrval) == 'i') {
        //             $arrval[$count] = $arrs[$count];
        //         }
        //     } elseif($arrs[$count] == 'i' && end($arrval) == 'e') {
        //         $arrval[$count] = $arrs[$count];
        //     }

        //     if(in_array('o', $arrval)) {
        //         if(end($arrval) == 'o') {
        //             $arrval[$count] = $arrs[$count];
        //         }
        //     } elseif($arrs[$count] == 'o' && end($arrval) == 'i') {
        //         $arrval[$count] = $arrs[$count];
        //     } elseif(in_array('u', $arrval)) {
        //         if(end($arrval) == 'u') {
        //             $arrval[$count] = $arrs[$count];
        //         }
        //     } elseif($arrs[$count] == 'u' && end($arrval) == 'o') {
        //         $arrval[$count] = $arrs[$count];

        //     } elseif($arrs[$count] == 'u' && $count == $len) {
        //         $arrval[$count] = $arrs[$count];
        //     }

        // } else {
        //     if($arrs[$count] == 'a') {
        //         $arrval[$count] = $arrs[$count];
        //     }
        // }
        // $count++;

        if(!empty($arrval)) {
            if(in_array('a', $arrval)) {
                if(($arrs[$count] == 'a') && (end($arrval) == 'a') && $count <5) {
                    $arrval[$count] = $arrs[$count];
                }
            }

            if(in_array('e', $arrval)) {
                if(end($arrval) == 'e') {
                    $arrval[$count] = $arrs[$count];
                }
            } elseif($arrs[$count] == 'e' && end($arrval) == 'a') {
                $arrval[$count] = $arrs[$count];
            } 
            
            if (in_array('i', $arrval)) {
                if(end($arrval) == 'i') {
                    $arrval[$count] = $arrs[$count];
                }
            } elseif($arrs[$count] == 'i' && end($arrval) == 'e') {
                $arrval[$count] = $arrs[$count];
            }

            if(in_array('o', $arrval)) {
                if(end($arrval) == 'o') {
                    $arrval[$count] = $arrs[$count];
                }
            } elseif($arrs[$count] == 'o' && end($arrval) == 'i') {
                $arrval[$count] = $arrs[$count];
            } 
            
            if(in_array('u', $arrval)) {
                if(end($arrval) == 'u') {
                    $arrval[$count] = $arrs[$count];
                }
            } elseif($arrs[$count] == 'u' && end($arrval) == 'o') {
                $arrval[$count] = $arrs[$count];

            } 
            
            if($arrs[$count] == 'u' && $count == $len) {
                $arrval[$count] = $arrs[$count];
            }

        } else {
            if($arrs[$count] == 'a') {
                $arrval[$count] = $arrs[$count];
            }
        }
        $count++;





        
    }

    echo count($arrval);

    echo "</br>";
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
    // Caso de teste 01
    magicLetter('aeiaaioooaauuaeiou'); 

    // Caso de teste 02
    magicLetter('aeiaaioooaa'); 

    // Caso de teste 03
    magicLetter('uioieeeaouiiuaeeuuiuuauuauaeaeuauaeaaiuoiouaeuiuuoooaeeaioeieoeooaeuooae');                                

    // Caso de teste 03
    magicLetter('iaaieeeoaueuaaaaieaooiiuiaueeoauiueuaeiaouiueoouaeeioeieoeeiiiouiaioiaeeaaaeaouiioiueuoieeoeoiuuuouiaoea
    aeeeiueuiueiaieuoueoeooiuoooiooouuuoiuoeiuaouoeaaaiaeueaiaeouuaeioeoaeeuuaeouiauaiaoioueeiauuieouoe
    uoiiooauoeaoieuieiaooaaieuoauueoeueeauuaaueeeeeoooouueoiaauooioioaeiiuaiueeoaeiuiaouieiueuae');                         

    // Caso de teste 04
    magicLetter('ioeueooeuieoaioeoooiioieueoaiieaeaoeioiiaueueiououeiueeaaueeueaeoaaaouoeoieouaauooeuuoeauuaauaeoee
    uiueeeuiieooeuaooeiaeueaaaaiooeaoiiiaaaooeiioaiiieieauaoeuiiueuioouuaoaioeiaiaaaaoeeaiuiaeoiiuauiiaeiuuaoa
    eaaaaeoeueieoaaaooueioaauieieouoeouieaueuuaiiueoouioueuaaauaoeueuoouieuuouuoueoaaeuuouueieuouiooa
    iuaoeuaeiaueuuieeiuaaeuiuuiuoiaiaeauuuaeeuuuuoieoieuaoiiuoeiaeaeeauoueaiuooiaoaiuoouoeeueeuaoeueiaiioi
    ouueeaaoeoeauouuieeoaoioauieeeieeaaiuiaaeiaeueuouuaoaoiiaoeoaoeuieeouiiiiauauueaeouaeeeaoeaaaeouuue
    oeoiueeoeiouaoeaaeeoaeaiiuouoaaeiuaiaeueuauaoauueuoeueueauuuueeeeuaouaaueaiouoeuooeiouoiiiueauaua
    euaauuoeuoaeeouoouoeeeoieoaouiaaioiuoeuaaouuiioieoiiaueueuieouaiioeuaeoeieaoeiuooueeoeuueueioaoaauo
    ooiiueueooeuouauuaiuiaoieeeeoouoeiaaaeieiooeouioeuooeeiauouueiuieaeaieeooaoeiuu');
    
    ?>