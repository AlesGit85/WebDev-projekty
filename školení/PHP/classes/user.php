<?php

require_once 'PHP/clases/person.php';

class User extends Person
{
    public string $role = "admin";

    public function pozdravJakoUser()
    {
        echo "Ahoj já jsem User";
    }

    public function pozdrav(): string 
    {
        return "jsem přepsaná metoda";
    }
}

?>