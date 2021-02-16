<div class="dropdown">
    <div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
        <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2">
            <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
            <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{Auth::user()->name }}</span>
            <span class=""><i class="flaticon-grid-menu-v2"></i></span>
        </div>
    </div>
    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
        <ul class="navi navi-hover">
            <li class="navi-header font-weight-bold">
                Quick Menu
            </li>
            <li class="navi-separator mb-3"></li>
            <li class="navi-item">
                <a href="{{route('logout')}}" class="navi-link"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <span class="navi-icon"><i class="flaticon-logout"></i></span>
                    <span class="navi-text">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>