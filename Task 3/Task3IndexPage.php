<?php
$nameAndAges = [
    'Tom Hiddleston' => 41,
    'Arnold Schwarzenegger' => 75,
    'Tom Cruise' => 60,
    'Brad Pitt' => 58,
    'Tom Hanks' => 66,
    'Johnny Depp' => 59,
    'Leonardo DiCaprio' => 48,
    'Will Smith' => 54,
    'Dwayne Johnson' => 50,
    'Hugh Jackman' => 54,
    'Robert Downey Jr.' => 57,
    'Chris Evans' => 41,
    'Jackie Chan' => 68,
    'Jason Momoa' => 43,
    'Samuel L. Jackson' => 73,
    'Al Pacino' => 82,
];

$newArray[] = asort($nameAndAges);

foreach ($newArray as $arr => $value){
    foreach ($value as $val) {
        echo "{$val}";
    }
}

// 1.2 сделать сортировку по возрасту, молодые в конце массива
// здесь ваш код
//...
//echo "<ul><li>" . implode("</li><li>", $nameAndAges) . "</li></ul><hr>";

// 1.3 сделать сортировку по имени, от A до Z
// здесь ваш код
//...
//echo "<ul><li>" . implode("</li><li>", $nameAndAges) . "</li></ul><hr>";

// 1.4 сделать сортировку по имени, от Z до A
// здесь ваш код
//...
//echo "<ul><li>" . implode("</li><li>", $nameAndAges) . "</li></ul><hr>";