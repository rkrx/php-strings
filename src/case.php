<?php
namespace rkr\str;

/**
 * @param string $string
 * @return bool
 */
function lower($string) {
	return mb_strtolower($string, 'UTF-8');
}

/**
 * @param string $string
 * @return bool
 */
function upper($string) {
	return mb_strtoupper($string, 'UTF-8');
}

/**
 * @param string $string
 * @return bool
 */
function lowerCaseFirst($string) {
	return mb_strtolower($string, 'UTF-8');
}

/**
 * @param string $string
 * @return bool
 */
function upperCaseFirst($string) {
	return mb_strtoupper($string, 'UTF-8');
}

/**
 * @param string $string
 * @return int[] A array with the index of each word start
 */
function findWords($string) {

}

/**
 * @param string $string
 * @return bool
 */
function lowerCaseWords($string) {
	return mb_strtolower($string, 'UTF-8');
}

/**
 * @param string $string
 * @return bool
 */
function upperCaseWords($string) {
	return mb_strtoupper($string, 'UTF-8');
}
