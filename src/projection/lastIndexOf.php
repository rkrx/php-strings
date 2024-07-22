<?php

namespace rkr\str;

/**
 * Find the last occurrence of a string in another string.
 *
 * @param string|null $haystack The string to search in. When null, the result will be also null.
 * @param string|null $needle The string to search for. When null, the result will be also null.
 * @param int $offset The position to start the search from.
 *
 * @return int|null The position of the last occurrence of the needle in the haystack or null, if one of the inputs was null.
 */
function lastIndexOf(?string $haystack, ?string $needle, int $offset): ?int {
	if($haystack === null || $needle === null) {
		return null;
	}
	$pos = mb_strrpos($haystack, $needle, $offset, 'UTF-8');
	
	return $pos === false ? null : $pos;
}