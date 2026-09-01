<?php

// Execute with the command: php index.php

// for: start, condition, step
for ($i = 1; $i <= 5; $i++) {
    echo "for: $i\n";
}

// while: tests before running
$count = 3;
while ($count > 0) {
    echo "while: $count\n";
    $count--;
}

// do while: runs at least once
$n = 0;
do {
    echo "do while: $n\n";
    $n++;
} while ($n < 2);

// foreach over a list
$languages = ["PHP", "JavaScript", "Go"];

foreach ($languages as $language) {
    echo "Language: $language\n";
}

// foreach with the index or key
foreach ($languages as $index => $language) {
    echo "$index => $language\n";
}

// break stops the loop, continue skips to the next iteration.
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 === 0) {
        continue;
    }

    if ($i > 7) {
        break;
    }

    echo "odd: $i\n";
}

// range(start, end, step) returns an array of numbers.
foreach (range(1, 10, 3) as $value) {
    echo "range: $value\n";
}

// Alternative syntax, handy when mixing with HTML.
foreach ($languages as $language):
    echo "alt: $language\n";
endforeach;
