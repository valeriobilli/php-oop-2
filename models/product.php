<?php 

class Product {
    public $name;
    public $price;
    public $category;
    public $image;
    public $avalaible;
    public $quantity;

    function __construct($name, $price, $category, $image, $avalaible, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->image = $image;
        $this->avalaible = $avalaible;
        $this->quantity = $quantity;
    }

    public function getClassName() {
        return get_class(); 
    }
}

?>