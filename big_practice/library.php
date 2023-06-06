User

<?php
// Подключение к базе данных
require 'connect_db.php';

// Запрос для получения всех данных из таблицы books
$sql = "SELECT * FROM books";
$stmt = $pdo->query($sql);

// Получение всех данных из запроса в виде массива
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Список книг</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1 class="my-4">Список книг</h1>

    <div class="my-4">
        <button class="btn btn-primary" onclick="showBooks()">Показать все книги</button>
    </div>

    <table class="table table-striped" id="book-table" style="display:none">
        <div class="row">
            <?php foreach ($books as $book): ?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= $book['title'] ?></h5>
                            <p class="card-text"><?= $book['author'] ?></p>
                            <p class="card-text"><?= $book['genre'] ?></p>
                            <p class="card-text"><?= $book['year_published'] ?></p>
                            <p class="card-text"><?= $book['num_pages'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </table>
</div>


</body>
</html>