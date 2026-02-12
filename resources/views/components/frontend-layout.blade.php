<!DOCTYPE html>
<html lang="en">
@props(['title','keywords','description','image'])
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsportal | {{ $title ?? '' }}</title>
    <meta name="keywords" content="{{ $keywords ?? ''}}">
    <meta name="description" content="{{ $description ?? ''}}"> 

    <meta property="og:title" content="{{ $title ?? '' }}">
    <meta property="og:description" content="{{ $description ?? '' }}">
    <meta property="og:image" content="{{ $image ?? '' }}">
    <meta property="og:url" content="{{ url()->current() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('fontawsome/css/all.min.css')}}">
</head>
<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v24.0&appId=APP_ID"></script>
    <x-frontend-header/>
    <main>
        {{$slot}}
    </main>
    <x-frontend-footer/>
    
</body>
