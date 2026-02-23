<?php
// Načtení JSON souboru
$jsonContent = file_get_contents('profile.json');

// Převod JSON na asociativní pole
$data = json_decode($jsonContent, true);

// Bezpečné ošetření chybějících klíčů
$name = $data['name'] ?? 'Neznámé jméno';
$skills = $data['skills'] ?? [];
$interests = $data['interests'] ?? [];
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>IT Profil 3.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1><?php echo htmlspecialchars($name); ?></h1>

        <h2>Dovednosti</h2>
        <ul>
            <?php foreach ($skills as $skill): ?>
                <li><?php echo htmlspecialchars($skill); ?></li>
            <?php endforeach; ?>
        </ul>

        <h2>Zájmy</h2>
        <ul>
            <?php foreach ($interests as $interest): ?>
                <li><?php echo htmlspecialchars($interest); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>
</html>