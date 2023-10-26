<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('title')</title>
    <!-- CSS files -->
    <link href="{{ asset('assets/css/tabler.min.css') }}?{{ config('sites.asset_version') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/tabler-flags.min.css') }}?{{ config('sites.asset_version') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/tabler-payments.min.css') }}?{{ config('sites.asset_version') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/tabler-vendors.min.css') }}?{{ config('sites.asset_version') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/demo.min.css') }}?{{ config('sites.asset_version') }}" rel="stylesheet">
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>
<body>
<script src="{{ asset('assets/js/demo-theme.min.js') }}?{{ config('sites.asset_version') }}"></script>
<div class="page">
    <!-- Side Navbar -->
    @include('template.layouts.includes.navbar')

    <div class="page-wrapper">

        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    @section('page-title')
                    @show

                    <!-- Page header -->
{{--                    @include('template.layouts.includes.header')--}}
                </div>

                <!-- Page body -->
                <div class="page-body">
                    @section('body')
                    @show
                </div>
            </div>
</body>

<!-- Libs JS -->
<!--    <script src="./dist/libs/apexcharts/dist/apexcharts.min.js?1684106062" defer></script>-->
<!--    <script src="./dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062" defer></script>-->
<!--    <script src="./dist/libs/jsvectormap/dist/maps/world.js?1684106062" defer></script>-->
<!--    <script src="./dist/libs/jsvectormap/dist/maps/world-merc.js?1684106062" defer></script>-->

<!-- Tabler Core -->
<script src="{{ asset('assets/js/tabler.min.js') }}?{{ config('sites.asset_version') }}" defer></script>
<script src="{{ asset('assets/js/demo.min.js') }}?{{ config('sites.asset_version') }}" defer></script>
<script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/libs/tinymce/tinymce.min.js" defer></script>

{{--For tinymce.init()--}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let options = {
            selector: '#tinymce-default',
            height: 300,
            menubar: false,
            statusbar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat',
            content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; -webkit-font-smoothing: antialiased; }'
        }
        if (localStorage.getItem("tablerTheme") === 'dark') {
            options.skin = 'oxide-dark';
            options.content_css = 'dark';
        }
        tinyMCE.init(options);
    })
</script>


</html>
