<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODAMI Automatizaciones</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .text-blanco {
            margin-left: 45px;
            margin-top: 10px;
            color: white;
            font-size: 60px;
            text-align: center;
        }

        .text-blanco-chico {
            margin-left: 40px;
            margin-top: 10px;
            color: white;
            font-size: 28px;
            text-align: center;
        }

        .visible {
            opacity: 1;
        }
    </style>

    <link rel="icon" type="image/x-icon" style="text-align: center;" href="{{ asset('images\LogoProdami-SinFondo-Niletras.png') }}">

</head>

<body style="background: #E6DBD5;">
    <!-- Header -->
    @include('layouts.header')
    <div>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if (session('insuccess'))
        <div class="alert alert-danger">
            {{ session('insuccess') }}
        </div>
        @endif
        @yield('content')
    </div>
    <!-- Footer -->
    @include('layouts.footer')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.classList.add('animate__fadeInDown');
                    } else {
                        entry.target.style.opacity = '0';
                        entry.target.classList.remove('animate__animated');
                    }
                });
            });

            document.querySelectorAll('div').forEach(div => {
                div.style.opacity = '0';
                div.style.transition = 'opacity 0.5s';
                observer.observe(div);
            });
        });
    </script>
</body>

</html>