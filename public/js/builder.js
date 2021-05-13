var vueApp = new Vue({
  el: "#vue-app",
  data: {
    preview: false,
    previewMobile : false,
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
    registerButtonColor : "#000000FF",
    registerTextColor : "#FFFFFFFF",
    registerLink : ""
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
