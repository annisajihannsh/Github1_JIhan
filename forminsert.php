<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">




</head>

<body>

    <!------ Include the above in your HEAD tag ---------->
    <form action="insert.php" method="POST">
        <section class="testimonial py-5" id="testimonial">
            <div class="container">
                <div class="row ">
                    <div class="col-md-4 py-5  text-white text-center ">
                        <img src="oo.jpg" style="width:100%">
                    </div>
                    <div class="col-md-8 py-5 border">
                        <h4 class="pb-4">Please fill with your details customer</h4>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <span class="input-group-text">Customer Name</span>
                                    <input type="text" class="form-control" name="2055301011_nama" placeholder="Name" />
                                </div>
                                <div class="form-group col-md-6">
                                    <span class="input-group-text">Customer Address</span>
                                    <input type="number" class="form-control" name="2055301011_alamat" placeholder="Address" />
                                </div>
                                <div class="form-group col-md-6">
                                    <span class="input-group-text">Customer Phone</span>
                                    <input type="text" class="form-control" name="2055301011_notelp" placeholder="Phone" />
                                </div>

                                <div class="form-group col-md-6">
                                    <span class="input-group-text">Customer Transaction</span>
                                    <input type="number" class="form-control" name="2055301011_jumlahtransaksi" placeholder="Transaction" />
                                </div>
                                <div class="form-group col-md-6">
                                    <span class="input-group-text">Customer Email</span>
                                    <input type="text" class="form-control" name="2055301011_email" placeholder="Email" />
                                </div>
                                <div class="form-group col-md-8">
                                    <input type="submit" name="submit" value="Insert" class="btn btn-danger" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>