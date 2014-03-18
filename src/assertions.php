<?php
namespace rkr\str;

/**
 * @param string $haystack
 * @param string $needle
 * @return bool
 */
function startsWith($haystack, $needle) {
	$len = len($needle);
	return mb_substr($haystack, 0, $len) == $needle;
}

/**
 * @param string $haystack
 * @param string $needle
 * @return bool
 */
function endsWith($haystack, $needle) {
	$len = len($needle);
	return mb_substr($haystack, -$len, $len) == $needle;
}

/**
 * @param string $haystack
 * @param string $needle
 * @param int $offset
 * @return bool
 */
function contains($haystack, $needle, $offset = 0) {
	return mb_strpos($haystack, $needle, $offset, 'UTF-8') !== false;
}