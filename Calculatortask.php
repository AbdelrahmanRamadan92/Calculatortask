<?php
$numb1 =5 ;
$numb2 =10 ;
$result ="" ;
switch ($result) {
    case 'addition':
        $result = $numb1 + $numb2 ;
        echo "Addition of Two number equal " . $result . "<br>";
        break;
    case 'substraction';
    $result = $numb1 - $numb2 ;
        echo "subsraction of Two number equal " . $result . "<br>";

        break;
    case 'multiplication';
    $result = $numb1 * $numb2 ;
        echo "multiplication of Two number equal " . $result . "<br>";

        break;
    case 'division';
    $result = $numb1 / $numb2 ;
    echo "division of Two number equal " . $result . "<br>";
        break;
}
?>