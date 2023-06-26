<?php 

    require_once __DIR__ . "/models/category.php";
    require_once __DIR__ . "/models/product.php";
    require_once __DIR__ . "/models/food.php";
    require_once __DIR__ . "/models/game.php";


    $dogsCategory = new category("dog", "fa-solid fa-dog");
    $catsCategory = new category("cat", "fa-solid fa-cat");
    $productCategories = [$dogsCategory, $catsCategory];

    $products = [
        new Game("Cordino per cane", 4.99, $dogsCategory, "https://arcaplanet.vtexassets.com/arquivos/ids/223864-1800-1800/trixie-cane-gioco-corda.jpg?v=1774027684&quality=1&width=1800&height=1800", true, 43, "Stoffa"),
        new Food("Croccantini per cane gusto pollo", 13.99, $dogsCategory, "https://rep.grupposme.net/RepAP?code=D1446861&skey=f3b6c41bd09b8d169679070be320a5ac&resize=500", true, 234, 300),
        new Game("Gioco per gatto", 9.99, $catsCategory, "https://shop-cdn-m.mediazs.com/bilder/gioco/per/gatti/ferplast/flashlight/6/400/491124_katzenkarussell_flashlight_6.jpg", true, 68, "Plastica"),
        new Product("Tiragraffi", 16.99, $catsCategory, "https://shop-cdn-m.mediazs.com/bilder/colonna/tiragraffi/karlie/rofra/0/400/308196_pla_karlie_kratzbaum_rofra_hs_01_0.jpg", true, 53),
        new Product("Fontanella acqua", 34.99, $catsCategory, "https://m.media-amazon.com/images/I/715uJY11OmL._AC_UF894,1000_QL80_.jpg", true, 23),
        new Food("Umido per gatto Royal Canin", 12.99, $catsCategory, "https://shop-cdn-m.mediazs.com/bilder/gratis/x/g/royal/canin/fhn/umido/per/gatto/7/400/203618_pla_royalcanin_sensorysmell_sosse_85g_hs_01_7.jpg", true, 99, 180),
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Pet Shop</title>
</head>
<body>
    <div class="container">
        <div class="row mb-1">
            <div class="col-12 text-center">
                <h1 class="bg-warning p-3">Pet Shop</h1>
                <h3>Categories</h3>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 d-flex justify-content-center">
                <?php 
                    foreach($productCategories as $category) { ?>
                    <div class="text-center d-flex p-2 badge text-bg-warning m-2">
                        <i class="<?= $category->icon ?> fs-3"></i>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="row d-flex">
            
                <?php foreach ($products as $product) { ?>
                    <div class="col-4 d-flex">
                        <div class="card mb-4">
                            <div class="card-header bg-warning text-center">
                                <i class="fa-solid <?= $product->category->icon ?> me-2"></i>
                                <?= $product->name ?>
                            </div>
                            <div class="card-body">
                                <div>Prezzo: <?= $product->price ?>€</div>
                                <div class="mb-2">Prodotto di tipo: <?= $product->getClassName() ?></div>
                                <img src="<?= $product->image ?>" alt="<?= $product->name ?>" class="w-100 mb-4">
                                <div class="text-center">
                                    <button class="btn btn-success">Compra</button>
                                    <button class="btn btn-primary">Aggiungi al carrello</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>  
            
        </div>
           
            
        </div>
    </div>
</body>
</html>