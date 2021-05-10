<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skuy - Website Untuk Eventmu!</title>
    <meta name="description" content="#MakeYourEventsStandOut">
    <meta name="author"
        content="Marshall Ovierdo Kurniawan | Tinara Nathania Wiryonoputro | Alfredo Junio Kristianto | Natashya Geiska Putri">
    <meta name="keywords" content="skuy,event,web,tiket,developer,webinar,bazaar,competition,lomba,fullpage,jquery">
    <meta property="og:title" content="Skuy - #SkuyBuatEventmu">
    <meta property="og:type" content="website">
    <meta property="og:description"
        content="Skuy adalah perusahaan yang menyediakan platform dan jasa pembuatan website untuk acara virtual.">
    <meta property="og:image" content="https://eventskuy.web.app/{{ asset('img/skuycon.png') }}">
    <meta property="og:url" content="https://eventskuy.web.app/">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/skuycon.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fullpage/fullpage.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
</head>

<body>
    <header class="sticky top-0 z-50 bg-white py-5 font-skuy-primary font-bold text-secondary-300 shadow-xl">
        <ul id="menu" class="space-x-12 text-right mr-4 md:mr-8 hidden md:block">
            <img src="{{ asset('img/skuylogo.png') }}" class="w-20 ml-4 float-left">
            <div class="block space-x-12">
                <li data-menuanchor="homePage" class="navItem active"><a href="#homePage">Home</a></li>
                <li data-menuanchor="aboutPage" class="navItem"><a href="#aboutPage">About</a></li>
                <li data-menuanchor="whyPage" class="navItem"><a href="#whyPage">Why Us?</a></li>
                <li data-menuanchor="productPage" class="navItem"><a href="#productPage">Product</a></li>
                <li data-menuanchor="teamPage" class="navItem"><a href="#teamPage">Our Team</a></li>
                <li data-menuanchor="reviewPage" class="navItem"><a href="#reviewPage">Reviews</a></li>
                <li data-menuanchor="contactPage" class="navItem"><a href="#contactPage">Contact Us</a></li>
                <li class="navItem text-white bg-gradient-to-r from-secondary-400 to-secondary-200 py-1 px-8 rounded-lg"><a href="{{route('login')}}">Login</a></li>
            </div>
        </ul>
        <ul id="menu" class="text-right mr-0 md:mr-8 flex flex-col space-y-12 md:hidden">
            <div class="flex flex-row">
                <svg id="navBurger" class="block h-8 w-8 absolute right-4 md:hidden" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg id="navCross" class="hidden h-8 w-8 absolute right-4 md:hidden" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <img src="{{ asset('img/skuylogo.png') }}" class="w-20 ml-4 float-left">
            </div>
            <div class="hidden flex-col text-4xl space-y-12 items-center" id="navList">
                <li data-menuanchor="homePage" class="navItem navMobile active"><a href="#homePage">Home</a></li>
                <li data-menuanchor="aboutPage" class="navItem navMobile"><a href="#aboutPage">About</a></li>
                <li data-menuanchor="whyPage" class="navItem navMobile"><a href="#whyPage">Why Us?</a></li>
                <li data-menuanchor="productPage" class="navItem navMobile"><a href="#productPage">Product</a></li>
                <li data-menuanchor="teamPage" class="navItem navMobile"><a href="#teamPage">Our Team</a></li>
                <li data-menuanchor="reviewPage" class="navItem navMobile"><a href="#reviewPage">Reviews</a></li>
                <li data-menuanchor="contactPage" class="navItem navMobile"><a href="#contactPage">Contact Us</a></li>
            </div>
        </ul>
    </header>
    <main class="relative">
        <div id="fullpage">
            <div class="section pl-4" id="section0" data-auto="true">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div
                        class="flex flex-col my-auto items-left ml-4 md:ml-12 z-0 justify-center content-center py-12 md:py-0">
                        <span class="text-5xl md:text-6xl font-skuy-primary font-bold text-secondary-300 text-left mb-12 md:mb-4">
                            Buat website acara kamu dengan Skuy!
                        </span>
                        <span
                            class="text-2xl md:text-3xl font-black font-skuy-primary-sub text-secondary-300 text-left  mb-12 md:mb-4">
                            Bikin event hebatmu jadi lebih menarik.
                        </span>
                        <a href="{{route('register')}}"
                            class="text-white text-center bg-gradient-to-r from-primary-200 via-primary-100 to-primary-200 py-2 px-2 mb-24 rounded-lg w-72 font-medium text-2xl md:text-3xl cursor-pointer z-10 animate-gradient-xy font-skuy-primary">
                            Gabung Sekarang
                        </a>
                        <img src="{{ asset('img/ferriswheelbg.png') }}"
                            class="w-screen left-0 bottom-12 absolute hidden md:block">
                        <img src="{{ asset('img/bgphone.png') }}"
                            class="w-screen right-0 top-0 absolute block md:hidden">
                        <img src="{{ asset('img/builderphone.png') }}"
                            class="w-10/12 mx-auto right-0 left-0 bottom-32 absolute block md:hidden">
                    </div>
                    <div class="hidden md:block">
                        <div class="slide" id="slide1" data-anchor="slide1">
                            <div class="z-10 hidden md:block overflow-hidden">
                                <img src="{{ asset('img/slide1.png') }}" class="h-screen ml-auto pb-12">
                            </div>
                        </div>
                        <div class="slide" id="slide2" data-anchor="slide2">
                            <div class="z-10 hidden md:block overflow-hidden">
                                <img src="{{ asset('img/slide2.png') }}" class="h-screen pb-12">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="section1">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div
                        class="flex flex-col my-auto items-left z-0 text-secondary-300 font-skuy-primary ml-0 px-12 mb-24 md:ml-12 md:px-24">
                        <span class="text-5xl font-bold">Apa itu Skuy?</span>
                        <span class="texl-xl md:text-2xl font-sans text-secondary-300 text-left mb-12">
                            Skuy adalah perusahaan yang menyediakan
                            platform dan jasa pembuatan website untuk acara virtual.
                        </span>
                        <span class="texl-xl md:text-2xl font-sans text-secondary-300 text-left mb-4">
                            Bersama kami, dapatkan kemudahan dalam proses pendaftaran acara webinar, perlombaan, bazaar,
                            dll, hingga sistem teknis yang dapat disesuaikan dengan tipe event saat acara sedang
                            berlangsung.
                        </span>
                        <span class="text-2xl md:text-3xl font-bold">#MakeYourEventsStandOut</span>
                        <span class="text-2xl md:text-3xl font-bold">#SkuyBuatEventmu</span>
                    </div>
                    <div class="z-10 mx-auto mb-12 hidden md:block">
                        <div class="bg-white rounded">
                            <img src="{{ asset('img/seminar.png') }}" class="w-5/6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="section2">
                <h1
                    class="text-5xl md:text-6xl text-white font-bold font-skuy-primary absolute top-8 left-0 right-0 text-center">
                    Kenapa Skuy?</h1>
                <div class="slide" id="slide1" data-anchor="slide1">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="z-10 mx-auto mb-12 hidden md:block">
                            <div class="bg-white rounded-3xl">
                                <img src="{{ asset('img/interactiveicon.png') }}" class="w-5/12 mx-auto">
                            </div>
                        </div>
                        <div
                            class="flex flex-col md:my-auto items-left px-20 md:px-24 z-0 text-white font-skuy-primary">
                            <div class="bg-white rounded-3xl block mb-4 md:hidden">
                                <img src="{{ asset('img/interactiveicon.png') }}" class="w-5/6 mx-auto">
                            </div>
                            <span class="text-4xl font-bold">Interactive</span>
                            <span class="texl-xl md:text-2xl font-sans font-light text-white text-left mb-12">
                                Di saat acara berlangsung, di website bisa terdapat widget yang dapat digunakan
                                oleh host untuk berinteraksi dengan para pengunjung untuk meningkatkan engagement dengan
                                peserta event.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slide" id="slide2" data-anchor="slide2">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="z-10 mx-auto mb-12 hidden md:block">
                            <div class="bg-white rounded-3xl">
                                <img src="{{ asset('img/cuistomizableicon.png') }}" class="w-5/12 mx-auto">
                            </div>
                        </div>
                        <div
                            class="flex flex-col md:my-auto items-left px-20 md:px-24 z-0 text-white font-skuy-primary">
                            <div class="bg-white rounded-3xl block mb-4 md:hidden">
                                <img src="{{ asset('img/cuistomizableicon.png') }}" class="w-5/6 mx-auto">
                            </div>
                            <span class="text-4xl font-bold">Customizeable</span>
                            <span class="texl-xl md:text-2xl font-sans font-light text-white text-left mb-12">
                                Tampilan dan design website bersifat dinamis sehingga dapat menyesuaikan dengan tema
                                acara.<br>
                                Konten dan informasi yang ada di website juga tentunya bisa mengikuti dengan kemauan
                                para EO.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slide" id="slide3" data-anchor="slide3">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="z-10 mx-auto mb-12 hidden md:block">
                            <div class="bg-white rounded-3xl">
                                <img src="{{ asset('img/simpleicon.png') }}" class="w-5/12 mx-auto">
                            </div>
                        </div>
                        <div
                            class="flex flex-col md:my-auto items-left px-20 md:px-24 z-0 text-white font-skuy-primary">
                            <div class="bg-white rounded-3xl block mb-4 md:hidden">
                                <img src="{{ asset('img/simpleicon.png') }}" class="w-5/6 mx-auto">
                            </div>
                            <span class="text-4xl font-bold">Easy to use</span>
                            <span class="texl-xl md:text-2xl font-sans font-light text-white text-left mb-12">
                                Tampilan situs juga responsif untuk digunakan diberbagai macam device untuk memastikan
                                kemudahan dalam penggunaan fitur-fitur dan pengaksesan informasi baik dari EO ataupun
                                dari pengunjung dan peserta.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="section3">
                <div class="flex flex-col">
                    <h1
                        class="text-6xl text-secondary-300 font-bold font-skuy-primary absolute top-8 left-0 right-0 text-center z-10">
                        Skuy Web Builder</h1>
                    <img src="{{ asset('img/webbuilderbg1.png') }}"
                        class="left-0 bottom-0 top-0 absolute z-0 w-0 md:w-1/4">
                    <img src="{{ asset('img/webbuilderbg2.png') }}"
                        class="right-0 bottom-0 top-0 absolute z-0 w-0 md:w-1/4">
                    <img src="{{ asset('img/webbuilder.png') }}" class="mx-auto w-screen md:w-5/12 my-12 z-10">
                    <button
                        class="mx-auto text-white text-center bg-gradient-to-r from-primary-200 via-primary-100 to-primary-200 py-2 px-8 mb-24 rounded-lg w-80 font-medium text-3xl cursor-pointer z-10 animate-gradient-xy font-skuy-primary">
                        <a href="builder.html">Coba Sekarang</a>
                    </button>
                </div>
            </div>
            <div class="section" id="section4">
                <h1
                    class="text-5xl md:text-6xl text-white font-bold font-skuy-primary absolute top-8 left-12 text-center">
                    #TeamSkuy</h1>
                <div class="slide" id="slide41" data-anchor="slide41">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="z-10 mx-auto mb-12 hidden md:block">
                            <div class="bg-white w-5/12 mx-auto p-6 rounded-lg">
                                <img src="{{ asset('img/marshall.png') }}" class="w-full">
                            </div>
                        </div>
                        <div
                            class="flex flex-col md:my-auto items-left px-20 md:px-24 z-0 text-white font-skuy-primary">
                            <div class="bg-white rounded-lg block mb-4 md:hidden p-4">
                                <img src="{{ asset('img/marshall.png') }}" class="w-full">
                            </div>
                            <span class="text-3xl md:text-5xl font-bold mb-2 md:mb-0">Marshall Ovierdo Kurniawan</span>
                            <span class="hidden md:block text-white text-center bg-gradient-to-r from-primary-200 via-primary-100 to-primary-200 py-2 px-2 rounded-lg w-40 font-medium text-xl z-10
                            animate-gradient-xy my-4">Co-Founder</span>
                            <div class="flex items-left space-x-8 text-5xl mb-12 md:mb-0">
                                <a target="_blank" href="https://www.linkedin.com/in/marshall-kurniawan-232280185/">
                                    <span
                                        class="fab fa-linkedin hover:text-gray-300 transition ease-in-out duration-500"></span>
                                </a>
                                <a target="_blank" href="https://www.instagram.com/shrallok/">
                                    <span
                                        class="fab fa-instagram hover:text-gray-300 transition ease-in-out duration-500"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide" id="slide42" data-anchor="slide42">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="z-10 mx-auto mb-12 hidden md:block">
                            <div class="bg-white w-5/12 mx-auto p-6 rounded-lg">
                                <img src="{{ asset('img/tinara.png') }}" class="w-full">
                            </div>
                        </div>
                        <div
                            class="flex flex-col md:my-auto items-left px-20 md:px-24 z-0 text-white font-skuy-primary">
                            <div class="bg-white rounded-lg block mb-4 md:hidden p-4">
                                <img src="{{ asset('img/tinara.png') }}" class="w-full">
                            </div>
                            <span class="text-3xl md:text-5xl font-bold mb-2 md:mb-0">Tinara Nathania
                                Wiryonoputro</span>
                            <span class="hidden md:block text-white text-center bg-gradient-to-r from-primary-200 via-primary-100 to-primary-200 py-2 px-2 rounded-lg w-40 font-medium text-xl z-10
                            animate-gradient-xy my-4">Co-Founder</span>
                            <div class="flex items-left space-x-8 text-5xl mb-12 md:mb-0">
                                <a target="_blank" href="https://www.linkedin.com/in/tinara-wiryonoputro-59773b193/">
                                    <span
                                        class="fab fa-linkedin hover:text-gray-300 transition ease-in-out duration-500"></span>
                                </a>
                                <a target="_blank" href="https://www.instagram.com/tinaranathania/">
                                    <span
                                        class="fab fa-instagram hover:text-gray-300 transition ease-in-out duration-500"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide" id="slide43" data-anchor="slide43">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="z-10 mx-auto mb-12 hidden md:block">
                            <div class="bg-white w-5/12 mx-auto p-6 rounded-lg">
                                <img src="{{ asset('img/alfredo.png') }}" class="w-full">
                            </div>
                        </div>
                        <div
                            class="flex flex-col md:my-auto items-left px-20 md:px-24 z-0 text-white font-skuy-primary">
                            <div class="bg-white rounded-lg block mb-4 md:hidden p-4">
                                <img src="{{ asset('img/alfredo.png') }}" class="w-full">
                            </div>
                            <span class="text-3xl md:text-5xl font-bold mb-2 md:mb-0">Alfredo Junio Kristianto</span>
                            <span class="hidden md:block text-white text-center bg-gradient-to-r from-primary-200 via-primary-100 to-primary-200 py-2 px-2 rounded-lg w-40 font-medium text-xl z-10
                            animate-gradient-xy my-4">Co-Founder</span>
                            <div class="flex items-left space-x-8 text-5xl mb-12 md:mb-0">
                                <a target="_blank"
                                    href="https://www.linkedin.com/in/alfredo-junio-kristianto-7042941b0/">
                                    <span
                                        class="fab fa-linkedin hover:text-gray-300 transition ease-in-out duration-500"></span>
                                </a>
                                <a target="_blank" href="https://www.instagram.com/ezralfredo/">
                                    <span
                                        class="fab fa-instagram hover:text-gray-300 transition ease-in-out duration-500"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide" id="slide44" data-anchor="slide44">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="z-10 mx-auto mb-12 hidden md:block">
                            <div class="bg-white w-5/12 mx-auto p-6 rounded-lg">
                                <img src="{{ asset('img/natashya.png') }}" class="w-full">
                            </div>
                        </div>
                        <div
                            class="flex flex-col md:my-auto items-left px-20 md:px-24 z-0 text-white font-skuy-primary">
                            <div class="bg-white rounded-lg block mb-4 md:hidden p-4">
                                <img src="{{ asset('img/natashya.png') }}" class="w-full">
                            </div>
                            <span class="text-3xl md:text-5xl font-bold mb-2 md:mb-0">Natashya Geiska Putri</span>
                            <span class="hidden md:block text-white text-center bg-gradient-to-r from-primary-200 via-primary-100 to-primary-200 py-2 px-2 rounded-lg w-40 font-medium text-xl z-10
                            animate-gradient-xy my-4">Co-Founder</span>
                            <div class="flex items-left space-x-8 text-5xl mb-12 md:mb-0">
                                <a target="_blank" href="https://www.linkedin.com/in/natashya-geiska-putri-34581a193/">
                                    <span
                                        class="fab fa-linkedin hover:text-gray-300 transition ease-in-out duration-500"></span>
                                </a>
                                <a target="_blank" href="https://www.instagram.com/nat_natashyaa/">
                                    <span
                                        class="fab fa-instagram hover:text-gray-300 transition ease-in-out duration-500"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="section5">
                <h1
                    class="text-4xl md:text-6xl text-secondary-300 font-bold font-skuy-primary absolute top-8 left-0 right-0 text-center">
                    Beberapa ulasan..</h1>
                <div class="flex flex-row space-x-0 md:space-x-40 items-center justify-center">
                    <div
                        class="flex flex-col w-96 h-vh-60 p-4 rounded-xl md:shadow-2xl font-skuy-primary-sub font-black justify-between">
                        <div class="text-4xl px-2">“</div>
                        <div class="text-xl text-center px-4 mb-8">Terima kasih karena telah menjadi bagian penting dan
                            ikut serta untuk mensukseskan acara Eternity 5.0 ini.<br>GOOD JOB 👍.</div>
                        <hr>
                        <div class="rounded-full block mt-2">
                            <img src="{{ asset('img/eternity.png') }}" class="w-1/3 mx-auto rounded-full">
                        </div>
                        <span class="text-xl text-center px-2">Eternity 5.0</span>
                    </div>
                    <div
                        class="hidden md:flex flex-col w-96 h-vh-60 p-4 rounded-xl md:shadow-2xl font-skuy-primary-sub font-black justify-between">
                        <div class="text-4xl px-2">“</div>
                        <div class="text-xl text-center px-4 mb-8">Acara NPLC yang ke-8 di tahun ini dapat berjalan
                            dengan baik walaupun sedang pandemi berkat adanya tim ini.<br><br></div>
                        <hr>
                        <div class="rounded-full block mt-2">
                            <img src="{{ asset('img/nplc.png') }}" class="w-1/3 mx-auto rounded-full">
                        </div>
                        <span class="text-xl text-center px-2">8th NPLC</span>
                    </div>
                </div>
            </div>
            <div class="section" id="section6">
                <img src="{{ asset('img/contactusillus.png') }}"
                    class="right-0 bottom-0 absolute z-0 w-3/4 md:w-2/4 mb-12">
                <div class="text-left text-white ml-12 mr-12 md:mr-0 md:ml-24 pb-36">
                    <h1 class="text-6xl font-skuy-primary font-bold mb-12">Kita siap untuk membantu.</h1>
                    <h2 class="text-2xl font-sans font-light mb-12">Mau tahu lebih lanjut?<br>Kontak kami skuy!</h2>
                    <div class="flex items-left space-x-8 text-5xl ">
                        <a target="_blank" href="mailto:eventskuy@gmail.com">
                            <span class="fa fa-envelope hover:text-gray-300 transition ease-in-out duration-500"></span>
                        </a>
                        <a target="_blank" href="https://www.instagram.com/event.skuy/">
                            <span
                                class="fab fa-instagram hover:text-gray-300 transition ease-in-out duration-500"></span>
                        </a>
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=6281233129966">
                            <span
                                class="fab fa-whatsapp hover:text-gray-300 transition ease-in-out duration-500"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script type="text/javascript" src="{{ asset('fullpage/fullpage.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var g_interval;
        var myFullpage = new fullpage('#fullpage', {
            sectionsColor: ['#fff', '#fff', '#11847D', '#fff', '#11847D', '#fff', '#11847D'],
            anchors: ['homePage', 'aboutPage', 'whyPage', 'productPage', 'teamPage', 'reviewPage',
                'contactPage'
            ],
            showActiveTooltip: false,
            menu: '#menu',
            slidesNavigation: true,
            controlArrows: true,
            afterLoad: function(origin, destination, direction) {
                clearInterval(g_interval);
                const shouldAutoPlay = destination.item.hasAttribute('data-auto');

                const hasSlides = destination.item.querySelectorAll('.fp-slides').length;

                if (shouldAutoPlay && hasSlides) {
                    g_interval = setInterval(function() {
                        fullpage_api.moveSlideRight();
                    }, 5000);
                }
            }
        });

    </script>
    <script type="text/javascript">
        function openNav() {
            $('#navBurger').removeClass('block');
            $('#navBurger').addClass('hidden');
            $('#navCross').removeClass('hidden');
            $('#navCross').addClass('block');
            $('#navList').removeClass('hidden');
            $('#navList').addClass('flex');
        };

        function closeNav() {
            $('#navBurger').removeClass('hidden');
            $('#navBurger').addClass('block');
            $('#navCross').removeClass('block');
            $('#navCross').addClass('hidden');
            $('#navList').removeClass('flex');
            $('#navList').addClass('hidden');
        };
        $('#navBurger').click(function() {
            openNav();
        });
        $('#navCross').click(function() {
            closeNav();
        });
        $('.navMobile').click(function() {
            closeNav();
        })

    </script>
</body>

</html>
