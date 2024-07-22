<?php

namespace rkr\str;

/**
 * Convert a string to uppercase.
 *
 * @param string|null $string The string to convert. When null, the result will be also null.
 * @return string|null The uppercase string or null, if the input was null.
 */
function upper(?string $string): ?string {
	if($string === null) {
		return null;
	}
	
	return mb_convert_case($string, MB_CASE_UPPER, 'UTF-8');
}