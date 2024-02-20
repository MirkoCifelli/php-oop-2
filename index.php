<?php
    require_once __DIR__ ."/Models/Product.php";
    require_once __DIR__ ."/Models/Category.php";
    require_once __DIR__ ."/Models/Food.php";
    require_once __DIR__ ."/Models/Game.php";
    require_once __DIR__ ."/Models/Kennels.php";
    


    $cane = new Category('Cane','<i class="fa-solid fa-dog"></i>');

    $gatto = new Category('Gatto','<i class="fa-solid fa-cat"></i>');

    $allProduct = [];
    try {
        $product1= new Product('Royal Canin Mini Adult',33.21,'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000',$cane);
    } catch (Exception $e) {
        echo '<h4 style="color: red;">Valore quantità prodotto generico non valido!</h4>';
    }
  

    $allProduct[] = $product1;
    try {
        $product2 = new Food('Almo Nature Cat Daily Lattina',22.21,'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',$gatto,'Grande','Normale');//code...
    } catch (Exception $e) {
            echo '<h4 style="color: red;">Valore quantità prodotto generico non valido!</h4>';
    }
    

    $allProduct[] = $product2;

    $product3= new Game('Peluche Scoiattolo Striato',4.95,'https://arcaplanet.vtexassets.com/arquivos/ids/217805/https---www.arcaplanet.it-media-catalog-product--t-r-trixie-scoiattolo-striato-in-peluche-tric85.jpg?v=637454593279430000',$cane,'Stoffa','Il peluche con squittio scoiattolo striato è un prodotto a marchio Trixie, azienda leader nella produzione di accessori per animali.');

    $allProduct[] = $product3;

    $product4= new Kennels('Cuccia esterna per Cani Eco Lodge',69.99,'https://arcaplanet.vtexassets.com/arquivos/ids/225622/p-a-y--canile-eco-lodge-medium.jpg?v=637454754161230000',$cane,'Plastica');

    $allProduct[] = $product4;

    // var_dump($product1);
    // var_dump($product2);
    // var_dump($product3);
    // var_dump($product4);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-commerce</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>

        

        <main>
            <div class="container">
                <h2 class="text-center mb-4">
                    L'e-commerce prodotti per animali
                </h2>
                <div class="row">
                <?php
                        foreach ($allProduct as $singleProduct) {
                    ?>
                        <div class="col-3">
                            <div class="card">
                                <img src="<?php echo $singleProduct->img; ?>" class="card-img-top">
                                <div class="card-body">
                                    <h3>
                                        <?php echo $singleProduct->name; ?>
                                    </h3>
                                    <ul>
                                        <li>
                                            Categoria: <?php echo $singleProduct->category->race; ?>
                                            <?php echo $singleProduct->category->icon; ?>
                                        </li>
                                        <li>
                                            € <?php echo $singleProduct->price; ?>
                                        </li>
                                        
                                        <?php
                                            if (get_class($singleProduct) == 'Game') {
                                        ?>
                                            <li>
                                                Descrizione: <?php echo $singleProduct->description; ?>
                                            </li>
                                            <li>
                                                Materiale: <?php echo $singleProduct->material; ?>
                                            </li>
                                        <?php
                                            }
                                            else if (get_class($singleProduct) == 'Food') {
                                        ?>
                                            <li>
                                                Grandezza: <?php echo $singleProduct->size; ?>
                                            </li>
                                            <li>
                                                Sapore: <?php echo $singleProduct->flavour; ?>
                                            </li>
                                        <?php
                                            }
                                            else if (get_class($singleProduct) == 'Kennels'){
                                        ?>
                                            <li>
                                                Dimensioni: <?php echo $singleProduct->material; ?> 
                                            </li>
                                        <?php
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>    
            </div>
        </main>

        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
    </body>
</html>