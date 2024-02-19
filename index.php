<?php
    require_once __DIR__ ."/Models/Product.php";
    require_once __DIR__ ."/Models/Category.php";
    require_once __DIR__ ."/Models/Food.php";
    require_once __DIR__ ."/Models/Game.php";
    require_once __DIR__ ."/Models/Kennels.php";
    


    $cane = new Category('Cane','<i class="fa-solid fa-dog"></i>');

    $gatto = new Category('Gatto','<i class="fa-solid fa-cat"></i>');

    $product1= new Product('Royal Canin Mini Adult','€33.21','https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000',$cane);

    $product2= new Product('Almo Nature Cat Daily Lattina','€22.21','https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',$gatto);

    $product3= new Game('Peluche Scoiattolo Striato','€4,90','https://arcaplanet.vtexassets.com/arquivos/ids/217805/https---www.arcaplanet.it-media-catalog-product--t-r-trixie-scoiattolo-striato-in-peluche-tric85.jpg?v=637454593279430000',$cane,'Stoffa','Il peluche con squittio scoiattolo striato è un prodotto a marchio Trixie, azienda leader nella produzione di accessori per animali.');

    $product4= new Kennels('Cuccia esterna per Cani Eco Lodge','€69,99','https://arcaplanet.vtexassets.com/arquivos/ids/225622/p-a-y--canile-eco-lodge-medium.jpg?v=637454754161230000',$cane,'Plastica');

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
                <div class="scatola d-flex">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $product1 -> img ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $product1 -> name ?></h5>
                        <span> Per: <?php echo $product1 -> category-> race ?> <?php echo $product1 -> category-> icon ?></span>
                        <p> Prezzo: <?php echo $product1 -> price ?></p>
                        <span> Tipo di articolo: <?php echo get_class($product1)?></span>    
                    </div>
                </div>


                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $product2 -> img ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $product2 -> name ?></h5>
                        <span>Per: <?php echo $product2 -> category-> race ?> <?php echo $product2 -> category-> icon ?></span>
                        <p>Prezzo: <?php echo $product2 -> price ?></p>
                        <span> Tipo di articolo: <?php echo get_class($product2)?></span>    
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $product3 -> img ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center "><?php echo $product3 -> name ?></h5>
                        <span> Per: <?php echo $product3 -> category-> race ?> <?php echo $product3 -> category-> icon ?></span>
                        <p>Prezzo: <?php echo $product3 -> price ?></p>
                        
                        <span> Materiale: <?php echo $product3 -> material ?></span>  
                        <h4 class="text-center">Descrizione:</h4>
                        <p class="card-text overflow-y text-center"><?php echo $product3 -> description ?></p>
                        <span> Tipo di articolo: <?php echo get_class($product3)?></span>
                    </div>
                </div>


                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $product4 -> img ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center "><?php echo $product4 -> name ?></h5>
                        <span>Per: <?php echo $product4 -> category-> race ?> <?php echo $product4 -> category-> icon ?></span>
                        <p>Prezzo: <?php echo $product4 -> price ?></p>
                        <p class="card-text overflow-y">Materiale: <?php echo $product4 -> material ?></p>
                        <span> Tipo di articolo: <?php echo get_class($product4)?></span>
                    </div>
                </div>


                </div>
            </div>
        </main>

        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
    </body>
</html>