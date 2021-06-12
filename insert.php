<?php

include "koneksi.php";

$nama = $_POST['2055301011_nama'];
$alamat = $_POST['2055301011_alamat'];
$notelp = $_POST['2055301011_notelp'];
$jumlahtransaksi = $_POST['2055301011_jumlahtransaksi'];
$email = $_POST['2055301011_email'];

if (!empty($nama) && !empty($alamat) && !empty($notelp) && !empty($jumlahtransaksi) && !empty($email)) {

    $u = mysqli_query($con, "INSERT INTO customer_2055301011
    VALUES
    ('' ,'$nama','$alamat','$notelp','$jumlahtransaksi','$email')");

    include "menu.php";
};
