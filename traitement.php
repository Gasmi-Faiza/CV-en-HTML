<?php
// Récupérer les données du formulaire
$titre = $_POST['titre'];
$description = $_POST['description'];
$ingredients = $_POST['ingredients'];
$etapes = $_POST['etapes'];

// Afficher pour tester
echo "<h2>Recette reçue :</h2>";
echo "<strong>Titre :</strong> " . htmlspecialchars($titre) . "<br>";
echo "<strong>Description :</strong> " . nl2br(htmlspecialchars($description)) . "<br>";
echo "<strong>Ingrédients :</strong> " . nl2br(htmlspecialchars($ingredients)) . "<br>";
echo "<strong>Étapes :</strong> " . nl2br(htmlspecialchars($etapes)) . "<br>";
?>