<?php
function afficherNavbar($pageActive = 'accueil') {
    $pages = [
        'accueil' => 'Accueil',
        'apropos' => 'À propos',
        'competences' => 'Compétences',
        'portfolio' => 'Portfolio',
        'contact' => 'Contact'
    ];

    echo '<div class="navbar">';
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

    echo 
    '</div>';
}
?>
