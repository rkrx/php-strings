<?php

namespace rkr\str;

use JetBrains\PhpStorm\Language;

/**
 * Check if a string matches a regular expression pattern.
 *
 * @param string|null $string The string to search in. When null, the result will be also null.
 * @param string|null $pattern The pattern to search for. When null, the result will be also null.
 * @return bool Whether the string matches the pattern or null, if one of the inputs was null.
 */
function matches(?string $string, #[Language('PhpRegExp')] ?string $pattern): bool {
	if(is_null($string) || is_null($pattern)) {
		return false;
	}
	return (bool) preg_match($pattern, $string);
}
