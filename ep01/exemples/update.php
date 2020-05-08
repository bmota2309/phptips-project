<?php
require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;
use Source\Models\Address;

$user = (new User())->findById(20);
//$user->first_name="Bruno Mota";
$user->alteraId(3);
$user->save();

echo "<pre>";
var_dump($user);

