<?php

namespace rkr\str;

/**
 * Get the length of the string.
 *
 * @param string|null $string The string to get the length of. When null, the result will be also null.
 * @return int|null The length of the string or null, if the input was null.
 */
function length(?string $string): ?int {
	if(is_null($string)) {
		return null;
	}
	
	return mb_strlen($string, 'UTF-8');
}