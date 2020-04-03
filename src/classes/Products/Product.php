<?php  

namespace Src\Classes\Products;

class Product{
    private $name;
    private $value;

    
    public function __construct(){    
        
    }
    public function getName():String{
        return $this->name;
    }
    public function getValue():string{
        return $this->value;
    }
}