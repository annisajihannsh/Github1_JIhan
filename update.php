<?php

require "koneksi.php";
$id = $_POST['id'];
$nama = $_POST['2055301011_nama'];
$alamat = $_POST['2055301011_alamat'];
$notelp = $_POST['2055301011_notelp'];
$jumlahtransaksi = $_POST['2055301011_jumlahtransaksi'];
$email = $_POST['2055301011_email'];

$query = mysqli_query($con, "UPDATE customer_2055301011
SET 2055301011_nama = '$nama',2055301011_alamat = '$alamat',2055301011_notelp = '$notelp'
,2055301011_jumlahtransaksi = '$jumlahtransaksi',2055301011_email = '$email' 
WHERE 2055301011_id = $id");


include "menu.php";
