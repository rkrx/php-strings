<?php

namespace rkr\str;

/**
 * Calculate the bag distance between two strings.
 *
 * @param string|null $string1 The first string to compare. When null, the result will be also null.
 * @param string|null $string2 The second string to compare. When null, the result will be also null.
 * @return int|null The bag distance between the two strings or null, if one of the inputs was null.
 */
function bagDistance(?string $string1, ?string $string2): ?int {
	if(is_null($string1) || is_null($string2)) {
		return null;
	}
	
	$count1 = count_chars($string1, 1);
	$count2 = count_chars($string2, 1);
	
	$distance = 0;
	foreach($count1 as $char => $count) {
		if(isset($count2[$char])) {
			$distance += abs($count - $count2[$char]);
		} else {
			$distance += $count;
		}
	}
	
	foreach($count2 as $char => $count) {
		if(!isset($count1[$char])) {
			$distance += $count;
		}
	}
	
	return $distance;
}