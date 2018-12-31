<?php declare(strict_types=1);
$animalsInRegion = [
    'Africa' => ['Giraffa camelopardalis rothschildi', 'Loxodonta'],
    'Antarctica' => ['Aptenodytes forsteri'],
    'Australia' => ['Macropus'],
    'Eurasia' => ['Pteromys volans', 'Bison bonasus', 'Apodemus agrarius'],
    'North America' => ['Mammuthus columbi', 'Bison bison'],
    'South America' => ['Eunectes murinus']
];

$firstWord = [];
$secondWord = [];
$newArray = [];
$fantasy = [];
$arrayTooWords = [];
$fantasyWithRegion = [];
foreach ($animalsInRegion as $continent => $animals) {
    foreach ($animals as $animal) {
        $count = substr_count($animal, ' ');
        if ($count === 1) {
            $newArray[$continent][] = $animal;
            $arrayTooWords[] = $animal;
            $rows_two = explode(' ', $animal);
            $firstWord[] = $rows_two[0];
            $secondWord[] = $rows_two[1];
        }
    }
}
echo '<h1>Задание "Жестокое обращение с животными"</h1>';

echo '<h3>1. Исходный массив:</h3>';
var_dump($animalsInRegion);
echo '<hr>';
shuffle($secondWord);
foreach ($firstWord as $k => $v) {
    $fantasy[] = $v . ' ' . $secondWord[$k];
}
echo '<h3>2. Названия, состоящие из двух слов:</h3>';
echo implode(',<br> ', $arrayTooWords);
echo '<hr>';

echo '<h3>3. "Фантазийные" названия:</h3>';
echo implode(',<br>', $fantasy);
echo '<hr>';
