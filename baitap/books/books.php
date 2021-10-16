<?php

class books
{
    public $pdo;

    public function __construct()
    {
        $db = new library();
        if ($this->pdo == true) echo('a');
        $this->pdo = $db->connect();
    }

    public function add($book)
    {
        $sql = 'Insert into books (bookName,author,publishingCompany,price,yearExport,image,categoryId) value (?,?,?,?,?,?,?)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $book['bookName']);
        $stmt->bindParam(2, $book['author']);
        $stmt->bindParam(3, $book['publishingCompany']);
        $stmt->bindParam(4, $book['price']);
        $stmt->bindParam(5, $book['yearExport']);
        $stmt->bindParam(6, $book['image']);
        $stmt->bindParam(7, $book['categoryId']);
        $stmt->execute();
    }

    public function getAll()
    {
        $sql = 'select * from books join category on category.categoryId=books.categoryId';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function DeleteBook($id)
    {
        $sql = 'delete from bookborrow where bookId = ?';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $sql = 'delete from books where bookId = ?';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        header('location: ListBook.php');;
    }

    public function selectBook($id)
    {
        $sql = 'select * from books where bookId=:id ';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam('id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function editBook($book)
    {
        $sql = 'UPDATE books set bookName = ?, author = ?, publishingCompany = ? , price = ? , yearExport = ? , image = ? , categoryId = ? where bookId = ? ';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $book['bookName']);
        $stmt->bindParam(2, $book['author']);
        $stmt->bindParam(3, $book['publishingCompany']);
        $stmt->bindParam(4, $book['price']);
        $stmt->bindParam(5, $book['yearExport']);
        $stmt->bindParam(6, $book['image']);
        $stmt->bindParam(7, $book['categoryId']);
        $stmt->bindParam(8, $book['id']);

        $stmt->execute();
    }

}