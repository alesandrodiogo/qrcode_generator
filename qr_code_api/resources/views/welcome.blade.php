<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .qr {
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body class="antialiased">
    <div class="qr">
        <img src="http://api.qrserver.com/v1/create-qr-code/?data={{$response}}&size=100x100" alt="Exemplo de qr code">
    </div>
</body>

</html>