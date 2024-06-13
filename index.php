<?php
// Echo the purpose of the script
echo "<h1>This script prints the numbers from 1 to 100</h1>";

// Echo the explanation about the for loop
echo "<p>Using a for loop to iterate through the numbers</p>";

// Using a for loop to iterate through the numbers
for ($i = 1; $i <= 100; $i++) {
    // Print the current number followed by a newline character
    echo $i;
}
?>

<?php
// Echo the purpose of the script
echo "<h2>This script prints the numbers from 1 to 100. For numbers that are multiples of 3, it prints 'NAV' instead of the number.</h2>";

// Echo the explanation about the for loop
echo "<p>Using a for loop to iterate through the numbers</p>";

// Using a for loop to iterate through the numbers
for ($i = 1; $i <= 100; $i++) {
    // Check if the current number is a multiple of 3
    if ($i % 3 == 0) {
        // Print "NAV" for multiples of 3
        echo "<span style='padding-left:10px; padding-right:10px'>NAV</span>";
    } else {
        // Print the current number followed by a newline character
        echo $i.',';
    }
}
?>

<?php
echo "<h2>For numbers that are multiples of 3 and 5, print \"NAVERTICA\" instead of the number.</h2>";

// Using a for loop to iterate through the numbers
for ($i = 1; $i <= 100; $i++) {
    // Check if the current number is a multiple of 3
    if ($i % 3 == 0 && $i % 5 == 0) {
        // Print "NAVERTICA" for multiples of both 3 and 5
        echo "<span style='padding-left:10px; padding-right:10px'>NAVERTICA</span>";
    } elseif ($i % 3 == 0) {
        // Print "NAV" for multiples of 3
        echo "<span style='padding-left:10px; padding-right:10px'>NAV</span>";
    } elseif ($i % 5 == 0) {
        // Print "ERTICA" for multiples of 5
        echo "<span style='padding-left:10px; padding-right:10px'>ERTICA</span>";
    } else {
        // Print the current number followed by a newline character
        echo $i . ',';
    }
}
?>