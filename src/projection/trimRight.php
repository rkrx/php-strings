<?php

namespace rkr\str;

/**
 * Trims the specified characters from the end of the string.
 *
 * @param string|null $string The string to trim. When null, the result will be also null.
 * @param string|null $chars The characters to remove from the end of the string. When null, only whitespace will be removed.
 * @return string|null The trimmed string or null, if the input was null.
 */
function trimRight(?string $string, ?string $chars = null): ?string {
	if($string === null) {
		return null;
	}
	if($chars === null) {
		return rtrim($string);
	}
	
	return rtrim($string, $chars);
}