<?php
	header("Content-type: text/event-stream");
	header("Cache-Control: no-cache");
	$time= date("m");
	echo "data: the month is: {$time}\n\n";
	flush();
?>