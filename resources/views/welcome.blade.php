<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body class="font-sans antialiased bg-white text-black">
        <div id="app">
            <x-app-layout>
            <x-home.hero/>
                <x-home.about/>
                <x-home.portfolio/>
            </x-app-layout>
        </div>
    </body>
</html>
