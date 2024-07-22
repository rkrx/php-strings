<?php

namespace rkr\str;

/**
 * Get the character at the specified position in a string.
 *
 * @param string|null $string The string to get the character from. When null, the result will be also null.
 * @param int|null $position The position of the character to get. When null, the result will be also null.
 * @return string|null The character at the specified position or null, if the input was null.
 */
function at(?string $string, ?int $position): ?string {
	if($string === null || $position === null) {
		return null;
	}
	
	return mb_substr($string, $position, 1, 'UTF-8');
}