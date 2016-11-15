<?php
$txt="home";
echo "i love my $txt!";
define("greeting","hello ma.ka");
echo greeting;
$favcolor ="green";
switch ($favcolor) {
	case "red":
	echo "i love red!";
	break;
	case "green":
	echo "i love green";
	break;
	default:
	echo "i love neither red nor green";

}
function mul($s,$a){
	$b = $s*$a;
	return $b;

}
echo "5*2=". mul(5,2)."<br>"
echo "2*5=". mul(2,5)."<br>"
?>