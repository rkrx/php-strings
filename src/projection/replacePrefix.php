<?php

namespace rkr\str;

/**
 * Replace the prefix of a string with another string.
 *
 * @param string|null $string The string to replace the prefix of. When null, the result will be also null.
 * @param string|null $prefix The prefix to replace. When null, the result will be also null.
 * @param string|null $replacement The string to replace the prefix with. When null, the string will be returned unaltered.
 * @return string|null The string with the prefix replaced or null, if the input was null.
 */
function replacePrefix(?string $string, ?string $prefix, ?string $replacement): ?string {
	if($string === null || $prefix === null) {
		return null;
	}
	if($replacement === null) {
		return $string;
	}
	if(mb_strpos($string, $prefix, 0, 'UTF-8') === 0) {
		return mb_substr($replacement . mb_substr($string, mb_strlen($prefix, 'UTF-8'), null, 'UTF-8'), 0, null, 'UTF-8');
	}
	
	return $string;
}
