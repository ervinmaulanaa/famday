<!doctype html>
<html lang="en" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Family Fun Day</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <?php function rupiah($angka)
    {
        $hasil_rupiah = 'Rp ' . number_format($angka, 2, ',', '.');
        return $hasil_rupiah;
    } ?>
</head>

<body class="h-100">
    <form>
        <a type="button" onclick="history.go(-1)" style="margin-left: 20px"><i class="bi bi-arrow-bar-left"></i></a>
    </form>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <h1 class="text-center" style="padding-bottom: 0px; padding-top: 10px">Verifikasi Pembayaran</h1>
            <div class="col-1 col-md-1 col-lg-1">
            </div>
            <div class="col-5 col-md-5 col-lg-4">
                <img src="{{ URL::asset('pembayaran/' . $datapay[0]->path) }}" style="width: 280px" alt="">
            </div>
            <div class="col-5 col-md-5 col-lg-6" style="background: #F7F5F5; padding: 20px">
                <form method="POST" action="{{ route('verifikasipay') }}">
                    @csrf
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>No.Pembelian</td>
                                <td>:</td>
                                <td><input type="hidden" name="no_pembelian"
                                        value="{{ $datapay[0]->no_pembelian }}">{{ $datapay[0]->no_pembelian }}</td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>:</td>
                                <td><input type="hidden" name="id_person"
                                        value="{{ $datapay[0]->person_id }}">{{ $datapay[0]->person_name }}</td>
                            </tr>
                            <tr>
                                <td>No.Hp</td>
                                <td>:</td>
                                <td>{{ $datapay[0]->person_phone }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $datapay[0]->person_email }}</td>
                            </tr>
                            <tr>
                                <td>Subscribe type</td>
                                <td>:</td>
                                <td><input type="hidden" name="typesubscribe"
                                        value="{{ $datapay[0]->typesubscribe }}">{{ $datapay[0]->typesubscribe }}</td>
                            </tr>
                            <input type="hidden" name="status" id="statuspay" value="waiting">
                            <tr>
                                <td>Durasi Subsribe</td>
                                <td>:</td>
                                <td>{{ $datapay[0]->durasi }}</td>
                            </tr>

                            <tr>
                                <td>Total Bayar</td>
                                <td>:</td>
                                <td class="fw-bold">{{ rupiah($datapay[0]->total_bayar) }}</td>
                            </tr>

                        </tbody>
                    </table>

                    <div class="row justify-content-center align-items-center">
                        <div class="col text-center">
                            <button class="btn btn-custom" type="submit" onclick="changevalue('refund')">Refund</button>
                        </div>
                        <div class="col text-center">
                            <button class="btn btn-custom" type="submit" onclick="changevalue('accepted')">Confirm</button>
                        </div>

                    </div>
                </form>

            </div>
            <div class="col-1 col-md-1 col-lg-1">
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        function changevalue(data) {
            var Myelement = document.getElementById("statuspay");
            Myelement.value = data;
            console.log(data);
        }
    </script>
</body>

</html>
