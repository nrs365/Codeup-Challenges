<?php
function palindrome_checker($string) {
	$stringReversed = strrev($string);
	if ($stringReversed === $string) {
		echo "{$string} is a palindrome!\n";
	} else {
		echo "{$string} is not a palindrome :(\n";
	}
}
echo "Please type in a word you think is a palindrome: ";
$word = trim(fgets(STDIN));
palindrome_checker($word);
?>