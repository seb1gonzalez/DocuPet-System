<?php
namespace App\Models;

class Dog extends Pet{

    // Could use an API or service to genereate a breed list and add it to view select options
    protected $breed = array(
        1=>"Chihuahua",
        2=>"Great Dane",
        3=>"Bulldog",
        4=>"Husky"
    );

    public function getBreeds(): array{
        return $this->breed;
    }

}
