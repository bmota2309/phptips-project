<?php
require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

$user = new User();
//
//$user->first_name="Pedro";
//$user->last_name="Leite";
//$user->genre="M";
//$user->save();

echo "<pre>";
var_dump($user);

