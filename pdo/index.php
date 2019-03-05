<?php

$host = 'localhost';
$user = 'david';
$pass = 'admin';
$db = 'pdoposts';

// SET DSN -  DATA SOURCE NAME
$dsn = 'mysql:host='.$host.';dbname='.$db;

// Create a PDO Instance or connection

$pdo = new PDO($dsn,$user,$pass);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

# PDO Query 

// $stmt = $pdo->query('SELECT * FROM post');

// while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//     echo $row['title'].'<br>';
// }

// while($row = $stmt->fetch(PDO::FETCH_OBJ)){
//     echo $row->title.'<br>';
// }


# PREPARED STATEMENT
# --- (prepare & execute) ---

// Fetch multiple posts

// positional parameters

// user input

$author = 'david';


$sql ="SELECT * FROM post WHERE author = ?";

$stmt = $pdo->prepare($sql);
$stmt->execute([$author]);

$post = $stmt->fetchAll();
var_dump($post);

foreach($post as $p){
    echo $p->title;'<br>';
}