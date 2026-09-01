<?php

// Execute with the command: php index.php

// require stops the script if the file is missing, include only warns.
require "helpers.php";

// The _once versions load the file only the first time.
include "message.php";
include_once "message.php"; // ignored, it was already loaded

// The included file sees the variables declared before the include.
$title = "Included Header";
include "header.php";

// A file that returns a value can be captured in a variable.
// __DIR__ makes the path safe from any working directory.
$config = require __DIR__ . "/config.php";
echo $config["app_name"] . " " . $config["version"] . "\n";
