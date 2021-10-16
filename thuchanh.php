<?php
$conn = new PDO('mysql:host=localhost;dbname=demo', 'root', '');

$stmt = $conn->prepare('select * from products');

$stmt -> setFetchMode(PDO::FETCH_OBJ);
$a=$stmt->execute();

while ($row = $stmt->fetch()) {
    echo $row->id, ' ';
    echo $row->productCode, ' ';
    echo $row->productName, '<BR>';
}