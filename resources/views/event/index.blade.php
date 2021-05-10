@extends('layouts.app')

@section('title')
    <title>Skuy - Dashboard</title>
@endsection

@section('content')
    <div id="content">
        <div class="flex items-center mb-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="40" viewBox="0 0 36 40">
                <path id="Path_1193" data-name="Path 1193" d="M399.838,274.358h-4v4h4Zm8,0h-4v4h4Zm8,0h-4v4h4Zm4-14h-2v-4h-4v4h-16v-4h-4v4h-2a3.982,3.982,0,0,0-3.98,4l-.02,28a4,4,0,0,0,4,4h28a4.012,4.012,0,0,0,4-4v-28A4.012,4.012,0,0,0,419.838,260.358Zm0,32h-28v-22h28Z" transform="translate(-387.838 -256.358)" fill="#186864"/>
            </svg>
            <h1 class="text-4xl font-skuy-primary text-secondary-300 mt-1 ml-3">
                Events
            </h1>
        </div>
        <form action="">
            <button class=" mb-6 bg-gradient-to-r from-primary-500 to-primary2-500 border-0 rounded-lg p-2 px-6 text-white text-xl font-skuy-secondary">
                + New
            </button>
        </form>
        <div class="bg-white border-white rounded-2xl shadow-xl">
            <div class="pt-10 px-10 pb-0">
                <div class="flex justify-between mb-4">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="40" viewBox="0 0 36 40">
                            <path id="Path_1193" data-name="Path 1193"
                                d="M399.838,274.358h-4v4h4Zm8,0h-4v4h4Zm8,0h-4v4h4Zm4-14h-2v-4h-4v4h-16v-4h-4v4h-2a3.982,3.982,0,0,0-3.98,4l-.02,28a4,4,0,0,0,4,4h28a4.012,4.012,0,0,0,4-4v-28A4.012,4.012,0,0,0,419.838,260.358Zm0,32h-28v-22h28Z"
                                transform="translate(-387.838 -256.358)" fill="#186864" />
                        </svg>
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
                            <th>Custom Link</th>
                            <th>Event Date</th>
                            <th>Total Participant</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (Auth::user()->events as $event)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->custom_link }}</td>
                                <td>{{ $event->date }}</td>
                                <td>0</td>
                                <td>
                                    <div class="w-1/6 relative">
                                        <button class="dropbtn p-1 fa fa-ellipsis-h text-2xl text-dark-300"
                                            onclick="dropDownAct({{ $loop->iteration }})">
                                        </button>
                                        <div id="myDropdown{{ $loop->iteration }}" class="dropdown-content">
                                            <div>
                                                <a href="detailevent.html">
                                                    <i class='bx bxs-show cursor-pointer'></i>
                                                    View {{ $loop->iteration }} <br>
                                                </a>
                                                <a href="#about">
                                                    <i class='bx bxs-edit'></i>
                                                    Edit Event <br>
                                                </a>
                                                <a href="#contact" class="text-danger">
                                                    <i class='bx bx-trash'></i>
                                                    Delete Event
                                                </a>
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
