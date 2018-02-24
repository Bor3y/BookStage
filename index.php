<?php
$route = explode('?',$_SERVER['REQUEST_URI'])[0];

$token = $_GET['token'] ?? "";

if ($route == '/') {
    include('views/home.php');
}else if ($route == '/book') {
    $id = $_GET['id'] ?? null;
    $conn = new PDO("mysql:host=127.0.0.1;dbname=booksatge", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, name, description FROM books WHERE id = $id");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $book = $stmt->fetchAll()[0];

    if($book)
        include('views/single.php');
    else
        echo "404 not found";
} else {
    echo "404 not found";
}

?>