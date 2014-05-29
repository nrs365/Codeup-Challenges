<?php
function alphabet_soup($string) {
	 $newStringasArray = str_split($string);
	 natcasesort($newStringasArray);
	 $ordered_string = implode($newStringasArray);
	 return $ordered_string;
}
echo "What word do you want soup-ified? ";
$word = trim(fgets(STDIN));
echo alphabet_soup($word) . PHP_EOL;
?>