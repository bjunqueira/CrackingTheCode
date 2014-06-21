<?php
/**
 * Given two strings, write a method to decide if one is a permutation of the other.
 * 
 * @author Bruno Junqueira
 */


/**
 * Check if a string is a permutation of another.
 *
 * @param string $str         Any string.
 * @param string $permutation Any string.
 *
 * @return boolean Whether the $permutation is a permutation of $str.
 */
function is_permutation ($str, $permutation)
{
	if (strlen($str) != strlen($permutation)) {
		return false;
	}

	$length = strlen($str);
	for ($i = 0; $i < $length; $i++) {
		if ($str[$i] != $permutation[$length - $i]) {
			return false;
		}
	}
	return true;
}












































