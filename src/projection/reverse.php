<?php

namespace rkr\str;

/**
 * Reverse a given string.
 *
 * @param string|null $string The string to reverse. When null, the result will be also null.
 * @return string|null The reversed string or null, if the input was null.
 */
function reverse(?string $string): ?string {
	if($string === null) {
		return null;
	}
	$result = '';
	for($i = 0, $l = mb_strlen($string, 'UTF-8'); $i < $l; $i++) {
		$result .= mb_substr($string, $l - $i - 1, 1, 'UTF-8');
	}
	return $result;
}