<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.10 - Requisição de arquivos");

/*
 * [ include ] https://php.net/manual/pt_BR/function.include.php
 * [ include_once ] https://php.net/manual/pt_BR/function.include-once.php
 */
fullStackPHPClassSession("include, include_once", __LINE__);
/*
 * para arquivos que você precisa mas não é necessario para a plicação
 */

include __DIR__ . "/header.php";
$profile = new StdClass();
$profile->name = "Lucas";
$profile->company = "GoodDev";
$profile->email = "gestao@gooddev.com.br";
include __DIR__. "/profile.php";

include __DIR__ . "/header.php";
$profile = new StdClass();
$profile->name = "Kaue";
$profile->company = "GoodDev";
$profile->email = "atendimento@gooddev.com.br";
include __DIR__. "/profile.php";


/*
 * [ require ] https://php.net/manual/pt_BR/function.require.php
 * [ require_once ] https://php.net/manual/pt_BR/function.require-once.php
 */
fullStackPHPClassSession("require, require_once", __LINE__);
/*
* para arquivos que é necessario para a plicação
*/

include __DIR__. "/config.php";

echo  "<h1>".COUSER."</h1>";

include_once __DIR__. "/config.php";

var_dump(require_once __DIR__."/config.php");
