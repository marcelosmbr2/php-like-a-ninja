<?php

// Execute with the command: php index.php

try {
    $result = 10 / 0;
} catch (DivisionByZeroError $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

// throw creates the error yourself.
function divide(int $a, int $b): float
{
    if ($b === 0) {
        throw new InvalidArgumentException("Cannot divide by zero");
    }

    return $a / $b;
}

try {
    echo divide(10, 0) . "\n";
    echo "never reached\n";
} catch (InvalidArgumentException $e) {
    echo "Caught: " . $e->getMessage() . "\n";
} finally {
    echo "Finally always runs\n";
}