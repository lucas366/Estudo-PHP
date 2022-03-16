<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);

$arrA = array(1,2,3);
$arrA = [0,1,2,3];

var_dump($arrA);

$arraIndex = [
  "Brain",
   "Angus",
    "Malcolm"
];
$arraIndex[] = "Cliff";
$arraIndex[] = "Phil";

var_dump($arraIndex);

/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);

$arraAssoc = [
    "vocal" => "Brain",
    "solo_guitar" => "Angus",
    "base_guitar" => "Malcolm",
    "bass_guitar" => "Cliff"
];
$arraAssoc["drums"] = "phil";
$arraAssoc["rock_band"] = "AC/DC";

var_dump($arraAssoc);


/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);

$brian = ["Brain", "Mic"];
$angus = ["nome" =>"Angus", "intrument" => "Guitar"];
$instrumensts = [
    $brian,
    $angus
];
var_dump($instrumensts);

var_dump([
    "brian" => $brian,
    "angus" => $angus
]);


/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);

$acdc = [
    "band" => "AC/BC",
    "vocal" => "Brain",
    "solo_guitar" => "Angus",
    "base_guitar" => "Malcolm",
    "bass_guitar" => "Cliff",
    "drums" => "phil",
];


echo "<p>O vocal da banda AC/DC é {$acdc["vocal"]}, e junto com {$acdc['solo_guitar']} fazem um otimo show de rock!</p>";

$pearl = [
    "band" => "pearl Jam",
    "vocal" => "Eddie",
    "solo_guitar" => "Mike",
    "base_guitar" => "Stone",
    "bass_guitar" => "Jeff",
    "drums" => "Jack",
];

$rockBands = [
    "acdc" => $acdc,
    "pearl_jam" => $pearl
];

var_dump($rockBands);

echo "<p>{$rockBands['pearl_jam'] ['vocal']}</p>";

foreach ($acdc as $item){
    echo "<p>{$item}</p>";
}

foreach ($acdc as $key => $value){
    echo "<p>{$item} is a {$key} of band!</p>";
}

foreach ($rockBands as $rockBand){
    $art =  "<article><h1>%s</h1> <p>%s</p> <p>%s</p> <p>%s</p> <p>%s</p> <p>%s</p> </article>";
    vprintf($art, $rockBand);
}