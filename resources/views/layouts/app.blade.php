<!DOCTYPE html>
<html>
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Al-Kautsar</title>
    
    <!-- ====== External Styles & Scripts ====== -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    @stack('styles') <!-- Untuk CSS tambahan per halaman -->
</head>

<body>
    @include('partials.header')
    
    @yield('content')
    
    @include('partials.footer')

    <!-- CDN JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    @stack('styles')
    
    <!-- Custom JS -->
    @stack('scripts')
</body>
</html>