<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

$userFirsName = "Lucas";
$userLastName = "Felipe";
echo "<h3>{$userFirsName} {$userLastName}</h3>";

$user_first_name = "$userFirsName";
$user_last_name = "$userLastName";
echo "<h3>{$user_first_name} {$user_last_name}</h3>";


$userAger = "32";

echo  "<p>{$user_first_name} {$user_last_name} <span class='tag'>tem {$userAger}</span></p>";

$userEmail = "<p>cursos@upinside.com.br</p>";
echo $userEmail;

// variavel variavel
$companay = "UpInside";
$$companay = "Treinamentos";
echo "<h3>{$companay} {$UpInside}</h3>";

$calcA = 10;
$calcB = 20;
//$calcB = $calcA;
$calcB = &$calcA;
$calcB = 50;

var_dump([
    "a" => $calcA,
    "b" => $calcB
]);


/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

$true = true;
$false = false;

var_dump([
    $true,
    $false
]);

$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = null;

var_dump([
    $a, $b, $c, $d, $e
]);

if($a || $b || $c || $d || $e){
    var_dump(true);
}else{
    var_dump(false);
}

/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code = "<article><h1>Um call User Function!</h1></article>";
$codeClear = call_user_func("strip_tags", $code);
var_dump([
    $code,
    $codeClear
]);

$codeMore= function ($code){
    var_dump($code);
};
$codeMore("#BoraProgramar");
/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "olá Mundo";
$array = [$string];
$object = new StdClass();
$object -> hello = $string;
$null = null;
$int = 12345;
$float = 1.1233;

var_dump([
    $string,
    $array,
    $object,
    $null,
    $int,
    $float
]);