<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @livewireStyles
    <title>Keyword - Extractor</title>
    <style>
        body, html {
            height: 100%;
        }

        .bg {
            /* The image used */

            background-image: url("{{ asset('assets/background2.png') }}");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .center {
            margin: auto;
            width: 50%;
            text-align: center
        }

        .btn-custom {
            width: 100%;
            height: 58px;
            padding: 15px 40px;

            background: #FFFFFF;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 20px;

        }

        .bg-header {
            width: 100%;
            padding: 7px 10px;
            background: #FFFFFF;
            border-radius: 20px;
        }

    </style>
</head>

<body>
<div class="bg">
    <div class="container">
        <br>
        <span>
            <img src="{{ asset('assets/find.png') }}" alt="" style="height: 75px">
            <h1 style="display: inline">FiNDME</h1>
        </span>
        <livewire:extractor/>
    </div>
</div>


@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
