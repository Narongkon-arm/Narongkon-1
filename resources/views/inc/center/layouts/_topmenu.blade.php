@if(Request::segment(1) == "admin")
    <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
        <i class="fas fa-bars"></i>
    </button>
@else
    <div class="c-header-toggler c-class-toggler d-lg-none mfe-auto mt-3 ml-3">
        <img src="{{ asset('logo.jpg') }}" alt="" style="width: 100px; height:100px">
        <span class="font-weight-bold">Snow Shop</span>
    </div>
@endif

<a class="c-header-brand d-lg-none" href="#">
    <svg width="118" height="46" alt="CoreUI Logo">
        <use xlink:href="assets/brand/coreui.svg#full"></use>
    </svg>
</a>

@if(Request::segment(1) == "admin")
    <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
        <i class="fas fa-bars"></i>
    </button>
@else
    <div class="c-header-toggler c-class-toggler mfs-3 d-md-down-none mt-3">
        <img src="{{ asset('logo.jpg') }}" alt="" style="width: 100px; height:100px">
        <span class="font-weight-bold">Snow Shop ระบบ ตรวจเช็คสถานะสินค้า</span>
    </div>
@endif

<ul class="c-header-nav d-md-down-none">
{{--    --}}{{-- <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li>--}}
{{--    <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>--}}
{{--    <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li> --}}
</ul>
<div class="c-subheader px-3">
    <ol class="breadcrumb border-0 m-0">
        @yield('breadcrumb')
    </ol>
</div>
