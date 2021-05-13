@extends('layouts.event')

@section('header')
    <title>Skuy - Website Untuk Eventmu!</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/skuycon.png') }}" />
@endsection

@section('content')
    <div id="vue-app">
        <!-- note template 1 -->
        @if ($event->template == 1)
            <div v-show="eventTemplate == 1"
                class="text-center rounded-lg bg-gray-50 w-full h-screen shadow-2xl grid grid-cols-12 py-8">
                <div class="col-span-7 flex flex-col justify-center font-sans text-left px-8">
                    <div class="text-3xl md:text-5xl font-semibold text-left mb-2 break-words"
                        style="color: {{ $event->title_color }};">{{ $event->title }}</div>
                    <span class="text-md md:text-lg text-left mb-2 break-words"
                        style="color:{{ $event->desc_color }};">{{ $event->description }}</span>
                    <span class="text-lg text-left mb-2" style="color: {{ $event->date_color }};">
                        <span class="fa fa-calendar-day text-2xl"></span> {{ $event->date }}</span>
                    <div class="flex items-left space-x-8 text-5xl mb-2" style="color: {{ $event->contacts_color }};">
                        @if ($event->email != null)
                            <a target="_blank" href="{{ $event->email }}">
                                <span class="fa fa-envelope hover:text-gray-600 transition ease-in-out duration-500"></span>
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
                        <a href="{{ $event->register_link }}"
                            style="background-color: {{ $event->register_button_color }}; color:{{ $event->register_text_color }};"
                            class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words no-underline">
                            {{ $event->register_text }}</a>
                    @endif
                </div>
                @if ($event->banner != null)
                    <div class="col-span-5 flex flex-col justify-center px-2 mr-12 overflow-hidden">
                        <img src="{{ asset('events/banner/' . $event->banner) }}" class="templateBanner w-full">
                    </div>
                @endif
                @if ($event->logo != null)
                    <div v-show="logoBool"
                        class="rounded-lg bg-white absolute top-12 right-4 md:right-24 w-24 p-1 shadow-2xl">
                        <img src="{{ asset('events/logo/' . $event->logo) }}" class="templateLogo rounded-lg">
                    </div>
                @endif
            </div>
        @endif
        <!-- note template 2 -->
        @if ($event->template == 2)
            <div v-show="eventTemplate == 2" class="text-center bg-gray-50 w-full h-screen shadow-2xl grid grid-cols-12">
                <div
                    class="absolute top-0 bottom-0 w-1/2 flex flex-col justify-center content-center font-sans text-left ml-8 z-40">
                    <div class="text-3xl md:text-5xl font-semibold text-left mb-2 break-words"
                        style="color: {{ $event->title_color }};">{{ $event->title }}</div>
                    <span class="text-md md:text-lg text-left mb-2 break-words"
                        style="color:{{ $event->desc_color }};">{{ $event->description }}</span>
                    <span class="text-lg text-left mb-2" style="color: {{ $event->date_color }};">
                        <span class="fa fa-calendar-day text-2xl"></span> {{ $event->date }}</span>
                    <div class="flex items-left space-x-8 text-5xl mb-2" style="color: {{ $event->contacts_color }};">
                        @if ($event->email != null)
                            <a target="_blank" href="{{ $event->email }}">
                                <span class="fa fa-envelope hover:text-gray-600 transition ease-in-out duration-500"></span>
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
                        <a href="{{ $event->register_link }}"
                            style="background-color: {{ $event->register_button_color }}; color:{{ $event->register_text_color }};"
                            class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words no-underline">
                            {{ $event->register_text }}</a>
                    @endif
                </div>
                @if ($event->banner != null)
                    <div class="col-span-12 flex flex-col justify-center bg-light-50 h-full overflow-hidden relative">
                        <img src="{{ asset('events/banner/' . $event->banner) }}" class="templateBanner w-full">
                        <div class="bg-black h-full w-full absolute opacity-20 z-10">
                        </div>
                    </div>
                @endif
                @if ($event->logo != null)
                    <div v-show="logoBool"
                        class="rounded-lg bg-white absolute top-12 right-4 md:right-24 w-24 p-1 shadow-2xl z-30">
                        <img src="{{ asset('events/logo/' . $event->logo) }}" class="templateLogo rounded-lg">
                    </div>
                @endif
            </div>
        @endif
        <!-- note template 3 -->
        @if ($event->template == 3)
            <div v-show="eventTemplate == 3"
                class="text-center rounded-lg bg-gray-50 w-full h-screen shadow-2xl grid grid-rows-6">
                @if ($event->banner != null)
                    <div v-show="bannerBool" class="row-span-3 flex flex-col justify-center px-2 mx-12 mt-8 h-9/10">
                        <img src="{{ asset('events/banner/' . $event->banner) }}"
                            class="templateBanner object-contain h-full">
                    </div>
                @endif
                <div class="row-span-3 flex flex-col justify-start font-sans text-left px-12 mt-4 w-full overflow-hidden">
                    <div class="text-2xl md:text-4xl font-semibold text-left mb-2 break-words"
                        style="color: {{ $event->title_color }};">{{ $event->title }}</div>
                    <span class="text-sm md:text-md text-left mb-2 break-words"
                        style="color:{{ $event->desc_color }};">{{ $event->description }}</span>
                    <span class="text-md text-left mb-2" style="color: {{ $event->date_color }};">
                        <span class="fa fa-calendar-day text-2xl"></span> {{ $event->date }}</span>
                    <div class="flex items-left space-x-8 text-4xl mb-2" style="color: {{ $event->contacts_color }};">
                        @if ($event->email != null)
                            <a target="_blank" href="{{ $event->email }}">
                                <span class="fa fa-envelope hover:text-gray-600 transition ease-in-out duration-500"></span>
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
                        <a href="{{ $event->register_link }}"
                            style="background-color: {{ $event->register_button_color }}; color:{{ $event->register_text_color }};"
                            class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words">
                            {{ $event->register_text }}</a>
                    @endif
                </div>
                @if ($event->logo != null)
                    <div v-show="logoBool" class="rounded-lg bg-white absolute top-12 left-16 w-24 p-1 shadow-2xl">
                        <img src="{{ asset('events/logo/' . $event->logo) }}" class="templateLogo rounded-lg">
                    </div>
                @endif
            </div>
        @endif
    </div>
@endsection
