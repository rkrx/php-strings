<?php

namespace rkr\str;

/**
 * Pads the given string on the left side to the specified length with the specified character.
 *
 * @param string|null $string The string to pad. When null, the result will be also null.
 * @param int $length The length of the padded string.
 * @param string|null $substring The character to pad the string with. Null-Values will be treated as empty strings.
 * @return string|null The padded string or null, if the input was null.
 */
function padLeading(?string $string, int $length, ?string $substring): ?string {
	if($string === null) {
		return null;
	}
	$stringLength = mb_strlen($string, 'UTF-8');
	$padLength = $length - $stringLength;
	if($padLength > 0) {
		$substring ??= '';
		$substringLength = mb_strlen($substring, 'UTF-8');
		if($substringLength === 0) {
			return $string;
		}
		if($substringLength === 1) {
			return str_repeat($substring, $padLength) . $string;
		}
		$times = (int) ceil($padLength / $substringLength);
		$new = str_repeat($substring, $times) . $string;
		$result = mb_substr($new, mb_strlen($new, 'UTF-8') - ($stringLength + $padLength), null, 'UTF-8');
		
		return $result;
	}
	return $string;
}