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

// Задачи с этим массивом:
// 1.1 сделать сортировку по возрасту, молодые в начале массива
// здесь ваш код
$nameAndAges[] = asort($nameAndAges);
echo "<ul><li>" . implode("</li><li>", $nameAndAges) . "</li></ul><hr>";

// 1.2 сделать сортировку по возрасту, молодые в конце массива
// здесь ваш код
$nameAndAges[] = arsort($nameAndAges);
echo "<ul><li>" . implode("</li><li>", $nameAndAges) . "</li></ul><hr>";

// 1.3 сделать сортировку по имени, от A до Z
// здесь ваш код
$nameAndAges[] = ksort($nameAndAges, $flags = SORT_STRING);
echo "<ul><li>" . implode("</li><li>", $nameAndAges) . "</li></ul><hr>";

// 1.4 сделать сортировку по имени, от Z до A
// здесь ваш код
$nameAndAges[] = krsort($nameAndAges, $flags = SORT_STRING);
echo "<ul><li>" . implode("</li><li>", $nameAndAges) . "</li></ul><hr>";