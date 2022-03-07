<?php
namespace App\Models;


class Pet{

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $gender = array(1=>'Male',2=>'Female');

    /**
     * @var string
     */
    protected $breed;
}
