@props(['activePage'])
<style>
    .sidenav {
        background-color: white;
        border-top: 1px solid #245734;
        border-left: 1px solid #245734;
        border-bottom: 1px solid #245734;
    }

    .active-page {
        background-color: #245734 !important;
    }

    .nav-link:not(.active-page) {
        color: #245734 !important;

    }

    .nav-link:not(.active-page) .material-icons {
        color: #245734 !important;
        margin-left: 0 !important;

    }
</style>


<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl  fixed-start   bg-white" id="sidenav-main">
    <div class="sidenav-header">
    <a href="{{ route('dashboard') }}" class="nav-link" id="dashboard">
        <div class="profile-img" style="width: 80px; height: 80px; display: flex; justify-content: center; margin: 0 auto;">
            <img src="{{ asset('assets/img/logos/logo.png') }}" alt="profile-img" />
        </div>
</a>
</li>

    </div>
    <hr class="horizontal light mt-4 mb-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'dashboard' ? 'active-page' : '' }}" href="{{ route('dashboard') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'UserManagement' ? 'active-page' : '' }}" href="{{ route('UserManagement') }}">
                    <div class="text-center me-2 d-flex align-items-center justify-content-center {{ $activePage != 'UserManagement' ? 'inactive' : '' }}">
                        <i style="font-size: 1rem; " class="fas fa-users text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">Daftar User</span>
                </a>
            </li>


            <!-- <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'user-profile' ? 'active-page' : '' }}" href="{{ route('user-profile') }}">
                    <div class="text-center me-2 d-flex align-items-center justify-content-center {{ $activePage != 'user-profile' ? 'inactive' : '' }}">
                        <i style="font-size: 1.2rem;" class="fas fa-user-circle text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">User Profile</span>
                </a>
            </li> -->

            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'tables' ? 'active-page' : '' }}" href="{{ route('tables') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">home</i> <!-- Mengganti ikon ke "home" -->
                    </div>
                    <span class="nav-link-text ms-1">Home</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'billing' ? ' active-page' : '' }}" href="{{ route('billing') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">monetization_on</i> <!-- Mengganti ikon ke "monetization_on" -->
                    </div>
                    <span class="nav-link-text ms-1">Daftar Harga</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'pesanan' ? ' active-page' : '' }}" href="{{ route('pesanan') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">list_alt</i> <!-- Mengganti ikon ke "list_alt" -->
                    </div>
                    <span class="nav-link-text ms-1">Pesanan</span> <!-- Mengganti teks menjadi "Note List" -->
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'user-profile' ? ' active-page' : '' }}  " href="{{ route('user-profile') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
        </ul>
    </div>
    <hr class="horizontal light mt-5">
    <div class="mt-5" id="sidenav-collapse-main">
        <ul class="navbar-nav mt-5">
            <li class="nav-item mt-5">
                <a class="nav-link text-white mb-0 mt-5"  href="{{ route('static-sign-in') }}">
                    <div class="text-white text-center me-2 d-flex align-items-botto, justify-content-center">
                        <i class="material-icons opacity-10">login</i>
                    </div>
                    <span class="nav-link-text ms-1">Log Out</span>
                </a>
            </li>
        </ul>
    </div>
</aside>