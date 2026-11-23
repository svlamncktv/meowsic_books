<?php
require '../config/database.php';

class BookModel {
    private $db;

    public function __construct() {
        global $conn; 
        $this->db = $conn;
    }

    public function getAllBooks() {
        $query = "SELECT id, cover, title FROM book";
        $result = mysqli_query($this->db, $query);

        $books = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $books[] = $row;
        }
        return $books;
    }
}
