<?php
namespace rkr\str;

/**
 * @param string $haystack
 * @param string $needle
 * @param int $offset
 * @return int|null Index of the first occurrence (1 = first) or null if nothing found
 */
function pos($haystack, $needle, $offset = null) {
	$offset = $offset ?: null;
	$pos = mb_strpos($haystack, $needle, $offset - 1, 'UTF-8');
	return $pos === false ? null : $pos + 1;
}

/**
 * @param string $string
 * @return bool
 */
function len($string) {
	return mb_strlen($string, 'UTF-8');
}

/**
 * @param string $string
 * @param int $index
 * @return bool
 */
function char($string, $index = 1) {
	return mb_substr($string, $index - 1, 1, 'UTF-8');
}

/**
 * @param string $string
 * @return string[] An array of chars
 */
function chars($string) {
	$len = len($string);
	$res = array();
	for($i = 0; $i < $len; $i++) {
		$res[] = mb_substr($string, $i, 1, 'UTF-8');
	}
	return $res;
}

/**
 * @param string $string
 * @param int $start
 * @param int $length
 * @return bool
 */
function part($string, $start = 1, $length = null) {
	return mb_substr($string, $start - 1, $length, 'UTF-8');
}

/**
 * @param string $string
 * @param string $part
 * @return bool
 */
function count($string, $part) {
	return mb_substr_count($string, $part, 'UTF-8');
}
