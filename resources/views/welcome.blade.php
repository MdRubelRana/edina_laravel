<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edina | Home</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-poppins">
    <h1 class="text-base underline">Hello Buddy</h1>

    <div class="" x-data="{ count: 0 }">
        <span class="" x-text="count"></span>
        <button class="" x-on:click="count++">Click me</button>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>