@extends('layouts.auth')

@section('title')
    <title>Skuy - Masuk</title>
@endsection

@section('content')

    <div class="w-4/12 bg-white shadow-md px-12 pt-8 pb-14 font-skuy-secondary">
        <h2 class="text-secondary-300 text-2xl font-bold font-skuy-primary mb-10">Login Akun</h2>
        <form action="navbar.html" class="text-gray-500 h-5/6">
            <div class="flex flex-col justify-between h-full">
                <div class="flex-1">
                    <div class="mt-2">
                        <label for="">Email</label>
                        <span class="text-primary-500">*</span><br>
                        <input type="text" name="namaDepan" class="inputText w-full">
                    </div>

                    <div class="mt-2">
                        <label for="">Kata Sandi</label>
                        <span class="text-primary-500">*</span><br>
                        <div class="flex justify-between">
                            <input type="password" name="password" id="password" class="inputText w-full">
                            <i class='bx bxs-show cursor-pointer' id="togglePassword"></i>
                        </div>
                    </div>
                </div>

                <div class="flex-1">
                    <div class="mb-4">
                        <ul class="text-primary-500">
                            <li>*Kata sandi kurang kuat</li>
                        </ul>
                    </div>

                    <div class="mt-8">
                        <div>
                            <button type="submit"
                                class="bg-gradient-to-r from-primary-500 to-primary2-500 w-full border-0 rounded-lg p-2 text-white font-bold text-lg font-skuy-primary">
                                Login
                            </button>
                        </div>

                        {{-- <div class="mt-3 relative">
                            <form method="get" action="">
                                <button type="submit"
                                    class="text-primary-500 hover:text-primary-600 border-primary-500 hover:border-primary-600 w-full rounded-lg p-2 border-2 font-bold text-lg font-skuy-primary">
                                    <img src="img/googleIcon.svg" alt="" class="w-5 absolute left-16 top-3">
                                    Buat akun dengan google
                                </button>
                            </form>
                        </div> --}}

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
