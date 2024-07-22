<?php

namespace rkr\str;

/**
 * Check if a string contains another string.
 *
 * @param string|null $haystack The string to search in. When null, the result will always be false.
 * @param string|null $needle The string to search for. When null, the result will always be false.
 * @return bool Whether the haystack contains the needle or not.
 */
function contains(?string $haystack, ?string $needle): bool {
	if($haystack === null || $needle === null) {
		return false;
	}
	
	return mb_strpos($haystack, $needle, 0, 'UTF-8') !== false;
}