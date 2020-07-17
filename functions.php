<?php

function dateId($date) {
	$d = date_create($date);
    $dx = date_format($d, "d/m/Y");
    return $dx;
}