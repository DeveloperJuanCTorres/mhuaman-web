<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <?php
        $version = '1993.0.4';
    ?>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome 6 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet" />

    <link href="{{ asset('css/styles.css') }}?v=<?php echo $version ?>" rel="stylesheet" />
    <link href="{{ asset('css/navbar.css') }}?v=<?php echo $version ?>" rel="stylesheet" />

    <!-- Scripts -->
    <!-- vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
</head>
<body>
    <div>
        @include('partials.navbar')

        <main style="margin-top: 80px;">
            @yield('content')
        </main>
        @include('partials.social-sidebar')
        @include('partials.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('success'))
        <script>

        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: 'Solicitud enviada correctamente',
            text: 'Un especialista se comunicará con usted pronto.',
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true
        });

        </script>
    @endif

    @if ($errors->any())
        <script>

        Swal.fire({
            icon: 'error',
            title: 'Datos incompletos',
            text: 'Por favor complete todos los campos requeridos.'
        });

        </script>
    @endif

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $("#loginForm").submit(function(e){

            e.preventDefault();

            $.ajax({

                url: "/login",

                method: "POST",

                data: $(this).serialize(),

                success: function(response){

                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: response.message,
                        showConfirmButton: false,
                        timer: 3000
                    });

                    setTimeout(function(){

                        location.reload();

                    }, 1000);

                },

                error: function(xhr){

                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: xhr.responseJSON.message
                            ?? 'Correo o contraseña incorrectos.'
                    });

                }

            });

        });

        $("#registerForm").submit(function(e){

            e.preventDefault();

            $.ajax({

                url: "/register",

                method: "POST",

                data: $(this).serialize(),

                success: function(response){

                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: response.message,
                        showConfirmButton: false,
                        timer: 3000
                    });

                    setTimeout(function(){

                        location.reload();

                    }, 1000);

                },

                error: function(xhr){

                    let mensaje = "Ocurrió un error.";

                    if(xhr.responseJSON.errors){

                        mensaje = Object.values(xhr.responseJSON.errors)
                            .flat()
                            .join("\n");

                    }

                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: mensaje
                    });

                }

            });

        });
    </script>
    
</body>
</html>
