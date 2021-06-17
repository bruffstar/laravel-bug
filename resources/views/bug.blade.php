<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Bug</title>

    <style>
        body {
            font-size: 20px;
            padding: 20px;
        }

        img {
            width: 200px;
            height: auto;
            margin: 10px;
        }
    </style>
</head>
<body>
@for ($i = 1; $i < 31; $i++)
    <img src="{{url('/' . $i .'/image.jpg')}}" alt="Image {{$i}}">
@endfor
</body>
</html>
