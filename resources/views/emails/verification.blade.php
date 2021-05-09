@component('mail::message')
Selamat ya, tinggal satu langkah lagi kamu bisa bergabung ke Skuy!
Data registrasi kamu telah berhasil kami terima. Verifikasi email kamu dengan klik tombol di bawah ini:
@component('mail::button', ['url' => $url ?? '#'])
Verifikasi
@endcomponent

atau kamu juga dapat menyalin link berikut untuk memverifikasi email kamu,<br>
<a style="color:blue;" href="{{$url ?? 'https://shrall.github.io'}}">{{$url ?? 'https://shrall.github.io'}}</a>
<br><br>
Bila ada pertanyaan lebih lanjut, jangan sungkan untuk hubungi #TeamSkuy!
@endcomponent
