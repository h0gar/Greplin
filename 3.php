<?php
set_time_limit(0);

$arr = array(3,4,9,14,15,19,28,37,47,50,54,56,59,61,70,73,78,81,92,95,97,99);
//$arr = array(1,2,3,4,6);
$m = count($arr);

$res = 0;
$max = pow(2, count($arr));

for($n=7; $n<$max; $n++) {
	$set = buildSet($n);
	if( count($set)>0 && testSet($set) )
		$res++;
	#print($n);
	#print_r($set);
	#die();
}

echo 'Result: '.$res."\n<br/>";

function buildSet($n) {
	global $arr;
	$set = array();
	$b = decbin($n);
	#print('-'.$b.'-');
	$strlenB = strlen($b);
	for($i=0; $i<$strlenB; $i++) {
		if($b[$strlenB-($i+1)]==1)
			$set[] = $arr[$i];
	}
	return $set;
}

function testSet($set) {
	$max = max($set);
	$sum = 0;
	foreach($set as $v)
		if($v!=$max)
			$sum += $v;
	if($max==$sum)
		return true;
	return false;
}