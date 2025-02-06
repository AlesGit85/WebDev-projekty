<?php
declare(strict_types=1);


echo "jsem php";

/* function secti(int $a, int $b): void
{
    return $a + $b;
}
*/
/*
Toto je zkušební nesmyslná fukce,
kde jí říkám že má sečíst, ale výstupem je prázdno.
*/

class User
{
    public string $name;
    public string $lastname;
    public string $role;
    public string $email;

    public function __construct(string $name, string $lastname)
    {
        $this->name = $name;
        $this->lastname = $lastname;
    }
}

// $_SERVER
// $_POST
// $_GET
// $_REQUEST

/* echo "<pre>";
var_dump($_SERVER);
echo "</pre>";

echo "<pre>";
print_r($_SERVER);
echo "</pre>";
*/


