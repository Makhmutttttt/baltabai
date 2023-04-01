<?php 
if(isset($_POST['text'])){
    $text = $_POST['text'];
    $string1 = str_replace("вода", "black", "$text");
    return "Ежемесячный платеж = {$string1}";


}


?>