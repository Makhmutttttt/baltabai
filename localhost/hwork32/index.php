<?php
    $myfile = fopen("_article.txt" , "w") or die("Unable open the file");
    $notefile = fopen("_note.txt" , "w") or die("Unable open the file");
    $Aitzhan = "bro how are you";
    $johan = "rakamakafo fff fristaylo ";
    fwrite($myfile, $Aitzhan);
    fclose($myfile);
    $text = file_get_contents("_article.txt");
    file_put_contents("_note.txt" , $johan , FILE_APPEND);
    file_put_contents("_note.txt" , $Aitzhan , FILE_APPEND);
    $text2 = file_get_contents("_note.txt");
    // echo $text2;
    $zero_hundred = fopen("_1-100.txt" , "w") or die("Unable open the file");
   
    for($i = 0;$i <= 100;$i++){
        if($i == null){
        file_put_contents("_1-100.txt" , $i, FILE_APPEND);
        }
        else{
            $apart = ";".$i;
            file_put_contents("_1-100.txt" , $apart, FILE_APPEND);
        }
        
    }
    fclose($zero_hundred);
    $array = explode(";" , file_get_contents("_1-100.txt"));
    $length = count($array);
    $sum = 0;   
    for($i = 0 ; $i < $length;$i++){
        // echo $array[$i] . " ; ";
        $sum += intval($array[$i]);
    }
    $file_contents = file_get_contents('_1-100.txt');
    // echo $file_contents;
    $sum_file = fopen("_sum.txt","w")or die("Unable open the file");
    file_put_contents("_sum.txt" , $sum, FILE_APPEND);
    $file_sum = file_get_contents('_1-100.txt');
    echo $sum;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <form action="" class="ggg" method="POST">

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