<?php
	$my_file = fopen("/Users/lhq/Desktop/data.txt", "r") or die("Unable to open file!");
	echo realpath("/Users/lhq/Desktop/data.txt");
?>