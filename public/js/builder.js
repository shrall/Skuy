var vueApp = new Vue({
    el: "#vue-app",
    data: {
        preview: false,
        previewMobile: false,
        eventTitle: "",
        customLink: "",
        eventDesc: "",
        eventLogo: "",
        eventBanner: "",
        eventTemplate: 1,
        eventEmail: "",
        eventInstagram: "",
        eventWhatsapp: "",
        eventDate: "",
        logoBool: false,
        bannerBool: false,
        emailBool: false,
        instagramBool: false,
        whatsappBool: false,
        logoName: "",
        logoSize: "",
        bannerName: "",
        bannerSize: "",
        titleColor: "#000000FF",
        descColor: "#000000FF",
        dateColor: "#000000FF",
        contactsColor: "#000000FF",
        registerBool: false,
        registerText: "Register",
        registerButtonColor: "#000000FF",
        registerTextColor: "#FFFFFFFF",
        registerLink: "",
        customLinkBool: false,
        customLinkSuccess: false,
        customLinkError: false,
        extraBool: false,
        extraText: "Extra",
        extraButtonColor: "#000000FF",
        extraTextColor: "#FFFFFFFF",
        extraTemplate: 1,
        extraPreviewBool: false,
        extraMainHeading: "Heading",
        extraImage1: "",
        extraImage1Bool: false,
        extraImage1Name: "",
        extraImage1Size: "",
        extraImage1Head: "Head 1",
        extraImage1Body: "Body 1",
        extraImage2: "",
        extraImage2Bool: false,
        extraImage2Name: "",
        extraImage2Size: "",
        extraImage2Head: "Head 2",
        extraImage2Body: "Body 2",
        extraImage3: "",
        extraImage3Bool: false,
        extraImage3Name: "",
        extraImage3Size: "",
        extraImage3Head: "Head 3",
        extraImage3Body: "Body 3",
        extraImage4: "",
        extraImage4Bool: false,
        extraImage4Name: "",
        extraImage4Size: "",
        extraImage4Head: "Head 4",
        extraImage4Body: "Body 4",
        extraImage5: "",
        extraImage5Bool: false,
        extraImage5Name: "",
        extraImage5Size: "",
        extraImage5Head: "Head 5",
        extraImage5Body: "Body 5",
        extraComponentCount: 1,
        extraComponent1Clicked: false,
        extraComponent2Clicked: false,
        extraComponent3Clicked: false,
        extraComponent4Clicked: false,
        extraComponent5Clicked: false,
    },
    methods: {
        changeEmail: function () {
            if ($("#inputEmail").val() != "") {
                this.emailBool = true;
            } else {
                this.emailBool = false;
            }
            this.eventEmail = "mailto:" + $("#inputEmail").val();
        },
        changeInstagram: function () {
            if ($("#inputInstagram").val() != "") {
                this.instagramBool = true;
            } else {
                this.instagramBool = false;
            }
            this.eventInstagram =
                "https://instagram.com/" + $("#inputInstagram").val();
        },
        changeWhatsapp: function () {
            if ($("#inputWhatsapp").val() != "") {
                this.whatsappBool = true;
            } else {
                this.whatsappBool = false;
            }
            this.eventWhatsapp =
                "https://api.whatsapp.com/send?phone=" +
                $("#inputWhatsapp").val().replace("+", "");
        },
        deleteLogo: function () {
            this.logoBool = false;
            this.eventLogo = "";
            this.logoName = "";
            this.logoSize = "";
            $("#logoImg").attr("src", "");
            $(".templateLogo").attr("src", "");
        },
        deleteBanner: function () {
            this.bannerBool = false;
            this.eventBanner = "";
            this.bannerName = "";
            this.bannerSize = "";
            $("#bannerImg").attr("src", "");
            $(".templateBanner").attr("src", "");
        },
        plusTemplate: function () {
            if (this.eventTemplate >= 3) {
                this.eventTemplate = 1;
            } else {
                this.eventTemplate++;
            }
        },
        minusTemplate: function () {
            if (this.eventTemplate <= 1) {
                this.eventTemplate = 3;
            } else {
                this.eventTemplate--;
            }
        },
        checkCustomLink: function (url) {
            this.customLinkError = false;
            this.customLinkSuccess = false;
            this.customLinkBool = true;
            $.get(url + "/api/event/" + this.customLink.replace(" ", "-"))
                .done(
                    function () {
                        this.customLinkSuccess = false;
                        this.customLinkError = true;
                    }.bind(this)
                )
                .fail(
                    function () {
                        this.customLinkError = false;
                        this.customLinkSuccess = true;
                    }.bind(this)
                )
                .always(function () {
                    console.log("finished");
                });
        },
        plusExtraTemplate: function () {
            if (this.extraTemplate >= 2) {
                this.extraTemplate = 1;
            } else {
                this.extraTemplate++;
            }
        },
        minusExtraTemplate: function () {
            if (this.extraTemplate <= 1) {
                this.extraTemplate = 2;
            } else {
                this.extraTemplate--;
            }
        },
        deleteImage1: function () {
            this.extraImage1Bool = false;
            this.extraImage1 = "";
            this.extraImage1Name = "";
            this.extraImage1Size = "";
            $("#imageComponent1").attr("src", "");
            $(".templateImageComponent1").attr("src", "");
        },
        deleteImage2: function () {
            this.extraImage2Bool = false;
            this.extraImage2 = "";
            this.extraImage2Name = "";
            this.extraImage2Size = "";
            $("#imageComponent2").attr("src", "");
            $(".templateImageComponent2").attr("src", "");
        },
        deleteImage3: function () {
            this.extraImage3Bool = false;
            this.extraImage3 = "";
            this.extraImage3Name = "";
            this.extraImage3Size = "";
            $("#imageComponent3").attr("src", "");
            $(".templateImageComponent3").attr("src", "");
        },
        deleteImage4: function () {
            this.extraImage4Bool = false;
            this.extraImage4 = "";
            this.extraImage4Name = "";
            this.extraImage4Size = "";
            $("#imageComponent4").attr("src", "");
            $(".templateImageComponent4").attr("src", "");
        },
        deleteImage5: function () {
            this.extraImage5Bool = false;
            this.extraImage5 = "";
            this.extraImage5Name = "";
            this.extraImage5Size = "";
            $("#imageComponent5").attr("src", "");
            $(".templateImageComponent5").attr("src", "");
        },
    },
    computed: {},
});

function bytesToMegaBytes(bytes) {
    if (bytes < 1000000) {
        var _size = Math.floor(bytes / 1024) + " KB";
        return _size;
    } else {
        var _size = Math.floor(bytes / (1024 * 1024)) + " MB";
        return _size;
    }
}

moment.locale("id");

let cal = new Calendar({
    id: "#event-date",
    theme: "glass",
    weekdayType: "long-upper",
    monthDisplayType: "long",
    primaryColor: "#FEA203",
    headerColor: "#f7f5ed",
    headerBackgroundColor: "#08545f",
    fontFamilyHeader: "Nexa",
    calendarSize: "small",
    layoutModifiers: ["month-left-align"],
    dateChanged: (currentDate) => {
        const date = moment(currentDate).format("dddd, DD MMMM gggg");
        vueApp.eventDate = date;
    },
});

function preventDefaults(e) {
    e.preventDefault();
    e.stopPropagation();
}

// `logo drop
let logoDrop = document.getElementById("inputLogo");

// Prevent default drag behaviors
["dragenter", "dragover", "dragleave", "drop"].forEach((eventLogo) => {
    logoDrop.addEventListener(eventLogo, preventDefaults, false);
    document.body.addEventListener(eventLogo, preventDefaults, false);
});

// Handle dropped files
logoDrop.addEventListener("drop", handleLogoDrop, false);

function handleLogoDrop(e) {
    var dt = e.dataTransfer;
    var files = dt.files;
    handleLogoFiles(files);
}

function handleLogoFiles(files) {
    files = [...files];
    files.forEach(previewLogo);
}

function previewLogo(file) {
    let reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onloadend = function () {
        vueApp.logoBool = true;
        vueApp.eventLogo = file;
        vueApp.logoName = file.name;
        vueApp.logoSize = bytesToMegaBytes(file.size);
        $("#logoImg").attr("src", reader.result);
        $(".templateLogo").attr("src", reader.result);
    };
}

// `banner drop
let bannerDrop = document.getElementById("inputBanner");

// Prevent default drag behaviors
["dragenter", "dragover", "dragleave", "drop"].forEach((eventBanner) => {
    bannerDrop.addEventListener(eventBanner, preventDefaults, false);
    document.body.addEventListener(eventBanner, preventDefaults, false);
});

// Handle dropped files
bannerDrop.addEventListener("drop", handleBannerDrop, false);

function handleBannerDrop(e) {
    var dt = e.dataTransfer;
    var files = dt.files;
    handleBannerFiles(files);
}

function handleBannerFiles(files) {
    files = [...files];
    files.forEach(previewBanner);
}

function previewBanner(file) {
    let reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onloadend = function () {
        vueApp.bannerBool = true;
        vueApp.eventBanner = file;
        vueApp.bannerName = file.name;
        vueApp.bannerSize = bytesToMegaBytes(file.size);
        $("#bannerImg").attr("src", reader.result);
        $(".templateBanner").attr("src", reader.result);
    };
}

// `component 1 drop
let imageComponent1Drop = document.getElementById("inputImageComponent1");

// Prevent default drag behaviors
["dragenter", "dragover", "dragleave", "drop"].forEach((extraImage1) => {
    imageComponent1Drop.addEventListener(extraImage1, preventDefaults, false);
    document.body.addEventListener(extraImage1, preventDefaults, false);
});

// Handle dropped files
imageComponent1Drop.addEventListener("drop", handleImageComponent1Drop, false);

function handleImageComponent1Drop(e) {
    var dt = e.dataTransfer;
    var files = dt.files;
    handleImageComponent1Files(files);
}

function handleImageComponent1Files(files) {
    files = [...files];
    files.forEach(previewImageComponent1);
}

function previewImageComponent1(file) {
    let reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onloadend = function () {
        vueApp.extraImage1Bool = true;
        vueApp.extraImage1 = file;
        vueApp.extraImage1Name = file.name;
        vueApp.extraImage1Size = bytesToMegaBytes(file.size);
        $("#imageComponent1").attr("src", reader.result);
        $(".templateImageComponent1").attr("src", reader.result);
    };
}

// `component 2 drop
let imageComponent2Drop = document.getElementById("inputImageComponent2");

// Prevent default drag behaviors
["dragenter", "dragover", "dragleave", "drop"].forEach((extraImage2) => {
    imageComponent2Drop.addEventListener(extraImage2, preventDefaults, false);
    document.body.addEventListener(extraImage2, preventDefaults, false);
});

// Handle dropped files
imageComponent2Drop.addEventListener("drop", handleImageComponent2Drop, false);

function handleImageComponent2Drop(e) {
    var dt = e.dataTransfer;
    var files = dt.files;
    handleImageComponent2Files(files);
}

function handleImageComponent2Files(files) {
    files = [...files];
    files.forEach(previewImageComponent2);
}

function previewImageComponent2(file) {
    let reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onloadend = function () {
        vueApp.extraImage2Bool = true;
        vueApp.extraImage2 = file;
        vueApp.extraImage2Name = file.name;
        vueApp.extraImage2Size = bytesToMegaBytes(file.size);
        $("#imageComponent2").attr("src", reader.result);
        $(".templateImageComponent2").attr("src", reader.result);
    };
}

// `component 3 drop
let imageComponent3Drop = document.getElementById("inputImageComponent3");

// Prevent default drag behaviors
["dragenter", "dragover", "dragleave", "drop"].forEach((extraImage3) => {
    imageComponent3Drop.addEventListener(extraImage3, preventDefaults, false);
    document.body.addEventListener(extraImage3, preventDefaults, false);
});

// Handle dropped files
imageComponent3Drop.addEventListener("drop", handleImageComponent3Drop, false);

function handleImageComponent3Drop(e) {
    var dt = e.dataTransfer;
    var files = dt.files;
    handleImageComponent3Files(files);
}

function handleImageComponent3Files(files) {
    files = [...files];
    files.forEach(previewImageComponent3);
}

function previewImageComponent3(file) {
    let reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onloadend = function () {
        vueApp.extraImage3Bool = true;
        vueApp.extraImage3 = file;
        vueApp.extraImage3Name = file.name;
        vueApp.extraImage3Size = bytesToMegaBytes(file.size);
        $("#imageComponent3").attr("src", reader.result);
        $(".templateImageComponent3").attr("src", reader.result);
    };
}

// `component 4 drop
let imageComponent4Drop = document.getElementById("inputImageComponent4");

// Prevent default drag behaviors
["dragenter", "dragover", "dragleave", "drop"].forEach((extraImage4) => {
    imageComponent4Drop.addEventListener(extraImage4, preventDefaults, false);
    document.body.addEventListener(extraImage4, preventDefaults, false);
});

// Handle dropped files
imageComponent4Drop.addEventListener("drop", handleImageComponent4Drop, false);

function handleImageComponent4Drop(e) {
    var dt = e.dataTransfer;
    var files = dt.files;
    handleImageComponent4Files(files);
}

function handleImageComponent4Files(files) {
    files = [...files];
    files.forEach(previewImageComponent4);
}

function previewImageComponent4(file) {
    let reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onloadend = function () {
        vueApp.extraImage4Bool = true;
        vueApp.extraImage4 = file;
        vueApp.extraImage4Name = file.name;
        vueApp.extraImage4Size = bytesToMegaBytes(file.size);
        $("#imageComponent4").attr("src", reader.result);
        $(".templateImageComponent4").attr("src", reader.result);
    };
}

// `component 5 drop
let imageComponent5Drop = document.getElementById("inputImageComponent5");

// Prevent default drag behaviors
["dragenter", "dragover", "dragleave", "drop"].forEach((extraImage5) => {
    imageComponent5Drop.addEventListener(extraImage5, preventDefaults, false);
    document.body.addEventListener(extraImage5, preventDefaults, false);
});

// Handle dropped files
imageComponent5Drop.addEventListener("drop", handleImageComponent5Drop, false);

function handleImageComponent5Drop(e) {
    var dt = e.dataTransfer;
    var files = dt.files;
    handleImageComponent5Files(files);
}

function handleImageComponent5Files(files) {
    files = [...files];
    files.forEach(previewImageComponent5);
}

function previewImageComponent5(file) {
    let reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onloadend = function () {
        vueApp.extraImage5Bool = true;
        vueApp.extraImage5 = file;
        vueApp.extraImage5Name = file.name;
        vueApp.extraImage5Size = bytesToMegaBytes(file.size);
        $("#imageComponent5").attr("src", reader.result);
        $(".templateImageComponent5").attr("src", reader.result);
    };
}
