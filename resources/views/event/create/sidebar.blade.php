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
            <div class="rounded-3xl w-full bg-light-100 my-4 flex flex-col content-center text-center py-8">
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
                    <input name="logo" type="file" id="logoElem" accept="image/*" onchange="handleLogoFiles(this.files)"
                        class="hidden">
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
                placeholder="Your Event Description, max 250 characters." rows="5" maxlength="250" required></textarea>
            <div class="skuyHeader text-2xl mb-2">Contact</div>
            <div class="flex flex-row items-center mb-2">
                <span class="fa fa-fw fa-envelope text-dark-300 text-3xl mr-2"></span>
                <input name="email" id="inputEmail" @keyup="changeEmail" type="email" class="inputArea"
                    placeholder="example@skuy.com">
            </div>
            <div class="flex flex-row items-center mb-2">
                <span class="fab fa-fw fa-instagram text-dark-300 text-3xl mr-2"></span>
                <input name="instagram" id="inputInstagram" @keyup="changeInstagram" type="text" class="inputArea"
                    placeholder="Instagram Username">
            </div>
            <div class="flex flex-row items-center mb-4">
                <span class="fab fa-fw fa-whatsapp text-dark-300 text-3xl mr-2"></span>
                <input name="whatsapp" id="inputWhatsapp" @keyup="changeWhatsapp" type="text" class="inputArea"
                    placeholder="WhatsApp (e.g +62 812 3312 9966)">
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
                <input name="register_text_color" v-model="registerTextColor" data-jscolor="{}" class="inputArea mb-2">
            </div>
            <div class="flex justify-between items-center mb-2">
                <h2 class="skuyHeader text-3xl">Extra Page</h2>
                <div class="w-14 h-8 flex items-center bg-gray-300 rounded-full p-1 duration-300 ease-in-out cursor-pointer"
                    :class="{ 'bg-secondary-300': extraBool}" @click="extraBool = !extraBool">
                    <div class="bg-white w-6 h-6 rounded-full shadow-md transform duration-300 ease-in-out"
                        :class="{ 'translate-x-6': extraBool,}"></div>
                </div>
            </div>
            <input type="hidden" name="extra" v-model="extraBool">
            <div v-show="extraBool">
                <div class="rounded-3xl w-full bg-light-100 my-4 flex flex-col content-center text-center py-8">
                    <!-- note template 1  -->
                    <div v-if="extraTemplate == 1" class="w-40 h-28 bg-light-300 mx-auto p-4 relative">
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
                    <div v-if="extraTemplate == 2" class="w-40 h-28 bg-primary-50 mx-auto p-4 relative">
                        <div class="w-6 h-6 bg-dark-100 rounded absolute right-6 top-4 z-10"></div>
                        <div class="flex flex-col space-y-1 mt-2 justify-center content-center h-full">
                            <div class="w-5/12 h-1 bg-primary-200"></div>
                            <div class="w-5/12 h-1 bg-primary-200"></div>
                            <div class="w-5/12 h-1 bg-primary-200"></div>
                            <div class="w-5/12 h-1 bg-primary-200"></div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row text-dark-200 justify-evenly mb-4">
                    <span @click="minusExtraTemplate()"
                        class="fa fa-chevron-circle-left text-2xl cursor-pointer hover:text-dark-300"></span>
                    <span class="font-skuy-primary-sub text-xl font-bold">Template
                        @{{ extraTemplate }}</span>
                    <span @click="plusExtraTemplate()"
                        class="fa fa-chevron-circle-right text-2xl cursor-pointer hover:text-dark-300"></span>
                </div>
                <div class="skuyHeader text-2xl mb-2">Button Text</div>
                <input name="extra_text" v-model="extraText" type="text" class="inputArea mb-4"
                    placeholder="Max 20 Characters." maxlength="20">
                <div class="skuyHeader text-2xl mb-2">Button Color</div>
                <input name="extra_button_color" v-model="extraButtonColor" data-jscolor="{}"
                    class="inputArea mb-2">
                <div class="skuyHeader text-2xl mb-2">Text Color</div>
                <input name="extra_text_color" v-model="extraTextColor" data-jscolor="{}" class="inputArea mb-2">
            </div>
            <div class="skuyHeader text-3xl my-4">Settings</div>
            <div class="skuyHeader text-2xl mb-2">Title Color</div>
            <input name="title_color" v-model="titleColor" data-jscolor="{}" class="inputArea mb-2">
            <div class="skuyHeader text-2xl mb-2">Description Color</div>
            <input name="desc_color" v-model="descColor" data-jscolor="{}" class="inputArea mb-2">
            <div class="skuyHeader text-2xl mb-2">Date Color</div>
            <input name="date_color" v-model="dateColor" data-jscolor="{}" class="inputArea mb-2">
            <div class="skuyHeader text-2xl mb-2">Contacts Color</div>
            <input name="contacts_color" v-model="contactsColor" data-jscolor="{}" class="inputArea mb-2">
            <div class="skuyHeader text-2xl mb-2">Custom Link</div>
            <input v-on:keyup="checkCustomLink('{{ config('app.url') }}')" name="custom_link" v-model="customLink"
                type="text" class="inputArea mb-2" placeholder="Max 50 Characters." maxlength="50">
            <div v-show="customLinkSuccess" class="text-xl font-skuy-primary text-success"><span
                    class="fa fa-fw fa-check"></span> Custom link is available!</div>
            <div v-show="customLinkError" class="text-xl font-skuy-primary text-danger"><span
                    class="fa fa-fw fa-times"></span> Custom link is not available.</div>
            <div v-show="!customLinkSuccess && !customLinkError && customLinkBool" class="text-xl font-skuy-primary">
                <span class="fa fa-fw fa-spinner animate-spin"></span> Checking Availability..</div>
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
