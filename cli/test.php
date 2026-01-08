<?php

// Test file operations in CLI: `php cli/test.php`

$path = __DIR__.DIRECTORY_SEPARATOR.'output.txt';

// It is not safe fetching URL with file_get_contents in real applications
$posts = file_get_contents('http://jsonplaceholder.typicode.com/posts');

file_put_contents($path, $posts, FILE_APPEND);
