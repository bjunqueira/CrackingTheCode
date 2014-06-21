<?php
/**
 * Implement a function void reverse(char* str) in C or C++ which reverses a null- terminated string.
 * 
 * @author Bruno Junqueira
 */


/**
 * Reverse a string.
 *
 * @param string $str Any string.
 *
 * @return string The reverse of original $str.
 * @version 1.0
 */
 function reverse($str)
 {
 	$aux    = '';
 	$length = strlen($str);
 	$length--; // Adjust for the last element position.

 	for ($i = 0; $i < $length/2; $i++) {
 		$aux               = $str[$i];
 		$str[$i]           = $str[$length - $i];
 		$str[$length - $i] = $aux;
 	}
 	return $str;
 }


/**
 * Reverse a string.
 *
 * @param string $str Any string.
 *
 * @return string The reverse of original $str.
 * @version 2.0 - Taking in consideration the null information.
 */
 function reverse($str)
 {
 	$length = 0;
 	// Find the string length.
 	while (!is_null($str[$length])) {
 		$length++;
 	}
 	// Take one to discard the null element, another for last position adjustment.
 	$length -= 2;

 	$aux    = '';
 	for ($i = 0; $i < $length/2; $i++) {
 		$aux               = $str[$i];
 		$str[$i]           = $str[$length - $i];
 		$str[$length - $i] = $aux;
 	}
 	return $str;
 }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 