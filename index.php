<?php


require __DIR__.'/vendor/autoload.php';

$revertObject= new Src\RevertCharacters();

$result = $revertObject->invertWordsInString("Привет! Давно не виделись.");

echo $result.PHP_EOL;



//Напиши метод, который принимает на вход строку и меняет порядок букв в каждом слове на обратный с сохранением регистра и пунктуации.
//Например:
//$result = revertCharacters("Привет! Давно не виделись.");
//echo $result; // Тевирп! Онвад ен ьсиледив.

//Также напиши unit-тесты для этого метода.