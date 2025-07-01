<?php
$projet = [
    'titre' => 'Puissance 4',
    'image' => 'puissance4.png',
    'description' => 'Jeu rétro en pixel art avec logique de victoire.',
    'sous_texte' => 'Capture du jeu au moment où Thibault gagne contre Célia 🎮',
    'langages' => ['JavaScript', 'CSS']
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $projet['titre'] ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="dark-mode">
  <div class="detail-projet">
    <h1><?= $projet['titre'] ?></h1>
    <img src="assets/<?= $projet['image'] ?>" alt="<?= $projet['titre'] ?>">
    <p class="sous-texte"><?= $projet['sous_texte'] ?></p>
    <p><?= $projet['description'] ?></p>
    <ul class="langages">
      <?php foreach ($projet['langages'] as $lang): ?>
        <li><?= $lang ?></li>
      <?php endforeach; ?>
    </ul>
    <a class="retour" href="projets.php">← Retour</a>
  </div>
</body>
</html>
