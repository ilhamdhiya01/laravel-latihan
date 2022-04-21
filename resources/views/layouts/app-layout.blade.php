<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/app.css">
    <title>{{ $title }}</title>
    {{-- gunakan stack agar bisa di panggil berulang2 --}}
    @stack('styles')
</head>
<body>
    <x-navbar/>
    {{-- jika hanya menggunakan slot tanpa isset maka div akan tetap di tampilkan tapi isinya kosong --}}
    @isset($header)
        <div style="background-color: #222; color:#fff;">
            {{ $header }}
        </div>
    @endisset

    {{ $slot }}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @stack('scripts')
</body>
</html>