<?php

function make_pipeline(...$funcs)
{
	return function ($arg) use ($funcs) {
		foreach ($funcs as $afunction) {
			if (isset($value)) {
				$value = $afunction($value);
			} else {
				$value = $afunction($arg);
			}
		}
		return $value;
	};
}

$fun = make_pipeline(
	function ($x) {
		return $x * 3;
	},
	function ($x) {
		return $x + 1;
	},
	function ($x) {
		return $x / 2;
	}
);

echo $fun(3);		// should print 5
