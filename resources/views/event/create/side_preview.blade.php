<!-- note template 1 -->
<div v-show="eventTemplate == 1 && !extraPreviewBool"
    class="text-center rounded-lg bg-gray-50 w-7/12 h-vh-90 fixed left-3.5/10 shadow-2xl grid grid-cols-12">
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
    <div v-show="bannerBool" class="col-span-5 flex flex-col justify-center px-2 mr-12">
        <img class="templateBanner w-full">
    </div>
    <div v-show="!bannerBool"
        class="col-span-5 flex flex-col justify-center px-2 bg-light-50 rounded-xl h-3/4 my-auto mr-12">
        <div class="text-5xl text-dark-300 font-skuy-primary">Banner</div>
        <span class="fa fa-image text-dark-300 text-5xl"></span>
    </div>
    <div v-show="logoBool" class="rounded-lg bg-white absolute top-12 right-12 w-24 p-1 shadow-2xl mr-12">
        <img class="templateLogo rounded-lg">
    </div>
    <div v-show="!logoBool"
        class="rounded-lg bg-white absolute top-12 right-12 w-24 p-1 shadow-2xl mr-12 h-24 flex flex-col justify-center">
        <div class="text-2xl text-dark-300 font-skuy-primary">Logo</div>
        <span class="fa fa-image text-dark-300 text-2xl"></span>
    </div>
    <div v-show="extraBool" v-bind:style="{'background-color': extraButtonColor, color:extraTextColor}"
        class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words absolute right-4 bottom-4"
        @click="extraPreviewBool = !extraPreviewBool">
        @{{ extraText }} <span class="fa fa-fw fa-arrow-right ml-2"></span> </div>
</div>
<!-- note template 2  -->
<div v-show="eventTemplate == 2 && !extraPreviewBool"
    class="text-center rounded-lg bg-gray-50 w-7/12 h-vh-90 fixed left-3.5/10 shadow-2xl grid grid-cols-12">
    <div
        class="absolute top-0 bottom-0 w-5/12 flex flex-col justify-center content-center font-sans text-left ml-8 z-10">
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
        class="col-span-12 flex flex-col justify-center bg-light-50 rounded-xl h-full overflow-hidden">
        <img class="templateBanner w-full rounded-xl">
    </div>
    <div v-show="bannerBool"
        class="col-span-12 flex flex-col justify-center px-2 bg-black rounded-xl h-full w-full absolute z-0 opacity-20">
    </div>
    <div v-show="!bannerBool" class="col-span-12 flex flex-col justify-center px-2 bg-light-50 rounded-xl h-full">
        <div class="text-5xl text-dark-300 font-skuy-primary">Banner</div>
        <span class="fa fa-image text-dark-300 text-5xl"></span>
    </div>
    <div v-show="logoBool" class="rounded-lg bg-white absolute top-12 right-12 w-24 p-1 shadow-2xl mr-12">
        <img class="templateLogo rounded-lg">
    </div>
    <div v-show="!logoBool"
        class="rounded-lg bg-white absolute top-12 right-12 w-24 p-1 shadow-2xl mr-12 h-24 flex flex-col justify-center">
        <div class="text-2xl text-dark-300 font-skuy-primary">Logo</div>
        <span class="fa fa-image text-dark-300 text-2xl"></span>
    </div>
    <div v-show="extraBool" v-bind:style="{'background-color': extraButtonColor, color:extraTextColor}"
        class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words absolute right-4 bottom-4"
        @click="extraPreviewBool = !extraPreviewBool">
        @{{ extraText }} <span class="fa fa-fw fa-arrow-right ml-2"></span> </div>
</div>
<!-- note template 3 -->
<div v-show="eventTemplate == 3 && !extraPreviewBool"
    class="text-center rounded-lg bg-gray-50 w-7/12 h-vh-90 fixed left-3.5/10 shadow-2xl grid grid-rows-6">
    <div v-show="bannerBool" class="row-span-3 flex flex-col justify-center px-2 mx-12 mt-8 h-9/10">
        <img class="templateBanner object-contain h-full">
    </div>
    <div v-show="!bannerBool"
        class="row-span-3 flex flex-col justify-center px-2 bg-light-50 rounded-xl h-9/10 mt-8 mx-12">
        <div class="text-5xl text-dark-300 font-skuy-primary">Banner</div>
        <span class="fa fa-image text-dark-300 text-5xl"></span>
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
    <div v-show="logoBool" class="rounded-lg bg-white absolute top-12 left-16 w-24 p-1 shadow-2xl">
        <img class="templateLogo rounded-lg">
    </div>
    <div v-show="!logoBool"
        class="rounded-lg bg-white absolute top-12 left-16 w-24 h-24 p-1 shadow-2xl flex flex-col justify-center">
        <div class="text-2xl text-dark-300 font-skuy-primary">Logo</div>
        <span class="fa fa-image text-dark-300 text-2xl"></span>
    </div>
    <div v-show="extraBool" v-bind:style="{'background-color': extraButtonColor, color:extraTextColor}"
        class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words absolute right-4 bottom-4"
        @click="extraPreviewBool = !extraPreviewBool">
        @{{ extraText }} <span class="fa fa-fw fa-arrow-right ml-2"></span> </div>
</div>
<!-- note extra template 1 -->
<div v-show="extraTemplate == 1 && extraPreviewBool"
    class="text-center rounded-lg bg-gray-50 w-7/12 h-vh-90 fixed left-3.5/10 shadow-2xl grid grid-cols-5 justify-items-center items-center">
    <div class="text-dark-300 text-center font-medium text-5xl absolute left-0 right-0 top-8 mx-auto break-words">
        @{{ extraMainHeading }}</div>
    <div class="font-skuy-primary-sub">
        <div v-show="!extraImage1Bool" class="w-40 h-40 bg-white rounded-full flex flex-col justify-center">
            <div class="text-2xl text-dark-300 font-skuy-primary">Image 1</div>
            <span class="fa fa-image text-dark-300 text-2xl"></span>
        </div>
        <div v-show="extraImage1Bool" class="w-40 h-40 bg-white rounded-full flex flex-col justify-center">
            <img class="rounded-full templateImageComponent1 object-contain w-40 h-40">
        </div>
        <div class="text-xl w-40 h-6 mt-1 font-bold">@{{ extraImage1Head }}</div>
        <div class="text-lg w-40 h-6 mt-1">@{{ extraImage1Body }}</div>
    </div>
    <div class="font-skuy-primary-sub">
        <div v-show="!extraImage2Bool" class="w-40 h-40 bg-white rounded-full flex flex-col justify-center">
            <div class="text-2xl text-dark-300 font-skuy-primary">Image 2</div>
            <span class="fa fa-image text-dark-300 text-2xl"></span>
        </div>
        <div v-show="extraImage2Bool" class="w-40 h-40 bg-white rounded-full flex flex-col justify-center">
            <img class="rounded-full templateImageComponent2 object-contain w-40 h-40">
        </div>
        <div class="text-xl w-40 h-6 mt-1 font-bold">@{{ extraImage2Head }}</div>
        <div class="text-lg w-40 h-6 mt-1">@{{ extraImage2Body }}</div>
    </div>
    <div class="font-skuy-primary-sub">
        <div v-show="!extraImage3Bool" class="w-40 h-40 bg-white rounded-full flex flex-col justify-center">
            <div class="text-2xl text-dark-300 font-skuy-primary">Image 3</div>
            <span class="fa fa-image text-dark-300 text-2xl"></span>
        </div>
        <div v-show="extraImage3Bool" class="w-40 h-40 bg-white rounded-full flex flex-col justify-center">
            <img class="rounded-full templateImageComponent3 object-contain w-40 h-40">
        </div>
        <div class="text-xl w-40 h-6 mt-1 font-bold">@{{ extraImage3Head }}</div>
        <div class="text-lg w-40 h-6 mt-1">@{{ extraImage3Body }}</div>
    </div>
    <div class="font-skuy-primary-sub">
        <div v-show="!extraImage4Bool" class="w-40 h-40 bg-white rounded-full flex flex-col justify-center">
            <div class="text-2xl text-dark-300 font-skuy-primary">Image 4</div>
            <span class="fa fa-image text-dark-300 text-2xl"></span>
        </div>
        <div v-show="extraImage4Bool" class="w-40 h-40 bg-white rounded-full flex flex-col justify-center">
            <img class="rounded-full templateImageComponent4 object-contain w-40 h-40">
        </div>
        <div class="text-xl w-40 h-6 mt-1 font-bold">@{{ extraImage4Head }}</div>
        <div class="text-lg w-40 h-6 mt-1">@{{ extraImage4Body }}</div>
    </div>
    <div class="font-skuy-primary-sub">
        <div v-show="!extraImage5Bool" class="w-40 h-40 bg-white rounded-full flex flex-col justify-center">
            <div class="text-2xl text-dark-300 font-skuy-primary">Image 5</div>
            <span class="fa fa-image text-dark-300 text-2xl"></span>
        </div>
        <div v-show="extraImage5Bool" class="w-40 h-40 bg-white rounded-full flex flex-col justify-center">
            <img class="rounded-full templateImageComponent5 object-contain w-40 h-40">
        </div>
        <div class="text-xl w-40 h-6 mt-1 font-bold">@{{ extraImage5Head }}</div>
        <div class="text-lg w-40 h-6 mt-1">@{{ extraImage5Body }}</div>
    </div>
    <div v-show="extraBool" v-bind:style="{'background-color': extraButtonColor, color:extraTextColor}"
        class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words absolute left-4 bottom-4"
        @click="extraPreviewBool = !extraPreviewBool"><span class="fa fa-fw fa-arrow-left mr-2"></span>
        Back </div>
</div>
