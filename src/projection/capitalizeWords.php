<?php

namespace rkr\str;

/**
 * Capitalize the first letter of each word in a string.
 *
 * @param string|null $string The string to capitalize. When null, the result will be also null.
 * @return string|null The capitalized string or null, if the input was null.
 */
function capitalizeWords(?string $string): ?string {
	if($string === null) {
		return null;
	}
	
	return preg_replace_callback(
		'{\\p{L}+}u',
		static fn($m) => mb_strtoupper(mb_substr($m[0], 0, 1, 'UTF-8'), 'UTF-8') . mb_substr($m[0], 1, null, 'UTF-8'),
		$string
	);
}
