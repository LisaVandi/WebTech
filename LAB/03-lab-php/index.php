<?php
# require: interrompe l'esecuzione in caso di errore
# include: non interrompe l'esecuzione, ma dà un warning
require_once("bootstrap.php");

// array associativo per i titoli delle pagine
// titolo è chiave, il valore è il titolo della pagina
$templateParams["titolo"] = "Blog TW - Home";
$templateParams["nome"] = "lista-articoli.php";
$templateParams["articolicasuali"] = $dbh->getRandomPosts();
$templateParams["categorie"] = $dbh->getCategories();
$templateParams["articoli"] = $dbh->getPosts(2);

// var_dump($templateParams["articolicasuali"]); // debug

require("template/base.php")
?>