<?php
namespace dokterkepin\Belajar;
class Custumer{
    public function __construct(private string $name)
    {
        
    }

    public function panggil($name = "Guest"): string{
        return  "Hello $name, my name is $this->name";
    }
}