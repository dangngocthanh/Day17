<?php
 include_once 'books.php';
 include_once '../connect/library.php';
$books = new books();
$id=$_REQUEST['id'];
$books->DeleteBook($id);
