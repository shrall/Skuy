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

    <link type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        rel="stylesheet">
    <link type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />

</head>
<body>
    <div id="body-pd" class="font-skuy-secondary relative h-12 pt-20 pr-4 pl-24 transition-width duration-500">

        @include('inc.navbar')
        @yield('content')
    </div>

    <!-- SCRIPT -->
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.js"></script>
    <script>
        $(document).ready(function() {
            var thetable = $('.table').DataTable();
        });
    </script>
</body>
</html>
