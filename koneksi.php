<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'uas_setiadi_ti19mse');

if ($koneksi->connect_errno) {
	echo "Failed to connect to MySQL: " . $koneksi->connect_error;
	exit();
}