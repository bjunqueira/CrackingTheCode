<?php
/**
 * Implement an algorithm to determine if a string has all unique characters.
 * What if you cannot use additional data structures?
 * 
 * @author Bruno Junqueira
 */


/**
 * This function checks if the given param $word has all unique characters.
 *
 * @param string $word Any string.
 *
 * @return boolean Whether the given string has all unique characters or not.
 * @version 1.0
 */
function has_all_unique ($word)
{
	$characters = explode('', $word);
	
	// We don't need to check if only one element is left.
	while (count($characters) > 1) {
		// Remove an element from the string and check if there is any other occurrence on what left.
		$character = array_pop($characters);
		if (in_array($character, $characters)) {
			return false;
		}
	}
	return true;
}


/**
 * The alphabet length constant.
 * @var int
 * @since v2.0
 */
define("ALPHABET_LENGTH", 256);


/**
 * This function checks if the given param $word has all unique characters.
 *
 * @param string $word Any string.
 *
 * @return boolean Whether the given string has all unique characters or not.
 * @version 2.0
 */
function has_all_unique ($word)
{
	// If string length greater then the alphabet length, there must be a duplicated character.
	if (strlen($word) > ALPHABET_LENGTH) {
		return false;
	}

	$unique = array();
	for($i = 0; $i < strlen($word); $i++) {
		if (in_array($word[$i], $unique)) {
			return false;
		}
		$unique[] = $word[$i];
	}
	return true;
}






































