@extends('layouts.app')

@section('title')
    <title>Skuy - Dashboard</title>
@endsection

@section('content')
    <div id="content">
        <div class="flex items-center mb-10">
            <i class='bx bxs-dashboard text-5xl text-secondary-300'></i>
            <h1 class="text-4xl font-skuy-primary text-secondary-300 mt-1 ml-3">
                Dashboard
            </h1>
        </div>
        <div class="bg-white border-white rounded-2xl shadow-xl">
            <div class="pt-10 px-10 pb-0">
                <div class="flex justify-between mb-4">
                    <div class="flex items-center">
                        <i class='bx bx-calendar text-5xl text-secondary-300' ></i>
                        <h1 class="text-3xl font-skuy-primary text-secondary-300 mt-1 ml-3">
                            All Events
                        </h1>
                    </div>
                    <a href="{{ route('event.index') }}"
                        class="bg-gradient-to-r no-underline from-primary-500 to-primary2-500 border-0 rounded-lg p-2 px-10 text-white text-lg font-skuy-primary">
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
