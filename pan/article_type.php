<?php
include "titres_articles.php";

$slug = $_GET['slug'] ?? '';

if(isset($articles[$slug])) {
    $article = $articles[$slug];

    echo "<h1>{$article['titre']}</h1>";
    echo $article['contenu'];

} else {
    echo "Article introuvable.";
}
?>
