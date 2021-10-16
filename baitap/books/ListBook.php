<?php

include_once '../connect/library.php';
include_once 'books.php';

$books = new books();
$ListBooks = $books->getAll();
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

<br>
<a href="AddBook.php"><button type="button" class="btn btn-outline-dark" >Add new book</button></a>
<br>
<br>
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Book Id</th>
        <th scope="col">Book Name</th>
        <th scope="col">Author</th>
        <th scope="col">Publishing Company</th>
        <th scope="col">Price</th>
        <th scope="col">Year Export</th>
        <th scope="col">Image</th>
        <th scope="col">Category</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($ListBooks as $book): ?>
        <tr>
            <td scope="row"><?php echo($book['bookId']) ?></td>
            <td><?php echo($book['bookName']) ?></td>
            <td><?php echo($book['author']) ?></td>
            <td><?php echo($book['publishingCompany']) ?></td>
            <td><?php echo($book['price']) ?></td>
            <td><?php echo($book['yearExport']) ?></td>
            <td><img src="<?php echo($book['image']) ?>"></td>
            <td><?php echo($book['categoryName']) ?></td>
            <td><a onclick="confirm('Are you sure?')" href="DeleteBook.php?id=<?php echo($book['bookId']) ?>">Delete</a>
            </td>
            <td><a href="EditList.php?id=<?php echo($book['bookId']) ?>">Edit</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>
</html>

