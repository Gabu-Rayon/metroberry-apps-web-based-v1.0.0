     <div class="main-menu hidden-soft">
         <div class="mini-profile-info">
             <div class="menu-close">
                 <span class="float-right">
                     <img src="{{ asset('mobile-app-assets/icons/close.svg') }}" alt="Close Icon">
                 </span>
             </div>
             <div class="profile-picture text-center">
                 @if (Auth::user()->avatar)
                     <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Profile Picture"
                         class="rounded-profile-picture" />
                 @else
                     <img src="{{ asset('mobile-app-assets/images/anonymous.jpeg') }}" alt="Profile Picture"
                         class="rounded-profile-picture" />
                 @endif
             </div>
             <div class="profile-info">
                 <div class="profile-name text-center">{{ Auth::user()->name }}</div>
                 <div class="profile-email text-center">{{ Auth::user()->email }}</div>
             </div>
         </div>
         <div class="menu-items">
             <div class="all-menu-items">
                 <a class="menu-item" href="{{ route('customer.index.page') }}">
                     <div>
                         <span class="menu-item-icon menu-dark">
                             <img src="{{ asset('mobile-app-assets/icons/home.svg') }} " alt="Home Icon">
                         </span>
                         <span class="menu-item-icon menu-light">
                             <img src="{{ asset('mobile-app-assets/icons/home-light.svg') }}" alt="Home Lighter Icon">
                         </span>
                         <span class="menu-item-title">Home</span>
                         <span class="menu-item-click fas fa-arrow-right"></span>
                     </div>
                 </a>
                 <a class="menu-item" href="{{ route('customer.profile') }}">
                     <span class="menu-item-icon menu-dark profile">
                         <img src="{{ asset('mobile-app-assets/icons/avatar-dark.svg') }} " alt="Avatar Darker Icon">
                     </span>
                     <span class="menu-item-icon menu-light profile">
                         <img src="{{ asset('mobile-app-assets/icons/avatar.svg') }} " alt="Avatar Darker Icon">
                     </span>
                     <span class="menu-item-title profile">Profile</span>
                     <span class="menu-item-click fas fa-arrow-right"></span>
                 </a>
                 <a class="menu-item" href="customer.payment.method.page">
                     <span class="menu-item-icon far fa-money-bill-alt"></span>
                     <span class="menu-item-title">Payment Methods</span>
                     <span class="menu-item-click fas fa-arrow-right"></span>
                 </a>
                 <a class="menu-item" href="{{ route('customer.trip.history') }}">
                     <span class="menu-item-icon menu-light">
                         <img src="{{ asset('mobile-app-assets/icons/history-light.svg') }} " alt="History Icon">
                     </span>
                     <span class="menu-item-icon menu-dark">
                         <img src="{{ asset('mobile-app-assets/icons/history.svg') }} " alt="History Icon">
                     </span>
                     <span class="menu-item-title">History</span>
                     <span class="menu-item-click fas fa-arrow-right"></span>
                 </a>
                 <a class="menu-item" href="{{ route('customer.addresses.page') }}">
                     <span class="menu-item-icon menu-dark">
                         <img src="{{ asset('mobile-app-assets/icons/my-addresses-dark.svg') }} "
                             alt="My Addresses Icon">
                     </span>
                     <span class="menu-item-icon menu-light">
                         <img src="{{ asset('mobile-app-assets/icons/my-addresses.svg') }} " alt="My Addresses Icon">
                     </span>
                     <span class="menu-item-title">My Addresses</span>
                     <span class="menu-item-click fas fa-arrow-right"></span>
                 </a>
                 <a class="menu-item" href="{{ route('customer.apply.promo.code.page') }}">
                     <span class="menu-item-icon far fa-plus-square"></span>
                     <span class="menu-item-title promo">Apply Promo Code</span>
                     <span class="menu-item-click fas fa-arrow-right"></span>
                 </a>
                 <a class="menu-item" href="{{ route('customer.settings.page') }}">
                     <span class="menu-item-icon menu-dark setting">
                         <img src="{{ asset('mobile-app-assets/icons/settings.svg') }} " alt="My Settings Icon">
                     </span>
                     <span class="menu-item-icon menu-light setting">
                         <img src="{{ asset('mobile-app-assets/icons/settings-light.svg') }} " alt="My Settings Icon">
                     </span>
                     <span class="menu-item-title">Settings</span>
                     <span class="menu-item-click fas fa-arrow-right"></span>
                 </a>
                 <a class="menu-item" href="{{ route('customer.online.support.page') }}">
                     <span class="menu-item-icon menu-dark support">
                         <img src="{{ asset('mobile-app-assets/icons/support.svg') }}" alt="Support Icon">
                     </span>
                     <span class="menu-item-icon menu-light support">
                         <img src="{{ asset('mobile-app-assets/icons/support-light.svg') }} "
                             alt="Support Lighter Icon">
                     </span>
                     <span class="menu-item-title">Online Support</span>
                     <span class="menu-item-click fas fa-arrow-right"></span>
                 </a>

                 <form method="POST" action="{{ route('logout') }}" class="menu-item margin-top-auto">
                     @csrf
                     <span class="menu-item-icon menu-dark logout">
                         <img src="{{ asset('mobile-app-assets/icons/logout.svg') }} " alt="Logout Icon">
                     </span>
                     <span class="menu-item-icon menu-light logout">
                         <img src="{{ asset('mobile-app-assets/icons/logout-light.svg') }} " alt="Logout Icon">
                     </span>

                     <button><span type="submit" class="menu-item-title logout">Log out</span></button>
                     <span class="menu-item-click fas fa-arrow-right"></span>
                 </form>
             </div>
         </div>
     </div>
