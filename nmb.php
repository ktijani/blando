<?php
function randomNumberSequence($requiredLength = 8, $highestDigit = 9) {
    $sequence = '';
    for ($i = 0; $i < $requiredLength; ++$i) {
        $sequence .= mt_rand(0, $highestDigit);
    }
    return $sequence;
}

$numberPrefixes = $_GET['pr'];
if (empty($numberPrefixes)) {
		echo "please enter a prefix";
	} else {
		$numberqu = $_GET['time'];
		if (empty($numberqu)) {
			$numberqu="1";
		}
		$num = randomNumberSequence();
		    $gen = ''.$numberPrefixes.''.$num.'<br>';
		$array = str_repeat($gen, $numberqu);
		echo $array;
?>
