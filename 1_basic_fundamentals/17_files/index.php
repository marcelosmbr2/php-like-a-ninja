<?php

// Execute with the command: php index.php

$file = __DIR__ . '/notes.txt';

// Write (creates the file, overwrites if it exists).
file_put_contents($file, "first line\n");

// Append.
file_put_contents($file, "second line\n", FILE_APPEND);

// Read the whole file at once.
echo file_get_contents($file);

// Read line by line into an array.
$lines = file($file, FILE_IGNORE_NEW_LINES);
foreach ($lines as $i => $line) {
    echo ($i + 1) . ": $line\n";
}

// Check before reading.
if (file_exists($file)) {
    echo "Size: " . filesize($file) . " bytes\n";
}

// Handle-based reading, useful for big files.
$handle = fopen($file, 'r');
while (($line = fgets($handle)) !== false) {
    echo "read: " . trim($line) . "\n";
}
fclose($handle);

// Clean up.
unlink($file);
echo "File removed: " . (file_exists($file) ? 'no' : 'yes') . "\n";
