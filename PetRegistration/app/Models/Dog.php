<?php
namespace App\Models;

class Dog extends Pet{

    // Could use an API or service to genereate a breed list
    public $breed = array(
        1=>"Chihuahua",
        2=>"Great Dane",
        3=>"Bulldog",
        4=>"Husky"
    );

}
