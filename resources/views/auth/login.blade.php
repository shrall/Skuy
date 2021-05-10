@extends('layouts.auth')

@section('title')
    <title>Skuy - Masuk</title>
@endsection

@section('content')

    <div class="w-4/12 bg-white shadow-md px-12 pt-8 pb-14 font-skuy-secondary">
        <h2 class="text-secondary-300 text-2xl font-bold font-skuy-primary mb-10">Login Akun</h2>
        <form method="POST" action="{{ route('login') }}" class="text-gray-500 h-5/6">
            @csrf
            <div class="flex flex-col justify-between h-full">
                <div class="flex-1 mb-2">
                    <div class="mt-2">
                        <label for="">Email</label>
                        <span class="text-primary-500">*</span><br>
                        <input id="email" type="email" name="email" :value="old('email')" required autofocus
                            class="inputText w-full">
                    </div>
                    <div class="mt-2">
                        <label for="">Kata Sandi</label>
                        <span class="text-primary-500">*</span><br>
                        <div class="flex justify-between items-center">
                            <input id="password" class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="current-password">
                            {{-- <i class='bx bxs-show cursor-pointer ml-2' id="togglePassword"></i> --}}
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    @if ($errors->any())
                        <div class="mb-4">
                            <ul class="text-primary-500">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="mt-8">
                        <div>
                            <button type="submit"
                                class="bg-gradient-to-r from-primary-500 to-primary2-500 w-full border-0 rounded-lg p-2 text-white font-bold text-lg font-skuy-primary">
                                Login
                            </button>
                        </div>
                        <div class="flex justify-center mt-8">
                            <div class="">
                                <p class="float-left text-secondary-300">Belum memiliki akun? &nbsp;</p>
                                <a href="{{ route('register') }}" class="text-primary-500 hover:text-primary-600">Daftar
                                    di
                                    sini</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
