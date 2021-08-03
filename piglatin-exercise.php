// Exercise 1
// Usage: call compiler function
// Example: compiler("This is a sample string");

function compiler($string) {
	if (!empty($string)) {
		$trimString = trimString($string);
		$explodedString = explode('-', $trimString);
		
		return pigLatin($explodedString);
	} else {
		return "Input must not be empty";
	}
}

function pigLatin($string) {
	foreach($string as $index => $word) {
		if (strpos($word, 'ay') !== false) {
			$removedAy = str_replace('ay', '', $word);
			$newWord = substr($removedAy, -1) . strtolower(substr($removedAy, 0, -1));
		} else {
			$newWord = substr($word, 1) . strtolower($word[0]) . "ay";
		}

		$explodedString[$index] = $newWord;
	}

	return ucfirst(implode(" ", $explodedString));
}

function trimString($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

   return preg_replace('/[^A-Za-z0-9-]/', '', $string); // Removes special chars.
}