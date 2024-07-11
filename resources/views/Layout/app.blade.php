<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <title>portfolio</title>
</head>
<body class="antialiased text-gray-800 dark:text-gray-200">
<div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
    <x-navbar/>
    {{$slot}}
<x-footer/>
</div>
</body>

