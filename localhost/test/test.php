<?php
$array = $_GET;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <form action="">
                    <h2>Какой оператор используется в PHP для установки условия?</h2>

                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="question_1" id="question_1_if"
                            value="if...else..." <?= isset($_GET['question_1']) && $_GET["question_1"] == 'if...else...' ? "checked" : "" ?>>

                        <label class="form-check-label" for="question_1_if">
                            if...else...
                        </label>
                    </div>



                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question_1" id="question_1_for" value="for"
                            <?= isset($_GET['question_1']) && $_GET["question_1"] == 'for' ? "checked" : "" ?>>
                        <label class="form-check-label" for="question_1_for">
                            for
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question_1" id="question_1_while"
                            value="while" <?= isset($_GET['question_1']) && $_GET["question_1"] == 'while' ? "checked" : "" ?>>

                        <label class="form-check-label" for="question_1_while">
                            while
                        </label>
                    </div>



                    <h2>Как называется организация, разрабатывающая и внедряющая технологические стандарты для Всемирной
                        паутины.</h2>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="question_2_IT" name="question_2"
                            value="Интерглобальные технологии(Interglobal technologies, IT)"
                            <?= isset($_GET['question_2']) && $_GET["question_2"] == 'Интерглобальные технологии(Interglobal technologies, IT)' ? 'checked' : "" ?>>

                        <label class="form-check-label" for="question_2_IT">
                            Интерглобальные технологии(Interglobal technologies, IT)
                        </label>

                    </div>

                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="question_2_NAODS" name="question_2"
                            value="Новый век цифровых решений(New age of digital solutions, NAODS)"
                            <?= isset($_GET['question_2']) && $_GET["question_2"] == 'Новый век цифровых решений(New age of digital solutions, NAODS)' ? "checked" : "" ?>>

                        <label class="form-check-label" for="question_2_NAODS">
                            Новый век цифровых решений(New age of digital solutions, NAODS)
                        </label>

                    </div>

                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="question_2_W3C" name="question_2"
                            value="Консорциум всемирной паутины (World Wide Web Consortium, W3C)"
                            <?= isset($_GET['question_2']) && $_GET["question_2"] == 'Консорциум всемирной паутины (World Wide Web Consortium, W3C)' ? "checked" : "" ?>>
                        <label class="form-check-label" for="question_2_W3C">
                            Консорциум всемирной паутины (World Wide Web Consortium, W3C)
                        </label>

                    </div>

                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="question_2_TDU" name="question_2"
                            value="Союз технологического развития(Technological Development Union, TDU)"
                            <?= isset($_GET['question_2']) && $_GET["question_2"] == 'Союз технологического развития(Technological Development Union, TDU)' ? "checked" : "" ?>>

                        <label class="form-check-label" for="question_2_TDU">
                            Союз технологического развития(Technological Development Union, TDU)
                        </label>

                    </div>

                    
                    <h2>Как расположить блоки на странице</h2>

                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="question_3[]" id="question_3_grid"
                            value="grid" <?= isset($_GET['question_1']) && in_array('grid', $_GET['question_3']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="question_3_grid">
                            grid
                        </label>
                    </div>

                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="question_3[]" id="question_3_flex"
                            value="flex" <?= isset($_GET['question_3']) && in_array('flex', $_GET['question_3']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="question_3_flex">
                            flex
                        </label>
                    </div>

                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="question_3[]" id="question_3_margin"
                            value="margin" <?= isset($_GET['question_3']) && in_array('margin', $_GET['question_3']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="question_3_margin">
                            margin
                        </label>
                    </div>

                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="question_3[]" id="question_3_insert"
                            value="insert" <?= isset($_GET['question_3']) && in_array('insert', $_GET['question_3']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="question_3_insert">
                            insert
                        </label>
                    </div>

                    <h2>Как называется ОС для лютых программистов</h2>    
                    <div class="mb-3">
                        <label for="string1" class="form-label">Напиши хоть как на английском или на русском</label>
                        <!-- <input type="text" class="form-control" id="string1" name="string1" value="<?= $_GET['string1'] ?? '' ?>"> -->
                        <textarea class="form-control" id="string1" name="string1"><?= $_GET['string1'] ?? '' ?></textarea>
                    </div>


                    <div class="mb-3">
                        <button class="btn btn-primary">Result</button>
                    </div>

                    <?php
                    $mark = 0; // Define the variable before using it
                    $all = 0;
                    if (isset($_GET['question_1'])) { // если ответ передан
                        $all++;
                        if ($_GET['question_1'] == "if...else...") { // если ответ правильный
                            $mark++; // добавляем балл
                            // print_r($mark . ' ball');
                        }
                    }

                    if (isset($_GET['question_2'])) {
                        $all++;
                        if ($_GET['question_2'] == "Консорциум всемирной паутины (World Wide Web Consortium, W3C)") {
                            $mark++; // добавляем балл
                            // print_r($mark . ' ball');
                        }

                    }

                    ?>

                    <?php
                        if (
                            isset($_GET['string1'])
                        ) {
                            $result = $_GET['string1'][0];
                            $result = strlen($_GET['string1']);
                            $result = mb_strlen($_GET['string1']);
                            $string = str_replace(";", ",", $_GET['string1']);
                            $array = explode(",", $string);
                            foreach($array as $key => $item) {
                                $array[$key] = trim($item);
                            }
                            $array = array_reverse($array);
                            $result = implode("; ", $array);
                            $result = (integer)str_contains($_GET['string1'], 'Max');
                        }
                    ?>

                    <?php
                    if (isset($_GET['question_3'])) {
                        $user_answers = $_GET['question_3'];
                        $correct_answers = array('flex', 'grid', 'margin'); // correct answers
                        $score = 0;
                        $all+=count($array);
                        // loop through user answers and compare with correct answers
                        foreach ($user_answers as $answer) {
                            
                            if (in_array($answer, $correct_answers)) {
                                $mark++;
                            }
                        }
 
                    }
                    print_r($mark . '/' . $all . ' ball'); 
                    ?>

                    


                    <?php if (isset($result)): ?>
                        <div class="mb-3">
                            <label for="result" class="form-label">Result</label>
                            <input type="text" class="form-control" id="result" readonly value="<?= $result ?>">
                            <textarea class="form-control" id="result"><?= $result ?></textarea>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (isset($array)): ?>
                        <pre><?php print_r($array); ?></pre>
                    <?php endif; ?>

                </form>
            </div>
        </div>
    </div>
</body>

</html>