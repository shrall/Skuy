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
        <div class="text-5xl font-semibold text-left mb-2 break-words" v-bind:style="{color: titleColor}">
            @{{ eventTitle }}</div>
        <span v-show='eventDesc == ""' v-bind:style="{color: descColor}"
            class="text-lg text-left mb-2 break-words">Deskripsikan eventmu
            disini.</span>
        <span class="text-lg text-left mb-2 break-words" v-bind:style="{color: descColor}">@{{ eventDesc }}</span>
        <span class="text-lg text-left mb-2" v-bind:style="{color: dateColor}">
            <span class="fa fa-calendar-day text-2xl"></span> @{{ eventDate }}</span>
        <div class="flex items-left space-x-8 text-5xl mb-2" v-bind:style="{color: contactsColor}">
            <a v-if="emailBool" target="_blank" v-bind:href="eventEmail">
                <span class="fa fa-envelope hover:text-gray-600 transition ease-in-out duration-500"></span>
            </a>
            <a v-if="instagramBool" target="_blank" v-bind:href="eventInstagram">
                <span class="fab fa-instagram hover:text-gray-600 transition ease-in-out duration-500"></span>
            </a>
            <a v-if="whatsappBool" target="_blank" v-bind:href="eventWhatsapp">
                <span class="fab fa-whatsapp hover:text-gray-600 transition ease-in-out duration-500"></span>
            </a>
        </div>
        <div v-show="registerBool" v-bind:style="{'background-color': registerButtonColor, color:registerTextColor}"
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
<div v-show="eventTemplate == 2" class="text-center rounded-lg bg-gray-50 w-full h-full shadow-2xl grid grid-cols-12">
    <div
        class="absolute top-0 bottom-0 w-5/12 flex flex-col justify-center content-center font-sans text-left ml-8 z-40">
        <div v-show='eventTitle == ""' class="text-5xl font-semibold text-left mb-2 break-words"
            v-bind:style="{color: titleColor}">Judul
        </div>
        <div class="text-5xl font-semibold text-left mb-2 break-words" v-bind:style="{color: titleColor}">
            @{{ eventTitle }}</div>
        <span v-show='eventDesc == ""' class="text-lg text-left mb-2 break-words"
            v-bind:style="{color: descColor}">Deskripsikan eventmu
            disini.</span>
        <span class="text-lg text-left mb-2 break-words" v-bind:style="{color: descColor}">@{{ eventDesc }}</span>
        <span class="text-lg text-left mb-2" v-bind:style="{color: dateColor}">
            <span class="fa fa-calendar-day text-2xl"></span> @{{ eventDate }}</span>
        <div class="flex items-left space-x-8 text-5xl mb-2" v-bind:style="{color: contactsColor}">
            <a v-if="emailBool" target="_blank" v-bind:href="eventEmail">
                <span class="fa fa-envelope hover:text-gray-600 transition ease-in-out duration-500"></span>
            </a>
            <a v-if="instagramBool" target="_blank" v-bind:href="eventInstagram">
                <span class="fab fa-instagram hover:text-gray-600 transition ease-in-out duration-500"></span>
            </a>
            <a v-if="whatsappBool" target="_blank" v-bind:href="eventWhatsapp">
                <span class="fab fa-whatsapp hover:text-gray-600 transition ease-in-out duration-500"></span>
            </a>
        </div>
        <div v-show="registerBool" v-bind:style="{'background-color': registerButtonColor, color:registerTextColor}"
            class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words">
            @{{ registerText }}</div>
    </div>
    <div v-show="bannerBool"
        class="col-span-12 flex flex-col justify-center bg-light-50 rounded-xl h-full overflow-hidden relative">
        <img class="templateBanner w-full rounded-xl">
        <div v-show="bannerBool" class="bg-black rounded-xl h-full w-full absolute opacity-20 z-10">
        </div>
    </div>
    <div v-show="logoBool" class="rounded-lg bg-white absolute top-12 right-36 w-24 p-1 shadow-2xl z-30">
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
    <div class="row-span-3 flex flex-col justify-start font-sans text-left px-12 mt-8 w-full overflow-hidden">
        <div v-show='eventTitle == ""' v-bind:style="{color: titleColor}"
            class="text-4xl font-semibold text-left mb-2 break-words">Judul
        </div>
        <div class="text-4xl font-semibold text-left mb-2 break-words" v-bind:style="{color: titleColor}">
            @{{ eventTitle }}</div>
        <span v-show='eventDesc == ""' v-bind:style="{color: descColor}"
            class="text-md text-left mb-2 break-words">Deskripsikan eventmu
            disini.</span>
        <span class="text-md text-left mb-2 break-words" v-bind:style="{color: descColor}">@{{ eventDesc }}</span>
        <span class="text-md text-left mb-2" v-bind:style="{color: dateColor}">
            <span class="fa fa-calendar-day text-2xl"></span> @{{ eventDate }}</span>
        <div class="flex items-left space-x-8 text-4xl mb-2" v-bind:style="{color: contactsColor}">
            <a v-if="emailBool" target="_blank" v-bind:href="eventEmail">
                <span class="fa fa-envelope hover:text-gray-600 transition ease-in-out duration-500"></span>
            </a>
            <a v-if="instagramBool" target="_blank" v-bind:href="eventInstagram">
                <span class="fab fa-instagram hover:text-gray-600 transition ease-in-out duration-500"></span>
            </a>
            <a v-if="whatsappBool" target="_blank" v-bind:href="eventWhatsapp">
                <span class="fab fa-whatsapp hover:text-gray-600 transition ease-in-out duration-500"></span>
            </a>
        </div>
        <div v-show="registerBool" v-bind:style="{'background-color': registerButtonColor, color:registerTextColor}"
            class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words">
            @{{ registerText }}</div>
    </div>
    <div v-show="logoBool" class="rounded-lg bg-white absolute w-24 p-1 mt-4 ml-16 shadow-2xl">
        <img class="templateLogo rounded-lg">
    </div>
</div>