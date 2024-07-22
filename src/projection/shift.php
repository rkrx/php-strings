<?php

namespace rkr\str;

/**
 * Shifts a string by a given length.
 *
 * @param string|null $string The string to shift. When null, the result will be also null.
 * @param positive-int $length The length of the shifted string. If the input was shorter than the length, the result will only contain the remaining characters.
 * @return null|array{string, string} An array containing the original and the shifted string or null, if the input was null.
 */
function shift(?string $string, int $length): ?array {
	if(is_null($string)) {
		return null;
	}
	$shifted = mb_substr($string, null, $length, 'UTF-8');
	$rest = mb_substr($string, $length, null, 'UTF-8');
	
	return [$rest, $shifted];
}