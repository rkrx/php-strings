<?php

namespace rkr\str;

/**
 * Replaces the suffix of a string.
 *
 * @param string|null $string The string to replace the suffix of. When null, the result will be also null.
 * @param string|null $suffix The suffix to replace. When null, the result will be also null.
 * @param string|null $replacement The string to replace the suffix with. When null, the string will be returned unaltered.
 * @return string|null The string with the suffix replaced or null, if the input was null.
 */
function replaceSuffix(?string $string, ?string $suffix, ?string $replacement): ?string {
	if(is_null($string) || is_null($suffix)) {
		return null;
	}
	if(is_null($replacement)) {
		return $string;
	}
	$suffixLength = mb_strlen($suffix, 'UTF-8');
	if(mb_substr($string, -$suffixLength, null, 'UTF-8') === $suffix) {
		return mb_substr($string, 0, mb_strlen($string, 'UTF-8') - $suffixLength, 'UTF-8') . $replacement;
	}
	
	return $string;
}