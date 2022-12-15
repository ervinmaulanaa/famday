<!doctype html>
<html lang="en" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <title>Family Fun Day</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

</head>

<body class="h-100">
    <form>
        <a type="button" onclick="history.go(-1)" style="margin-left: 20px"><i class="bi bi-arrow-bar-left"></i></a>
    </form>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <h1 class="text-center" style="padding-bottom: 0px; padding-top: 10px">Dapatkan Premium Platinum</h1>
            <div class="col-5 col-md-5 col-lg-4" style="margin-right: 20px ">
                <div class="row">
                    <div class="card-body p-0" style="background: #EEE8E8;border-radius: 15px;">
                        <div class="text-center position-relative box" style="padding-top: 10px">
                            <h4 class="text-muted text-center fs-12 mb-1 px-2 black-text">
                                <img src="{{ URL::asset('img/icon_premium.svg') }}" style="width: 20px" /> Paketmu
                            </h4>
                            <hr>

                            <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px"><i
                                    class="bi bi-check-circle-fill black-text"></i> Dapat diikuti oleh 100
                                participant
                            </p>
                            <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px"><i
                                    class="bi bi-check-circle-fill black-text"></i> Dapat create event 3 kali</p>
                            <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px"><i
                                    class="bi bi-check-circle-fill black-text"></i> Tidak dapat melihat data user
                            </p>
                            <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px"><i
                                    class="bi bi-check-circle-fill black-text"></i> Admin hanya satu orang saja</p>

                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-5 col-md-5 col-lg-4">
                        <div class="card-body p-0" style="background: #EEE8E8;border-radius: 15px;"  id="1bulan">
                            <div class="text-center position-relative box">
                                <h3 class="text-muted text-left fs-12 mb-1 px-2 black-text " style="padding: 3px">
                                    <h4 class="text-muted text-center fs-12 mb-1 px-2 black-text fw-bold">
                                        Diskon 0%
                                    </h4>
                                    <hr>
                                    <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px"> 1 Bulan
                                    </p>
                                    <h7 class="text-black text-center fs-12 mb-1 px-2 fw-bold" style="padding: 2px">
                                        Rp50k/month</h7>
                                    <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px">Total
                                    </p>
                                    <h5 class="text-center fs-12 mb-1 px-2 text-primary fw-bold" style="padding: 2px">
                                        Rp50k
                                    </h5>
                                    <s> Rp.50.000,00 </s>
                            </div>
                        </div>
                    </div>

                    <div class="col-5 col-md-5 col-lg-4">
                        <div class="card-body p-0" style="background: #EEE8E8;border-radius: 15px;" id="2bulan">
                            <div class="text-center position-relative box">
                                <h3 class="text-muted text-left fs-12 mb-1 px-2 black-text " style="padding: 3px">
                                    <h4 class="text-muted text-center fs-12 mb-1 px-2 black-text fw-bold">
                                        Diskon 10%
                                    </h4>
                                    <hr>
                                    <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px"> 3 Bulan
                                    </p>
                                    <h7 class="text-black text-center fs-12 mb-1 px-2 fw-bold" style="padding: 2px">
                                        Rp150k/month</h7>
                                    <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px">Total
                                    </p>
                                    <h5 class="text-center fs-12 mb-1 px-2 text-primary fw-bold" style="padding: 2px">
                                        Rp135k
                                    </h5>
                                    <s> Rp.150.000,00 </s>
                            </div>
                        </div>
                    </div>

                    <div class="col-5 col-md-5 col-lg-4">
                        <div class="card-body p-0" style="background: #EEE8E8;border-radius: 15px;" id="3bulan">
                            <div class="text-center position-relative box">
                                <h3 class="text-muted text-left fs-12 mb-1 px-2 black-text " style="padding: 3px">
                                    <h4 class="text-muted text-center fs-12 mb-1 px-2 black-text fw-bold">
                                        Diskon 20%
                                    </h4>
                                    <hr>

                                    <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px"> 6 Bulan
                                    </p>
                                    <h7 class="text-black text-center fs-12 mb-1 px-2 fw-bold" style="padding: 2px">
                                        Rp50k/month</h7>
                                    <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 2px">Total
                                    </p>
                                    <h5 class="text-center fs-12 mb-1 px-2 text-primary fw-bold" style="padding: 2px">
                                        Rp240k
                                    </h5>
                                    <s> Rp.300.000,00 </s>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-5 col-md-5 col-lg-6" style="background: #F7F5F5; padding: 20px">
                <h5 class="fw-bold">Metode Pembayaran Transfer:</h5>
                <form action="{{ route('update.addpay') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="no_pembelian" value="3435353255">
                    <input type="number" name="no_rekening" class="form-control"
                        placeholder="Masukan No Rekening Anda">
                    <input type="hidden" name="typesubscribe" value="Platinum">
                    <input type="hidden" id="durasi" name="durasi" value="2 Bulan">
                    <input type="hidden" id="total" name="total_bayar" value="125000">
                    <input type="hidden" name="status" value="waiting"><br>
                    <br>
                    <img src="{{ URL::asset('img/image3.png') }}" alt="" style="width: 40px">
                    <h5>Bank Mandiri</h5>
                    <p>No.Rekening:</p>
                    <h4 class="fw-bold">896 7837 2191 0983</h4>
                    <label for="myfile">Pilih Bukti Pembayaran (PNG atau JPG)</label><br>
                    <input type="file" id="payimage" class="form-control" name="payimage"><br><br>
                    <div class="row justify-content-center align-items-center">
                        <div class="col text-center">
                            <a class="btn btn-custom" href="{{ route('login') }}">cancel</a>
                        </div>
                        <div class="col text-center">
                            <button class="btn btn-custom" type="submit">Mulai Berlangganan</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

        <script>
            $("#1bulan").click(function() {
                document.getElementById('1bulan').style.backgroundColor = 'pink';
                document.getElementById('2bulan').style.backgroundColor = '#F7F5F5';
                document.getElementById('3bulan').style.backgroundColor = '#F7F5F5';
                document.getElementById("durasi").value = '1 bulan';
                document.getElementById("total").value = '50000';
            });

            $("#2bulan").click(function() {

                document.getElementById('2bulan').style.backgroundColor = 'pink';
                document.getElementById('1bulan').style.backgroundColor = '#F7F5F5';
                document.getElementById('3bulan').style.backgroundColor = '#F7F5F5';
                document.getElementById("durasi").value = '3 bulan';
                document.getElementById("total").value = '130000';
            });

            $("#3bulan").click(function() {
                document.getElementById('3bulan').style.backgroundColor = 'pink';
                document.getElementById('2bulan').style.backgroundColor = '#F7F5F5';
                document.getElementById('1bulan').style.backgroundColor = '#F7F5F5';
                document.getElementById("durasi").value = '6 bulan';
                document.getElementById("total").value = '240000';
            });
        </script>

</body>

</html>
