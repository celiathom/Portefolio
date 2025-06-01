<?php
function afficherNavbar($pageActive = 'accueil') {
    $pages = [
        'accueil' => 'Accueil',
        'apropos' => 'À propos',
        'competences' => 'Compétences',
        'portfolio' => 'Portfolio'
    ];

    echo '<div class="navbar">';

    // Groupe nav-links + switch
    echo '<div class="nav-group">';
    echo '<ul class="nav-links">';
    foreach ($pages as $id => $label) {
        $active = ($pageActive === $id) ? 'active' : '';
        echo "<li class='$active'><a href='#$id'>$label</a></li>";
    }
    echo '</ul>';

    echo '<label class="switch">';
    echo '  <input type="checkbox" id="theme-toggle">';
    echo '  <span class="slider"></span>';
    echo '</label>';
    echo '</div>'; // .nav-group

    echo '</div>'; // .navbar
}

?>
