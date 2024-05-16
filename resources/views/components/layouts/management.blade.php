<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="alternate" hreflang="en" href="https://www.partybooker.ch/en">
    <link rel="alternate" hreflang="fr" href="https://www.partybooker.ch">
    <title></title>

    @vite(['resources/js/management.js'])
</head>

@include('app.partials.layout')

</html>
