<?php
include_once 'books.php';
include_once '../connect/library.php';
$books = new books();
?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
              crossorigin="anonymous">
    </head>
    <body>
    <form method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Book Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="bookName"
                   placeholder="Enter book name">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Author</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="author"
                   placeholder="Author's name">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Publishing company</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="publishingCompany"
                   placeholder="Publishing company">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Price's Book</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="price"
                   placeholder="Price of the book">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Export date</label>
            <input type="date" class="form-control" id="exampleInputEmail1" name="yearExport"
                   placeholder="Export date">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Image link</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="image"
                   placeholder="Image link">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Category Id</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="categoryId"
                   placeholder="Category Id">
        </div>

        <button type="submit" class="btn btn-primary">Add the book</button>
    </form>
    </body>
    </html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bookName = $_POST['bookName'];
    $author = $_POST['author'];
    $publishingCompany = $_POST['publishingCompany'];
    $price = $_POST['price'];
    $yearExport = $_POST['yearExport'];
    $image = $_POST['image'];
    $categoryId = $_POST['categoryId'];

    $book = [
        'bookName' => $bookName,
        'author' => $author,
        'publishingCompany' => $publishingCompany,
        'price' => $price,
        'yearExport' => $yearExport,
        'image' => $image,
        'categoryId' => $categoryId
    ];
    $books->add($book);
    header('location: ListBook.php');
}

