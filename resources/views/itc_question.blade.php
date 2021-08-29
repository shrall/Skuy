<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skuy - ITC-2021</title>
    <meta name="description" content="#MakeYourEventsStandOut">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    {{-- TAILWIND --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
</head>

<body class="bg-secondary-300">
    <div class="w-1/2 mt-12 text-center text-white font-skuy-primary text-3xl mx-auto">ITC-2021</div>
    <div class="w-1/2 mt-12 text-center text-white font-skuy-primary text-3xl mx-auto">Apa pertanyaannya?</div>
    <div class="w-11/12 mt-4 h-vh-40 mx-auto rounded-xl bg-white">
        <textarea id="input-question"
            class="w-full h-full resize-none text-center align-middle mx-auto py-24 rounded-xl bg-white ">{{ $question->question }}</textarea>
    </div>
    <div onclick="post_question();"
        class="mt-4 w-64 text-center mx-auto text-white font-skuy-primary hover:bg-primary-300 bg-primary-200 border-secondary-100 py-2 cursor-pointer text-xl px-8 rounded-lg">
        Update Pertanyaan</div>
    <div class="w-1/2 mt-12 text-center text-white font-skuy-primary text-3xl mx-auto">Jawaban</div>
    <div class="w-10/12 mx-auto grid grid-cols-4 gap-4 mt-8" id="answer-box">
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        function post_question() {
            $.post('{{ config('app.url') }}' + "/itc-2021/pertanyaan", {
                    _token: CSRF_TOKEN,
                    data: $('#input-question').val()
                })
                .done(function(data) {
                    console.log(data);
                })
                .fail(function(error) {
                    console.log(error);
                });
        }

        fetch_answers();

        function fetch_answers() {
            $.post('{{ config('app.url') }}' + "/itc-2021/answer", {
                    _token: CSRF_TOKEN,
                    data: $('#input-question').val()
                })
                .done(function(data) {
                    console.log('duar');
                    $('#answer-box').html(data);
                })
                .fail(function(error) {
                    console.log(error);
                });
            setTimeout(function() {
                fetch_answers();
            }, 3000);
        }
    </script>
</body>

</html>
