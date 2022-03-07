<?php
namespace App\Models;

class Cat extends Pet{

    // Could use an API or service to genereate a breed list
    public $breed = array(
        1=>"Persian",
        2=>"Bengal",
        3=>"Syberian",
        4=>"Siamese"
    );

}
