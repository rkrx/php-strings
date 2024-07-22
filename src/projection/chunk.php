<?php

namespace rkr\str;

/**
 * Splits a string into chunks of the given length.
 *
 * @param string|null $string The string to split. When null, the result will be also null.
 * @param int $length The length of each chunk.
 * @return array|null The chunks of the string or null, if the input was null.
 */
function chunk(?string $string, int $length): ?array {
	if(is_null($string)) {
		return null;
	}
	if($length < 1) {
		return [];
	}
	return mb_str_split($string, $length, 'UTF-8');
}