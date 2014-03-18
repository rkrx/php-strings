<?php
namespace rkr\str;

/**
 * @param string $string
 * @param $part
 * @param int $start
 * @return bool
 */
function overwrite($string, $part, $start) {
	return mb_substr($string, $start, $length, 'UTF-8');
}

/**
 * @param string $string
 * @param string $part
 * @param int $start
 * @return bool
 */
function insert($string, $part, $start) {
	return mb_substr($string, $start, $length, 'UTF-8');
}

