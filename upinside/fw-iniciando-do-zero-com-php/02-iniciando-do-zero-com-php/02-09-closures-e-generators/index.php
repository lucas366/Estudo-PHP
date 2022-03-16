<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);
/*
 * fução anonima
 */

$myAge = function ($year){
  $ager = date("Y") - $year;
  return "<h5>Você tem {$ager} anos!</h5>";
};

echo $myAge(2000);

$preceBrl = function ($price){
    return number_format($price,2,",", ".");
};

echo "<p>O projeto Custa R$ {$preceBrl(3600)}. Vamos fechar?</p>";

$myCart = [];
$myCart["totalPrice"] = 0;
$cardAdd = function ($item, $qtd, $price) use (&$myCart){
    $myCart[$item] = $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];
};

$cardAdd("HTML5",2,497);
$cardAdd("carro",2,4970);

var_dump($myCart);

/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);

$iterator = 40000;

function showDate($days){
    $saveDate = [];
    for ($day =1; $day < $days; $day++){
        $saveDate[] = date("d/m/Y",strtotime("+1{$day}days"));
    }
    return $saveDate;
}

echo "<div style='text-align: center'>";
foreach (showDate(0) as $date){
    echo "<small class='tag' >{$date}</small>" . PHP_EOL;
}
echo "</div>";

function generatorDate($days){

    for ($day =1; $day < $days; $day++){
        yield  date("d/m/Y",strtotime("+1{$day}days"));
    }
}

echo "<div style='text-align: center'>";
foreach (generatorDate($iterator) as $date){
    echo "<small class='tag' >{$date}</small>" . PHP_EOL;
}
echo "</div>";