<?php require 'inc/head.php';  // ajout du require ?>
<?php session_start(); // début de la session ?>

<section class="cookies container-fluid">
    <div class="row">
    
        <h2>Shopping Cart</h2>
        <?php if (!empty($_SESSION['cart'])) {  
            //  vérifier si le panier d'achat dans les données de session ($_SESSION['cart']) n'est pas vide ?>
            <ul>
                <?php foreach ($_SESSION['cart'] as $id => $cookie) {  //boucle foreach dans le tableau associatif qui représente le panier d'achat dans les données de session pour obtenir chaque élèment du panier?>
                    <li><?= $cookie['name']; // affiche le nom du cookie?></li>
                <?php } ?>
            </ul>
        <?php } else { ?>
            <p>veuillez choisir un cookie...</p>
        <?php } ?>
    </div>
</section>

<?php require 'inc/foot.php'; ?>
