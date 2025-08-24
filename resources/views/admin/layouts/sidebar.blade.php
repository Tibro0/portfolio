<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('admin/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Rukada</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon"> <i class="bx bx-video-recording"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Hero Section</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.animation-text.index') }}"><i class="bx bx-right-arrow-alt"></i>Animation Text</a>
                </li>
                <li> <a href="{{ route('admin.tag.index') }}"><i class="bx bx-right-arrow-alt"></i>Tag</a>
                </li>
                <li> <a href="{{ route('admin.social-icon.index') }}"><i class="bx bx-right-arrow-alt"></i>Social Icon</a>
                </li>
                <li> <a href="{{ route('admin.counter.index') }}"><i class="bx bx-right-arrow-alt"></i>Counter</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="{{ route('admin.about.index') }}">
                <div class="parent-icon"> <i class="bx bx-video-recording"></i>
                </div>
                <div class="menu-title">About Section</div>
            </a>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Skill Section</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.frontend-skill.index') }}"><i class="bx bx-right-arrow-alt"></i>Frontend</a>
                </li>
                <li> <a href="{{ route('admin.backend-skill.index') }}"><i class="bx bx-right-arrow-alt"></i>Backend</a>
                </li>
                <li> <a href="{{ route('admin.design-skill.index') }}"><i class="bx bx-right-arrow-alt"></i>Design</a>
                </li>
            </ul>
        </li>

        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul>
                <li> <a href="index-2.html"><i class="bx bx-right-arrow-alt"></i>Default</a>
                </li>
                <li> <a href="dashboard-eCommerce.html"><i class="bx bx-right-arrow-alt"></i>eCommerce</a>
                </li>
                <li> <a href="dashboard-analytics.html"><i class="bx bx-right-arrow-alt"></i>Analytics</a>
                </li>
                <li> <a href="dashboard-digital-marketing.html"><i class="bx bx-right-arrow-alt"></i>Digital
                        Marketing</a>
                </li>
                <li> <a href="dashboard-human-resources.html"><i class="bx bx-right-arrow-alt"></i>Human
                        Resources</a>
                </li>
            </ul>
        </li> --}}
        {{-- <li>
            <a href="timeline.html">
                <div class="parent-icon"> <i class="bx bx-video-recording"></i>
                </div>
                <div class="menu-title">Timeline</div>
            </a>
        </li> --}}
    </ul>
    <!--end navigation-->
</div>
