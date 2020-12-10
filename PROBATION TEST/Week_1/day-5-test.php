<?php 

/*************** ADDITION PROGRAM *****************/
$a += 5;
$b = 12;
$c = $a + $b;

echo '$a+$b='.$c." "."Hoorah!"."<br>";
/*************** ADDITION PROGRAM *****************/

/*************** PRINT NUMBERS PROGRAM ***************/

function printNumber($total, $divisableby=10) {

for ($i = 1 ; $i <= $total; $i++){
	if ($i % $divisableby==0) {
		echo "<b>".$i."</b>"."<br>";
	}
	else {
		echo $i."<br>";
		}
	}
}

printNumber('100');

/*************** PRINT NUMBERS PROGRAM ***************/

?>