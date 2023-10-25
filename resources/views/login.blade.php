
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Einet - Sign in</title>
    <!-- CSS files -->
    <link href="{{ asset('assets/css/tabler.min.css') }}?{{ config('sites.asset_version') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/tabler-flags.min.css') }}?{{ config('sites.asset_version') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/tabler-payment.min.css') }}?{{ config('sites.asset_version') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/tabler-vendors.min.css') }}?{{ config('sites.asset_version') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/demo.min.css') }}?{{ config('sites.asset_version') }}" rel="stylesheet"/>
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
<body  class=" d-flex flex-column">
<script src="{{ asset('assets/js/demo.min.css') }}?{{ config('sites.asset_version') }}"></script>
<div class="page page-center">
    <div class="container container-tight py-4">
        <div class="card card-md">
            <div class="card-body">
                <h2 class="h2 text-center mb-4 card-title">Login</h2>
                <form action="/" method="get" autocomplete="off" novalidate>
                    <div class="mb-2">
                        <label class="form-label">User Name</label>
                        <input type="text" class="form-control" placeholder="" autocomplete="on">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Password
                            <span class="form-label-description">
                    <a href="forgot-password">I forget password</a>
                  </span>
                        </label>
                        <div class="input-group input-group-flat">
                            <input type="password" class="form-control"  placeholder="Your password"  autocomplete="off">
{{--                            ### ?--}}
                            <span class="input-group-text">
                    <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                    </a>
                  </span>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input"/>
                            <a href="{{ route('admin.home') }}"><span class="form-check-label">Remember me on this decvice</span></a>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Sign in</button>
                        <div class="text-center text-muted mt-3">
                            Don't have account yet? <a href="sign-up" tabindex="-1">Sign up</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Libs JS -->
<!-- Tabler Core -->
<script src="{{ asset('assets/js/tabler.min.js') }}?{{ config('sites.asset_version') }}" defer></script>
<script src="{{ asset('assets/js/demo.min.js') }}?{{ config('sites.asset_version') }}" defer></script>
</body>
</html>