<?php

namespace rkr\str;

/**
 * Calculate the Jaro distance between two strings.
 *
 * @param string|null $string1 The first string to compare. When null, the result will be also null.
 * @param string|null $string2 The second string to compare. When null, the result will be also null.
 * @return float|null The Jaro distance between the two strings or null, if one of the inputs was null.
 */
function jaroDistance(?string $string1, ?string $string2): ?float {
	if(is_null($string1) || is_null($string2)) {
		return null;
	}
	
	$str1_len = mb_strlen($string1, 'UTF-8');
	$str2_len = mb_strlen($string2, 'UTF-8');
	
	if($str1_len === 0 && $str2_len === 0) {
		return 1.0;
	}
	
	if($str1_len === 0 || $str2_len === 0) {
		return 0.0;
	}
	
	$match_distance = (int) floor(max($str1_len, $str2_len) / 2) - 1;
	
	$str1_matches = array_fill(0, $str1_len, false);
	$str2_matches = array_fill(0, $str2_len, false);
	
	$matches = 0;
	$transpositions = 0;
	
	for($i = 0; $i < $str1_len; $i++) {
		$start = max(0, $i - $match_distance);
		$end = min($i + $match_distance + 1, $str2_len);
		
		for($j = $start; $j < $end; $j++) {
			if($str2_matches[$j]) {
				continue;
			}
			if(mb_substr($string1, $i, 1, 'UTF-8') !== mb_substr($string2, $j, 1, 'UTF-8')) {
				continue;
			}
			$str1_matches[$i] = true;
			$str2_matches[$j] = true;
			$matches++;
			break;
		}
	}
	
	if($matches === 0) {
		return 0.0;
	}
	
	$k = 0;
	for($i = 0; $i < $str1_len; $i++) {
		if(!$str1_matches[$i]) {
			continue;
		}
		while(!$str2_matches[$k]) {
			$k++;
		}
		if(mb_substr($string1, $i, 1, 'UTF-8') !== mb_substr($string2, $k, 1, 'UTF-8')) {
			$transpositions++;
		}
		$k++;
	}
	
	$transpositions /= 2;
	
	return (($matches / $str1_len) + ($matches / $str2_len) + (($matches - $transpositions) / $matches)) / 3.0;
}