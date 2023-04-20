<?php

// Connect to the database
$host = "127.0.0.1";
$dbname = "sigma";
$port = "3307";
$user = "root";
$password_sql = "";
$dsn = "mysql:host={$host};dbname={$dbname};port={$port};";

$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

$database = new PDO($dsn, $user, $password_sql, $options);

$test_name = '';
if(isset($_POST['create_table'])) {
    $test_name = $_POST['test_name'];
    // validate and sanitize the $test_name variable here
    // ...
    echo $test_name;

    // create the SQL query with the user input
    $sql = "CREATE TABLE $test_name (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      question TEXT NOT NULL,
      option_1 TEXT NOT NULL,
      option_2 TEXT NOT NULL,
      option_3 TEXT NOT NULL,
      option_4 TEXT NOT NULL,
      answer TEXT NOT NULL
    )";
    



// Проверяем существование таблицы
$stmt = $database->query("SHOW TABLES LIKE '$test_name'");
if ($stmt->rowCount() > 0) {
    echo "Table exists  ". $test_name . "FROO" ;
    echo $test_name ." - ";
} else {
    $database->query($sql);
}

}

//  
//  && !empty($table_name))&& isset($test_name)

if(isset($_POST['question'])) {
    echo $test_name;
    $stmt = $database->prepare("INSERT INTO joba (question, option_1, option_2, option_3, option_4, answer) 
        VALUES (:question, :option_1, :option_2, :option_3, :option_4, :answer)");

    $stmt->bindParam(':question', $_POST['question']);
    $stmt->bindParam(':option_1', $_POST['Option_1']);
    $stmt->bindParam(':option_2', $_POST['Option_2']);
    $stmt->bindParam(':option_3', $_POST['Option_3']);
    $stmt->bindParam(':option_4', $_POST['Option_4']);
    $stmt->bindParam(':answer', $_POST['Solution']);

    if ($stmt->execute()) {
        echo "Record inserted successfully";
    } else {
        echo "Error inserting record: " . $stmt->errorInfo()[2];
    }
} else {
    echo "Error: table name or question is not set  ";
    if (!empty($table_name)) {
        echo $table_name ."есть по сути";
    } else {
        echo "Your table not exist";    
    }

    // echo $_POST['Solution'];
}

  $test_name = null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="create_test.css">
 
</head>

<body class="body">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <form action="" method="POST">
                    <label for="test_name">Table Name:</label>
                    <input type="text" id="test_name" class="form-control mb-3" name="test_name">

                    <!-- other form fields for questions, options, and answer -->

                    <button type="submit" name="create_table" class="btn btn-primary mb-3">Create Table</button>
                </form>



                <form action="" class="ggg" method="POST">
                    <div class="mb-3">
                        <lable for= "question" class="form-lable">Questions</lable>
                        <textarea name="question" id="login" class="form-control"></textarea>
                    </div>


                    <div class="mb-3">
                        <lable for="Option_1"class="form-lable">Option_1</lable>
                        <textarea name="Option_1" id="Option_2" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <lable for="Option_2"class="form-lable">Option_2</lable>
                        <textarea name="Option_2" id="Option_2" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <lable for="Option_3"class="form-lable">Option_3</lable>
                        <textarea name="Option_3" id="Option_3" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <lable for="Option_4"class="form-lable">Option_4</lable>
                        <textarea name="Option_4" id="Option_4" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <lable for="Solution"class="form-lable">Solution</lable>
                        <textarea name="Solution" id="Solution" class="form-control"></textarea>
                    </div>
                    


                    <div class="mb-3">
                        <button class="btn btn-primary">Registration</button>
                    </div>


                </form>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
              
            </div>
        </div>
    </div>
</body>

</html>

