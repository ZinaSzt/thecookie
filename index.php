<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<?php session_start();
$id_session = session_id();

// Vérifier si le paramètre d'ajout au panier est présent dans l'URL.  le lien est généré dynamiquement avec un paramètre d'URL          
//?add_to_cart= suivi de la valeur de la variable $id. La syntaxe  "<?= $id;" est utilisée pour afficher la valeur de la variable $id dans le code HTML. Cela permet de transmettre l'identifiant du produit à ajouter au panier dans l'URL.
if (isset($_GET['add_to_cart'])) { 

    // Récupérer le nom du cookie ajouté au panier
    $cookie_name = $_GET['add_to_cart'];

    // Vérifier si le cookie existe dans le catalogue des cookies
    if (isset($catalog[$cookie_name])) {
        // Ajouter le cookie dans le panier (dans les données de session)
        $_SESSION['cart'][$cookie_name] = $catalog[$cookie_name];
    }
}

?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
