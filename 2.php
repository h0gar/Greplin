<?php
$i=0;
$fib=1;

$num=227000;

while($num>$fib || !isPrime($fib)) {
	$temp = $fib;
	$fib = $fib + $i;
	$i = $temp;
}

echo 'Result: '.$fib."<br/>\n";

$x = $fib+1;
$sqrt = sqrt($x);

$sum = 0;

for($i=0; $i<$sqrt; $i++) {
	if(!isPrime($i))
		continue;
	if($x%$i == 0)
		$sum += $i;
}

echo 'Result: '.$sum;

//stolen from some websites to be quicker
function isPrime($number) {
    if ($number < 2) {
                return FALSE;
        }
        for ($i=2; $i<=($number / 2); $i++) {
                if($number % $i == 0) {
                        return FALSE;
                }
        }
        return TRUE;
}