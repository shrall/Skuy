@extends('layouts.event')

@section('header')
    <title>Skuy - Website Untuk Eventmu!</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/skuycon.png') }}" />
@endsection

@section('content')
    <div id="vue-app">
        <!-- note template 1 -->
        @if ($event->template == 1)
            <div v-show="!extraPageBool"
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
                    <div class="rounded-lg bg-white absolute top-12 right-4 md:right-24 w-24 p-1 shadow-2xl">
                        <img src="{{ asset('events/logo/' . $event->logo) }}" class="templateLogo rounded-lg">
                    </div>
                @endif
                @if ($event->extra == '1')
                    <div style="background-color: {{ $event->extra_button_color }}; color:{{ $event->extra_text_color }};"
                        class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words absolute right-4 bottom-4"
                        @click="extraPageBool = !extraPageBool">
                        {{ $event->extra_text }} <span class="fa fa-fw fa-arrow-right ml-2"></span>
                    </div>
                @endif
            </div>
        @endif
        <!-- note template 2 -->
        @if ($event->template == 2)
            <div v-show="!extraPageBool" class="text-center bg-gray-50 w-full h-screen shadow-2xl grid grid-cols-12">
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
                    <div class="col-span-12 flex flex-col justify-center bg-light-50 h-full overflow-hidden relative">
                        <img src="{{ asset('events/banner/' . $event->banner) }}" class="templateBanner w-full">
                        <div class="bg-black h-full w-full absolute opacity-20 z-10">
                        </div>
                    </div>
                @endif
                @if ($event->logo != null)
                    <div class="rounded-lg bg-white absolute top-12 right-4 md:right-24 w-24 p-1 shadow-2xl z-30">
                        <img src="{{ asset('events/logo/' . $event->logo) }}" class="templateLogo rounded-lg">
                    </div>
                @endif
                @if ($event->extra == '1')
                    <div style="background-color: {{ $event->extra_button_color }}; color:{{ $event->extra_text_color }};"
                        class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words absolute right-4 bottom-4"
                        @click="extraPageBool = !extraPageBool">
                        {{ $event->extra_text }} <span class="fa fa-fw fa-arrow-right ml-2"></span>
                    </div>
                @endif
            </div>
        @endif
        <!-- note template 3 -->
        @if ($event->template == 3)
            <div v-show="!extraPageBool"
                class="text-center rounded-lg bg-gray-50 w-full h-screen shadow-2xl grid grid-rows-6">
                @if ($event->banner != null)
                    <div class="row-span-3 flex flex-col justify-center px-2 mx-12 mt-8 h-9/10">
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
                    <div class="rounded-lg bg-white absolute top-12 left-16 w-24 p-1 shadow-2xl">
                        <img src="{{ asset('events/logo/' . $event->logo) }}" class="templateLogo rounded-lg">
                    </div>
                @endif
                @if ($event->extra == '1')
                    <div style="background-color: {{ $event->extra_button_color }}; color:{{ $event->extra_text_color }};"
                        class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words absolute right-4 bottom-4"
                        @click="extraPageBool = !extraPageBool">
                        {{ $event->extra_text }} <span class="fa fa-fw fa-arrow-right ml-2"></span>
                    </div>
                @endif
            </div>
        @endif
    <!-- note template 4 -->
        @if ($event->template == 4)
            <div v-show="!extraPageBool"
                 class="text-center rounded-lg bg-gray-50 w-full h-screen shadow-2xl grid grid-cols-12 py-8">
                @if ($event->banner != null)
                    <div class="col-span-5 flex flex-col justify-center px-2 ml-12 overflow-hidden">
                        <img src="{{ asset('events/banner/' . $event->banner) }}" class="templateBanner w-full">
                    </div>
                @endif
                <div class="col-span-7 flex flex-col justify-end font-sans text-right pr-8 pl-14 py-24">
                    @if ($event->logo != null)
                        <div class="relative h-full w-full">
                            <div class="rounded-lg absolute top-0 right-0 w-24 p-1">
                                <img src="{{ asset('events/logo/' . $event->logo) }}" class="templateLogo rounded-lg">
                            </div>
                        </div>
                    @endif
                    <div class="text-3xl md:text-5xl font-semibold text-right mb-2 break-words"
                         style="color: {{ $event->title_color }};">{{ $event->title }}</div>
                    <span class="text-md md:text-lg text-right mb-2 break-words"
                          style="color:{{ $event->desc_color }};">{{ $event->description }}</span>
                    <span class="text-lg text-left mb-2 flex justify-end" style="color: {{ $event->date_color }};">
                        <span class="fa fa-calendar-day text-2xl"></span> {{ $event->date }}</span>
                    <div class="flex items-left space-x-8 text-5xl mb-2 flex justify-end" style="color: {{ $event->contacts_color }};">
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
                        <div class="flex justify-end">
                            <a href="{{ $event->register_link }}"
                               style="background-color: {{ $event->register_button_color }}; color:{{ $event->register_text_color }};"
                               class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words no-underline">
                                {{ $event->register_text }}</a>
                        </div>
                    @endif
                </div>
                @if ($event->extra == '1')
                    <div style="background-color: {{ $event->extra_button_color }}; color:{{ $event->extra_text_color }};"
                         class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words absolute right-4 bottom-4"
                         @click="extraPageBool = !extraPageBool">
                        {{ $event->extra_text }} <span class="fa fa-fw fa-arrow-right ml-2"></span>
                    </div>
                @endif
            </div>
        @endif
        <!-- note template 5 -->
        @if ($event->template == 5)
            <div v-show="!extraPageBool"
                class="text-center rounded-lg bg-gray-50 w-full h-screen shadow-2xl grid grid-rows-6">
                @if ($event->banner != null)
                    <div class="row-span-3 flex flex-col justify-center mx-12 h-9/10">
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
                    <div class="rounded-lg bg-white absolute top-12 right-16 w-24 p-1 shadow-2xl">
                        <img src="{{ asset('events/logo/' . $event->logo) }}" class="templateLogo rounded-lg">
                    </div>
                @endif
                @if ($event->extra == '1')
                    <div style="background-color: {{ $event->extra_button_color }}; color:{{ $event->extra_text_color }};"
                        class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words absolute right-4 bottom-4"
                        @click="extraPageBool = !extraPageBool">
                        {{ $event->extra_text }} <span class="fa fa-fw fa-arrow-right ml-2"></span>
                    </div>
                @endif
            </div>
        @endif
        @if ($event->extra == '1' && $event->extra_template == 1)
            <!-- note extra template 1 -->
            <div v-show="extraPageBool" @if ($event->extra_5 == '1') class="text-center rounded-lg bg-gray-50 w-full h-screen shadow-2xl grid justify-items-center items-center grid-cols-5"
            @elseif ($event->extra_4 == '1') class="text-center rounded-lg bg-gray-50 w-full h-screen shadow-2xl grid justify-items-center items-center grid-cols-4"
            @elseif ($event->extra_3 == '1') class="text-center rounded-lg bg-gray-50 w-full h-screen shadow-2xl grid justify-items-center items-center grid-cols-3"
            @elseif ($event->extra_2 == '1') class="text-center rounded-lg bg-gray-50 w-full h-screen shadow-2xl grid justify-items-center items-center grid-cols-2"
            @elseif ($event->extra_1 == '1') class="text-center rounded-lg bg-gray-50 w-full h-screen shadow-2xl grid justify-items-center items-center grid-cols-1" @endif>
                <div
                    class="text-dark-300 text-center font-medium text-5xl absolute left-0 right-0 top-8 mx-auto break-words">
                    {{ $event->extra_heading }}</div>
                @if ($event->extra_1 == '1')
                    <div class="font-skuy-primary-sub">
                        @if ($event->extra_image_1 != null)
                            <div class="w-40 h-40 bg-white rounded-full flex flex-col justify-center">
                                <img src="{{ asset('events/component/' . $event->extra_image_1) }}" class="rounded-full templateImageComponent1 object-contain w-40 h-40">
                            </div>
                        @endif
                        <div class="text-xl w-40 h-6 mt-1 font-bold">{{ $event->extra_head_1 }}</div>
                        <div class="text-lg w-40 h-6 mt-1">{{ $event->extra_body_1 }}</div>
                    </div>
                @endif
                @if ($event->extra_2 == '1')
                    <div class="font-skuy-primary-sub">
                        @if ($event->extra_image_2 != null)
                            <div class="w-40 h-40 bg-white rounded-full flex flex-col justify-center">
                                <img src="{{ asset('events/component/' . $event->extra_image_2) }}" class="rounded-full templateImageComponent2 object-contain w-40 h-40">
                            </div>
                        @endif
                        <div class="text-xl w-40 h-6 mt-1 font-bold">{{ $event->extra_head_2 }}</div>
                        <div class="text-lg w-40 h-6 mt-1">{{ $event->extra_body_2 }}</div>
                    </div>
                @endif
                @if ($event->extra_3 == '1')
                    <div class="font-skuy-primary-sub">
                        @if ($event->extra_image_3 != null)
                            <div class="w-40 h-40 bg-white rounded-full flex flex-col justify-center">
                                <img src="{{ asset('events/component/' . $event->extra_image_3) }}" class="rounded-full templateImageComponent3 object-contain w-40 h-40">
                            </div>
                        @endif
                        <div class="text-xl w-40 h-6 mt-1 font-bold">{{ $event->extra_head_3 }}</div>
                        <div class="text-lg w-40 h-6 mt-1">{{ $event->extra_body_3 }}</div>
                    </div>
                @endif
                @if ($event->extra_4 == '1')
                    <div class="font-skuy-primary-sub">
                        @if ($event->extra_image_4 != null)
                            <div class="w-40 h-40 bg-white rounded-full flex flex-col justify-center">
                                <img src="{{ asset('events/component/' . $event->extra_image_4) }}" class="rounded-full templateImageComponent4 object-contain w-40 h-40">
                            </div>
                        @endif
                        <div class="text-xl w-40 h-6 mt-1 font-bold">{{ $event->extra_head_4 }}</div>
                        <div class="text-lg w-40 h-6 mt-1">{{ $event->extra_body_4 }}</div>
                    </div>
                @endif
                @if ($event->extra_5 == '1')
                    <div class="font-skuy-primary-sub">
                        @if ($event->extra_image_5 != null)
                            <div class="w-40 h-40 bg-white rounded-full flex flex-col justify-center">
                                <img src="{{ asset('events/component/' . $event->extra_image_5) }}" class="rounded-full templateImageComponent5 object-contain w-40 h-40">
                            </div>
                        @endif
                        <div class="text-xl w-40 h-6 mt-1 font-bold">{{ $event->extra_head_5 }}</div>
                        <div class="text-lg w-40 h-6 mt-1">{{ $event->extra_body_5 }}</div>
                    </div>
                @endif
                <div style="background-color: {{ $event->extra_button_color }}; color:{{ $event->extra_text_color }};"
                    class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words absolute left-4 bottom-4"
                    @click="extraPageBool = !extraPageBool">
                    <span class="fa fa-fw fa-arrow-left mr-2"></span>
                    Back
                </div>
            </div>
        @endif
        @if ($event->extra == '1' && $event->extra_template == 2)
        <!-- note extra template 2 -->
            <div v-show="extraPageBool" @if ($event->extra_5 == '1') class="text-center rounded-lg bg-gray-50 w-full h-screen shadow-2xl grid justify-items-center items-center grid-cols-5"
                 @elseif ($event->extra_4 == '1') class="text-center rounded-lg bg-gray-50 w-full h-screen shadow-2xl grid justify-items-center items-center grid-cols-4"
                 @elseif ($event->extra_3 == '1') class="text-center rounded-lg bg-gray-50 w-full h-screen shadow-2xl grid justify-items-center items-center grid-cols-3"
                 @elseif ($event->extra_2 == '1') class="text-center rounded-lg bg-gray-50 w-full h-screen shadow-2xl grid justify-items-center items-center grid-cols-2"
                 @elseif ($event->extra_1 == '1') class="text-center rounded-lg bg-gray-50 w-full h-screen shadow-2xl grid justify-items-center items-center grid-cols-1" @endif>
                <div
                    class="text-dark-300 text-center font-medium text-5xl absolute left-0 right-0 top-8 mx-auto break-words">
                    {{ $event->extra_heading }}</div>
                @if ($event->extra_1 == '1')
                    <div class="font-skuy-primary-sub bg-gray-200 p-4 rounded-2xl relative">
                        @if ($event->extra_image_1 != null)
                            <div class="absolute left-0 right-0 -top-1/4 bg-white m-auto w-36 h-36 bg-gray rounded-full flex flex-col justify-center">
                                <img src="{{ asset('events/component/' . $event->extra_image_1) }}" class="rounded-full templateImageComponent1 object-contain w-36 h-36">
                            </div>
                        @endif
                        <div class="pb-20"></div>
                        <div class="pb-4 pt-4">
                            <div class="text-xl w-40 h-6 mt-1 font-bold">{{ $event->extra_head_1 }}</div>
                            <div class="text-lg w-40 h-6 mt-1">{{ $event->extra_body_1 }}</div>
                        </div>
                    </div>
                @endif
                @if ($event->extra_2== '1')
                    <div class="font-skuy-primary-sub bg-gray-200 p-4 rounded-2xl relative">
                        @if ($event->extra_image_2 != null)
                            <div class="absolute left-0 right-0 -top-1/4 bg-white m-auto w-36 h-36 bg-gray rounded-full flex flex-col justify-center">
                                <img src="{{ asset('events/component/' . $event->extra_image_2) }}" class="rounded-full templateImageComponent1 object-contain w-36 h-36">
                            </div>
                        @endif
                        <div class="pb-20"></div>
                        <div class="pb-4 pt-4">
                            <div class="text-xl w-40 h-6 mt-1 font-bold">{{ $event->extra_head_2 }}</div>
                            <div class="text-lg w-40 h-6 mt-1">{{ $event->extra_body_2 }}</div>
                        </div>
                    </div>
                @endif
                @if ($event->extra_3 == '1')
                    <div class="font-skuy-primary-sub bg-gray-200 p-4 rounded-2xl relative">
                        @if ($event->extra_image_3 != null)
                            <div class="absolute left-0 right-0 -top-1/4 bg-white m-auto w-36 h-36 bg-gray rounded-full flex flex-col justify-center">
                                <img src="{{ asset('events/component/' . $event->extra_image_3) }}" class="rounded-full templateImageComponent1 object-contain w-36 h-36">
                            </div>
                        @endif
                        <div class="pb-20"></div>
                        <div class="pb-4 pt-4">
                            <div class="text-xl w-40 h-6 mt-1 font-bold">{{ $event->extra_head_3 }}</div>
                            <div class="text-lg w-40 h-6 mt-1">{{ $event->extra_body_3 }}</div>
                        </div>
                    </div>
                @endif
                @if ($event->extra_4 == '1')
                    <div class="font-skuy-primary-sub bg-gray-200 p-4 rounded-2xl relative">
                        @if ($event->extra_image_1 != null)
                            <div class="absolute left-0 right-0 -top-1/4 bg-white m-auto w-36 h-36 bg-gray rounded-full flex flex-col justify-center">
                                <img src="{{ asset('events/component/' . $event->extra_image_4) }}" class="rounded-full templateImageComponent1 object-contain w-36 h-36">
                            </div>
                        @endif
                        <div class="pb-20"></div>
                        <div class="pb-4 pt-4">
                            <div class="text-xl w-40 h-6 mt-1 font-bold">{{ $event->extra_head_4 }}</div>
                            <div class="text-lg w-40 h-6 mt-1">{{ $event->extra_body_4 }}</div>
                        </div>
                    </div>
                @endif
                @if ($event->extra_5 == '1')
                    <div class="font-skuy-primary-sub bg-gray-200 p-4 rounded-2xl relative">
                        @if ($event->extra_image_5 != null)
                            <div class="absolute left-0 right-0 -top-1/4 bg-white m-auto w-36 h-36 bg-gray rounded-full flex flex-col justify-center">
                                <img src="{{ asset('events/component/' . $event->extra_image_5) }}" class="rounded-full templateImageComponent1 object-contain w-36 h-36">
                            </div>
                        @endif
                        <div class="pb-20"></div>
                        <div class="pb-4 pt-4">
                            <div class="text-xl w-40 h-6 mt-1 font-bold">{{ $event->extra_head_5 }}</div>
                            <div class="text-lg w-40 h-6 mt-1">{{ $event->extra_body_5 }}</div>
                        </div>
                    </div>
                @endif
                <div style="background-color: {{ $event->extra_button_color }}; color:{{ $event->extra_text_color }};"
                     class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words absolute left-4 bottom-4"
                     @click="extraPageBool = !extraPageBool">
                    <span class="fa fa-fw fa-arrow-left mr-2"></span>
                    Back
                </div>
            </div>
        @endif
    </div>

    <script>
        var vueApp = new Vue({
            el: "#vue-app",
            data: {
                extraPageBool: false,
            },
            methods: {},
            computed: {},
        });

    </script>
@endsection
