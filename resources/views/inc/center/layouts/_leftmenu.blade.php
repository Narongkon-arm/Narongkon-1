<div class="c-sidebar-brand d-lg-down-none">
    <b>Building Construction System</b>

    <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
        <use xlink:href="assets/brand/coreui.svg#signet"></use>
    </svg>
</div>
<ul class="c-sidebar-nav">
    <li class="c-sidebar-nav-title"><strong>Login : </strong> {{ Auth::user()->name }}</li>

    @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link {{ Request::segment(2) == "works" ? "c-active" : "" }}"
                href="{{ route('admin.works.index')}}">
                <i class="fa fa-home" aria-hidden="true"></i>
                <span class="ml-4">จัดการ <strong>งานทั้งหมด</strong> </span>
            </a>
        </li>
    @endif

    <li class="c-sidebar-nav-item"><a
            class="c-sidebar-nav-link {{ Request::segment(2) == "employee_worksends" ? "c-active" : "" }}"
            href="{{ route('admin.employee_worksends.index')}}">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span class="ml-4"><strong>ส่งงาน</strong> </span>
        </a>
    </li>

    @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
        <li class="c-sidebar-nav-item"><a
                class="c-sidebar-nav-link {{ Request::segment(2) == "worksends" ? "c-active" : "" }}"
                href="{{ route('admin.worksends.index')}}">
                <i class="fa fa-briefcase" aria-hidden="true"></i>
                <span class="ml-4">รายการ <strong>การส่งงานทั้งหมด</strong> </span>
            </a>
        </li>

    @endif

    @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link {{ Request::segment(2) == "roles" ? "c-active" : "" }}"
                href="{{ route('admin.roles.index')}}">
                <i class="fab fa-product-hunt"></i>
                <span class="ml-4"> <strong>จัดการสิทธิ์การเข้าถึง</strong> </span>
            </a>
        </li>

    @endif

    @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link {{ Request::segment(2) == "users" ? "c-active" : "" }}"
                href="{{ route('admin.users.index')}}">
                <i class="fa fa-users" aria-hidden="true"></i>
                <span class="ml-4"><strong>จัดการผู้ใช้งาน</strong> </span>
            </a>
        </li>
    @endif
    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('auth.logout') }}">
            <i class="fas fa-sign-out-alt"></i>
            <span class="ml-4">ออกจากระบบ </span>
        </a>
    </li>

</ul>
