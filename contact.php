<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact - PhotoRent Market</title>
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
    <h1>Contact</h1>
    <p>Une question sur un produit, une location ou un achat ? Contactez-nous.</p>
</section>

<section class="contact">
    <form>
        <label>Nom</label>
        <input type="text" placeholder="Votre nom">

        <label>Email</label>
        <input type="email" placeholder="Votre email">

        <label>Objet</label>
        <select>
            <option>Location d’un appareil photo</option>
            <option>Achat d’un produit</option>
            <option>Question générale</option>
        </select>

        <label>Message</label>
        <textarea placeholder="Votre message"></textarea>

        <button type="submit">Envoyer</button>
    </form>
</section>

<footer>
    <p>© 2026 PhotoRent Market — Projet réalisé en PHP, HTML, CSS et MySQL</p>
</footer>

</body>
</html>