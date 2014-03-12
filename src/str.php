<?php
namespace rkr\str;

/**
 * @param string $haystack
 * @param string $needle
 * @param int $offset
 * @param string $encoding
 * @return int|null Index of the first occurrence (1 = first) or null if nothing found
 */
function pos($haystack, $needle, $offset = null, $encoding = null) {
	$offset = $offset ?: null;
	$pos = mb_strpos($haystack, $needle, $offset, $encoding);
	return $pos === false ? null : $pos + 1;
}

/**
 * @param string $string
 * @param string $encoding
 * @return bool
 */
function len($string, $encoding = null) {
	return mb_strlen($string, $encoding);
}

/**
 * @param string $string
 * @param int $start
 * @param int $length
 * @param string $encoding
 * @return bool
 */
function part($string, $start = 1, $length = null, $encoding = null) {
	$start = $start ?: 1;
	return mb_substr($string, $start, $length, $encoding);
}

/**
 * @param string $string
 * @param string $part
 * @param string $encoding
 * @return bool
 */
function count($string, $part, $encoding = null) {
	return mb_substr_count($string, $part, $encoding);
}

/**
 * @param string $haystack
 * @param string $needle
 * @param string $encoding
 * @return bool
 */
function startsWith($haystack, $needle, $encoding = null) {
	$len = len($needle, $encoding);
	return mb_substr($haystack, 0, $len, $encoding) == $needle;
}

/**
 * @param string $haystack
 * @param string $needle
 * @param string $encoding
 * @return bool
 */
function endsWith($haystack, $needle, $encoding = null) {
	$len = len($needle, $encoding);
	return mb_substr($haystack, -$len, $len, $encoding) == $needle;
}
