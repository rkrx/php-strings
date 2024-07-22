<?php

namespace rkr\str;

/**
 * Pads the given string to the specified length with the given character.
 *
 * @param string|null $string The string to pad. When null, the result will be also null.
 * @param positive-int $length The length of the padded string.
 * @param string $char The character to pad the string with.
 * @return string|null The padded string or null, if the input was null.
 */
function padTrailing(?string $string, int $length, string $char): ?string {
	if(is_null($string)) {
		return null;
	}
	$padLength = $length - mb_strlen($string, 'UTF-8');
	if($padLength > 0) {
		return $string . str_repeat($char, $padLength);
	}
	return $string;
}