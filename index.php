<?php
$num1 = 1.5;
$num2 = 5;
$num3 = "text";

if (is_numeric($num1)) {

    $result = $num1 * $num2;
    if ($result > 100) {
    
        echo "O resultado é maior que 100.";
    } else {
        echo "O resultado não é maior que 100.";
    }
} else {
    echo "A variável não é um número.";
}
?>