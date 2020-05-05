<?php
require __DIR__."/../vendor/autoload.php";
echo "<pre>";
//use CoffeeCode\DataLayer\Connect; // Utiliza o coffecode connect para fazer a conexao
//
//$conn = Connect::getInstance();
//$error = Connect::getError();
//
//if($error){
//    echo $error->getMessage();
//    die();
//}
//echo "<pre>";
//$query = $conn->query("select * from users");
//var_dump($query->fetchAll());

use Source\Models\User;

$user = new User();
$list = $user->find()->fetch(true);


/** @var  $userItem User */
foreach ($list as $userItem)
{
    var_dump($userItem->first_name);
    var_dump($userItem->addresses());
}

