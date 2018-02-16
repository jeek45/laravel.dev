<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ url('public/icon.ico') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/bootstrap-theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/app.css') }}" />
</head>
