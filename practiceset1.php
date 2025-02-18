<?php

/**
 * Calculates the total price of items in a shopping cart.
 *
 * @param array $items An array of items, where each item has a 'price' key.
 * @return float The total price of all items.
 */
function calculateTotalPrice(array $items): float {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

/**
 * Removes spaces from a string and converts it to lowercase.
 *
 * @param string $input The input string.
 * @return string The modified string.
 */
function formatString(string $input): string {
    $input = str_replace(' ', '', $input);
    return strtolower($input);
}

/**
 * Determines if a number is even or odd.
 *
 * @param int $number The number to check.
 * @return string A message indicating if the number is even or odd.
 */
function checkEvenOdd(int $number): string {
    return ($number % 2 == 0) 
        ? "The number $number is even." 
        : "The number $number is odd.";
}

$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20]
];

$string = "This is a poorly written program with little structure and readability.";
$number = 42;

$totalPrice = calculateTotalPrice($items);
$modifiedString = formatString($string);
$evenOddMessage = checkEvenOdd($number);

echo "Total price: $" . $totalPrice;
echo "\nModified string: " . $modifiedString;
echo "\n" . $evenOddMessage;
