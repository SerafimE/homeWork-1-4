<?php
$arrAnimals = [
    'Eurasia' => ['Neotragus pygmaeus', 'Ovis', 'Canis lupus', 'Vombatus hirsutus', 'Lutra'],
    'North America' => ['Perameles nasuta', 'Desmana moschata', 'Gazella', 'Lepus timidus', 'Sus scrofa'],
    'South America' => ['Bison', 'Castor canadensis', 'Lama', 'Procyon', 'Delphinus delphis'],
    'Africa' => ['Addax nasomaculatus', 'Papio cynocephalus', 'Syncerus caffer', 'Bos', 'Osphranter'],
    'Australia' => ['Camelus dromaderius', 'Antilocapra americana', 'Galago', 'Mustela erminea', 'Tachyglossus aculeatus'],
    'Antarctica' => ['Damaliscus dorcas', 'Hyaena', 'Equus zebra', 'Canis dingo', 'Dugong dugong']
];
$new_array = [];
foreach ($arrAnimals as $continent => $animals) {
    foreach ($animals as $animal) {
        $count = substr_count($animal, ' ');
        if ($count === 1) {
            $new_array[$continent][] = $animal;
            $rows_two = explode(' ', $animal);
            $first_world[] = $rows_two[0];
            $second_word[] = $rows_two[1];
        }
    }
}
echo '<h1>Массив животных, названия которых состоят из двух слов:</h1>' . '<pre>';
print_r($new_array);
echo '</pre>';
echo '<hr>';
/*============================================*/
shuffle($second_word);
echo '<h1>Выдуманные животные</h1>';
foreach ($second_word as $last) {
    $first = array_shift($first_world);
    echo $fictitious_animals[] = $first . ' ' . $last . '<br>';
}
