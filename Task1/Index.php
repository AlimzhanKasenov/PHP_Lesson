<?php
//Задание № 1.
$a = 3.65; $b = 6.65; $c = -11.54;
echo $a . " => " . round($a, 1) . "<br>";
echo $b . " => " . floor($b * 10) / 10 . "<br>";
echo $c . " => " . round($c, 1) . "<br><br><br>";

//№2
$result = "";
$rand1 = rand(0, 10);
$rand2 = rand(0, 10);
$rand3 = rand(0, 4);
define("con", $rand3);
if (con == 0 && $rand1 != 0 && $rand2 != 0){
    $result = $rand1 . " сумма " . $rand2 . " = " . ($rand1 + $rand2);
}elseif(con == 1 && $rand1 != 0 && $rand2 != 0){
    $result = $rand1 . " минус " . $rand2 . " = " . ($rand1 - $rand2);
}elseif(con == 2 && $rand1 != 0 && $rand2 != 0){
    $result = $rand1 . " деление " . $rand2 . " = " . ($rand1 / $rand2);
}elseif(con == 3 && $rand1 != 0 && $rand2 != 0){
    $result = $rand1 . " умножение " . $rand2 . " = " . ($rand1 * $rand2);
}elseif(con == 4 && $rand1 != 0 && $rand2 != 0){
    $result = $rand1 . " остаток деления " . $rand2 . " = " . ($rand1 % $rand2);
}else{
    $result = "ERROR";
}
echo $result . "<br><br><br>";

//Task 3
$per1 = rand(1, 3); //Анна
$per2 = rand(1, 3); //Лера
define("cons1", $per1);
define("cons2", $per2);
echo "камень = 1, бумага = 2, нажницы = 3<br>";
echo "Рандомные значения<br>Анна = " . $per1 . "<br>" . "Лера  = " . $per2 . "<br>";
if (cons1 == cons2){
    echo "Ничья";
}else{
    if (cons1 == 1 && cons2 ==2 || cons2 == 3 && cons1 == 2 || cons1 == 3 && cons2 == 1 || cons1 == 3 && cons2 == 1){
        echo "Выйграла Лера";
    }else{
        echo "Выйграла Анна";
    }
}echo "<br><br><br>";

//Task 4
$r1 = rand(1, 10);
$r2 = rand(1, 10);
echo "переменная 1 = " . $r1 . "<br>" . "переменная 2 = " . $r2 . "<br>";
$r2 = $r1 + $r2;
$r1 = $r2 - $r1;
$r2 = $r2 - $r1;
echo "переменная 1 = " . $r1 . "<br>" . "переменная 2 = " . $r2;
?>