<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css" media="all">

        table, td, th {
            border: 1px solid black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        * {box-sizing: border-box;}

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .header {
            overflow: hidden;
            background-color: #f1f1f1;
            padding: 20px 10px;
        }

        .header a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }

        .header a.logo {
            font-size: 25px;
            font-weight: bold;
        }

        .header a:hover {
            background-color: #ddd;
            color: black;
        }

        .header a.active {
            background-color: dodgerblue;
            color: white;
        }

        .header-right {
            float: right;
        }

        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }

            .header-right {
                float: none;
            }
        }
    </style>
</head>
<body>

<div class="header" style="text-align: center">
    <h1>List Of All Guest Entered</h1>
    {{-- <p>Resize the browser window to see the effect.</p> --}}
</div>
<hr>
<br>
<br>

{{--<div style="padding-left:20px">--}}
{{--    <h1>Responsive Header</h1>--}}
{{--    <p>Resize the browser window to see the effect.</p>--}}
{{--</div>--}}

<table>
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Contact Number</th>
        <th>QR Number</th>
        <th>Date Entered</th>
    </tr>
    @foreach($empts as $g)
    <tr>
    
            <td>{{strtoupper($g->guest->fname)}} {{strtoupper($g->guest->lname)}}</td>
            <td>{{$g->guest->address}}</td>
            <td>{{$g->guest->contact_no}}</td>
            <td>{{$g->guest->qr_number}}</td>
            <td>{{$g->created_at}}</td>
           
    </tr>
    @endforeach


</table>
</body>
</html>
