<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->

</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edina | Home</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased font-poppins">
    <div class="min-h-screen bg-gray-100 pt-24">
    <!-- Header -->
    <x-layout.navbar></x-layout.navbar>

    <!-- Dynamic Content -->
    {{ $slot }}


    <!-- Footer -->
    <x-layout.footer></x-layout.footer>
    </div>



    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>