<?php
require_once "config.php";

$requete = $pdo->query("SELECT * FROM produits ORDER BY id DESC");
$produits = $requete->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nos produits - PhotoRent Market</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header class="header">
    <div class="logo">PhotoRent Market</div>

    <nav>
        <a href="index.php">Accueil</a>
        <a href="produits.php">Produits</a>
        <a href="rgpd.php">RGPD</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<section class="page-title">
    <h1>Nos produits</h1>
    <p>Découvrez notre sélection de matériel photo disponible à la vente ou à la location.</p>
</section>

<section class="products">
    <?php foreach ($produits as $produit): ?>
        <div class="product-card">
            <img src="<?php echo htmlspecialchars($produit['image']); ?>" alt="<?php echo htmlspecialchars($produit['nom']); ?>">

            <div class="product-content">
                <p class="category"><?php echo htmlspecialchars($produit['categorie']); ?></p>
                <h3><?php echo htmlspecialchars($produit['nom']); ?></h3>
                <p><?php echo htmlspecialchars($produit['description']); ?></p>

                <div class="prices">
                    <span>Vente : <?php echo htmlspecialchars($produit['prix_vente']); ?> €</span>
                    <span>Location : <?php echo htmlspecialchars($produit['prix_location_jour']); ?> €/jour</span>
                </div>

                <a href="produit.php?id=<?php echo $produit['id']; ?>" class="btn-primary small">
                    Voir le détail
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</section>

<footer>
    <p>© 2026 PhotoRent Market — Projet réalisé en PHP, HTML, CSS et MySQL</p>
</footer>

</body>
</html>