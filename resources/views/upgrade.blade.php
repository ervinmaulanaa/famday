<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <title>Family Fun Day</title>

    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

</head>

<body>
    <br>
    <form>
        <a type="button" onclick="history.go(-1)" style="margin-left: 20px"><i class="bi bi-arrow-bar-left"></i></a>
    </form>
    <div class="container h-100 " style="margin-top: 100px">
        <div class="row h-200 justify-content-center align-items-center">
            <div class="col-sm-6 col-md-4 col-xl-3 mb-3 d-flex align-items-stretch">
                <div class="card data-events " id="3" idx="0">
                    <div class="card-body p-0">
                        <div class="text-center position-relative box">
                            <h3 class="text-muted text-left fs-12 mb-1 px-2 black-text " style="padding: 10px">
                                <h3 class="text-muted text-left fs-12 mb-1 px-2 black-text">
                                    <img src="{{ URL::asset('img/icon_premium.svg') }}" style="width: 40px" /> Free
                                </h3>

                                <p class="black-text text-left px-2" style="padding: 10px;font-size: 20pt">Rp0 <span style="font-size: 10pt"> / month</span></p>
                                <hr>
                                <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 10px"><i
                                        class="bi bi-check-circle-fill black-text"></i> Dapat diikuti oleh 100
                                    participant
                                </p>
                                <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 10px"><i
                                        class="bi bi-check-circle-fill black-text"></i> Dapat create event 3 kali</p>
                                <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 10px"><i
                                        class="bi bi-check-circle-fill black-text"></i> Tidak dapat melihat data user
                                </p>
                                <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 10px"><i
                                        class="bi bi-check-circle-fill black-text"></i> Admin hanya satu orang saja</p>
                                <hr>
                                <a href="{{ route('login') }}" class="btn btn-primary text-center" style="margin: 20px; background: black"> Try
                                    Now </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 mb-3 d-flex align-items-stretch">
                <div class="card data-events " id="3" idx="0">
                    <div class="card-body p-0">
                        <div class="text-center position-relative box">
                            <h3 class="text-muted text-left fs-12 mb-1 px-2 black-text " style="padding: 10px">
                                <h3 class="text-muted text-left fs-12 mb-1 px-2 black-text">
                                    <img src="{{ URL::asset('img/icon_premium_gold.svg') }}"
                                        style="width: 40px; color: yellow" /> Gold
                                </h3>

                                <p class="black-text text-left px-2" style="padding: 10px;font-size: 20pt">Rp25K <span style="font-size: 10pt"> / month</span> </p>
                                <hr>
                                <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 10px"><i
                                        class="bi bi-check-circle-fill black-text"></i> Dapat diikuti oleh 100
                                    participant
                                </p>
                                <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 10px"><i
                                        class="bi bi-check-circle-fill black-text"></i> Dapat create event 3 kali</p>
                                <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 10px"><i
                                        class="bi bi-check-circle-fill black-text"></i> Tidak dapat melihat data user
                                </p>
                                <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 10px"><i
                                        class="bi bi-check-circle-fill black-text"></i> Admin hanya satu orang saja</p>
                                <hr>
                                <a href="{{ route('pembayaran.memberGold') }}" class="btn btn-primary text-center" style="margin: 20px; background: black"> Get
                                    Gold </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 mb-3 d-flex align-items-stretch">
                <div class="card data-events " id="3" idx="0">
                    <div class="card-body p-0">
                        <div class="text-center position-relative box">
                            <h3 class="text-muted text-left fs-12 mb-1 px-2 black-text " style="padding: 10px">
                                <h3 class="text-muted text-left fs-12 mb-1 px-2 black-text">
                                    <img src="{{ URL::asset('img/icon_premium_bronze.svg') }}" style="width: 40px" />
                                    Platinum
                                </h3>

                                <p class="black-text text-left px-2" style="padding: 10px; font-size: 20pt">Rp50K <span style="font-size: 10pt">/ month</span> </p>
                                <hr>
                                <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 10px"><i
                                        class="bi bi-check-circle-fill black-text"></i> Dapat diikuti oleh 100
                                    participant
                                </p>
                                <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 10px"><i
                                        class="bi bi-check-circle-fill black-text"></i> Dapat create event 3 kali</p>
                                <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 10px"><i
                                        class="bi bi-check-circle-fill black-text"></i> Tidak dapat melihat data user
                                </p>
                                <p class="text-muted text-center fs-12 mb-1 px-2" style="padding: 10px"><i
                                        class="bi bi-check-circle-fill black-text"></i> Admin hanya satu orang saja</p>
                                <hr>
                                <a href="{{ route('pembayaran.member') }}" class="btn btn-primary text-center" style="margin: 20px; background: black">
                                    Get
                                    Platinum </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
