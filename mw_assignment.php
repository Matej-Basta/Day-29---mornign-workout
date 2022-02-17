<?php

// @TODO no.1 replace following functions with only one more general function.
// have you heard about DRY principal? DRY stands for don't repeat yourself
// if you don't know the syntax for modulo operator, you can check it at https://www.php.net/manual/en/language.operators.arithmetic.php


function isMultipleOf($baseNumber, $numberToDivideBy)
{
    return ($baseNumber % $numberToDivideBy) === 0;
}

//     function isMultipleOf3(int $number): bool
// {
//     return ($number % 3) === 0;
// }

// function isMultipleOf5(int $number): bool
// {
//     return ($number % 5) === 0;
// }

// function isMultipleOf8(int $number): bool
// {
//     return ($number % 8) === 0;
// }

// function isMultipleOf15(int $number): bool
// {
//     return ($number % 15) === 0;
// }


// $myNumber = 15;

// $myNumberIsMultipleOf3 = isMultipleOf3($myNumber);
// $myNumberIsMultipleOf5 = isMultipleOf5($myNumber);
// $myNumberIsMultipleOf8 = isMultipleOf8($myNumber);
// $myNumberIsMultipleOf15 = isMultipleOf15($myNumber);







function greatestDivisor(int $number): ?int
{
    // @TODO no.2 implement this function which will give you the greatest divisor for any positive number.
    // Do not return 1 or the number itself. if the number is prime number, return null.

    $greatestDivisor = null;

    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            $greatestDivisor = $i;
        }
    }

    return $greatestDivisor;
}

// echo(greatestDivisor(3) ?? 'prime number');
// echo ('<br />');
// echo(greatestDivisor(8) ?? 'prime number');
// echo ('<br />');
// echo(greatestDivisor(15) ?? 'prime number');
// echo ('<br />');
// echo(greatestDivisor(99) ?? 'prime number');
// echo ('<br />');
// echo(greatestDivisor(100) ?? 'prime number');
// echo ('<br />');
// echo ('<br />');






// @TODO no.3 Fix the bugs (more then one)! Try to make code as good and as readable as possible, it is only up to you.
// Here is dynamically generated two dimensional array representing chess board.
// Values of nested array should be 0 or 1 representing white or black.

$board=[];

for ($i = 0;$i < 8; $i++) {
    
    $row = [];

    for ($j = 0; $j < 8; $j++) {
        $row[] = (($j % 2 === 0 && $i % 2 === 0) || ($j % 2 === 1 && $i % 2 === 1)) ? 0 : 1;
    }

        $board[] = $row;
}

// @TODO no.4 You can use html template with some css to display good looking chessboard.

echo '<div class="board">';
foreach ($board as $row) {
    echo ('<div class="row">');

    foreach ($row as $square) {
        echo ('<span>' . $square . '</span>');

    }

    echo ('<div>');
}

echo '</div>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
