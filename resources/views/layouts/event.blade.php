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
        <div id="vue-app">
            <div class="hidden md:block w-full h-screen bg-light-50 px-16 py-8 text-center">
                <!-- note template 1 -->
                @if ($event->template == 1)
                    <div v-show="eventTemplate == 1"
                        class="text-center rounded-lg bg-gray-50 w-full h-full shadow-2xl grid grid-cols-12 py-8">
                        <div class="col-span-7 flex flex-col justify-center font-sans text-left px-8">
                            <div class="text-5xl font-semibold text-left mb-2 break-words"
                                style="{color: {{ $event->title_color }}}">{{ $event->title }}</div>
                            <span class="text-lg text-left mb-2 break-words"
                                style="{color:{{ $event->desc_color }}}">{{ $event->description }}</span>
                            <span class="text-lg text-left mb-2" style="{color: {{ $event->date_color }}}">
                                <span class="fa fa-calendar-day text-2xl"></span> {{ $event->date }}</span>
                            <div class="flex items-left space-x-8 text-5xl my-4"
                                style="{color: {{ $event->contacts_color }}}">
                                @if ($event->email != null)
                                    <a target="_blank" href="{{ $event->email }}">
                                        <span
                                            class="fa fa-envelope hover:text-gray-600 transition ease-in-out duration-500"></span>
                                    </a>
                                @endif
                                @if ($event->instagram != null)
                                    <a target="_blank" href="{{ $event->instagram }}">
                                        <span
                                            class="fab fa-instagram hover:text-gray-600 transition ease-in-out duration-500"></span>
                                    </a>
                                @endif
                                @if ($event->whatsapp != null)
                                    <a target="_blank" href="{{ $event->whatsapp }}">
                                        <span
                                            class="fab fa-whatsapp hover:text-gray-600 transition ease-in-out duration-500"></span>
                                    </a>
                                @endif
                            </div>
                            @if ($event->register == '1')
                                <div style="background-color: {{ $event->register_button_color }}; color:{{ $event->register_text_color }}"
                                    class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words">
                                    {{ $event->register_text }}</div>
                            @endif

                        </div>
                        @if ($event->banner != null)
                            <div class="col-span-5 flex flex-col justify-center px-2 mr-12 overflow-hidden">
                                <img src="{{ $event->banner }}" class="templateBanner w-full">
                            </div>
                        @endif
                        @if ($event->logo != null)
                            <div v-show="logoBool"
                                class="rounded-lg bg-white absolute top-12 right-36 w-24 p-1 shadow-2xl">
                                <img src="{{ $event->logo }}" class="templateLogo rounded-lg">
                            </div>
                        @endif
                    </div>
                @endif
                <!-- note template 2 -->
                @if ($event->template == 2)
                    <div v-show="eventTemplate == 2"
                        class="text-center rounded-lg bg-gray-50 w-full h-full shadow-2xl grid grid-cols-12">
                        <div
                            class="absolute top-0 bottom-0 w-5/12 flex flex-col justify-center content-center font-sans text-left ml-8 z-40">
                            <div class="text-5xl font-semibold text-left mb-2 break-words"
                                style="{color: {{ $event->title_color }}}">{{ $event->title }}</div>
                            <span class="text-lg text-left mb-2 break-words"
                                style="{color:{{ $event->desc_color }}}">{{ $event->description }}</span>
                            <span class="text-lg text-left mb-2" style="{color: {{ $event->date_color }}}">
                                <span class="fa fa-calendar-day text-2xl"></span> {{ $event->date }}</span>
                            <div class="flex items-left space-x-8 text-5xl my-4"
                                style="{color: {{ $event->contacts_color }}}">
                                @if ($event->email != null)
                                    <a target="_blank" href="{{ $event->email }}">
                                        <span
                                            class="fa fa-envelope hover:text-gray-600 transition ease-in-out duration-500"></span>
                                    </a>
                                @endif
                                @if ($event->instagram != null)
                                    <a target="_blank" href="{{ $event->instagram }}">
                                        <span
                                            class="fab fa-instagram hover:text-gray-600 transition ease-in-out duration-500"></span>
                                    </a>
                                @endif
                                @if ($event->whatsapp != null)
                                    <a target="_blank" href="eventWhatsapp">
                                        <span
                                            class="fab fa-whatsapp hover:text-gray-600 transition ease-in-out duration-500"></span>
                                    </a>
                                @endif
                            </div>
                            @if ($event->register == '1')
                            <div style="background-color: {{ $event->register_button_color }}; color:{{ $event->register_text_color }}"
                                    class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words">
                                    {{ $event->register_text }}</div>
                            @endif
                        </div>
                        @if ($event->banner != null)
                            <div
                                class="col-span-12 flex flex-col justify-center bg-light-50 rounded-xl h-full overflow-hidden relative">
                                <img src="{{ $event->banner }}" class="templateBanner w-full rounded-xl">
                                <div class="bg-black rounded-xl h-full w-full absolute opacity-20 z-10">
                                </div>
                            </div>
                        @endif
                        @if ($event->logo != null)
                            <div v-show="logoBool"
                                class="rounded-lg bg-white absolute top-12 right-36 w-24 p-1 shadow-2xl z-30">
                                <img src="{{ $event->logo }}" class="templateLogo rounded-lg">
                            </div>
                        @endif
                    </div>
                @endif
            </div>
            <div class="block md:hidden w-full h-screen bg-light-50 px-16 py-8 text-center">
                <!-- note template 1 -->
                @if ($event->template == 1)
                    <div v-show="eventTemplate == 1"
                        class="text-center rounded-lg bg-gray-50 w-1/4 h-full shadow-2xl py-8 mx-auto flex">
                        <div class="flex flex-col justify-center font-sans text-left w-full px-8">
                            <div class="text-3xl font-semibold text-left mb-2 break-words"
                                style="{color: {{ $event->title_color }}}">{{ $event->title }}</div>
                            <span class="text-sm text-left mb-2 break-words"
                                style="{color:{{ $event->desc_color }}}">{{ $event->description }}</span>
                            <span class="text-lg text-left mb-2" style="{color: {{ $event->date_color }}}">
                                <span class="fa fa-calendar-day text-xl"></span> {{ $event->date }}</span>
                            <div class="flex items-left space-x-8 text-4xl my-4"
                                style="{color: {{ $event->contacts_color }}}">
                                @if ($event->email != null)
                                    <a target="_blank" href="{{ $event->email }}">
                                        <span
                                            class="fa fa-envelope hover:text-gray-600 transition ease-in-out duration-500"></span>
                                    </a>
                                @endif
                                @if ($event->instagram != null)
                                    <a target="_blank" href="{{ $event->instagram }}">
                                        <span
                                            class="fab fa-instagram hover:text-gray-600 transition ease-in-out duration-500"></span>
                                    </a>
                                @endif
                                @if ($event->whatsapp != null)
                                    <a target="_blank" href="eventWhatsapp">
                                        <span
                                            class="fab fa-whatsapp hover:text-gray-600 transition ease-in-out duration-500"></span>
                                    </a>
                                @endif
                            </div>
                            @if ($event->register == '1')
                            <div style="background-color: {{ $event->register_button_color }}; color:{{ $event->register_text_color }}"
                                    class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words">
                                    {{ $event->register_text }}</div>
                            @endif

                        </div>
                        @if ($event->banner != null)
                            <div class="flex flex-col justify-center px-2 overflow-hidden h-full">
                                <img src="{{ $event->banner }}" class="templateBanner my-auto">
                            </div>
                        @endif
                        @if ($event->logo != null)
                            <div v-show="logoBool"
                                class="rounded-lg bg-white absolute top-12 left-52 right-0 w-24 p-1 shadow-2xl mx-auto">
                                <img src="{{ $event->logo }}" class="templateLogo rounded-lg">
                            </div>
                        @endif
                    </div>
                @endif
                <!-- note template 2 -->
                @if ($event->template == 2)
                    <div v-show="eventTemplate == 2"
                        class="text-center rounded-lg bg-gray-50 w-1/4 h-full shadow-2xl mx-auto flex relative">
                        <div class="flex flex-col justify-center font-sans text-left px-8 z-40">
                            <div class="text-3xl font-semibold text-left mb-2 break-words"
                                style="{color: {{ $event->title_color }}}">{{ $event->title }}</div>
                            <span class="text-sm text-left mb-2 break-words"
                                style="{color:{{ $event->desc_color }}}">{{ $event->description }}</span>
                            <span class="text-lg text-left mb-2" style="{color: {{ $event->date_color }}}">
                                <span class="fa fa-calendar-day text-xl"></span> {{ $event->date }}</span>
                            <div class="flex items-left space-x-8 text-4xl my-4"
                                style="{color: {{ $event->contacts_color }}}">
                                @if ($event->email != null)
                                    <a target="_blank" href="{{ $event->email }}">
                                        <span
                                            class="fa fa-envelope hover:text-gray-600 transition ease-in-out duration-500"></span>
                                    </a>
                                @endif
                                @if ($event->instagram != null)
                                    <a target="_blank" href="{{ $event->instagram }}">
                                        <span
                                            class="fab fa-instagram hover:text-gray-600 transition ease-in-out duration-500"></span>
                                    </a>
                                @endif
                                @if ($event->whatsapp != null)
                                    <a target="_blank" href="eventWhatsapp">
                                        <span
                                            class="fab fa-whatsapp hover:text-gray-600 transition ease-in-out duration-500"></span>
                                    </a>
                                @endif
                            </div>
                            @if ($event->register == '1')
                            <div style="background-color: {{ $event->register_button_color }}; color:{{ $event->register_text_color }}"
                                    class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words">
                                    {{ $event->register_text }}</div>
                            @endif
                        </div>
                        @if ($event->banner != null)
                            <div class="absolute flex flex-col justify-center overflow-hidden h-full">
                                <img src="{{ $event->banner }}" class="templateBanner my-auto">
                                <div class="bg-black rounded-xl h-full w-full absolute opacity-20">
                                </div>
                            </div>
                        @endif
                        @if ($event->logo != null)
                            <div v-show="logoBool"
                                class="rounded-lg bg-white absolute top-12 left-52 right-0 w-24 p-1 shadow-2xl mx-auto">
                                <img src="{{ $event->logo }}" class="templateLogo rounded-lg">
                            </div>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>
