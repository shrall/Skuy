<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('header')
    <meta name="description" content="#MakeYourEventsStandOut">
    <meta name="author"
        content="Marshall Ovierdo Kurniawan | Tinara Nathania Wiryonoputro | Alfredo Junio Kristianto | Natashya Geiska Putri">
    <meta name="keywords" content="skuy,event,web,tiket,developer,webinar,bazaar,competition,lomba,fullpage,jquery">
    <meta property="og:title" content="Skuy - #SkuyBuatEventmu">
    <meta property="og:type" content="website">
    <meta property="og:description"
        content="Skuy adalah perusahaan yang menyediakan platform dan jasa pembuatan website untuk acara virtual.">
    <meta property="og:image" content="https://eventskuy.web.app/img/skuycon.png">
    <meta property="og:url" content="https://eventskuy.web.app/">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"
        integrity="sha512-LGXaggshOkD/at6PFNcp2V2unf9LzFq6LE+sChH7ceMTDP0g2kn6Vxwgg7wkPP7AAtX+lmPqPdxB47A0Nz0cMQ=="
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue"></script>
</head>

<body>
    <main>
        @yield('content')
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>
