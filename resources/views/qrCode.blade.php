<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <style type="text/css" media="all">

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .title {
            color: grey;
            font-size: 18px;
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        a {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        button:hover, a:hover {
            opacity: 0.7;
        }
    </style>
</head>
<body>

<div class="card">
{{--    <img src="/w3images/team2.jpg" alt="John" style="width:100%">--}}
        <img src="QR/{{$guest->qr_code}}" alt="QR-CODE" style="width: 50%"/>
{{--    {!! QrCode::size(250)->generate('ItSolutionStuff.com'); !!}--}}
    <h1>{{$guest->fname}} {{$guest->lname}}</h1>
    <p class="title">{{$guest->address}}, {{$guest->city}}</p>
    <p>{{$guest->prk_brgy}}</p>
{{--    <div style="margin: 24px 0;">--}}
{{--        <a href="#"><i class="fa fa-dribbble"></i></a>--}}
{{--        <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--        <a href="#"><i class="fa fa-linkedin"></i></a>--}}
{{--        <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--    </div>--}}
{{--    <p><a href="#" class="btn btn-dark">Download</a></p>--}}
</div>

</body>
</html>
