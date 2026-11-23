<?php
require_once __DIR__ . '/../model/BookModel.php';

class BookController {
    public function tampilkanHalaman() {
        $model = new BookModel();
        $books = $model->getAllBooks();

        require_once __DIR__ . '/../view/user/home.php';
    }
}

$controller = new BookController();
$controller->tampilkanHalaman();
