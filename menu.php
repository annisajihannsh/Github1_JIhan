<html xmlns="http://www.w3.org/1999/xhtml%22%3E">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>

<body>

    <head>
        <meta http-equiv=" Content-Type" content="text/html; charset=utf-8" />
        <title>Menu Produk</title>
    </head>

    <body>
        <div class="jumbotron jumbotron-fluid " color=pink-100>
            <div class="container text-center">
                <img src="foto.jpg" width="200">
                <h1 class="display-4">LIST CUSTOMER</h1>
                <p class="lead">Customer In PCR MART</p>
            </div>
        </div>
        <h1></h1>
        <?php include "koneksi.php"; ?>
        <div class="container">
            <a href="forminsert.php">Insert Customer</a> <br>
            <br>
            <table border="5" class="table table-dark table-striped">
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Address</th>
                    <th class="text-center">Phone Number</th>
                    <th class="text-center">Total Transaction</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Action</th>
                </tr>

                <?php
                $i = 0;
                $query = mysqli_query($con, "SELECT * FROM customer_2055301011"); //nama table, yg bawah variable database
                while ($m = mysqli_fetch_array($query)) {
                    $i++;
                ?>

                    <tr>
                        <td class="text-center"><?php print $i; ?></td>
                        <td><?php print $m['2055301011_nama']; ?></td>
                        <td class="text-center"><?php print $m['2055301011_alamat']; ?></td>
                        <td><?php print $m['2055301011_notelp']; ?></td>
                        <td class="text-center"><?php print $m['2055301011_jumlahtransaksi']; ?></td>
                        <td><?php print $m['2055301011_email']; ?></td>
                        <td class="text-center"><a href="formupdate.php?id=<?php print $m['2055301011_id'] ?>">Edit</a> |
                            <a href="hapus.php?id=<?php print $m['2055301011_id'] ?>">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </body>

</html>