
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
            <!-- note template 4 -->
            <div v-show="eventTemplate == 4"
                 class="text-center rounded-lg bg-gray-50 w-1/4 h-full shadow-2xl py-8 mx-auto flex">

                <div v-show="bannerBool" class="flex flex-col justify-center px-2 h-full overflow-hidden">
                    <img class="templateBanner w-full">
                </div>

                <div class="flex flex-col justify-center font-sans text-right px-2 py-24">
                    <div class="relative w-full h-10">
                        <div v-show="logoBool" class="rounded-lg absolute top-0 right-0 w-10 p-1">
                            <img class="templateLogo rounded-lg">
                        </div>
                    </div>
                    <div v-show='eventTitle == ""' v-bind:style="{color: titleColor}"
                         class="text-2xl font-semibold mb-2 break-words text-right">Judul
                    </div>
                    <div class="text-2xl font-semibold mb-2 break-words text-right" v-bind:style="{color: titleColor}">
                        @{{ eventTitle }}</div>
                    <span v-show='eventDesc == ""' v-bind:style="{color: descColor}"
                          class="text-sm mb-2 break-words text-right float-right">Deskripsikan event disini.</span>
                    <span class="text-sm mb-2 break-words text-right float-right" v-bind:style="{color: descColor}">@{{ eventDesc }}</span>
                    <span class="text-lg mb-2 flex justify-end clear-both" v-bind:style="{color: dateColor}">
                    <span class="fa fa-calendar-day text-2xl clear-both"></span> @{{ eventDate }}</span>
                    <div class="flex items-left space-x-8 text-4xl mb-2 flex justify-end" v-bind:style="{color: contactsColor}">
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
                    <div class="flex justify-end">
                        <div v-show="registerBool" v-bind:style="{'background-color': registerButtonColor, color:registerTextColor}"
                             class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words">
                            @{{ registerText }}</div>
                    </div>
                    <div v-show="extraBool" v-bind:style="{'background-color': extraButtonColor, color:extraTextColor}"
                         class="text-white text-center py-2 px-2 rounded-lg w-40 font-medium text-xl bg-secondary-100 cursor-pointer break-words absolute right-0 bottom-0"
                         @click="extraPreviewBool = !extraPreviewBool">
                        @{{ extraText }} <span class="fa fa-fw fa-arrow-right ml-2"></span> </div>
                </div>

            </div>
            <!-- note template 5 -->
            <div v-show="eventTemplate == 5"
                class="text-center rounded-lg bg-gray-50 w-1/4 h-full shadow-2xl py-8 mx-auto grid grid-rows-6">
                <div v-show="bannerBool"
                    class="row-span-2 flex flex-col justify-center overflow-hidden h-full">
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
                    class="rounded-lg bg-white absolute top-12 right-0 left-52 w-24 p-1 shadow-2xl mx-auto">
                    <img class="templateLogo rounded-lg">
                </div>
            </div>
