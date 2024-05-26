<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>公佈欄</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <main class="m-4">
        @if(session()->has('notice'))
            <div class="bg-pink-300 px-3 py-2 rounded">
                {{ session()->get('notice') }}
            </div>
        @endif
        @yield('main')
    </main>
</body>
</html>
