<?php

/**
 * @return array An array of two elements containing roots in any order
 */
function findRoots($a, $b, $c)
{
	if ($a == 0) {
		return -1;
	}
	$underSqrt = $b * $b - 4 * $a * $c;
	if ($underSqrt < 0) {
		return -1;
	}
	if ($underSqrt == 0) {
		$ans = -$b / (2 * $a);
		return array($ans, $ans);
	}
	$postSqrt = sqrt(abs($underSqrt));
	$left = -$b / (2 * $a);
	$right = $postSqrt / (2 * $a);
	return array($left + $right, $left - $right);
}

print_r(findRoots(2, 10, 8));
