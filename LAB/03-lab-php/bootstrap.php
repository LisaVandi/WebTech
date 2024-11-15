<?php 
// includo il db
require_once("db/database.php");

// qui, parti comuni a tutte le pagine
// istanzio l'oggetto 
$dbh = new DatabaseHelper("localhost", "root", "", "blogtw", 3306);

define("UPLOAD_DIR", "./upload/")
?>