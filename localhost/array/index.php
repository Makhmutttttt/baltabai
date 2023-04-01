<?php 
if(isset($_GET['string1'])){
    $string1 = $_GET['string1'];
    $string2 = $_GET['string2'];
    if(isset($_GET['string1'])){
        // $stringN = mb_strtolower($string1);
        // $stringN2 = mb_strtolower($string2);
        $array = explode(",", $string1);
        $array2 = explode(",", $string2);
        $str_new = implode(", ", $array);
        $str_new2 = implode(", ", $array2);


        $merge_array = array_merge($array,$array2);
        $unique = array_unique($merge_array);
        $new_string = implode(" ", $unique);
        
        


        // $names = array(
        //     John, Jane, Michael, Emily, William, Olivia, Jacob, Abigail, Ethan, Sophia,
        //     David, Madison, Andrew, Isabella, Daniel, Chloe, Christopher, Elizabeth, Joshua, Mia
        // );
    }


}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
<div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <form action="index.php">
                    <div class="mb-3">
                        <label for="number1" class="form-label">Number1</label>
                        <textarea rows="4 " class="form-control" id="string1" name="string1" ><?= $_GET['string1'] ?? '' ?></textarea>
                    </div>
                    

                    😂😂😊
                    <div class="mb-3">
                        <label for="number1" class="form-label">Number1</label>
                        <textarea rows="4 " class="form-control" id="string2" name="string2"><?= $_GET['string2'] ?? '' ?></textarea>
                    </div>
                    

                    😂😂😊
                    <input type="submit" value="Получить">
                
                
                
                    <div class="mb_3">
                    <?php 

                        if(isset($array))
                            // $array_print = print_r($array, true);
                            // echo '<pre>' . nl2br($array_print) . '</pre>';
                            // $array_print2 = print_r($array2, true);
                            // echo '<pre>' . nl2br($array_print2) . '</pre>';
                            print_r($new_string);

                        ?>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>
</html>





                   <!--if(isset($array))
                        $array_print = print_r($array_rev, true);
                        echo '<pre>' . nl2br($array_print) . '</pre>';
                    ?> -->