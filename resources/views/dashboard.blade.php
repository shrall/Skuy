@extends('layouts.app')

@section('title')
    <title>Skuy - Dashboard</title>
@endsection

@section('content')
    <div id="content">
        <div class="flex items-center mb-10">
            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="42" viewBox="0 0 38 42">
                <path id="Path_1192" data-name="Path 1192"
                    d="M4,18V32h6V18Zm12,0V32h6V18ZM0,42H38V36H0ZM28,18V32h6V18ZM19,0,0,10v4H38V10Z" fill="#186864" />
            </svg>
            <h1 class="text-4xl font-skuy-primary text-secondary-300 mt-1 ml-3">
                Dashboard
            </h1>
        </div>
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
                    <a href="{{ route('event.index') }}"
                        class="bg-gradient-to-r no-underline from-primary-500 to-primary2-500 border-0 rounded-lg p-2 px-6 text-white text-lg font-skuy-secondary">
                        See All
                    </a>
                </div>
            </div>
            <div class="mb-4 p-4 bg-white shadow-xl">
                <table id="table_id" class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Event Name</th>
                            <th>Event Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (Auth::user()->events as $event)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $event->title }}<a target="_blank" class="no-underline"
                                        href={{ config('app.url') . '/event/' . $event->slug }}> <span
                                            class="fa fa-external-link-alt mr-2"></span></a></td>
                                <td>{{ $event->date }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
