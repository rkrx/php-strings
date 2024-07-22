<?php

namespace rkr\str;

/**
 * Capitalize the first character of the string.
 *
 * @param string|null $string The string to capitalize. When null, the result will be also null.
 * @return string|null The capitalized string or null, if the input was null.
 */
function capitalize(?string $string): ?string {
	if($string === null) {
		return null;
	}
	
	return mb_strtoupper(mb_substr($string, 0, 1, 'UTF-8'), 'UTF-8') . mb_substr($string, 1, null, 'UTF-8');
}
