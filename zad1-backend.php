<?php
	$god = isset($_POST["god"])?$_POST["god"]:"";
	if (is_numeric($god)) {
		if($god % 4 == 0 ) {
			echo 'ДА';
		}
		else {
			echo 'НЕТ';
		}
	} else {
		echo 'ОШИБКА ВО ВХОДНЫХ ДАННЫХ';
	}
?>