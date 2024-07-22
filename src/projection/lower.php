<?php

namespace rkr\str;

/**
 * Converts a string to lowercase.
 *
 * @param string|null $string The string to convert. When null, the result will be also null.
 * @return string|null The lowercase string or null, if the input was null.
 */
function lower(?string $string): ?string {
	if($string === null) {
		return null;
	}
	
	return mb_convert_case($string, MB_CASE_LOWER, 'UTF-8');
}