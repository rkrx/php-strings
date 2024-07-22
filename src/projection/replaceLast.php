<?php

namespace rkr\str;

/**
 * Replaces all occurrences of a string in another string.
 *
 * @param string|null $haystack The string to search in. When null, the result will be also null.
 * @param string|null $needle The string to search for. When null, the result will be also null.
 * @param string|null $replacement The string to replace the needle with. When null, the haystack will be returned unaltered.
 * @return string|null The string with all occurrences of the needle replaced or null, if the haystack was null.
 */
function replaceLast(?string $haystack, ?string $needle, ?string $replacement): ?string {
	if($haystack === null || $needle === null) {
		return null;
	}
	if($needle === '') {
		return $haystack;
	}
	$replacement ??= '';
	$pos = mb_strrpos($haystack, $needle, 0, 'UTF-8');
	if($pos !== false) {
		$haystack = mb_substr($haystack, 0, $pos, 'UTF-8') . $replacement . mb_substr($haystack, $pos + mb_strlen($needle, 'UTF-8'), null, 'UTF-8');
	}
	return $haystack;
}