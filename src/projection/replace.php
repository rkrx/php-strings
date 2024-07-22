<?php

namespace rkr\str;

/**
 * Replace all occurrences of the needle in the haystack with the replacement.
 *
 * @param string|null $haystack The string to search in. When null, the result will be also null.
 * @param string|null $needle The string to search for. When null, the result will be also null.
 * @param string|null $replacement The string to replace the needle with. When null, the haystack will be returned unaltered.
 * @return string|null The string with all occurrences of the needle replaced or null, if the haystack was null.
 */
function replace(?string $haystack, ?string $needle, ?string $replacement): ?string {
	if($haystack === null || $needle === null) {
		return null;
	}
	if($replacement === null) {
		return $haystack;
	}
	
	return str_replace($needle, $replacement, $haystack);
}