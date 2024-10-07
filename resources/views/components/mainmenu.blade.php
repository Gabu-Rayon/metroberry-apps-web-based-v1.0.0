<div class="main-menu hidden-soft">
    <div class="mini-profile-info">
        <div class="menu-close">
            <span class="float-right">
                <i class="fa-solid fa-xmark"></i>
            </span>
        </div>
        <div class="profile-picture text-center">
            @if (Auth::user()->avatar)
                <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Profile Picture" />
            @else
                <img src="{{ asset('mobile-app-assets/images/anonymous.jpeg') }}" alt="Profile Picture" width="100"
                    height="100" style="border-radius: 50%" />
            @endif
        </div>
        <div class="profile-info">
            <div class="profile-name text-center">{{ Auth::user()->name }}</div>
            <div class="profile-email text-center">{{ Auth::user()->email }}</div>
        </div>
    </div>
    <div class="menu-items">
        <div class="all-menu-items">
            <a class="menu-item" href="{{ route('driver.dashboard') }}">
                <div>
                    <span class="menu-item-icon menu-dark">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </span>
                    <span class="menu-item-title">Home</span>
                </div>
            </a>
            <a class="menu-item" href="{{ route('driver.profile') }}">
                <span class="menu-item-icon menu-dark profile">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </span>
                <span class="menu-item-title profile">Profile</span>
            </a>
            <a class="menu-item" href="{{ route('driver.documents') }}">
                <span class="menu-item-icon menu-dark profile">
                    <i class="fa-solid fa-file"></i>
                </span>
                <span class="menu-item-title profile">Documents</span>
            </a>
            <a class="menu-item" href="{{ route('driver.vehicle') }}">
                <span class="menu-item-icon menu-dark profile">
                    <i class="fa-solid fa-car"></i>
                </span>
                <span class="menu-item-title profile">Vehicle</span>
            </a>
            <a class="menu-item" href="{{ route('driver.trips') }}">
                <span class="menu-item-icon menu-dark profile">
                    <i class="fa-solid fa-plane-departure"></i>
                </span>
                <span class="menu-item-title profile">Trips</span>
            </a>
        </div>
    </div>
</div>
