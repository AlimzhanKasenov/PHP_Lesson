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

//-------------------------------------------------------------

$jsonString = '{"menu": {
  "id": "file",
  "value": "File",
  "popup": {
    "menuitem": [
      {"value": "New", "onclick": "CreateNewDoc()"},
      {"value": "Open", "onclick": "OpenDoc()"},
      {"value": "Close", "onclick": "CloseDoc()"}
    ]
  }
}}';
$jsonArray = [];

// 2. Преобразовать JSON строку в массив и вывести
$jsonArray = json_decode($jsonString, true);

// вывод массива

echo '<pre>';
print_r($jsonArray);
echo '</pre>';

//-------------------------------------------------------------

$integers = [60,43,20,53,7,38,56,7,56,23,13,54,33,39,48,21,12,53,10,20,23,27,4,35,17,55,9,54,52,54,11,1,26,39,35,15,56,59,9,53,20,53,47,42,12,10,23,58,9,54];
// 3.1 Вывести все числа из массива, между 22 и 35
foreach ($integers as $arr){
    if ($arr > 22 && $arr < 35){
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }
}

// 3.2 Вывести среднеарифметическое значение из массива чисел
// здесь ваш код
$sum = 0;
$count = 0;
foreach ($integers as $arr){
    $sum = $sum + $arr;
    $count++;
}
echo ($sum / $count);