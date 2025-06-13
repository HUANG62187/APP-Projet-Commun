<?php
require_once __DIR__ . '/../../controllers/AuthController.php';
AuthController::isAuthenticated('visiteur');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Visiteur</title>
    <link rel="stylesheet" href="/volpe-site/public/assets/css/visiteur.css">
</head>
<body>
    <header class="visiteur-header">
        <h1>Bienvenue Visiteur 👀</h1>
        <a href="/volpe-site/app/views/auth/logout.php" class="logout-btn">Déconnexion</a>
    </header>

    <main class="visiteur-content">
        <section>
            <h2>Données de la classe</h2>
            <p>Ici vous verrez la température actuelle, le nombre de personnes présentes, les alertes, etc.</p>
        </section>
    </main>
</body>
</html>
