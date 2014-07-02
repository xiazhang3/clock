<?php

$presentTime = (int)date('G');

if ($presentTime > 5 && $presentTime < 11) {
	$time = "morning.png";
	$alt = "morning image";
} elseif ($presentTime >= 11 && $presentTime < 16) {
	$time = "afternoon.png";
	$alt = "afternoon image";
} elseif ($presentTime >= 16 && $presentTime < 20) {
	$time = "evening.png";
	$alt = "evening image";
} else {
	$time = "night.png";
	$alt = "night image";
}