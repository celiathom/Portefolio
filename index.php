<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
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
    <h2 class="titre-apropos" id="apropos">À propos</h2>

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
        <img src="assets/photo.png" alt="Célia Thomias">
      </div>
    </div>
  </div>
</div>

<section class="frontend-section">
  <h2 class="titre-frontend" id="competences">Frontend</h2>
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
      <div class="project-media"></div>
      <div class="project-info">
        <h3>PUISSANCE 4</h3>
        <p>
          Puissance 4 – Jeu interactif développé en JavaScript.
          Un jeu web classique entièrement codé à la main, avec animations de placement,
          tour par tour, et détection automatique du gagnant.
        </p>
        <small>By Célia • 4 days ago</small>
        <div class="tech-buttons">
          <span class="btn html">HTML</span>
          <span class="btn js">JS</span>
          <span class="btn css">CSS</span>
        </div>
      </div>
    </div>

    <div class="project-card neon-blue">
      <div class="project-media"></div>
      <div class="project-info">
        <h3>LOREM IPSUM</h3>
        <p>Contenu de ta carte ici...</p>
        <div class="tech-buttons">
          <span class="btn html">HTML</span>
          <span class="btn css">CSS</span>
        </div>
      </div>
    </div>

    <div class="project-card neon-yellow">
      <div class="project-media"></div>
      <div class="project-info">
        <h3>LOREM IPSUM</h3>
        <p>Contenu de ta carte ici...</p>
        <div class="tech-buttons">
          <span class="btn html">HTML</span>
          <span class="btn css">CSS</span>
        </div>
      </div>
    </div>

    <div class="project-card neon-orange">
      <div class="project-media"></div>
      <div class="project-info">
        <h3>LOREM IPSUM</h3>
        <p>Contenu de ta carte ici...</p>
        <div class="tech-buttons">
          <span class="btn html">HTML</span>
          <span class="btn js">JS</span>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  let lastScrollTop = 0;
  const navbar = document.querySelector('.navbar');

  window.addEventListener('scroll', () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
      navbar.classList.add('hide'); // scroll vers le bas → cache
    } else {
      navbar.classList.remove('hide'); // scroll vers le haut → montre
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
  });
</script>

<style>
.project-media {
  width: 100%;
  height: 200px; /* ou la hauteur que tu veux */
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}
.project-media video {
  max-width: 100%;
  max-height: 100%;
  border-radius: 12px;
}
</style>