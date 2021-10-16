<?php
include_once 'books.php';
include_once '../connect/library.php';
$books = new books();
$id = $_GET['id'] ?? null;
$book = $books->selectBook($id);
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
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
    <form method="post">

        <div class="form-group">
            <label for="exampleInputEmail1">Book Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="bookName"
                   value="<?php echo($book['bookName']) ?>">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Author</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="author"
                   value="<?php echo($book['author']) ?>">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Publishing company</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="publishingCompany"
                   value="<?php echo($book['publishingCompany']) ?>" >
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Price's Book</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="price"
                   value="<?php echo($book['price']) ?>">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Export date</label>
            <input type="date" class="form-control" id="exampleInputEmail1" name="yearExport"
                   value="<?php echo($book['yearExport']) ?>">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Image link</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="image"
                   value="<?php echo($book['image']) ?>">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Category Id</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="categoryId"
                   value="<?php echo($book['categoryId']) ?>">
        </div>

        <input type="hidden" name="bookId" value="<?php echo($book['bookId']) ?>">

        <button type="submit" class="btn btn-primary">Edit</button>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>
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
    $bookId = $_POST['bookId'];


    $book = [
        'bookName' => $bookName,
        'author' => $author,
        'publishingCompany' => $publishingCompany,
        'price' => $price,
        'yearExport' => $yearExport,
        'image' => $image,
        'categoryId' => $categoryId,
        'id' => $bookId
    ];
    $books->editBook($book);

    header('location: ListBook.php');
}

