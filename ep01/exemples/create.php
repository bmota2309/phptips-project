<?php
require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;
use Source\Models\Address;

$user = new User();

$user->first_name="Noemi";
$user->last_name="da Costa Oliveira";
$user->genre="F";
$user->save();


$addr = new Address();
$addr->add($user,"Carlino Luiz dos Santos","129");
$addr->save();


echo "<pre>";
var_dump($user,$addr->user_id);

