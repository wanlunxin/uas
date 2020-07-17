<?php

require_once('koneksi.php');
require_once('functions.php');

if (isset($_POST['action'])) {
	if ($_POST['action'] == 'rekam') {
		// simpan data dari form ke variable
		$kode_barang = $_POST['kode_barang'];
		$nama_barang = $_POST['nama_barang'];
		$jumlah = $_POST['jumlah'];
		$harga_awal = $_POST['harga_awal'];
		$harga_jual = $_POST['harga_jual'];

		// ubah format tanggal Indonesia ke format tanggal sistem
		$d1 = $_POST['tanggal_masuk'];
		$d2 = explode('/', $d1);
		$tanggal_masuk = $d2[2] . '-' . $d2[1] . '-' . $d2[0];

		$query = mysqli_query($koneksi, "INSERT INTO toko (kode_barang, nama_barang, tanggal_masuk, jumlah, harga_awal, harga_jual) VALUES ('$kode_barang', '$nama_barang', '$tanggal_masuk', '$jumlah', '$harga_awal', '$harga_jual')");
		if (mysqli_affected_rows($koneksi)) {
			header('Location: /uas/barang.php');
		} else {
			echo "Rekam data barang gagal";
		}
	}

	if ($_POST['action'] == 'ambildata') {

		$order = array(
			0 => 'kode_barang',
			1 => 'nama_barang',
			2 => 'tanggal_masuk',
			3 => 'jumlah',
			4 => 'harga_awal',
			5 => 'id'
		);

		$sql = "SELECT * FROM toko ";
		$query = mysqli_query($koneksi, $sql);
		$totalData = mysqli_num_rows($query);
		$totalFiltered = $totalData;

		$sql = "SELECT * FROM toko WHERE 1=1 ";

		if (!empty($_POST['search']['value'])) {
			$sql .= "AND (nama_barang LIKE '%" . $_POST['search']['value'] . "%')";
		}

		$query = mysqli_query($koneksi, $sql);
		$totalFiltered = mysqli_num_rows($query);
		$sql .= " ORDER BY " . $order[$_POST['order'][0]['column']] . " " . $_POST['order'][0]['dir'] . " LIMIT " . $_POST['start'] . " ," . $_POST['length'] . " ";
		$query = mysqli_query($koneksi, $sql);

		$data = array();
		while ($row = mysqli_fetch_array($query)) {
			$nestedData = array();
			$nestedData[] = $row['kode_barang'];
			$nestedData[] = $row['nama_barang'];
			$nestedData[] = dateId($row['tanggal_masuk']);
			$nestedData[] = $row['jumlah'];
			$nestedData[] = "Rp. " . number_format($row['harga_awal'], 2,",",".");
			$nestedData[] = $row['id'];
			$data[] = $nestedData;
		}

		$json_data = array(
			"draw" => intval($_POST['draw']),
			"recordsTotal" => intval($totalData),
			"recordsFiltered" => intval($totalFiltered),
			"data" => $data
		);
		echo json_encode($json_data);
	}

	if ($_POST['action'] == 'datatransaksi') {

		$order = array(
			0 => 'kode_barang',
			1 => 'nama_barang',
			2 => 'jumlah',
			3 => 'harga_awal',
			4 => 'harga_jual',
			5 => 'id'
		);

		$sql = "SELECT * FROM toko ";
		$query = mysqli_query($koneksi, $sql);
		$totalData = mysqli_num_rows($query);
		$totalFiltered = $totalData;

		$sql = "SELECT * FROM toko WHERE 1=1 ";

		if (!empty($_POST['search']['value'])) {
			$sql .= "AND (nama_barang LIKE '%" . $_POST['search']['value'] . "%')";
		}

		$query = mysqli_query($koneksi, $sql);
		$totalFiltered = mysqli_num_rows($query);
		$sql .= " ORDER BY " . $order[$_POST['order'][0]['column']] . " " . $_POST['order'][0]['dir'] . " LIMIT " . $_POST['start'] . " ," . $_POST['length'] . " ";
		$query = mysqli_query($koneksi, $sql);

		$data = array();
		while ($row = mysqli_fetch_array($query)) {
			$nestedData = array();
			$nestedData[] = $row['kode_barang'];
			$nestedData[] = $row['nama_barang'];
			$nestedData[] = $row['jumlah'];
			$nestedData[] = "Rp. " . number_format($row['harga_awal'], 2,",",".");
			$nestedData[] = "Rp. " . number_format($row['harga_jual'], 2,",",".");
			$nestedData[] = $row['id'];
			$data[] = $nestedData;
		}

		$json_data = array(
			"draw" => intval($_POST['draw']),
			"recordsTotal" => intval($totalData),
			"recordsFiltered" => intval($totalFiltered),
			"data" => $data
		);
		echo json_encode($json_data);
	}


	if ($_POST['action'] == 'edit') {
		$id = $_POST['id'];
		$kode_barang = $_POST['kode_barang'];
		$nama_barang = $_POST['nama_barang'];
		$jumlah = $_POST['jumlah'];
		$harga_awal = $_POST['harga_awal'];
		$harga_jual = $_POST['harga_jual'];

		// ubah format tanggal Indonesia ke format tanggal sistem
		$d1 = $_POST['tanggal_masuk'];
		$d2 = explode('/', $d1);
		$tanggal_masuk = $d2[2] . '-' . $d2[1] . '-' . $d2[0];

		$query = mysqli_query($koneksi, "UPDATE toko SET kode_barang = '$kode_barang', nama_barang = '$nama_barang', jumlah = '$jumlah', harga_awal = '$harga_awal', harga_jual = '$harga_jual' WHERE id = '$id'");
		if (mysqli_affected_rows($koneksi)) {
			header('Location: /uas/barang.php');
		}
	}
}

if (isset($_GET['action'])) {
	if ($_GET['action'] == 'delete') {
		$id = $_GET['id'];
		$query = mysqli_query($koneksi, "DELETE FROM toko WHERE id = '$id'");
		if (mysqli_affected_rows($koneksi)) {
			header('Location: /uas/barang.php');
		}
	}
}





