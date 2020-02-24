<?php
	$hip = isset($_POST["hip"])?(int)$_POST["hip"]:"";
	$smuz = isset($_POST["smuz"])?(int)$_POST["smuz"]:"";
	if (($hip>0)and($smuz>0)) {
		$drink = (int)($smuz/$hip);
		print ($drink);
	} else {
		print ("Некорректные данные");
	}
?>