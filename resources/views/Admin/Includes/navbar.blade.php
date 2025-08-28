<header>
    <nav class="navbar py-0">
        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <a class="navbar-brand" href="{{ url('admin/dashboard') }}">
                    <img src="{{ URL::asset('assets/images/logo/logo.png') }}" alt="logo" style="height: 40px;">
                </a>
                <div>
                    <h4 class="mb-0 fw-500">{{ Auth::guard('admin')->user()->admin->full_name }}</h4>
                </div>
            </div>

            <div class="user">
                <div class="dropdown mt-2">
                    <a href="{{ url('admin/notification') }}">
                        <i class="fa-regular fa-bell text-dark" alt="Notification Icon" id="notificationDropdown" style="cursor: pointer; height:30px"></i>
                        <sup class="notification-sup">0</sup> 
                    </a>
                </div>

                <div class="dropdown">
                    <img class="user-img rounded-circle" src="{{ !empty(Auth::guard('admin')->user()->admin->profile_image_path) && Storage::exists(Auth::guard('admin')->user()->admin->profile_image_path) ? url('/').Storage::url(Auth::guard('admin')->user()->admin->profile_image_path) : URL::asset('assets/images/logo/logo.png') }}" alt="user-image" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer; height: 40px; width: 40px;">
                    <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome {{ Auth::guard('admin')->user()->admin->full_name ?? 'User' }}!</h6>
                        </div> 
                        <div class="dropdown-divider"></div>
                        <a href="{{ url('admin/my-profile') }}" class="dropdown-item notify-item">
                            <i class="fas fa-key me-2"></i> My Profile
                        </a>
                        <a href="{{ route('admin.logout') }}" class="dropdown-item notify-item">
                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>