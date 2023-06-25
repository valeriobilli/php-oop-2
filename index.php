<?php 

    require_once __DIR__ . "/models/category.php";
    require_once __DIR__ . "/models/product.php";

    $dogsCategory = new category("dog", "fa-solid fa-dog");
    $catsCategory = new category("cat", "fa-solid fa-cat");
    $productCategories = [$dogsCategory, $catsCategory];

    $products = [
        new Product("Ciotola acqua per cane", 7.99, $dogsCategory, "https://shop-cdn-m.mediazs.com/bilder/ciotola/karlie/in/acciaio/inossidabile/con/motivo/a/zampine/nero/5/400/209199_pla_karlie_edelstahlnapf_pfotenmotiv_schwarz_hs_01_5.jpg", true, 76),
        new Product("Croccantini per cane gusto pollo", 13.99, $dogsCategory, "https://rep.grupposme.net/RepAP?code=D1446861&skey=f3b6c41bd09b8d169679070be320a5ac&resize=500", true, 234),
        new Product("Gioco per gatto", 9.99, $catsCategory, "https://shop-cdn-m.mediazs.com/bilder/gioco/per/gatti/ferplast/flashlight/6/400/491124_katzenkarussell_flashlight_6.jpg", true, 68),
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Pet Shop</title>
</head>
<body>
    <div class="container">
        <div class="row mb-3">
            <div class="col-12 text-center">
                <h1>Pet Shop</h1>
                <h3>Categories</h3>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 d-flex justify-content-around">
                <?php 
                    foreach($productCategories as $category) { ?>
                    <div class="text-center d-flex p-2 badge text-bg-secondary">
                        <h3 class="me-2"><?= $category->name ?></h3>
                        <i class="<?= $category->icon ?> fs-3"></i>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="row d-flex">
            
                <?php foreach ($products as $product) { ?>
                    <div class="col-4 d-flex">
                        <div class="card">
                            <div class="card-header text-center">
                                <i class="fa-solid <?= $product->category->icon ?> me-2"></i>
                                <?= $product->name ?>
                            </div>
                            <div class="card-body">
                                <div>Prezzo: <?= $product->price ?>€</div>
                                <div>Prodotto di tipo: <?= $product->getClassName() ?></div>
                                <img src="<?= $product->image ?>" alt="<?= $product->name ?>" class="w-100">
                            </div>
                        </div>
                    </div>
                <?php } ?>  
            
        </div>
           
            
        </div>
    </div>
</body>
</html>