<nav class="sidebar">
    <div class="sidebar-container">
        <div>
            Classroom
        </div>
        <ul class="nav-side flex-column">
            <li class="nav-item-side {{ request()->routeIs('pages.room.show') ? 'active-side' : '' }}">
                <a href="##" class="nav-link-side">
                    <i class="mdi mdi-store menu-icon-side"></i>
                    <span class="menu-title-side">Dashboard</span>
                </a>
            </li>
            <li class="nav-item-side ">
                <a class="nav-link-side" href="##">
                    <i class="mdi mdi-file-document-box menu-icon"></i>
                    <span class="menu-title">Chats</span>
                </a>
            </li>


            @if (auth()->user()->role == 'teacher')
            <li class="nav-item-side {{ request()->routeIs('class') ? 'active-side' : '' }}">
                <a href="{{ route('class') }}" class="nav-link-side">
                    <i class="mdi mdi-account-network menu-icon"></i>
                    <span class="menu-title-side">Room Class</span>
                </a>
            </li>
            <li class="nav-item-side {{ request()->routeIs('users') ? 'active-side' : '' }}">
                <a href="{{ route('users') }}" class="nav-link-side">
                    <i class="mdi mdi-account-multiple menu-icon-side"></i>
                    <span class="menu-title-side">Room Users</span>
                </a>
            </li>
            @endif
        </ul>
    </div>
</nav>