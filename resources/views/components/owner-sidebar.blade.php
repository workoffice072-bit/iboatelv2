<aside id="od-sidebar" class="od-sidebar-fixed bg-white/95 backdrop-blur-sm flex flex-col">

    {{-- USER SECTION --}}
    <div class="px-6 md:pt-8 pt-[100px] pb-6 border-b border-brand/10">
        <div class="flex flex-col items-center text-center">

            <div class="relative mb-4">
                <img src="https://randomuser.me/api/portraits/men/32.jpg"
                     class="od-avatar-img"
                     alt="User">
                <div class="absolute bottom-1 right-1 w-5 h-5 bg-emerald-500 rounded-full border-2 border-white shadow-md"></div>
            </div>

            <h2 class="font-extrabold text-xl text-navy tracking-tight">
                {{ $user->name ?? 'Owner' }}
            </h2>

            <p class="text-sm text-gray-500 font-medium mt-1">
                {{ '@' . ($user->username ?? 'owner') }}
            </p>

            <div class="mt-3 flex gap-2 flex-wrap justify-center">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-brand/10 text-brand text-[10px] font-black rounded-full uppercase">
                    <i class="fas fa-crown text-[9px]"></i> Owner
                </span>

                <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-emerald-50 text-emerald-700 text-[10px] font-bold rounded-full">
                    <i class="fas fa-circle text-[5px]"></i> Active
                </span>
            </div>

        </div>
    </div>

    {{-- NAVIGATION --}}
    <nav class="flex-1 px-3 py-6 space-y-1">

        <a href="{{ route('owner.dashboard') }}" class="od-nav-item  {{ request()->routeIs('owner.dashboard') ? 'od-active' : '' }} flex items-center gap-3 px-4 py-3">
            <i class="fas fa-compass w-5"></i>
            <span class="text-sm font-semibold">Dashboard</span>
        </a>

        <div class="od-dropdown-container {{ request()->routeIs('owner.yacht-chater') || request()->routeIs('owner.sleep-boat') ? 'od-open' : '' }}" id="od-registerBoatDropdown">
            <div class="od-nav-item {{ request()->routeIs('owner.yacht-chater') || request()->routeIs('owner.sleep-boat') ? 'od-active' : '' }}" data-nav="register-boat" id="od-registerBoatBtn">
                <div class="flex items-center gap-3 px-4 py-3 justify-between">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-plus-circle w-5 text-base"></i>
                        <span class="text-sm font-medium">Register Boat</span>
                    </div>
                    <i class="fas fa-chevron-down text-xs transition-transform duration-200"
                        id="od-dropdownChevron"></i>
                </div>
            </div>
            <div class="od-dropdown-menu">
                <a href="{{route('owner.yacht-chater')}}"
                    class="flex items-center {{ request()->routeIs('owner.yacht-chater') ? 'bg-blue-50 border-l-4 border-blue-500' : '' }} gap-3 px-5 py-3 hover:bg-brand/5 transition">
                    <i class="fas fa-ship text-brand text-sm w-5"></i>

                    <div>
                        <p class="font-semibold text-navy text-sm">Yacht Charter</p>
                        <p class="text-[10px] text-gray-400">
                            Luxury rental per hour/day
                        </p>
                    </div>
                </a>

                <a href="{{route('owner.sleep-boat')}}" class="flex items-center {{ request()->routeIs('owner.sleep-boat') ? 'bg-blue-50 border-l-4 border-blue-500' : '' }} gap-3 px-5 py-3 hover:bg-brand/5 transition">
                    <i class="fas fa-bed text-brand text-sm w-5"></i>

                    <div>
                        <p class="font-semibold text-navy text-sm">
                            Boatel Sleep & Boat
                        </p>

                        <p class="text-[10px] text-gray-400">
                            Overnight stay + cruising
                        </p>
                    </div>
                </a>
            </div>
        </div>

        <a href="{{route('owner.boats')}}" class="od-nav-item {{ request()->routeIs('owner.boats') ? 'od-active' : '' }} flex items-center gap-3 px-4 py-3">
            <i class="fas fa-ship w-5"></i>
            <span class="text-sm font-medium">Boats</span>
        </a>

        <a href="{{route('owner.edit-profile')}}" class="od-nav-item {{ request()->routeIs('owner.edit-profile') ? 'od-active' : '' }} flex items-center gap-3 px-4 py-3">
            <i class="fas fa-user-edit w-5"></i>
            <span class="text-sm font-medium">Edit Profile</span>
        </a>

        <a href="{{route('owner.view-bank-details')}}"  class="od-nav-item {{ request()->routeIs('owner.view-bank-details') ? 'od-active' : '' }} flex items-center gap-3 px-4 py-3">
            <i class="fas fa-university w-5"></i>
            <span class="text-sm font-medium">Bank Details</span>
        </a>

        <a href="{{route('owner.changepassword')}}" class="od-nav-item {{ request()->routeIs('owner.changepassword') ? 'od-active' : '' }} flex items-center gap-3 px-4 py-3">
            <i class="fas fa-key w-5"></i>
            <span class="text-sm font-medium">Change Password </span>
        </a>

    </nav>

    {{-- LOGOUT --}}
    <div class="p-4 border-t border-brand/10 mt-auto">

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="flex items-center gap-3 px-4 py-3 w-full text-left text-gray-500">
                <i class="fas fa-sign-out-alt w-5"></i>
                <span class="text-sm font-semibold">Log out</span>
            </button>
        </form>

        <div class="mt-5 text-center">
            <p class="text-[10px] text-gray-400 tracking-wider">
                iBoatel v2.4 © 2026 — Sail beyond
            </p>
        </div>

    </div>

</aside>