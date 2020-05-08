<?php
require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;
use Source\Models\Address;

$user = (new User())->findById(2);
 if($user){
     $user->destroy();
     echo "<p>Usuário <strong>{$user->first_name}</strong> excluído com sucesso!</p>";
 }else{

     echo "<pre>";
     var_dump($user);
 }

