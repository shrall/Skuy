<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skuy - Builder</title>
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
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/skuycon.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/color-calendar/dist/bundle.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/color-calendar/dist/css/theme-basic.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/color-calendar/dist/css/theme-glass.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"
        integrity="sha512-LGXaggshOkD/at6PFNcp2V2unf9LzFq6LE+sChH7ceMTDP0g2kn6Vxwgg7wkPP7AAtX+lmPqPdxB47A0Nz0cMQ=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jscolor/2.4.5/jscolor.min.js"
        integrity="sha512-YxdM5kmpjM5ap4Q437qwxlKzBgJApGNw+zmchVHSNs3LgSoLhQIIUNNrR5SmKIpoQ18mp4y+aDAo9m/zBQ408g=="
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue"></script>
</head>

<body>
    <main>
        <div id="vue-app">
            <div v-show="!preview" class="grid grid-cols-4">
                <div class="w-full bg-light-300 flex flex-col shadow-2xl">
                    <form action="{{ route('event.index') }}" method="get" class="ml-6 mt-8">
                        @csrf
                        <button type="submit" class="skuyHeader text-3xl mb-4 cursor-pointer hover:text-dark-200">
                            <span class="fa fa-arrow-left mr-2"></span>Back
                        </button>
                    </form>
                    <form action="{{ route('event.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="px-6 pb-4">
                            <div class="skuyHeader text-3xl">Banner Templates</div>
                            <div
                                class="rounded-3xl w-full bg-light-100 my-4 flex flex-col content-center text-center py-8">
                                <!-- note template 1  -->
                                <div v-if="eventTemplate == 1" class="w-40 h-28 bg-light-300 mx-auto p-4 relative">
                                    <div class="w-6 h-6 bg-dark-100 rounded absolute right-6 top-4 z-10"></div>
                                    <div class="flex flex-col space-y-1 absolute top-0 bottom-0 left-6 justify-center">
                                        <div class="w-12 h-1 bg-primary-200"></div>
                                        <div class="w-12 h-1 bg-primary-200"></div>
                                        <div class="w-12 h-1 bg-primary-200"></div>
                                        <div class="w-12 h-1 bg-primary-200"></div>
                                    </div>
                                    <div class="w-12 h-3/5 bg-primary-100 absolute right-4 top-6 z-0"></div>
                                </div>
                                <!-- note template 2 -->
                                <div v-if="eventTemplate == 2" class="w-40 h-28 bg-primary-50 mx-auto p-4 relative">
                                    <div class="w-6 h-6 bg-dark-100 rounded absolute right-6 top-4 z-10"></div>
                                    <div class="flex flex-col space-y-1 mt-2 justify-center content-center h-full">
                                        <div class="w-5/12 h-1 bg-primary-200"></div>
                                        <div class="w-5/12 h-1 bg-primary-200"></div>
                                        <div class="w-5/12 h-1 bg-primary-200"></div>
                                        <div class="w-5/12 h-1 bg-primary-200"></div>
                                    </div>
                                </div>
                                <!-- note template 3 -->
                                <div v-if="eventTemplate == 3" class="w-40 h-28 bg-light-300 mx-auto p-4 relative">
                                    <div class="w-6 h-6 bg-dark-100 rounded absolute left-8 top-4 z-10"></div>
                                    <div class="flex flex-col space-y-1 absolute top-0 bottom-4 left-6 justify-end">
                                        <div class="w-8 h-1 bg-primary-200"></div>
                                        <div class="w-28 h-1 bg-primary-200"></div>
                                        <div class="w-28 h-1 bg-primary-200"></div>
                                        <div class="w-28 h-1 bg-primary-200"></div>
                                    </div>
                                    <div class="w-28 h-14 bg-primary-100 absolute left-6 top-2 z-0 rounded-md"></div>
                                </div>
                            </div>
                            <div class="flex flex-row text-dark-200 justify-evenly mb-4">
                                <span @click="minusTemplate()"
                                    class="fa fa-chevron-circle-left text-2xl cursor-pointer hover:text-dark-300"></span>
                                <span class="font-skuy-primary-sub text-xl font-bold">Template
                                    @{{ eventTemplate }}</span>
                                <span @click="plusTemplate()"
                                    class="fa fa-chevron-circle-right text-2xl cursor-pointer hover:text-dark-300"></span>
                            </div>
                            <input type="hidden" name="template" v-model="eventTemplate">
                            <div class="skuyHeader text-3xl">Logo</div>
                            <div id="inputLogo"
                                class="border-dashed border-2 border-gray-400 rounded-3xl w-full bg-light-200 my-4 py-12">
                                <div class="flex flex-col content-center text-center ">
                                    <input name="logo" type="file" id="logoElem" accept="image/*"
                                        onchange="handleLogoFiles(this.files)" class="hidden">
                                    <label for="logoElem"
                                        class="fa fa-image text-dark-300 text-5xl cursor-pointer hover:text-dark-200"></label>
                                    <span class="text-dark-300">Drag and drop or browse</span>
                                </div>
                            </div>
                            <div v-show="logoBool"
                                class="bg-light-100 rounded-xl w-full grid grid-cols-10 px-6 py-4 text-dark-200 font-skuy-primary-sub font-bold justify-between mb-8 space-x-2 items-center">
                                <img id="logoImg" src="" class="w-20 col-span-3">
                                <div class="flex flex-col py-4 w-full col-span-5">
                                    <span v-html="logoName" class="text-lg break-words"></span>
                                    <div v-html="logoSize" class="text-md text-secondary-200"></div>
                                </div>
                                <span @click="deleteLogo"
                                    class="fa fa-times cursor-pointer hover:text-red-600 text-4xl px-2 py-6 col-span-2"></span>
                            </div>
                            <div class="skuyHeader text-3xl">Banner Background</div>
                            <div id="inputBanner"
                                class="border-dashed border-2 border-gray-400 rounded-3xl w-full bg-light-200 my-4 py-12">
                                <div class="flex flex-col content-center text-center ">
                                    <input name="banner" type="file" id="bannerElem" accept="image/*"
                                        onchange="handleBannerFiles(this.files)" class="hidden">
                                    <label for="bannerElem"
                                        class="fa fa-image text-dark-300 text-5xl cursor-pointer hover:text-dark-200"></label>
                                    <span class="text-dark-300">Drag and drop or browse</span>
                                </div>
                            </div>
                            <div v-show="bannerBool"
                                class="bg-light-100 rounded-xl w-full grid grid-cols-10 px-6 py-4 text-dark-200 font-skuy-primary-sub font-bold justify-between mb-8 space-x-2 items-center">
                                <img id="bannerImg" src="" class="w-20 col-span-3">
                                <div class="flex flex-col py-4 w-full col-span-5">
                                    <span v-html="bannerName" class="text-lg break-words"></span>
                                    <div v-html="bannerSize" class="text-md text-secondary-200"></div>
                                </div>
                                <span @click="deleteBanner"
                                    class="fa fa-times cursor-pointer hover:text-red-600 text-4xl px-2 py-6 col-span-2"></span>
                            </div>
                            <div class="skuyHeader text-3xl mb-4">Event Details</div>
                            <div class="skuyHeader text-2xl mb-2">Name</div>
                            <input name="title" v-model="eventTitle" type="text" class="inputArea mb-4"
                                placeholder="Your Event Name, max 100 characters." maxlength="100" required>
                            <div class="skuyHeader text-2xl mb-2">Date</div>
                            <input name="date" v-model="eventDate" type="hidden">
                            <div id="event-date" class="mb-4"></div>
                            <div class="skuyHeader text-2xl mb-2">Description</div>
                            <textarea name="description" v-model="eventDesc" class="inputArea mb-4 resize-none"
                                placeholder="Your Event Description, max 250 characters." rows="5" maxlength="250"
                                required></textarea>
                            <div class="skuyHeader text-2xl mb-2">Contact</div>
                            <div class="flex flex-row items-center mb-2">
                                <span class="fa fa-fw fa-envelope text-dark-300 text-3xl mr-2"></span>
                                <input name="email" id="inputEmail" @keyup="changeEmail" type="email" class="inputArea"
                                    placeholder="example@skuy.com">
                            </div>
                            <div class="flex flex-row items-center mb-2">
                                <span class="fab fa-fw fa-instagram text-dark-300 text-3xl mr-2"></span>
                                <input name="instagram" id="inputInstagram" @keyup="changeInstagram" type="text"
                                    class="inputArea" placeholder="Instagram Username">
                            </div>
                            <div class="flex flex-row items-center mb-4">
                                <span class="fab fa-fw fa-whatsapp text-dark-300 text-3xl mr-2"></span>
                                <input name="whatsapp" id="inputWhatsapp" @keyup="changeWhatsapp" type="text"
                                    class="inputArea" placeholder="WhatsApp (e.g +62 812 3312 9966)">
                            </div>
                            <div class="flex justify-between items-center mb-2">
                                <h2 class="skuyHeader text-3xl">Registration</h2>
                                <div class="w-14 h-8 flex items-center bg-gray-300 rounded-full p-1 duration-300 ease-in-out cursor-pointer"
                                    :class="{ 'bg-secondary-300': registerBool}" @click="registerBool = !registerBool">
                                    <div class="bg-white w-6 h-6 rounded-full shadow-md transform duration-300 ease-in-out"
                                        :class="{ 'translate-x-6': registerBool,}"></div>
                                </div>
                            </div>
                            <input type="hidden" name="register" v-model="registerBool">
                            <div v-show="registerBool">
                                <div class="skuyHeader text-2xl mb-2">Button Text</div>
                                <input name="register_text" v-model="registerText" type="text" class="inputArea mb-4"
                                    placeholder="Max 20 Characters." maxlength="20">
                                <div class="skuyHeader text-2xl mb-2">Button Link</div>
                                <input name="register_link" v-model="registerLink" type="text" class="inputArea mb-4"
                                    :required="registerBool">
                                <div class="skuyHeader text-2xl mb-2">Button Color</div>
                                <input name="register_button_color" v-model="registerButtonColor" data-jscolor="{}"
                                    class="inputArea mb-2">
                                <div class="skuyHeader text-2xl mb-2">Text Color</div>
                                <input name="register_text_color" v-model="registerTextColor" data-jscolor="{}"
                                    class="inputArea mb-2">
                            </div>
                            <div class="skuyHeader text-3xl my-4">Settings</div>
                            <div class="skuyHeader text-2xl mb-2">Title Color</div>
                            <input name="title_color" v-model="titleColor" data-jscolor="{}" class="inputArea mb-2">
                            <div class="skuyHeader text-2xl mb-2">Description Color</div>
                            <input name="desc_color" v-model="descColor" data-jscolor="{}" class="inputArea mb-2">
                            <div class="skuyHeader text-2xl mb-2">Date Color</div>
                            <input name="date_color" v-model="dateColor" data-jscolor="{}" class="inputArea mb-2">
                            <div class="skuyHeader text-2xl mb-2">Contacts Color</div>
                            <input name="contacts_color" v-model="contactsColor" data-jscolor="{}"
                                class="inputArea mb-2">
                            <div class="skuyHeader text-2xl mb-2">Custom Link</div>
                            <input v-on:keyup="checkCustomLink('{{ config('app.url') }}')" name="custom_link"
                                v-model="customLink" type="text" class="inputArea mb-2" placeholder="Max 50 Characters."
                                maxlength="50">
                            <div v-show="customLinkSuccess" class="text-xl font-skuy-primary text-success"><span
                                    class="fa fa-fw fa-check"></span> Custom link is available!</div>
                            <div v-show="customLinkError" class="text-xl font-skuy-primary text-danger"><span
                                    class="fa fa-fw fa-times"></span> Custom link is not available.</div>
                            <div v-show="!customLinkSuccess && !customLinkError && customLinkBool"
                                class="text-xl font-skuy-primary"><span
                                    class="fa fa-fw fa-spinner animate-spin"></span> Checking Availability..</div>
                        </div>
                        <div
                            class="w-full h-16 bg-secondary-300 flex flex-row items-center text-white font-skuy-primary-sub justify-between px-6">
                            <button type="submit" :disabled="customLinkError"
                                class="text-center py-1 px-4 rounded-lg font-medium text-lg cursor-pointer z-10 bg-primary-250 hover:bg-primary-300">Submit</button>
                            <div @click="preview = !preview"
                                class="text-center py-1 px-4 rounded-lg font-medium text-lg cursor-pointer z-10 bg-secondary-200 hover:bg-dark-200">
                                <span class="fa fa-eye"></span> Preview
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-span-3 w-full bg-light-50 px-12 py-8 text-center">
                    <!-- note template 1 -->
                    <div v-show="eventTemplate == 1"
                        class="text-center rounded-lg bg-gray-50 w-7/12 h-vh-90 fixed left-3.5/10 shadow-2xl grid grid-cols-12">
                        <div class="col-span-7 flex flex-col justify-center font-sans text-left px-8">
                            <div v-show='eventTitle == ""' v-bind:style="{color: titleColor}"
                                class="text-5xl font-semibold text-left mb-2 break-words">Judul
                            </div>
                            <div class="text-5xl font-semibold text-left mb-2 break-words"
                                v-bind:style="{color: titleColor}">@{{ eventTitle }}</div>
                            <span v-show='eventDesc == ""' v-bind:style="{color: descColor}"
                                class="text-lg text-left mb-2 break-words">Deskripsikan eventmu
                                disini.</span>
                            <span class="text-lg text-left mb-2 break-words"
                                v-bind:style="{color: descColor}">@{{ eventDesc }}</span>
                            <span class="text-lg text-left mb-2" v-bind:style="{color: dateColor}">
                                <span class="fa fa-calendar-day text-2xl"></span> @{{ eventDate }}</span>
                            <div class="flex items-left space-x-8 text-5xl mb-2" v-bind:style="{color: contactsColor}">
                                <a v-if="emailBool" target="_blank" v-bind:href="eventEmail">
                                    <span
                                        class="fa fa-envelope hover:text-gray-600 transition ease-in-out duration-500"></span>
                                </a>
                                <a v-if="instagramBool" target="_blank" v-bind:href="eventInstagram">
                                    <span
                                        class="fab fa-instagram hover:text-gray-600 transition ease-in-out duration-500"></span>
                                </a>
                                <a v-if="whatsappBool" target="_blank" v-bind:href="eventWhatsapp">
                                    <span
                                        class="fab fa-whatsapp hover:text-gray-600 transition ease-in-out duration-500"></span>
                                </a>
                            </div>
                            <div v-show="registerBool"
                                v-bind:style="{'background-color': registerButtonColor, color:registerTextColor}"
                                class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words">
                                @{{ registerText }}</div>
                        </div>
                        <div v-show="bannerBool" class="col-span-5 flex flex-col justify-center px-2 mr-12">
                            <img class="templateBanner w-full">
                        </div>
                        <div v-show="!bannerBool"
                            class="col-span-5 flex flex-col justify-center px-2 bg-light-50 rounded-xl h-3/4 my-auto mr-12">
                            <div class="text-5xl text-dark-300 font-skuy-primary">Banner</div>
                            <span class="fa fa-image text-dark-300 text-5xl"></span>
                        </div>
                        <div v-show="logoBool"
                            class="rounded-lg bg-white absolute top-12 right-12 w-24 p-1 shadow-2xl mr-12">
                            <img class="templateLogo rounded-lg">
                        </div>
                        <div v-show="!logoBool"
                            class="rounded-lg bg-white absolute top-12 right-12 w-24 p-1 shadow-2xl mr-12 h-24 flex flex-col justify-center">
                            <div class="text-2xl text-dark-300 font-skuy-primary">Logo</div>
                            <span class="fa fa-image text-dark-300 text-2xl"></span>
                        </div>
                    </div>
                    <!-- note template 2  -->
                    <div v-show="eventTemplate == 2"
                        class="text-center rounded-lg bg-gray-50 w-7/12 h-vh-90 fixed left-3.5/10 shadow-2xl grid grid-cols-12">
                        <div
                            class="absolute top-0 bottom-0 w-5/12 flex flex-col justify-center content-center font-sans text-left ml-8 z-10">
                            <div v-show='eventTitle == ""' class="text-5xl font-semibold text-left mb-2 break-words"
                                v-bind:style="{color: titleColor}">Judul
                            </div>
                            <div class="text-5xl font-semibold text-left mb-2 break-words"
                                v-bind:style="{color: titleColor}">@{{ eventTitle }}</div>
                            <span v-show='eventDesc == ""' class="text-lg text-left mb-2 break-words"
                                v-bind:style="{color: descColor}">Deskripsikan eventmu
                                disini.</span>
                            <span class="text-lg text-left mb-2 break-words"
                                v-bind:style="{color: descColor}">@{{ eventDesc }}</span>
                            <span class="text-lg text-left mb-2" v-bind:style="{color: dateColor}">
                                <span class="fa fa-calendar-day text-2xl"></span> @{{ eventDate }}</span>
                            <div class="flex items-left space-x-8 text-5xl mb-2" v-bind:style="{color: contactsColor}">
                                <a v-if="emailBool" target="_blank" v-bind:href="eventEmail">
                                    <span
                                        class="fa fa-envelope hover:text-gray-600 transition ease-in-out duration-500"></span>
                                </a>
                                <a v-if="instagramBool" target="_blank" v-bind:href="eventInstagram">
                                    <span
                                        class="fab fa-instagram hover:text-gray-600 transition ease-in-out duration-500"></span>
                                </a>
                                <a v-if="whatsappBool" target="_blank" v-bind:href="eventWhatsapp">
                                    <span
                                        class="fab fa-whatsapp hover:text-gray-600 transition ease-in-out duration-500"></span>
                                </a>
                            </div>
                            <div v-show="registerBool"
                                v-bind:style="{'background-color': registerButtonColor, color:registerTextColor}"
                                class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words">
                                @{{ registerText }}</div>
                        </div>
                        <div v-show="bannerBool"
                            class="col-span-12 flex flex-col justify-center bg-light-50 rounded-xl h-full overflow-hidden">
                            <img class="templateBanner w-full rounded-xl">
                        </div>
                        <div v-show="bannerBool"
                            class="col-span-12 flex flex-col justify-center px-2 bg-black rounded-xl h-full w-full absolute z-0 opacity-20">
                        </div>
                        <div v-show="!bannerBool"
                            class="col-span-12 flex flex-col justify-center px-2 bg-light-50 rounded-xl h-full">
                            <div class="text-5xl text-dark-300 font-skuy-primary">Banner</div>
                            <span class="fa fa-image text-dark-300 text-5xl"></span>
                        </div>
                        <div v-show="logoBool"
                            class="rounded-lg bg-white absolute top-12 right-12 w-24 p-1 shadow-2xl mr-12">
                            <img class="templateLogo rounded-lg">
                        </div>
                        <div v-show="!logoBool"
                            class="rounded-lg bg-white absolute top-12 right-12 w-24 p-1 shadow-2xl mr-12 h-24 flex flex-col justify-center">
                            <div class="text-2xl text-dark-300 font-skuy-primary">Logo</div>
                            <span class="fa fa-image text-dark-300 text-2xl"></span>
                        </div>
                    </div>
                    <!-- note template 3 -->
                    <div v-show="eventTemplate == 3"
                        class="text-center rounded-lg bg-gray-50 w-7/12 h-vh-90 fixed left-3.5/10 shadow-2xl grid grid-rows-6">
                        <div v-show="bannerBool" class="row-span-3 flex flex-col justify-center px-2 mx-12 mt-8 h-9/10">
                            <img class="templateBanner object-contain h-full">
                        </div>
                        <div v-show="!bannerBool"
                            class="row-span-3 flex flex-col justify-center px-2 bg-light-50 rounded-xl h-9/10 mt-8 mx-12">
                            <div class="text-5xl text-dark-300 font-skuy-primary">Banner</div>
                            <span class="fa fa-image text-dark-300 text-5xl"></span>
                        </div>
                        <div
                            class="row-span-3 flex flex-col justify-start font-sans text-left px-12 mt-8 w-full overflow-hidden">
                            <div v-show='eventTitle == ""' v-bind:style="{color: titleColor}"
                                class="text-4xl font-semibold text-left mb-2 break-words">Judul
                            </div>
                            <div class="text-4xl font-semibold text-left mb-2 break-words"
                                v-bind:style="{color: titleColor}">@{{ eventTitle }}</div>
                            <span v-show='eventDesc == ""' v-bind:style="{color: descColor}"
                                class="text-md text-left mb-2 break-words">Deskripsikan eventmu
                                disini.</span>
                            <span class="text-md text-left mb-2 break-words"
                                v-bind:style="{color: descColor}">@{{ eventDesc }}</span>
                            <span class="text-md text-left mb-2" v-bind:style="{color: dateColor}">
                                <span class="fa fa-calendar-day text-2xl"></span> @{{ eventDate }}</span>
                            <div class="flex items-left space-x-8 text-4xl mb-2" v-bind:style="{color: contactsColor}">
                                <a v-if="emailBool" target="_blank" v-bind:href="eventEmail">
                                    <span
                                        class="fa fa-envelope hover:text-gray-600 transition ease-in-out duration-500"></span>
                                </a>
                                <a v-if="instagramBool" target="_blank" v-bind:href="eventInstagram">
                                    <span
                                        class="fab fa-instagram hover:text-gray-600 transition ease-in-out duration-500"></span>
                                </a>
                                <a v-if="whatsappBool" target="_blank" v-bind:href="eventWhatsapp">
                                    <span
                                        class="fab fa-whatsapp hover:text-gray-600 transition ease-in-out duration-500"></span>
                                </a>
                            </div>
                            <div v-show="registerBool"
                                v-bind:style="{'background-color': registerButtonColor, color:registerTextColor}"
                                class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words">
                                @{{ registerText }}</div>
                        </div>
                        <div v-show="logoBool" class="rounded-lg bg-white absolute top-12 left-16 w-24 p-1 shadow-2xl">
                            <img class="templateLogo rounded-lg">
                        </div>
                        <div v-show="!logoBool"
                            class="rounded-lg bg-white absolute top-12 left-16 w-24 h-24 p-1 shadow-2xl flex flex-col justify-center">
                            <div class="text-2xl text-dark-300 font-skuy-primary">Logo</div>
                            <span class="fa fa-image text-dark-300 text-2xl"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div v-show="preview && !previewMobile" class="w-full h-screen bg-light-50 px-16 py-8 text-center">
                <div
                    class="rounded-lg bg-white absolute top-12 left-24 w-44 px-8 py-4 shadow-2xl h-12 flex flex-row justify-center content-center z-50">
                    <button @click="preview = !preview"
                        class="fa fa-fw fa-arrow-left text-xl hover:text-gray-500 focus:outline-none"></button>
                    <span class="fa fa-grip-lines-vertical mx-4 text-xl"></span>
                    <button @click="previewMobile = false"
                        class="fa fa-fw fa-desktop text-xl hover:text-gray-500 focus:outline-none"></button>
                    <span class="fa fa-grip-lines-vertical mx-4 text-xl"></span>
                    <button @click="previewMobile = true"
                        class="fa fa-fw fa-mobile-alt text-xl hover:text-gray-500 focus:outline-none"></button>
                </div>
                <!-- note template 1 -->
                <div v-show="eventTemplate == 1"
                    class="text-center rounded-lg bg-gray-50 w-full h-full shadow-2xl grid grid-cols-12 py-8">
                    <div class="col-span-7 flex flex-col justify-center font-sans text-left px-8">
                        <div v-show='eventTitle == ""' v-bind:style="{color: titleColor}"
                            class="text-5xl font-semibold text-left mb-2 break-words">Judul
                        </div>
                        <div class="text-5xl font-semibold text-left mb-2 break-words"
                            v-bind:style="{color: titleColor}">@{{ eventTitle }}</div>
                        <span v-show='eventDesc == ""' v-bind:style="{color: descColor}"
                            class="text-lg text-left mb-2 break-words">Deskripsikan eventmu
                            disini.</span>
                        <span class="text-lg text-left mb-2 break-words"
                            v-bind:style="{color: descColor}">@{{ eventDesc }}</span>
                        <span class="text-lg text-left mb-2" v-bind:style="{color: dateColor}">
                            <span class="fa fa-calendar-day text-2xl"></span> @{{ eventDate }}</span>
                        <div class="flex items-left space-x-8 text-5xl mb-2" v-bind:style="{color: contactsColor}">
                            <a v-if="emailBool" target="_blank" v-bind:href="eventEmail">
                                <span
                                    class="fa fa-envelope hover:text-gray-600 transition ease-in-out duration-500"></span>
                            </a>
                            <a v-if="instagramBool" target="_blank" v-bind:href="eventInstagram">
                                <span
                                    class="fab fa-instagram hover:text-gray-600 transition ease-in-out duration-500"></span>
                            </a>
                            <a v-if="whatsappBool" target="_blank" v-bind:href="eventWhatsapp">
                                <span
                                    class="fab fa-whatsapp hover:text-gray-600 transition ease-in-out duration-500"></span>
                            </a>
                        </div>
                        <div v-show="registerBool"
                            v-bind:style="{'background-color': registerButtonColor, color:registerTextColor}"
                            class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words">
                            @{{ registerText }}</div>
                    </div>
                    <div v-show="bannerBool" class="col-span-5 flex flex-col justify-center px-2 mr-12 overflow-hidden">
                        <img class="templateBanner w-full">
                    </div>
                    <div v-show="logoBool" class="rounded-lg bg-white absolute top-12 right-36 w-24 p-1 shadow-2xl">
                        <img class="templateLogo rounded-lg">
                    </div>
                </div>
                <!-- note template 2  -->
                <div v-show="eventTemplate == 2"
                    class="text-center rounded-lg bg-gray-50 w-full h-full shadow-2xl grid grid-cols-12">
                    <div
                        class="absolute top-0 bottom-0 w-5/12 flex flex-col justify-center content-center font-sans text-left ml-8 z-40">
                        <div v-show='eventTitle == ""' class="text-5xl font-semibold text-left mb-2 break-words"
                            v-bind:style="{color: titleColor}">Judul
                        </div>
                        <div class="text-5xl font-semibold text-left mb-2 break-words"
                            v-bind:style="{color: titleColor}">@{{ eventTitle }}</div>
                        <span v-show='eventDesc == ""' class="text-lg text-left mb-2 break-words"
                            v-bind:style="{color: descColor}">Deskripsikan eventmu
                            disini.</span>
                        <span class="text-lg text-left mb-2 break-words"
                            v-bind:style="{color: descColor}">@{{ eventDesc }}</span>
                        <span class="text-lg text-left mb-2" v-bind:style="{color: dateColor}">
                            <span class="fa fa-calendar-day text-2xl"></span> @{{ eventDate }}</span>
                        <div class="flex items-left space-x-8 text-5xl mb-2" v-bind:style="{color: contactsColor}">
                            <a v-if="emailBool" target="_blank" v-bind:href="eventEmail">
                                <span
                                    class="fa fa-envelope hover:text-gray-600 transition ease-in-out duration-500"></span>
                            </a>
                            <a v-if="instagramBool" target="_blank" v-bind:href="eventInstagram">
                                <span
                                    class="fab fa-instagram hover:text-gray-600 transition ease-in-out duration-500"></span>
                            </a>
                            <a v-if="whatsappBool" target="_blank" v-bind:href="eventWhatsapp">
                                <span
                                    class="fab fa-whatsapp hover:text-gray-600 transition ease-in-out duration-500"></span>
                            </a>
                        </div>
                        <div v-show="registerBool"
                            v-bind:style="{'background-color': registerButtonColor, color:registerTextColor}"
                            class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words">
                            @{{ registerText }}</div>
                    </div>
                    <div v-show="bannerBool"
                        class="col-span-12 flex flex-col justify-center bg-light-50 rounded-xl h-full overflow-hidden relative">
                        <img class="templateBanner w-full rounded-xl">
                        <div v-show="bannerBool" class="bg-black rounded-xl h-full w-full absolute opacity-20 z-10">
                        </div>
                    </div>
                    <div v-show="logoBool"
                        class="rounded-lg bg-white absolute top-12 right-36 w-24 p-1 shadow-2xl z-30">
                        <img class="templateLogo rounded-lg">
                    </div>
                </div>
                <!-- note template 3 -->
                <div v-show="eventTemplate == 3"
                    class="text-center rounded-lg bg-gray-50 w-full h-full shadow-2xl grid grid-rows-6 py-8">
                    <div v-show="bannerBool" class="row-span-3 flex flex-col justify-center px-2 mx-12 mt-1 h-9/10">
                        <img class="templateBanner object-contain h-full">
                    </div>
                    <div v-show="!bannerBool"
                        class="row-span-3 flex flex-col justify-center px-2 bg-light-50 rounded-xl h-9/10 mt-1 mx-12">
                        {{-- <div class="text-5xl text-dark-300 font-skuy-primary">Banner</div>
                        <span class="fa fa-image text-dark-300 text-5xl"></span> --}}
                    </div>
                    <div
                        class="row-span-3 flex flex-col justify-start font-sans text-left px-12 mt-8 w-full overflow-hidden">
                        <div v-show='eventTitle == ""' v-bind:style="{color: titleColor}"
                            class="text-4xl font-semibold text-left mb-2 break-words">Judul
                        </div>
                        <div class="text-4xl font-semibold text-left mb-2 break-words"
                            v-bind:style="{color: titleColor}">@{{ eventTitle }}</div>
                        <span v-show='eventDesc == ""' v-bind:style="{color: descColor}"
                            class="text-md text-left mb-2 break-words">Deskripsikan eventmu
                            disini.</span>
                        <span class="text-md text-left mb-2 break-words"
                            v-bind:style="{color: descColor}">@{{ eventDesc }}</span>
                        <span class="text-md text-left mb-2" v-bind:style="{color: dateColor}">
                            <span class="fa fa-calendar-day text-2xl"></span> @{{ eventDate }}</span>
                        <div class="flex items-left space-x-8 text-4xl mb-2" v-bind:style="{color: contactsColor}">
                            <a v-if="emailBool" target="_blank" v-bind:href="eventEmail">
                                <span
                                    class="fa fa-envelope hover:text-gray-600 transition ease-in-out duration-500"></span>
                            </a>
                            <a v-if="instagramBool" target="_blank" v-bind:href="eventInstagram">
                                <span
                                    class="fab fa-instagram hover:text-gray-600 transition ease-in-out duration-500"></span>
                            </a>
                            <a v-if="whatsappBool" target="_blank" v-bind:href="eventWhatsapp">
                                <span
                                    class="fab fa-whatsapp hover:text-gray-600 transition ease-in-out duration-500"></span>
                            </a>
                        </div>
                        <div v-show="registerBool"
                            v-bind:style="{'background-color': registerButtonColor, color:registerTextColor}"
                            class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words">
                            @{{ registerText }}</div>
                    </div>
                    <div v-show="logoBool" class="rounded-lg bg-white absolute w-24 p-1 mt-4 ml-16 shadow-2xl">
                        <img class="templateLogo rounded-lg">
                    </div>
                </div>
            </div>
            <div v-show="preview && previewMobile" class="w-full h-screen bg-light-50 px-16 py-8 text-center">
                <div
                    class="rounded-lg bg-white absolute top-12 left-24 w-44 px-8 py-4 shadow-2xl h-12 flex flex-row justify-center content-center z-50">
                    <button @click="preview = !preview"
                        class="fa fa-fw fa-arrow-left text-xl hover:text-gray-500 focus:outline-none"></button>
                    <span class="fa fa-grip-lines-vertical mx-4 text-xl"></span>
                    <button @click="previewMobile = false"
                        class="fa fa-fw fa-desktop text-xl hover:text-gray-500 focus:outline-none"></button>
                    <span class="fa fa-grip-lines-vertical mx-4 text-xl"></span>
                    <button @click="previewMobile = true"
                        class="fa fa-fw fa-mobile-alt text-xl hover:text-gray-500 focus:outline-none"></button>
                </div>
                <!-- note template 1 -->
                <div v-show="eventTemplate == 1"
                    class="text-center rounded-lg bg-gray-50 w-1/4 h-full shadow-2xl py-8 mx-auto flex">
                    <div class="flex flex-col justify-center font-sans text-left w-full px-8">
                        <div v-show='eventTitle == ""' v-bind:style="{color: titleColor}"
                            class="text-3xl font-semibold text-left mb-2 break-words">Judul
                        </div>
                        <div class="text-3xl font-semibold text-left mb-2 break-words"
                            v-bind:style="{color: titleColor}">@{{ eventTitle }}</div>
                        <span v-show='eventDesc == ""' v-bind:style="{color: descColor}"
                            class="text-sm text-left mb-2 break-words">Deskripsikan eventmu
                            disini.</span>
                        <span class="text-sm text-left mb-2 break-words"
                            v-bind:style="{color: descColor}">@{{ eventDesc }}</span>
                        <span class="text-lg text-left mb-2" v-bind:style="{color: dateColor}">
                            <span class="fa fa-calendar-day text-xl"></span> @{{ eventDate }}</span>
                        <div class="flex items-left space-x-8 text-4xl mb-2" v-bind:style="{color: contactsColor}">
                            <a v-if="emailBool" target="_blank" v-bind:href="eventEmail">
                                <span
                                    class="fa fa-envelope hover:text-gray-600 transition ease-in-out duration-500"></span>
                            </a>
                            <a v-if="instagramBool" target="_blank" v-bind:href="eventInstagram">
                                <span
                                    class="fab fa-instagram hover:text-gray-600 transition ease-in-out duration-500"></span>
                            </a>
                            <a v-if="whatsappBool" target="_blank" v-bind:href="eventWhatsapp">
                                <span
                                    class="fab fa-whatsapp hover:text-gray-600 transition ease-in-out duration-500"></span>
                            </a>
                        </div>
                        <div v-show="registerBool"
                            v-bind:style="{'background-color': registerButtonColor, color:registerTextColor}"
                            class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words">
                            @{{ registerText }}</div>
                    </div>
                    <div v-show="bannerBool" class="flex flex-col justify-center px-2 overflow-hidden h-full">
                        <img class="templateBanner my-auto">
                    </div>
                    <div v-show="logoBool"
                        class="rounded-lg bg-white absolute top-12 left-52 right-0 w-24 p-1 shadow-2xl mx-auto">
                        <img class="templateLogo rounded-lg">
                    </div>
                </div>
                <!-- note template 2 -->
                <div v-show="eventTemplate == 2"
                    class="text-center rounded-lg bg-gray-50 w-1/4 h-full shadow-2xl mx-auto flex relative">
                    <div class="flex flex-col justify-center font-sans text-left z-40 overflow-hidden">
                        <div v-show='eventTitle == ""' v-bind:style="{color: titleColor}"
                            class="text-3xl font-semibold text-left mb-2 break-words mx-8 z-40">Judul
                        </div>
                        <div class="text-3xl font-semibold text-left mb-2 break-words mx-8 z-40"
                            v-bind:style="{color: titleColor}">@{{ eventTitle }}</div>
                        <span v-show='eventDesc == ""' v-bind:style="{color: descColor}"
                            class="text-sm text-left mb-2 break-words mx-8 z-40">Deskripsikan eventmu
                            disini.</span>
                        <span class="text-sm text-left mb-2 break-words mx-8 z-40"
                            v-bind:style="{color: descColor}">@{{ eventDesc }}</span>
                        <span class="text-lg text-left mb-2 mx-8 z-40" v-bind:style="{color: dateColor}">
                            <span class="fa fa-calendar-day text-xl"></span> @{{ eventDate }}</span>
                        <div class="flex items-left space-x-8 text-4xl mb-2 mx-8 z-40"
                            v-bind:style="{color: contactsColor}">
                            <a v-if="emailBool" target="_blank" v-bind:href="eventEmail">
                                <span
                                    class="fa fa-envelope hover:text-gray-600 transition ease-in-out duration-500"></span>
                            </a>
                            <a v-if="instagramBool" target="_blank" v-bind:href="eventInstagram">
                                <span
                                    class="fab fa-instagram hover:text-gray-600 transition ease-in-out duration-500"></span>
                            </a>
                            <a v-if="whatsappBool" target="_blank" v-bind:href="eventWhatsapp">
                                <span
                                    class="fab fa-whatsapp hover:text-gray-600 transition ease-in-out duration-500"></span>
                            </a>
                        </div>
                        <div v-show="registerBool"
                            v-bind:style="{'background-color': registerButtonColor, color:registerTextColor}"
                            class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words mx-8 z-40">
                            @{{ registerText }}</div>
                        <div v-show="bannerBool" class="bg-black h-full w-full absolute opacity-20 z-10">
                        </div>
                    </div>
                    <div v-show="bannerBool" class="absolute flex flex-col justify-center overflow-hidden h-full">
                        <img class="templateBanner my-auto">
                    </div>
                    <div v-show="logoBool"
                        class="rounded-lg bg-white absolute top-12 left-52 right-0 w-24 p-1 shadow-2xl mx-auto z-50">
                        <img class="templateLogo rounded-lg">
                    </div>
                </div>
                <!-- note template 3 -->
                <div v-show="eventTemplate == 3"
                    class="text-center rounded-lg bg-gray-50 w-1/4 h-full shadow-2xl py-8 mx-auto grid grid-rows-6">
                    <div v-show="bannerBool"
                        class="row-span-2 flex flex-col justify-center px-2 overflow-hidden h-full">
                        <img class="templateBanner object-contain my-auto">
                    </div>
                    <div class="row-span-4 flex flex-col justify-start font-sans text-left w-full px-8 overflow-hidden">
                        <div v-show='eventTitle == ""' v-bind:style="{color: titleColor}"
                            class="text-2xl font-semibold text-left mb-2 break-words">Judul
                        </div>
                        <div class="text-2xl font-semibold text-left mb-2 break-words"
                            v-bind:style="{color: titleColor}">@{{ eventTitle }}</div>
                        <span v-show='eventDesc == ""' v-bind:style="{color: descColor}"
                            class="text-sm text-left mb-2 break-words">Deskripsikan eventmu
                            disini.</span>
                        <span class="text-sm text-left mb-2 break-words"
                            v-bind:style="{color: descColor}">@{{ eventDesc }}</span>
                        <span class="text-lg text-left mb-2" v-bind:style="{color: dateColor}">
                            <span class="fa fa-calendar-day text-xl"></span> @{{ eventDate }}</span>
                        <div class="flex items-left space-x-8 text-4xl mb-2" v-bind:style="{color: contactsColor}">
                            <a v-if="emailBool" target="_blank" v-bind:href="eventEmail">
                                <span
                                    class="fa fa-envelope hover:text-gray-600 transition ease-in-out duration-500"></span>
                            </a>
                            <a v-if="instagramBool" target="_blank" v-bind:href="eventInstagram">
                                <span
                                    class="fab fa-instagram hover:text-gray-600 transition ease-in-out duration-500"></span>
                            </a>
                            <a v-if="whatsappBool" target="_blank" v-bind:href="eventWhatsapp">
                                <span
                                    class="fab fa-whatsapp hover:text-gray-600 transition ease-in-out duration-500"></span>
                            </a>
                        </div>
                        <div v-show="registerBool"
                            v-bind:style="{'background-color': registerButtonColor, color:registerTextColor}"
                            class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words">
                            @{{ registerText }}</div>
                    </div>
                    <div v-show="logoBool"
                        class="rounded-lg bg-white absolute top-12 left-0 right-52 w-24 p-1 shadow-2xl mx-auto">
                        <img class="templateLogo rounded-lg">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/builder.js') }}"></script>
</body>

</html>
