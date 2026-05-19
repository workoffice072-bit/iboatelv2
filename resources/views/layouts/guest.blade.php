<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link
        href="{{ asset('website/css/googleFont.css')}}"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <link rel="stylesheet" href="{{ asset('website/css/flatpickr.min.css')}}">
        <!-- Select2 CSS -->
        <link href="{{ asset('website/css/select2.min.css')}}" rel="stylesheet" />
    
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('website/css/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{ asset('website/css/home.css')}}">
        <link rel="stylesheet" href="{{ asset('website/css/login.css')}}">
        <link rel="stylesheet" href="{{ asset('website/css/signup.css')}}">
        <link rel="stylesheet" href="{{ asset('website/css/yachtcharter.css')}}">
        <link rel="stylesheet" href="{{ asset('website/css/ownerDashboard.css')}}">
        @if(auth()->check())
        <link rel="stylesheet" href="{{ asset('website/css/ownerDashboard.css')}}">
        @endif
       
        @stack('styles')
    </head>
    <body class="font-inter bg-gradient-to-br from-[#f0f7fc] to-[#e8f2f8]">
         <!-- ==================== HEADER  ==================== -->
         <x-header />
                {{ $slot }}
          <x-footer />      
            
                
            
                <!-- Scripts -->
                 <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
                <script src="{{ asset('website/js/fr.js')}}"></script>
                <script src="{{ asset('website/js/jquery-3.6.0.min.js')}}"></script>
                 <script src="{{ asset('website/js/select2.min.js')}}"></script>
            
                <script src="{{ asset('website/js/home.js')}}"></script>
                <script src="{{ asset('website/js/login.js')}}"></script>
                <script src="{{ asset('website/js/signup.js')}}"></script>
                <script src="{{ asset('website/js/yachtcharter.js')}}"></script>
                <script src="{{ asset('website/js/jquery-ui.min.js')}}"></script>
                @if(auth()->check())
                <script src="{{ asset('website/js/ownerDashboard.js')}}"></script>
               @endif
                @stack('scripts')
    </body>
</html>
