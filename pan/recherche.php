<?php
include 'titres_articles.php';

$mot = strtolower($_GET['q'] ?? '');

echo "<h2>Résultats :</h2>";

foreach ($articles as $article) {
    if (
        str_contains(strtolower($article["titre"]), $mot) ||
        str_contains(strtolower($article["description"]), $mot)
    ) {
        echo "<p>
                <a href='{$article["url"]}'>
                    {$article["titre"]}
                </a><br>
                {$article["description"]}
              </p>";
    }
}
?>

