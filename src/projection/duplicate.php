<?php

namespace rkr\str;

/**
 * Duplicate a string a given number of times.
 *
 * @param string|null $string The string to duplicate. When null, the result will be also null.
 * @param int $times The number of times to duplicate the string.
 * @return string|null The duplicated string or null, if the haystack was null.
 */
function duplicate(?string $string, int $times): ?string {
	if(is_null($string)) {
		return null;
	}
	if($times < 0) {
		return '';
	}
	
	return str_repeat($string, $times);
}