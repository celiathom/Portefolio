<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio de Célia</title>
    <link rel="stylesheet" href="style.css">
    <script src="darkmode.js" defer></script>
    <link rel="stylesheet" href="puissance4.css">
</head>
<body id="body" class="light-mode">

<?php afficherNavbar(); ?>

<div class="container">
    <div class="ellipse jaune"></div>
    <div class="ellipse orange"></div>
    <div class="ellipse red"></div>
    <div class="ellipse blue"></div>

    <div class="texte-titre" id="accueil">
        <h1 class="bonjour">Bonjour & Bienvenue !</h1>
        <h2 class="celia">Célia Thomias</h2>
        <h3 class="metier">Développeuse Web & Designer</h3>
        <h4 class="metier2">Graphique</h4>
    </div>

    <div class="bouton-cv">
        <a href="assets/cv developpeuse et designer (bis).pdf" download="cv">
            TÉLÉCHARGER CV
        </a>
    </div>

    <div class="social-icons">
        <a href="https://www.linkedin.com/in/c%C3%A9liathomias/" class="icon-btn" title="LinkedIn">
            <img src="assets/linkedin.png" alt="LinkedIn">
        </a>
        <a href="https://github.com/celiathom" class="icon-btn" title="GitHub">
            <img src="assets/github.png" alt="GitHub">
        </a>
        <a href="mailto:celia.thomias@epitech.eu" class="icon-btn" title="Outlook">
            <img src="assets/gmail.png" alt="Outlook">
        </a>
    </div>
</div>

<div class="ellipse-container">
  <div class="ellipse blue"></div>
  <div class="ellipse red"></div>

  <div class="apropos-wrapper">
    <h2 class="titre-apropos">À propos</h2>

    <div class="apropos-content">
      <div class="texte-gauche">
        <p class="citation">
          "Allier code et créativité pour des expériences web uniques".
        </p>
        <p>
          Je suis Célia Thomias, développeuse web passionnée par le design et l’univers graphique.
          J’adore créer des interfaces à la fois fonctionnelles et esthétiques. <br><br>
          Actuellement en formation, je développe mes compétences en PHP, JavaScript, React et bien d’autres outils du web.
        </p>
      </div>

      <div class="image-droite">
        <img src="assets/photo.png" alt="Célia Thomias"id="apropos">
      </div>
    </div>
  </div>
</div>

<section class="frontend-section">
  <h2 class="titre-frontend" id="competences">Frontend</h2>
  <p class="tip-mobile">Touchez une icône pour voir le nom du langage</p>
  <div class="frames-grid">
    <div class="frame"><img src="assets/html.png" alt="HTML"><span class="frame-label">HTML</span></div>
    <div class="frame"><img src="assets/css.png" alt="CSS"><span class="frame-label">CSS</span></div>
    <div class="frame"><img src="assets/js.png" alt="JavaScript"><span class="frame-label">JavaScript</span></div>
    <div class="frame"><img src="assets/react.png" alt="React"><span class="frame-label">React</span></div>
    <div class="frame"><img src="assets/tailwind.png" alt="Tailwind"><span class="frame-label">Tailwind</span></div>
    <div class="frame"><img src="assets/figma.png" alt="Figma"><span class="frame-label">Figma</span></div>
    <div></div>
    <div class="frame"><img src="assets/sass.png" alt="Sass"><span class="frame-label">Sass</span></div>
    <div></div>
  </div>
  <div class="aura-sass"></div>
</section>

<section class="backend-section">
  <h2 class="titre-backend">Backend / BDD</h2>
  <p class="tip-mobile">Touchez une icône pour voir le nom du langage</p>
  <div class="frames-grid backend-grid">
    <div class="frame">
      <img src="assets/php.png" alt="PHP">
      <div class="frame-label">PHP</div>
    </div>
    <div class="frame">
      <img src="assets/mysql.png" alt="MySQL">
      <div class="frame-label">MySQL</div>
    </div>
    <div class="frame">
      <img src="assets/jquery.png" alt="jQuery">
      <div class="frame-label">jQuery</div>
    </div>
    <div class="frame">
      <img src="assets/ajax.png" alt="AJAX">
      <div class="frame-label">AJAX</div>
    </div>
  </div>
  <div class="aura-backend"></div>
</section>

<section class="outils-section">
  <h2 class="titre-outils">Boîte à outils</h2>
  <p class="tip-mobile">Touchez une icône pour voir le nom de l'outil</p>

  <div class="outils-container">
    <div class="ligne-haut">
      <div class="frame">
        <img src="assets/ai.png" alt="Illustrator">
        <div class="frame-label">Illustrator</div>
      </div>
      <div class="frame">
        <img src="assets/id.png" alt="InDesign">
        <div class="frame-label">InDesign</div>
      </div>
      <div class="frame">
        <img src="assets/ps.png" alt="Photoshop">
        <div class="frame-label">Photoshop</div>
      </div>
    </div>

    <div class="ligne-bas">
      <div class="frame">
        <img src="assets/vscode.png" alt="VS Code">
        <div class="frame-label">VS Code</div>
      </div>
      <div class="frame">
        <img src="assets/GitHub1.png" alt="GitHub">
        <div class="frame-label">GitHub</div>
      </div>
    </div>
  </div>
</section>
<div class="aura-outils"></div>

<section class="outils-section" id="portfolio">
  <h2 class="titre-outils">Portfolio</h2>

  <div class="cards-grid">
    <div class="project-card neon-red">
      <div class="project-media" style="position:relative;">
        <img src="assets/puissance4.png" alt="Puissance 4" style="width:100%;height:100%;object-fit:cover;border-radius:18px;display:block;">
        <a href="https://celiathom.github.io/puissance4/" target="_blank" class="media-overlay">Voir mon projet</a>
      </div>
      <div class="project-info">
        <h3 class="project-title" style="margin-top:0.1em;font-size:1.5rem;">PUISSANCE 4</h3>
        <p style="margin-top: 0.1em;">
          Jeu interactif développé en JavaScript.
          Un jeu web classique entièrement codé à la main, avec animations de placement,
          tour par tour, et détection automatique du gagnant.
        </p>
        <div class="tech-buttons">
          <span class="btn html">HTML</span>
          <span class="btn js">JS</span>
          <span class="btn css">CSS</span>
        </div>
      </div>
    </div>
    
    <div class="project-card neon-blue">
      <div class="project-media" style="position:relative; box-shadow: 0 0 32px 0 rgba(30,30,30,0.45);">
        <img src="assets/Capture d’écran du 2025-06-03 00-05-24.png" alt="Projet Capture" style="width:100%;height:100%;object-fit:cover;border-radius:18px;display:block;">
        <a href="assets/Votre texte de paragraphe-2.pdf" class="media-overlay" style="background:rgba(30,30,30,0.82);" target="_blank">Voir le PDF du projet</a>
      </div>
      <div class="project-info">
        <h3 style="font-size:1.5rem;">PROJET TWITTER</h3>
        <p style="margin-top:-0.1em;">Projet de réseau social façon Twitter pour étudiants. Fonctionnalités : tweets (140 caractères), hashtags, mentions, messages privés, followers, profil, recherche.</p>
        <div class="tech-buttons">
          <span class="btn php">PHP</span>
          <span class="btn html">HTML</span>
          <span class="btn css">CSS</span>
          <span class="btn js">JS</span>
          <span class="btn sql">SQL</span>
        </div>
      </div>
    </div>

    <div class="project-card neon-yellow">
      <div class="project-media" style="background: #fff; border-radius: 22px; position: relative; width: 260px; height: 254px; overflow: hidden;">
        <img src="assets/IMG_5508.PNG" alt="Snapchat style" style="width:100%; height:100%; object-fit:cover; border-radius:18px; display:block;">
        <a href="assets/snap.pdf" class="media-overlay" target="_blank">Voir le PDF du projet</a>
      </div>
      <div class="project-info">
        <h3 style="color:#fff; font-size:1.5rem; margin-top:0.1em;">SNAPCHAT</h3>
        <p style="color:#fff; margin-top:0.1em;">Application mobile Snapchat.
Fonctionnalités : inscription, connexion, envoi et réception de photos éphémères.
Utilisation de la caméra ou de la galerie, avec durée personnalisée pour chaque snap.</p>
        <div class="tech-buttons">
          <span class="btn html">React Native</span>
          <span class="btn css">JS</span>
          
        </div>
      </div>
    </div>

    <div class="project-card neon-orange">
      <div class="project-media" style="background: #fff; border-radius: 22px; position: relative; width: 260px; height: 254px; overflow: hidden; display: flex; align-items: center; justify-content: center;">
        <img src="assets/Capture d’écran du 2025-06-10 10-25-15.png" alt="Projet orange" style="width:100%; height:100%; object-fit:cover; border-radius:18px; display:block;">
        <a href="https://celiathom.github.io/my_wysiwyg/" class="media-overlay" target="_blank">Voir le projet</a>
      </div>
      <div class="project-info">
        <h3 style="color:#fff; font-size:1.5rem; margin-top:0.2em;">My Wysiwyg</h3>
        <p style="color:#fff; margin-top:0.1em;">Création d’un éditeur de texte, personnalisable. Il permet de formater du texte (gras, italique, couleur…), sauvegarder le contenu et gérer l’affichage via un module réutilisable.</p>
        <div class="tech-buttons">
          <span class="btn html">HTML</span>
          <span class="btn js">CSS</span>
          <span class="btn js">JavaScript</span>
        </div>
      </div>
    </div>

    <div class="project-card neon-green">
      <div class="project-media" style="position:relative;">
        <img src="assets/Capture d’écran du 2025-06-23 10-30-23.png" alt="Capture d’écran projet" style="width:100%;height:100%;object-fit:cover;border-radius:20px;display:block;">
        <a href="assets/Copie de CELIA THOMIAS MONOGRAMME.pdf" class="media-overlay" id="voir-plus-monogramme" target="_blank">Voir mon projet</a>
      </div>
      <div class="project-info">
        <h3 style="font-size:1.5rem;">MONOGRAMME</h3>
        <p style="margin-top:-0.5rem;">Ce logo représente mes initiales. Mes couleurs favorites, pour refléter ma personnalité. La typographie du T évoque la forme d’un parapluie, tandis que celle du C rappelle une goutte d’eau, créant ainsi un lien visuel poétique entre les deux éléments.</p>
        <div class="tech-buttons">
          <span class="btn html">Illustrator</span>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Switch jour/nuit version mobile -->
<div class="mobile-switch">
  <label class="switch">
    <input type="checkbox" id="mobile-darkmode-toggle" />
    <span class="slider"></span>
  </label>
</div>
<script>
  let lastScrollTop = 0;
  const navbar = document.querySelector('.navbar');

  window.addEventListener('scroll', () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
      navbar.classList.add('hide');
    } else {
      navbar.classList.remove('hide');
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
  });
</script>

<script>
  const navItems = document.querySelectorAll(".nav-links li");

  navItems.forEach(item => {
    item.addEventListener("click", () => {
      navItems.forEach(li => li.classList.remove("active"));
      item.classList.add("active");
    });
  });
</script>

<style>
.project-media {
  width: 260px;
  height: 254px;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  border-radius: 22px;
}
.project-media img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 18px;
  display: block;
}
.media-overlay {
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  background: rgba(30,30,30,0.88);
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  font-size: 1.2em;
  font-weight: bold;
  text-decoration: none;
  border-radius: 18px;
  transition: opacity 0.3s;
  z-index: 2;
  letter-spacing: 1px;
}
.project-media:hover .media-overlay {
  opacity: 1;
}
</style>
<script>
document.getElementById('voir-plus-monogramme').onclick = function(e) {
  e.preventDefault();
  window.open('assets/MONOGRAMME.pdf', '_blank');
};
</script>