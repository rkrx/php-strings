<?php

namespace rkr\str;

/**
 * Finds the position of the first occurrence of a substring in a string.
 *
 * @param string|null $haystack The string to search in. When null, the result will be also null.
 * @param string|null $needle The string to search for. When null, the result will be also null.
 * @param int $offset The position to start the search from.
 * @return int|null The position of the first occurrence of the needle in the haystack or null, if one of the inputs was null.
 */
function indexOf(?string $haystack, ?string $needle, int $offset): ?int {
	if($haystack === null || $needle === null) {
		return null;
	}
	$position = mb_strpos($haystack, $needle, $offset, 'UTF-8');
	
	return $position === false ? null : $position;
}