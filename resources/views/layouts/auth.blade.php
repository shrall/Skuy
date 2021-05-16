<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <meta name="description" content="#MakeYourEventsStandOut">
    <meta name="author"
        content="Marshall Ovierdo Kurniawan | Tinara Nathania Wiryonoputro | Alfredo Junio Kristianto | Natashya Geiska Putri">
    <meta name="keywords" content="skuy,event,web,tiket,developer,webinar,bazaar,competition,lomba,fullpage,jquery">
    <meta property="og:title" content="Skuy - #SkuyBuatEventmu">
    <meta property="og:type" content="website">
    <meta property="og:description"
        content="Skuy adalah perusahaan yang menyediakan platform dan jasa pembuatan website untuk acara virtual.">
    <meta property="og:image" content="https://eventskuy.web.app/{{ asset('img/skuycon.png') }}">
    <meta property="og:url" content="https://eventskuy.web.app/">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/skuycon.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- BOX ICON -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="bg-loginbg p-16 w-full h-screen bg-center bg-cover box-border">
        <div
            class="flex @auth flex-col items-center place-content-center @endauth @guest justify-items-center @endguest p-8 bg-white border-white rounded-lg shadow-2xl h-vh-90">
            @guest
                <div class="flex justify-between w-full">
                    <div class="m-20 ml-28">s
                        <img src="{{ asset('img/skuylogo.png') }}" alt="" srcset="" class="w-36">
                        <p class="text-secondary-300 font-bold text-xl mb-16 mt-10 font-skuy-secondary">Website Builder
                            terpercaya untuk para Event <br>
                            Organizer yang ingin menyelenggarakan acara virtual.</p>
                        <img src="{{ asset('img/laptop.png') }}" alt="" srcset="" class="max-w-2xl">
                    </div>
                    @yield('content')
                </div>
            @endguest
            @auth
                @yield('content')
            @endauth
        </div>
    </div>

    <!-- SCRIPT -->
    <script>
        //PASSWORD
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('.passwordInput');
        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            // this.classList.toggle('bx bxs-hide');

            if (togglePassword.classList.hasClass('bx bxs-hide')) {
                togglePassword.classList.removeClass('bx bxs-hide');
                togglePassword.classList.addClass('bx bxs-show');
            } else if (togglePassword.classList.hasClass('bx bxs-show')) {
                togglePassword.classList.removeClass('bx bxs-show');
                togglePassword.classList.addClass('bx bxs-hide');
            }
        });

    </script>
</body>

</html>
