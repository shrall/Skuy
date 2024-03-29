@extends('layouts.app')

@section('title')
    <title>Skuy - Dashboard</title>
@endsection

@section('content')
    <div id="content">
        <div class="flex items-center mb-5">
            <i class='bx bx-calendar-event text-5xl text-secondary-300' ></i>
            <h1 class="text-4xl font-skuy-primary text-secondary-300 mt-1 ml-3">
                Events
            </h1>
        </div>
        <a href="{{ route('event.create') }}"
            class="no-underline mb-6 bg-gradient-to-r from-primary-500 to-primary2-500 border-0 rounded-lg p-2 px-6 text-white text-xl font-skuy-primary">
            <div class="span fa fa-plus mr-2"></div>New
        </a>
        <div class="bg-white border-white rounded-2xl shadow-xl">
            <div class="pt-10 px-10 pb-0">
                <div class="flex justify-between mb-4">
                    <div class="flex items-center text-4xl text-secondary-300">
                        <i class='bx bx-calendar text-5xl text-secondary-300' ></i>
                        <h1 class="text-3xl font-skuy-primary text-secondary-300 mt-1 ml-3">
                            All Events
                        </h1>
                    </div>
                </div>
            </div>
            <div class="mb-4 p-4 bg-white shadow-xl">
                <table id="table_id" class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Event Name</th>
                            <th>Event Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (Auth::user()->events as $event)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $event->title }}<a target="_blank" class="no-underline" href={{ config('app.url') . "/event/" . $event->slug}}> <span class="fa fa-external-link-alt mr-2"></span></a></td>
                                <td>{{ $event->date }}</td>
                                <td>
                                    <div class="w-1/6 relative">
                                        <button class="dropbtn p-1 fa fa-ellipsis-h text-2xl text-dark-300"
                                            onclick="dropDownAct({{ $loop->iteration }})">
                                        </button>
                                        <div id="myDropdown{{ $loop->iteration }}" class="dropdown-content">
                                            <div>
                                                {{-- <form action="{{ route('event.detail', $event->slug) }}" method="get">
                                                    <button type="submit" class="no-underline text-dark-300">
                                                        <i class='bx bxs-show cursor-pointer'></i>
                                                        View Details <br>
                                                    </button>
                                                </form> --}}
                                                {{-- <a href="#about" class="no-underline text-dark-300">
                                                    <i class='bx bxs-edit'></i>
                                                    Edit Event <br>
                                                </a> --}}
                                                <form action="{{ route('event.destroy', $event->slug) }}" method="POST">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button type="submit" class="text-danger no-underline">
                                                        <i class='bx bx-trash'></i>
                                                        Delete Event
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        //DROPDOWN MENU
        function dropDownAct(int) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('dropBlock')) {
                    openDropdown.classList.remove('dropBlock');
                }
            }
            document.getElementById("myDropdown" + int).classList.toggle("dropBlock");
        }

        // Close the dropdown if the user clicks outside of it
        window.addEventListener("click", function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('dropBlock')) {
                        openDropdown.classList.remove('dropBlock');
                    }
                }
            }
        });

    </script>
@endsection
