<ul class="nav-list">
    <li class="dashboard">
        <a href="{{ url('/admin/dashboard') }}">
            <div class="link">
                <i class="fa-brands fa-windows "></i>
                <h5 class="d-active">Dashboard</h5>
            </div>
        </a>
    </li>

    <li class="cms">
        <a href="#cms" data-bs-toggle="collapse">
            <div class="link">
                <i class="fa-solid fa-sliders"></i>
                <h5 class="d-active">CMS</h5>
            </div>
        </a>
        <div class="collapse" id="cms">
            <ul class="collapse-nav-list">
                <li class="cms-legal">
                    <a href="{{ url('/admin/cms/legal-page') }}">
                        <div class="link">
                            <h5>Legal Pages</h5>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </li> 

    <li class="master">
        <a href="#master" data-bs-toggle="collapse">
            <div class="link">
                <i class="fa-solid fa-layer-group"></i>
                <h5 class="d-active">Master</h5>
            </div>
        </a>
        <span class="menu-arrow"></span>
        <div class="collapse" id="master">
            <ul class="collapse-nav-list">
                <li class="intro-screen">
                    <a href="{{url('admin/master/intro-screen')}}">
                        <div class="link">
                            <h5>Intro Screens</h5>
                        </div>
                    </a>
                </li>
                <li class="app-config">
                    <a href="{{url('admin/master/app-config')}}">
                        <div class="link">
                            <h5>App Configuration</h5>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <li class="setting">
        <a href="#setting" data-bs-toggle="collapse">
            <div class="link">
                <i class="fa-solid fa-sliders"></i>
                <h5 class="d-active">Settings</h5>
            </div>
        </a>
        <div class="collapse" id="setting">
            <ul class="collapse-nav-list">
                <li class="general-setting">
                    <a href="{{ url('/admin/general-setting') }}">
                        <div class="link">
                            <h5>General Settings</h5>
                        </div>
                    </a>
                </li>
                <li class="visual-setting">
                    <a href="{{ url('/admin/visual-setting') }}">
                        <div class="link">
                            <h5>Visual Settings</h5>
                        </div>
                    </a>
                </li>
                <li class="change-password">
                    <a href="{{ url('/admin/change-password') }}">
                        <div class="link">
                            <h5>Change Password</h5>
                        </div>
                    </a>
                </li>
                
            </ul>
        </div>
    </li>
    <li class="system-user">
        <a href="#system-user" data-bs-toggle="collapse">
            <div class="link">
                <i class="fa-solid fa-sliders"></i>
                <h5 class="d-active">System User</h5>
            </div>
        </a>
        <div class="collapse" id="system-user">
            <ul class="collapse-nav-list">
                <li class="role-privilege">
                    <a href="{{ url('/admin/roles-privileges') }}">
                        <div class="link">
                            <h5>Roles & Privileges</h5>
                        </div>
                    </a>
                </li>
                <li class="user-list">
                    <a href="{{ url('/admin/system-user') }}">
                        <div class="link">
                            <h5>User List</h5>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </li>
    <li class="logout">
        <a href="{{ url('admin/logout') }}">
            <div class="link">
                <h5>Logout</h5>
            </div>
        </a>
    </li>
</ul>