<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TestTask</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        body {
            padding: 0;
            margin: 0;
            background-image: url(https://s3.nat-geo.ru/images/2019/4/10/6d925897128b4a7fa7301040647da600.max-1200x800.jpg);
            background-size: cover;
            background-attachment: fixed;
        }

        .container-fluid {
            width: 100%;
            height: 100vh;
            margin: 0;
        }
        .col-md-8 {
            text-align: center;
            padding: 100px;
        }

        .col-md-8 img {
            width: 60%;
            height: auto;
            position: relative;

        }

    </style>
</head>
<body>
<div id="app"></div>

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
</body>
