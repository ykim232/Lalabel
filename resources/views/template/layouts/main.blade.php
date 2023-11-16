<!doctype html>
<html lang="en">
<head>
    @include('template.layouts.includes.head')
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
                    @yield('page-title')
                    @show

                    <!-- Page header -->
                    @include('template.layouts.includes.header')
                </div>

                <!-- Page body -->
                <div class="page-body">
                    @yield('body')
                    @show
                </div>
            </div>
        </div>
    </div>
@yield('script')
    <script src="{{ asset('assets/js/tabler.min.js') }}?{{ config('sites.asset_version') }}" defer></script>


</body>
</html>
