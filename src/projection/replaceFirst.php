<?php

namespace rkr\str;

/**
 * Replace the first occurrence of a needle in the haystack with a replacement.
 *
 * @param string|null $haystack The string to search in. When null, the result will be also null.
 * @param string|null $needle The string to search for. When null, the result will be also null.
 * @param string|null $replacement The string to replace the needle with. When null, the haystack will be returned unaltered.
 * @return string|null The string with the first occurrence of the needle replaced or null, if the haystack was null.
 */
function replaceFirst(?string $haystack, ?string $needle, ?string $replacement): ?string {
	if($haystack === null || $needle === null) {
		return null;
	}
	if($needle === '') {
		return $haystack;
	}
	$replacement ??= '';
	$pos = mb_strpos($haystack, $needle, 0, 'UTF-8');
	if($pos !== false) {
		return mb_substr($haystack, 0, $pos, 'UTF-8') . $replacement . mb_substr($haystack, $pos + mb_strlen($needle, 'UTF-8'), null, 'UTF-8');
	}
	
	return $haystack;
}