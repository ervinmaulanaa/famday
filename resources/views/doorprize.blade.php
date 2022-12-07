<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Family Day Grand Prize</title>


    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/undian/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/undian/dist/jquery.slotmachine.css') }}" type="text/css"
        media="screen" />
    <style>
        .bg {
            position: fixed;
            top: 0;
            left: 0;

            /* Preserve aspet ratio */
            min-width: 100%;
            min-height: 100%;
            width: -webkit-fill-available;
            z-index: 1;
        }

        .group {
            border-radius: 10px;
            padding: 5px 5px 5px 5px;
            margin-top: 0px;
        }

        .group,
        .lever {
            /* background: -webkit-linear-gradient(top, rgb(188 140 68) 0%, rgb(1 10 51) 50%, rgb(1 23 96) 51%, rgb(2 24 99) 100%); */
        }

        .daftar {
            z-index: 9;
            position: absolute;
            margin-top: 150px;
        }
    </style>


</head>

<body>
    @csrf
    @if ($no == 1)
        <img class="bg" src="{{ asset('undian/bluetooth.jpg') }}" alt="">
    @elseif ($no == 2)
        <img class="bg" src="{{ asset('undian/smartwatch.jpg') }}" alt="">
    @elseif ($no == 3)
        <img class="bg" src="{{ asset('undian/tablet.jpg') }}" alt="">
    @elseif ($no == 4)
        <img class="bg" src="{{ asset('undian/sepeda.jpg') }}" alt="">
    @endif

    <div class="container-fluid p-4 daftar">
        <div class="row d-flex justify-content-center mx-auto aligns-items-center  data-undi " style="margin-top:5rem;">
            @for ($k = 0; $k < $jml; $k++)
                @if ($no == 1)
                    <div class="col-3 px-1">
                    @elseif ($no == 2)
                        <div class="col-3 px-1">
                        @elseif ($no == 3)
                            <div class="col-5 px-1 m-3">
                            @elseif ($no == 4)
                                <div class="col-6 px-1 m-3">
                @endif
                <div class="group w-100">
                    <div class="reel" style="width: 99.6%;height:75px;">
                        <div id="planeMachine">
                            <span style="font-size: 24px;font-weight: 600;" id="{{ $k }}"></span><br><br>
                            <span style="margin-top: 20px;font-weight:600;font-size:16px"
                                id="{{ $k }}_detil"></span>
                            <span id="{{ $k }}_pst_peserta_id" class="peserta_id"
                                style="display:none;"></span>
                        </div>
                    </div>
                </div>
        </div>
        @endfor
    </div>
    </div>
    <span class="datanya" style="display:none;"><?php echo json_encode($oke); ?></span>

    <script src="{{ asset('plugins/jquery/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/undian/colorr.js') }}"></script>
    <script src="{{ asset('plugins/undian/confetti.js') }}"></script>

    <script>
        function rand() {
            let dt = JSON.parse($("span.datanya").text()).sort(() => Math.random() - 0.5);
            for (var i = 0; i < 100; i++) {
                $("span#" + i).text(dt[i].peserta_nama);
                $("span#" + i + "_detil").text(dt[i].peserta_no + " - " + dt[i].person_phone);
                $("span#" + i + "_pst_peserta_id").text(dt[i].peserta_id);
            }
        }
        var myVar = '';

        function mulai() {
            myVar = setInterval(function() {
                rand()
            }, 100);
        }

        function stop() {
            clearInterval(myVar);
            console.log();
            new confettiKit({
                colors: randomColor({
                    hue: 'blue',
                    count: 18
                }),
                confettiCount: 100,
                angle: 90,
                startVelocity: 50,
                elements: {
                    'confetti': {
                        direction: 'down',
                        rotation: true,
                    },
                    'star': {
                        count: 20,
                        direction: 'down',
                        rotation: true,
                    },
                    'ribbon': {
                        count: 10,
                        direction: 'down',
                        rotation: true,
                    },
                },
                position: 'topLeftRight',
            });
            $.each($(".data-undi").find("span.peserta_id"), function(k, v) {
                $.post("{{ url('grandprize/setwinner') }}", {
                    id: $(v).text(),
                    no: {{ $no }},
                    _token: $("input[name=_token]").val()
                })
            });
        }

        function lanjut(no) {
            if (no < 5) {
                window.location.href = "{{ url('doorprize') }}/" + no;
            } else {
                window.location.href = "{{ url('grandprize') }}";
            }
        }
    </script>




</body>

</html>
