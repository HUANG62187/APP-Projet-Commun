<?php
require_once __DIR__ . '/../../controllers/AuthController.php';
AuthController::isAuthenticated('prof');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Espace Prof - Volpe</title>
    <link rel="stylesheet" href="/volpe-site/public/assets/css/prof.css">
</head>
<body>
    <header class="prof-header">
        <div class="left">
            <h1>Volpe — Espace Professeur 👨‍🏫</h1>
        </div>
        <div class="right">
            <a href="/volpe-site/app/views/auth/logout.php" class="logout-btn">🔓 Déconnexion</a>
        </div>
    </header>

    <main class="prof-content">
        <section class="info-box">
            <h2>Données de la classe</h2>
            <p>Bienvenue sur votre espace. Ici s’afficheront les données : présence, température, alertes, etc.</p>
        </section>
    </main>
</body>
</html>
