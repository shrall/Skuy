<!-- NAVBAR -->
<header id="header"
    class="w-full h-12 fixed top-0 left-0 flex items-center justify-between pt-0 pr-4 bg-gray-100 z-50 transition-width duration-500 md:h-16 md:pt-0 md:pr-8 md:pb-0 md:pl-24">
    <div class="text-secondary-300 text-2xl cursor-pointer">
        <i class='bx bx-menu' id="header-toggle"></i>
    </div>

    <div class="flex items-center">
        <div class="w-9 h-9 flex justify-center rounded-full overflow-hidden md:w-10 md:h-10">
            <img src="{{ asset('img/skuycon.png') }}" alt="" class="w-10 md:w-11">
        </div>
        <div>
            <p class="text-secondary-300">
                {{ Auth::user()->name }}
            </p>
        </div>
    </div>
</header>

<div id="nav-bar"
    class="fixed top-0 -left-1/3 w-16 h-screen bg-secondary-400 pt-2 pr-4 pb-0 pl-0 transition-width duration-500 z-50 md:left-0 md:pt-4 md:pr-4 md:pb-0 md:pl-0">
    <nav class="h-full flex flex-col justify-between overflow-hidden">
        <div>
            <a href="#" class="grid grid-cols-1 items-center gap-x-4 pt-2 pr-0 pb-2 pl-4 col mb-8">
                <img src="{{ asset('img/logowhite.svg') }}" alt="" class="w-20">
            </a>
            <div class="">
                <a href="{{ route('dashboard') }}" class="nav__link navActive">
                    <i class="bx bx-grid-alt text-xl"></i>
                    <span class="">Dashboard</span>
                </a>

                <a href="{{ route('event.index') }}" class="nav__link">
                    <i class="bx bx-calendar-event text-xl"></i>
                    <span class="">Events</span>
                </a>
            </div>
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="nav__link">
                <i class='bx bx-log-out text-xl'></i>
                <span class="">Log Out</span>
            </button>
        </form>
    </nav>
</div>
<!-- END NAVBAR -->
