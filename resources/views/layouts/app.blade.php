<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title??'Livewire'}}</title>
    @vite('resources/css/app.css')
    <style>
        .hide {
            display: none;
        }

        .show {
            display: initial;
        }
    </style>
    @livewireStyles
</head>
<body style="background-color: antiquewhite">
<div class="container-fluid">
    <nav>
        <a href="/">Users List</a>&emsp;
        <a href="/create">New User</a>
    </nav>
    <br>
    {{$slot}}
</div>

@vite('resources/js/app.js')
@livewireScripts
</body>
</html>
