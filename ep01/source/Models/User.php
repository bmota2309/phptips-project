<?php


namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;


class User extends DataLayer
{
    public function __construct()
    {
        parent::__construct("users", ["first_name", "last_name"], "id");
    }

    public function addresses()
    {
        return (new Address())->find("user_id = :uid", "uid={$this->id}")->fetch(true);

    }

    public function alteraId($id)
    {
       if($id){
          $b= $this->__set('id',$id);
           echo "<pre>passou{$id} <br>   ";
           var_dump($b);

       }else{
           echo "<pre>Nao passou";
       }

    }
}