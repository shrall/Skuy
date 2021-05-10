@extends('layouts.auth')

@section('title')
    <title>Skuy - Verifikasi</title>
@endsection

@section('content')
    <div class="w-7/12 text-center flex flex-col items-center">
        <div class="font-skuy-primary text-dark-300 text-4xl mb-2">Terima kasih sudah mendaftar di Skuy!</div>
        <div class="w-11/12">
            <div class="font-skuy-primary text-dark-300 text-2xl">Kurang satu langkah lagi untuk menjadi bagian dari kita
                dan
                kamu
                akan langsung bisa membuat event yang kamu mau!</div>
            <div class="font-skuy-primary text-dark-300 text-2xl">Cek email yang baru saja kamu daftarkan untuk
                menyelesaikan
                proses verifikasi.</div>

                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <button type="submit" class="text-white text-center bg-gradient-to-r from-primary-200 via-primary-100 to-primary-200 py-2 px-2 rounded-lg w-40 font-medium text-xl z-10
                        animate-gradient-xy my-4">
                            {{ __('Kirim Ulang') }}
                        </button>
                    </div>
                </form>
                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-secondary-300">
                        {{ __('Link baru telah kami kirim ke email yang kamu gunakan untuk registrasi! Silahkan di cek kembali.') }}
                    </div>
                @endif


                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                        {{ __('Keluar') }}
                    </button>
                </form>
        </div>

    </div>
@endsection
