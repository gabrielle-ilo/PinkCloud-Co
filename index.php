<?php
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Google tag Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1BEQ35D1D8"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-1BEQ35D1D8');
    </script>
    <!-- Fin Google Analytics -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhotoRent Market - Location et vente de matériel photo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header class="header">
    <div class="logo">PhotoRent Market</div>

    <nav class="nav">
        <a href="index.php">Accueil</a>
        <a href="produits.php">Produits</a>
        <a href="rgpd.php">RGPD</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<main>

    <section class="hero">
        <div class="hero-text">
            <p class="tag">Location & vente de matériel photo</p>

            <h1>Du matériel photo adapté à chaque projet</h1>

            <p class="description">
                PhotoRent Market propose des appareils photo, objectifs, trépieds,
                éclairages et accessoires disponibles à la vente ou à la location.
                Notre objectif est de rendre le matériel photo plus accessible aux
                étudiants, créateurs de contenu, passionnés et professionnels.
            </p>

            <div class="buttons">
                <a href="produits.php" class="btn-primary">Voir les produits</a>
                <a href="contact.php" class="btn-secondary">Nous contacter</a>
            </div>
        </div>

        <div class="hero-image">
            <img src="https://images.unsplash.com/photo-1516035069371-29a1b244cc32" alt="Appareil photo professionnel">
        </div>
    </section>

    <section class="section">
        <div class="section-title">
            <p>Nos services</p>
            <h2>Une solution simple pour louer ou acheter</h2>
        </div>

        <div class="cards">
            <div class="card">
                <h3>Vente de matériel</h3>
                <p>
                    Nous proposons une sélection d’appareils photo, d’objectifs et
                    d’accessoires adaptés à différents niveaux de pratique.
                </p>
            </div>

            <div class="card">
                <h3>Location courte durée</h3>
                <p>
                    La location permet d’utiliser du matériel de qualité pour un shooting,
                    un événement, un projet scolaire ou une création de contenu.
                </p>
            </div>

            <div class="card">
                <h3>Conseils personnalisés</h3>
                <p>
                    Nous accompagnons les utilisateurs dans le choix du matériel le plus
                    adapté à leurs besoins et à leur budget.
                </p>
            </div>
        </div>
    </section>

    <section class="section beige">
        <div class="section-title">
            <p>Pourquoi nous choisir ?</p>
            <h2>Un service clair, pratique et accessible</h2>
        </div>

        <div class="cards">
            <div class="card">
                <h3>Matériel varié</h3>
                <p>
                    Appareils photo reflex, hybrides, objectifs, trépieds, éclairages
                    et accessoires liés à la photographie.
                </p>
            </div>

            <div class="card">
                <h3>Prix accessibles</h3>
                <p>
                    La location permet de tester ou d’utiliser du matériel performant
                    sans devoir l’acheter immédiatement.
                </p>
            </div>

            <div class="card">
                <h3>Site structuré</h3>
                <p>
                    Le site présente les produits de manière simple, avec les informations
                    essentielles pour comparer et choisir.
                </p>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="about-image">
            <img src="https://images.unsplash.com/photo-1502920917128-1aa500764cbd" alt="Matériel de photographie">
        </div>

        <div class="about-text">
            <p class="tag">Notre projet</p>
            <h2>Un site pensé pour les passionnés de photographie</h2>
            <p>
                Ce site a été réalisé dans le cadre d’un projet de groupe. Il combine
                une interface web simple avec une base de données permettant d’afficher
                les produits disponibles à la vente ou à la location.
            </p>
            <p>
                Le projet utilise HTML, CSS, PHP et MySQL. Une page RGPD est également
                présente afin d’informer les utilisateurs sur la gestion de leurs données.
            </p>
        </div>
    </section>

</main>

<footer class="footer">
    <p>© 2026 PhotoRent Market — Site réalisé en PHP, HTML, CSS et MySQL</p>
</footer>

</body>
</html>