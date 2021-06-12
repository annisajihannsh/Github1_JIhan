<?php

require "koneksi.php";

//tangkap id yang ingin di ubah 
$id = $_GET['id'];


$query = mysqli_query($con, "DELETE FROM customer_2055301011 WHERE 2055301011_id = $id");

echo "<h1> Data telah dihapus</h1>";

echo "Berhasil";
include "menu.php";
