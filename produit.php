<?php
require_once "config.php";

if (!isset($_GET["id"])) {
    header("Location: produits.php");
    exit;
}

$id = $_GET["id"];

$requete = $pdo->prepare("SELECT * FROM produits WHERE id = ?");
$requete->execute([$id]);
$produit = $requete->fetch(PDO::FETCH_ASSOC);

if (!$produit) {
    echo "Produit introuvable.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($produit["nom"]); ?> - PhotoRent Market</title>
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

<section class="detail">
    <div class="detail-image">
        <img src="<?php echo htmlspecialchars($produit['image']); ?>" alt="<?php echo htmlspecialchars($produit['nom']); ?>">
    </div>

    <div class="detail-content">
        <p class="category"><?php echo htmlspecialchars($produit["categorie"]); ?></p>
        <h1><?php echo htmlspecialchars($produit["nom"]); ?></h1>

        <p>
            <?php echo htmlspecialchars($produit["description"]); ?>
        </p>

        <div class="detail-prices">
            <p><strong>Prix de vente :</strong> <?php echo htmlspecialchars($produit["prix_vente"]); ?> €</p>
            <p><strong>Prix de location :</strong> <?php echo htmlspecialchars($produit["prix_location_jour"]); ?> € / jour</p>
            <p><strong>Disponibilité :</strong> 
                <?php echo $produit["disponible"] ? "Disponible" : "Indisponible"; ?>
            </p>
        </div>

        <a href="contact.php" class="btn-primary">Demander une information</a>
    </div>
</section>

<footer>
    <p>© 2026 PhotoRent Market — Projet réalisé en PHP, HTML, CSS et MySQL</p>
</footer>

</body>
</html>