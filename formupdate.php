<!DOCTYPE html>
<html lang="en">

<?php
require "koneksi.php";
//tangkap id yang ingin di ubah 
$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM customer_2055301011 WHERE 2055301011_id = $id");
$m = mysqli_fetch_array($query);
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>

<body>

    <!------ Include the above in your HEAD tag ---------->

    <form action="update.php" method="POST">
        <section class="testimonial py-5" id="testimonial">
            <div class="container">
                <div class="row ">
                    <div class="col-md-4 py-5  text-white text-center ">
                        <img src="oo.jpg" style="width:100%">
                    </div>
                    <div class="col-md-8 py-5 border">
                        <a href="menu.php">
                            <h2 class="pb-4">MENU CUSTOMER</h4>
                        </a>
                        <h4 class="pb-4">Please update with your details customer</h4>
                        <form>
                            <div class="form-row">
                                <input type="hidden" value="<?php echo $m["2055301011_id"]; ?>" name="id" />
                                <div class="form-group col-md-6">
                                    <span class="input-group-text">Customer Name</span>
                                    <input type="text" class="form-control" name="2055301011_nama" value="<?php echo $m['2055301011_nama']; ?>" width="100%" required />

                                </div>
                                <div class="form-group col-md-6">
                                    <span class="input-group-text">Customer Address</span>
                                    <input type="number" class="form-control" name="2055301011_alamat" value="<?php echo $m['2055301011_alamat']; ?>" width="100%" required />

                                </div>
                                <div class="form-group col-md-6">
                                    <span class="input-group-text">Customer Phone</span>
                                    <input type="text" class="form-control" name="2055301011_notelp" value="<?php echo $m['2055301011_notelp']; ?>" width="100%" required />
                                </div>

                                <div class="form-group col-md-6">
                                    <span class="input-group-text">Customer Transaction</span>
                                    <input type="number" class="form-control" name="2055301011_jumlahtransaksi" value="<?php echo $m['2055301011_jumlahtransaksi']; ?>" width="100%" required />

                                </div>
                                <div class="form-group col-md-6">
                                    <span class="input-group-text">Customer Email</span>
                                    <input type="text" class="form-control" name="2055301011_email" value="<?php echo $m['2055301011_email']; ?>" width="100%" required />
                                </div>
                                <div class="form-group col-md-8">
                                    <input type="submit" name="submit" value="Update" class="btn btn-danger" />

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>