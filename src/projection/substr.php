<?php

namespace rkr\str;

/**
 * Get a substring of a string.
 *
 * @param string|null $string The string to get the substring from. When null, the result will be also null.
 * @param int $start The position to start the substring from. If the position is negative, it will be counted from the end of the string.
 * @param int|null $length The length of the substring. When the length is negative the offset will be set back accordingly. When null, the result will contain all characters from the start position to the end of the string.
 * @return string|null The substring of the string or null, if the input was null.
 */
function substr(?string $string, int $start, ?int $length): ?string {
	if($string === null) {
		return null;
	}
	
	return mb_substr($string, $start, $length, 'UTF-8');
}