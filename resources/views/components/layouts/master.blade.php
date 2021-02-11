<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Merinomood</title>

    <!-- Fonts -->
    <link href="{{ asset('fonts/fonts.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <livewire:styles />
</head>
<body x-data="{scroll: true}" @trigger-scroll="scroll = !scroll" @enable-scroll="scroll = true" :class="{'overflow-hidden': !scroll}">
<div id="app" class="overflow-hidden">
    <x-partials.header />
    {{ $slot }}
    <x-partials.footer/>
</div>
<livewire:scripts />
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
