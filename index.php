<?php 

    require_once __DIR__ . "/models/category.php";
    require_once __DIR__ . "/models/product.php";

    $dogsCategory = new category("dog", "fa-solid fa-dog");
    $catsCategory = new category("cat", "fa-solid fa-cat");
    $productCategories = [$dogsCategory, $catsCategory];
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
        <div class="row">
            <div class="col-12 text-center">
                <h1>Pet Shop</h1>
                <h3>Categories</h3>
            </div>
        <div class="row">
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
           
            
        </div>
    </div>
</body>
</html>