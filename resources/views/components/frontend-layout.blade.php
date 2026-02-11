<!DOCTYPE html>
<html lang="en">
@props(['title'])
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('fontawsome/css/all.min.css')}}">
</head>
<body>
    <x-frontend-header/>
    <main>
        {{$slot}}
    </main>
    <x-frontend-footer/>
    
</body>
