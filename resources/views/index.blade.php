<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        html{
            height: 100%;
        }
        body.main{
            font-family: 'Nunito', sans-serif !important;
            height: 100%;
            /*background: url("images/background-img.jpg");*/
            /*background-repeat: no-repeat;*/
            /*background-size: cover;*/
        }

        .primary{
            color: #922c88;
        }
        .form-control{
            border-radius: .1rem;
            outline: initial!important;
            box-shadow: none!important;
            padding: .7rem .75rem .65rem;
            line-height: 1.5;
            border: 1px solid #d7d7d7;
            background: #fff;
            color: #212121;
        }
        .form-control:focus {
            border-color: #d87fd0;
        }
        select.custom-select:focus{
            border-color: #d87fd0;
            outline: none;
            box-shadow: none;
        }
        .form-custom-label{
            display: block;
            position: relative;
        }
        .form-custom-label>span{
            position: absolute;
            cursor: text;
            font-size: 13px;
            color: #6e6e6e;
            line-height: 1;
            padding: 0 1px;
            top: -5px;
            left: 10px;
            z-index: 2;
        }
        .form-custom-label>span::after{
            content: " ";
            display: block;
            position: absolute;
            background: #fff;
            height: 10px;
            top: 3px;
            left: -.2em;
            right: -.2em;
            z-index: -1;
        }
        #btn-custom{
            background: #922c88 !important;
            border: 1px solid #922c88 !important;
            border-radius: 20px;
        }
        #btn-custom:hover{
            background: #c24fb6 !important;
            border: 1px solid #c24fb6 !important;
        }
        .card#card-form{
            border: none;
            -webkit-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.2);
            -moz-box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.2);
            box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.2);
        }
        .form-custom-label>#first_field{
            position: absolute;
            cursor: text;
            font-size: 15px;
            color: #6e6e6e;
            line-height: 1;
            padding: 0 1px;
            top: 14px;
            left: 10px;
            z-index: 2;
        }
    </style>

    <title>Mustika Ratu</title>
</head>
<body class="main">

<section style="height: 100% !important;">
{{--    <div style="background: url('images/background-img.jpg') 0% 0% / cover; width: 100%; height: 100%; position: fixed; top: 0px; right: 0px; bottom: 0px; left: 0px;"></div>--}}
    <div class="container" style="height: 100% !important;">
        <div class="h-100 row">
            <div class="mx-auto my-auto col-12 col-md-6 col-lg-6">
                <div class="card" id="card-form">
                    <div class="card-body p-5">
                        <div class="w-100">
                            <img src="{{url('images/lg-mustika-ratu.png')}}" style="width: 50%;" alt="" class="mb-4 mx-auto d-block">
                        </div>
                        <h5 class="font-weight-bold mb-1">Form Input</h5>
                        <p class="mb-4">Silahkan isi data dengan benar!</p>
                        <form action="" method="" id="form">
                            <div class="position-relative mb-4">
                                <div class="form-group form-custom-label">
                                    <input type="text" name="nama_toko" id="nama_toko" class="form-control">
                                    <span>Nama Toko</span>
                                </div>
                            </div>
                            <div class="position-relative mb-4">
                                <div class="form-group form-custom-label">
                                    <select name="nama_bank" id="nama_bank" class="custom-select">
                                        <option disabled selected>-- Pilih Nama Bank --</option>
                                        @foreach($bank as $index => $banks)
                                            <option value="{{$banks->id}}">{{$banks->name}}</option>
                                        @endforeach
                                    </select>
                                    <span>Nama Bank</span>
                                </div>
                            </div>
                            <div class="position-relative mb-4">
                                <div class="form-group form-custom-label">
                                    <input type="text" name="an_bank" id="an_bank" class="form-control">
                                    <span>No Rekening</span>
                                </div>
                            </div>
                            <div class="position-relative mb-4">
                                <div class="form-group form-custom-label">
                                    <input type="text" name="an_bank" id="an_bank" class="form-control">
                                    <span>Atas Nama Bank</span>
                                </div>
                            </div>
                            <div class="position-relative mb-4">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="cekData">
                                    <label class="form-check-label" for="cekData">Data diatas sudah benar</label>
                                </div>
                            </div>
                            <div class="position-relative">
                                <button type="submit" id="btn-custom" class="btn btn-primary px-5 py-2 font-weight-bold text-uppercase">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
{{--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>

<script type="text/javascript">
</script>

</body>
</html>
