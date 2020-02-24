<?php
	$prefix = isset($_POST["prefix"])?$_POST["prefix"]:"";
	$text = isset($_POST["text"])?$_POST["text"]:"";
	$lines = preg_split('/\\r\\n?|\\n/', $text);
	foreach ($lines as $line) {
		if(preg_match('/^('.$prefix.')/u', $line)) {
			print($line."<br>");
		};
	}
	unset($lines);
?>