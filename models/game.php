<?php 

require_once __DIR__ . "/product.php";

class Game extends product {

    public $material;

    function __construct($name, $price, $category, $image, $avalaible, $quantity, $material)
    {
        parent::__construct($name, $price, $category, $image, $avalaible, $quantity);
        $this->material = $material;
    }
    
	public function getClassName() {
		return get_class();
	}
}

?>