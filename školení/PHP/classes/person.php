<?php

class Person 
{
    public string $name;
    public string $lastname;

    public function __construct(string $name, string $lastname) 
    {
        $this->name = $name;
        $this->lastname = $lastname;
    }

    public function pozdrav(): string 
    {
        return "Ahoj já jsem $this->name $this->lastname";        
    }

    public function zamavej()
    {
        echo "🫶🏻";
    }
}


?>