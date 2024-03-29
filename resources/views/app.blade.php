<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @routes
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
    <script src="{{ asset(mix('js/manifest.js')) }}" defer></script>
    <script src="{{ asset(mix('js/vendor.js')) }}" defer></script>
    <script src="{{ asset(mix('js/app.js')) }}" defer></script> 
    <link rel="stylesheet" href="{{ asset('css/auth.css')}}">
    <link rel="stylesheet" href="{{ asset('css/global.css')}}">
    <link rel="stylesheet" href="{{ asset('css/project.css')}}"> 
    <link rel="stylesheet" href="{{ asset('/css/profile.css')}}">


    <!-- <script src="{{ asset('css/data.js') }}"></script> -->
    <!-- <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script> -->
    @inertiaHead
</head>

<body>
    @inertia
</body>

</html>
