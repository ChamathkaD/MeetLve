<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meet Love</title>
    <link rel="stylesheet" href="style.css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link
        href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
        rel="stylesheet"
    />
</head>

<body>

@include('includes.navigation')
<div>
    {{ $slot }}
</div>


@include('includes.footer')

</body>
</html>
