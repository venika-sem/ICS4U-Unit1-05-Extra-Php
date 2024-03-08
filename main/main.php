<?php
/*This program calculates a board foot of wood
By Venika Sem
@version 1.0
@since Feb-2024 */

function BoardFoot($width = number, $height = number) {
    $volume = 144;
    $length = $volume / ($width * $height);
    return $length;
}

function main() {
    $widthString = readline("Enter the width of the piece of wood (in inches): ");
    $heightString = readline("Enter the height of the piece of wood (in inches): ");
    $width = floatval($widthString);
    $height = floatval($heightString);

    if (!is_numeric($width) || !is_numeric($height) || $width <= 0 || $height <= 0) {
        echo "\nInvalid input. Width and height must be positive numbers.\n";
        return;
    }

    $length = BoardFoot($width, $height);
    echo "To make exactly 1 board foot of wood, the length should be " . number_format($length, 1) . " inches.\n";
    echo "\nDone.";
}

// Call main function
main();
