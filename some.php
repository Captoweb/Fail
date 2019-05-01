<?php

$data = [
    "title"=> $_POST['title'],
    "content"=> $_POST['content'],
];

$connection = new PDO('mysql:host=localhost;dbname=miniajax', 'root', '');
$sql = 'INSERT INTO posts (title, content) VALUE (:title, :content)'; //метки
$statement = $connection->prepare($sql); //записывает данные
$result = $statement->execute($data); //закинули массив в БД
 
//var_dump($result);


