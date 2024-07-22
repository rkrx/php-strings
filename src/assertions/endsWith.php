<?php

namespace rkr\str;

/**
 * Checks if the haystack ends with the needle.
 *
 * @param string|null $haystack The string to search in. When null, the result will be also null.
 * @param string|null $needle The string to search for. When null, the result will always be false.
 * @return bool Whether the haystack ends with the needle or not.
 */
function endsWith(?string $haystack, ?string $needle): bool {
	if($haystack === null || $needle === null) {
		return false;
	}
	$needleLength = mb_strlen($needle, 'UTF-8');
	if($needleLength === 0) {
		return true;
	}
	
	return str_ends_with($haystack, $needle);
}