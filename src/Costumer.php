<?php
namespace dokterkepin\Belajar;
class Costumer{
    public function __construct(private string $name)
    {
        
    }

    public function panggil($name): string{
        return  "Hello $name, my name is $this->name";
    }
}