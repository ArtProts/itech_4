<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Автор: ст.гр. КИУКИ-19-5 Проценко Артем
    </h1>
    <?php

    $mass1 = [4,7,4,3,5,7,1,1,2,5,8,0,8,9];
    $mass2 = [2,2,1,1,5,6,6,6,3,5,5,5,5,5];
    $lengthOfFirst = count($mass1);
    $lengthOfSecond = count($mass2);
    
    echo "Массив 1: ";
    foreach( $mass1 as $value ){
        echo "$value ";
    }
    
    echo "Массив 2: ";
    foreach( $mass2 as $value ){
        echo "$value ";
    }
    
    $mass1 = array_unique($mass1);
    $mass2 = array_unique($mass2);
    
    $lengthOfFirst = -count($mass1)+$lengthOfFirst;
    $lengthOfSecond = -count($mass2)+$lengthOfSecond;
    
    echo "Массив 1 без повторений: ";
    foreach( $mass1 as $value ){
        echo "$value ";
    }

    echo "Массив 2 без повторений: ";
    foreach( $mass2 as $value ){
        echo "$value ";
    }

    echo "Дубликатов в первом: $lengthOfFirst\n";
    echo "Дубликатов во втором: $lengthOfSecond\n";
    
    $mass3 = array_unique(array_merge($mass2, $mass1));
    echo "Массив 3: ";
    foreach( $mass3 as $value ){
        echo "$value ";
    }

    $arr4 = [];
    
    foreach( array_reverse($mass3) as $value ) {
        array_push($arr4, $value);
    }
    $mass3 = $arr4;
    echo "Масиив 3 обратный: ";
    foreach( $mass3 as $value ){
        echo "$value ";
    }
    ?>

</body>
</html>