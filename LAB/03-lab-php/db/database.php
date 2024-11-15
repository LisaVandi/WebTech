<?php
class DatabaseHelper {
    // connessione per il db
    private $db;
    
    // costruttore
    public function __construct($servername, $username, $password, $dbname, $port) {   
        $this->db = new mysqli($servername, $username, $password, $dbname, $port);
        // controllo che la connessione sia andata a buon fine
        // connect_error è un campo settato solo se la connessione fallisce
        if ($this->db->connect_error) {
            // interruzione dell'esecuzione
            die("Connessione al db fallita.");
        }
    }

    // funzione per ottenere i post casuali
    // $n=2 è una variabile di default che viene usata se si chiama il metodo senza parametri
    public function getRandomPosts($n=2){
        // statement
        $stmt = $this->db->prepare("SELECT idarticolo, titoloarticolo, imgarticolo 
        FROM articolo ORDER BY RAND() LIMIT ?");
        // bind_param serve per passare i parametri alla query
        // i = intero, $n parametro da associare
        $stmt->bind_param("i", $n);
        $stmt->execute();
        $result = $stmt->get_result(); // ritorna un puntatore al risultato
        
        // fetch_all ritorna un array di array associativi
        return $result->fetch_all(MYSQLI_ASSOC); 
    }

    public function getCategories(){
        $stmt = $this->db->prepare("SELECT idcategoria, nomecategoria FROM categoria");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getPosts($n = -1){
        $query = "SELECT idarticolo, titoloarticolo, imgarticolo, dataarticolo, anteprimaarticolo, nome  FROM articolo, autore WHERE autore=idautore ORDER BY dataarticolo DESC";
        if($n > 0){
            $query = $query . " LIMIT ?";
        }
        $stmt = $this->db->prepare($query);
        if($n > 0){
            $stmt->bind_param("i", $n);
        }
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

}
?>  