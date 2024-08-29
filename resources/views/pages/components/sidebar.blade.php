<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">AIMS</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('pages.dashboard')}}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
           
        </li>
        
        
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Manage Month</div>
            </a>
            <ul>
                <li> <a href="{{route('all.month')}}"><i class='bx bx-radio-circle'></i>All Months</a>
                </li>
                <li> <a href="{{route('add.month')}}"><i class='bx bx-radio-circle'></i>Add Month</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Manage Departments</div>
            </a>
            <ul>
                <li> <a href="{{route('all.department')}}"><i class='bx bx-radio-circle'></i>All Departments</a>
                </li>
                <li> <a href="{{route('add.department')}}"><i class='bx bx-radio-circle'></i>Add Department</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Manage Categories</div>
            </a>
            <ul>
                <li> <a href="{{route('all.category')}}"><i class='bx bx-radio-circle'></i>All Category</a>
                </li>
                <li> <a href="{{route('add.category')}}"><i class='bx bx-radio-circle'></i>Add Category</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Manage SubCategory</div>
            </a>
            <ul>
                <li> <a href="{{route('all.subcategory')}}"><i class='bx bx-radio-circle'></i>All SubCategory</a>
                </li>
                <li> <a href="{{route('add.subcategory')}}"><i class='bx bx-radio-circle'></i>Add SubCategory</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Components</div>
            </a>
            <ul>
                <li> <a href="component-alerts.html"><i class='bx bx-radio-circle'></i>Alerts</a>
                </li>
                <li> <a href="component-accordions.html"><i class='bx bx-radio-circle'></i>Accordions</a>
                </li>
                <li> <a href="component-badges.html"><i class='bx bx-radio-circle'></i>Badges</a>
                </li>
                <li> <a href="component-avtars-chips.html"><i class='bx bx-radio-circle'></i>Avatrs & Chips</a>
                </li>
            </ul>
        </li>
       
        
        <li>
            <a href="user-profile.html">
                <div class="parent-icon"><i class="bx bx-user-circle"></i>
                </div>
                <div class="menu-title">User Profile</div>
            </a>
        </li>
        <li>
            <a href="timeline.html">
                <div class="parent-icon"> <i class="bx bx-video-recording"></i>
                </div>
                <div class="menu-title">Timeline</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
