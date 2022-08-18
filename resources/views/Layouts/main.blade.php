<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ajax-loading.css') }}" rel="stylesheet">
    @yield('header.cdn')

    <style>
        .swal2-confirm{
            margin-left: 20px !important;
        }
    </style>
</head>

<body class="c-app">
<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar"
            data-class="c-sidebar-show">
        <i class="fas fa-bars"></i>
    </button>
    @include('inc.center.layouts._leftmenu')
</div>
<div class="c-wrapper c-fixed-components">

    <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        @include('inc.center.layouts._topmenu')
    </header>

    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                @yield('contents')
            </div>
        </main>
        <footer class="c-footer">
            <div><a href="https://coreui.io">CoreUI</a> &copy; 2020 creativeLabs.</div>
            <div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">CoreUI</a></div>
        </footer>
    </div>

</div>

<div class="modal-ajax-loading"></div>

</body>
<script defer src="{{ asset('js/app.js') }}"></script>
<script defer src="{{ asset('js/font.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    @if(\Illuminate\Support\Facades\Session::has('success'))
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '{{ \Illuminate\Support\Facades\Session::get('success') }}',
            showConfirmButton: false,
            timer: 1500
        });
    @endif

</script>
@yield('script')
</html>
