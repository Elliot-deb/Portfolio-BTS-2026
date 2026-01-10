<?php
// Variables
$taille = 0;
$tableau = array();
$compteur = 1;


// Lecture de la taille du tableau
echo "<h2>Remplissage en Escargot</h2>";
echo "<hr>";


// Vous pouvez modifier cette valeur ou utiliser un formulaire
$taille = 5; // Changez cette valeur pour tester différentes tailles


echo "<p><strong>Taille du tableau :</strong> " . htmlspecialchars($taille) . " x " . htmlspecialchars($taille) . "</p>";


// Si taille = 0 alors fin de procédure
if ($taille == 0) {
    echo "Taille nulle, fin de procédure.";
    exit;
}

// Initialisation du tableau
for ($i = 0; $i < $taille; $i++) {
    for ($j = 0; $j < $taille; $j++) {
        $tableau[$i][$j] = 0;
    }
}


$compteur = 1;


// Boucle principale
for ($tour = 0; $tour < intval($taille / 2); $tour++) {
    
    // Boucle haut->bas
    $colonne = $tour;
    for ($ligne = $tour; $ligne <= $taille - $tour - 2; $ligne++) {
        $tableau[$ligne][$colonne] = $compteur;
        $compteur = $compteur + 1;
    }
    
    // Boucle gauche->droite
    $ligne = $taille - $tour - 1;
    for ($colonne = $tour; $colonne <= $taille - $tour - 2; $colonne++) {
        $tableau[$ligne][$colonne] = $compteur;
        $compteur = $compteur + 1;
    }
    
    // Boucle bas->haut
    $colonne = $taille - $tour - 1;
    for ($ligne = $taille - $tour - 1; $ligne >= $tour + 1; $ligne--) {
        $tableau[$ligne][$colonne] = $compteur;
        $compteur = $compteur + 1;
    }
     // Boucle droite->gauche
    $ligne = $tour;
    for ($colonne = $taille - $tour - 1; $colonne >= $tour + 1; $colonne--) {
        $tableau[$ligne][$colonne] = $compteur;
        $compteur = $compteur + 1;
    }
}


// Place le dernier nombre pour les escargots à taille impaire
if (($taille % 2) != 0) {
    $colonne = intval($taille / 2);
    $ligne = intval($taille / 2);
    $tableau[$ligne][$colonne] = $compteur;
}


// Affichage du tableau
echo "<h3>Résultat :</h3>";
echo "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: co
