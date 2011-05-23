<?php
$str = 'FourscoreandsevenyearsagoourfaathersbroughtforthonthiscontainentanewnationconceivedinzLibertyanddedicatedtothepropositionthatallmenarecreatedequalNowweareengagedinagreahtcivilwartestingwhetherthatnaptionoranynartionsoconceivedandsodedicatedcanlongendureWeareqmetonagreatbattlefiemldoftzhatwarWehavecometodedicpateaportionofthatfieldasafinalrestingplaceforthosewhoheregavetheirlivesthatthatnationmightliveItisaltogetherfangandproperthatweshoulddothisButinalargersensewecannotdedicatewecannotconsecratewecannothallowthisgroundThebravelmenlivinganddeadwhostruggledherehaveconsecrateditfaraboveourpoorponwertoaddordetractTgheworldadswfilllittlenotlenorlongrememberwhatwesayherebutitcanneverforgetwhattheydidhereItisforusthelivingrathertobededicatedheretotheulnfinishedworkwhichtheywhofoughtherehavethusfarsonoblyadvancedItisratherforustobeherededicatedtothegreattdafskremainingbeforeusthatfromthesehonoreddeadwetakeincreaseddevotiontothatcauseforwhichtheygavethelastpfullmeasureofdevotionthatweherehighlyresolvethatthesedeadshallnothavediedinvainthatthisnationunsderGodshallhaveanewbirthoffreedomandthatgovernmentofthepeoplebythepeopleforthepeopleshallnotperishfromtheearth';
$str = strtolower($str);

$m = strlen($str);
$save = '';

for($i=0; $i<$m; $i++) {

testChar($i);

}

function testChar($pos) {
	global $str, $save;
	//$occ = charOccurences($pos);
	for($i=$pos+1; $i<strlen($str); $i++) {
		if($res=test($pos, $i)) {
			if(strlen($res)>strlen($save)) {
				update($res);
			}
		}
	}
}

function test($begin, $end) {
	global $str, $save;
	$shift = ceil(($end-$begin)/2);
	for($i=0; $i<$shift; $i++) {
		if($str[$begin+$i] != $str[$end-$i])
			return false;
	}
	return substr($str, $begin, $end-$begin+1);
}

function update($res) {
	global $save;
	$save = $res;
	echo '-'.$res."-<br/>\n";
}