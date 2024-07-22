<?php

namespace rkr\str;

/**
 * Trims the given string by removing the specified characters from the beginning and the end.
 *
 * @param string|null $string The string to trim. When null, the result will be also null.
 * @param string|null $chars The characters to remove from the beginning and the end of the string. When null, only whitespace will be removed.
 * @return string|null The trimmed string or null, if the input was null.
 */
function trim(?string $string, ?string $chars = null): ?string {
	if($string === null) {
		return null;
	}
	if($chars === null) {
		return \trim($string);
	}
	return \trim($string, $chars);
}
