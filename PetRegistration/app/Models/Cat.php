<?php
namespace App\Models;

class Cat extends Pet{

    // Could use an API or service to genereate a breed list and add it to view select options
    protected $breed = array(
        1=>"Persian",
        2=>"Bengal",
        3=>"Siberian",
        4=>"Siamese"
    );
    public function getBreeds() : array {
        return $this->breed;
    }

}
