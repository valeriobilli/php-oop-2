<?php 

require_once __DIR__ . "/product.php";

class Food extends product {

    public $weight;

    function __construct($name, $price, $category, $image, $avalaible, $quantity, $weight)
    {
        parent::__construct($name, $price, $category, $image, $avalaible, $quantity);
        $this->weight = $weight;
    }
    
	public function getClassName() {
		return get_class();
	}
}

?>