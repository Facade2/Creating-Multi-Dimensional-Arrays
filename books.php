<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Larry Ullman's Books and Chapters</title>
</head>
<h1>Some of Larry Ullman's Books</h1>

<body>
<?php
// Script 7.4 - books.php
/* This script creates and prints out a multidimensional array. */

ini_set('display_errors', 1);//let me learn from my mistakes
error_reporting(E_ALL); //show me all the possible problems!

//creathe the first array:
$phpvqs = [1 => 'Getting Started with PHP', 'Variables', 'HTML Forms and PHP', 'Using Numbers'];

//creathe the second array:
$phpadv = [1 => 'Advanced PHP Techniques', 'Developing Web Applications', 'Advanced Database Concepts', 'Basic Object-Oriented Programming'];

//creathe the third array:
$phpmysql = [1 => 'Introduction to PHP', 'Programming with PHP', 'Creating Dynamic Web Sites', 'Introduction to MySQL'];

//creathe the multidimensional array:
$books = [
	'PHP VQS' => $phpvqs,
	'PHP Advanced VQP' => $phpadv,
	'PHP and MySQL VQP' => $phpmysql,
];

//print out some values :
print "<p>The third chapter of my first book is <i>{$books['PHP VQS'][3]}</i>.</p>";
print "<p>The first chapter of my second book is <i>{$books['PHP Advanced VQP'][1]}</i>.</p>";
print "<p>The fourth chapter of my fourth book is <i>{$books['PHP and MySQL VQP'][4]}</i>.</p>";

//see what happens with foreach:
foreach ($books as $key => $value) {
	print "<p>$key: $value</p>\n";
}

?>	
</body>
</html>