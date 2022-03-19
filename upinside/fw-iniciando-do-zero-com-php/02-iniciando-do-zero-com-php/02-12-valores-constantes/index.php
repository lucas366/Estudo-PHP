<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.12 - Constantes e constantes mágicas");

/*
 * [ constantes ] https://php.net/manual/pt_BR/language.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);

define("COUSER", "ful Stack PHP");
const AUTHOR = "Lucas";

$formation = true;
if ($formation){
    define("COUSER_TYPE", "Formação");
}else{
    define("COUSER_TYPE", "Curso");
}

echo "<p>COUSER_TYPE COUSER0 AUTHOR</p>";
echo "<p>{COUSER_TYPE} {COUSER0} {AUTHOR}</p>";
echo "<p>", COUSER_TYPE , " ", COUSER, " de ", AUTHOR, "</P>";
echo "<p>". COUSER_TYPE. " ". COUSER. " de " . AUTHOR. "</P>";

class Config{
    const  User = "root";
    const  HOST = "localhost";
}
        echo "<p>".Config::HOST."</p>";
        echo "<p>".Config::User."</p>";



/*
 * [ constantes mágicas ] https://php.net/manual/pt_BR/language.constants.predefined.php
 */
fullStackPHPClassSession("constantes mágicas", __LINE__);

var_dump([
    __LINE__,
    __FILE__,
    __DIR__
]);

function fulllStackPHP(){
    return __FUNCTION__;
}

var_dump(fulllStackPHP());

trait myTrait{
    public $Traitname = __TRAIT__;
}

class FsPHP{
    use  MyTrait;
    public $className = __CLASS__;
}
var_dump(new FsPHP());

require __DIR__."/MyClass.php";
var_dump(new \Source\MyClass());
var_dump(\Source\MyClass::class);