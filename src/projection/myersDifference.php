<?php

namespace rkr\str;

/**
 * Calculate the Myers difference between two strings.
 *
 * @param string|null $string1 The first string to compare. When null, the result will be also null.
 * @param string|null $string2 The second string to compare. When null, the result will be also null.
 * @return int|null The Myers difference between the two strings or null, if one of the inputs was null.
 */
function myersDifference(?string $string1, ?string $string2): ?int {
	if ($string1 === null || $string2 === null) {
		return null;
	}
	
	$m = mb_strlen($string1, 'UTF-8');
	$n = mb_strlen($string2, 'UTF-8');
	
	if ($m === 0 || $n === 0) {
		return $m;
	}
	
	$max = $m + $n;
	$v = array_fill(-$max, 2 * $max + 1, 0);
	$v[1] = 0;
	
	for ($d = 0; $d <= $max; $d++) {
		for ($k = -$d; $k <= $d; $k += 2) {
			if ($k === -$d || ($k !== $d && $v[$k - 1] < $v[$k + 1])) {
				$x = $v[$k + 1];
			} else {
				$x = $v[$k - 1] + 1;
			}
			$y = $x - $k;
			
			while ($x < $m && $y < $n && $string1[$x] === $string2[$y]) {
				$x++;
				$y++;
			}
			
			$v[$k] = $x;
			
			if ($x >= $m && $y >= $n) {
				return $d;
			}
		}
	}
	
	return null;
}