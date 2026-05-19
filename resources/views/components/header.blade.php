<header class="sticky top-0 z-50 bg-white shadow-md border-b border-gray-100">
    <div class="max-w-[1440px] mx-auto px-5 py-3.5 md:px-8 lg:px-10">
        <div class="flex items-center justify-between gap-4">
            <a href="{{ route('home') }}" class="flex items-center gap-2.5 group shrink-0"><img
                    src="https://iboatel.com/assets/img/1672138852.png" alt="iBoatel Logo" class="navbar-logo"></a>

            <nav class="hidden lg:flex items-center gap-5 xl:gap-7">
                <a href="{{ route('home') }}"
                    class="nav-link font-semibold py-1 {{ request()->routeIs('home') ? 'text-brand' : 'text-gray-700 hover:text-brand' }}">
                    Home
                </a>
                <div class="dropdown-group">

                    <button
                        class="flex items-center gap-1.5 font-semibold py-1 cursor-pointer bg-transparent border-none 
        {{ request()->routeIs('yacht.charter') || request()->routeIs('boatel') ? 'text-brand' : 'text-gray-700 hover:text-brand' }}">

                        Book Now
                        <i class="fas fa-chevron-down text-[10px] ml-0.5"></i>
                    </button>

                    <div class="dropdown-menu">
                        <div class="py-2">

                            <a href="{{ route('yacht.charter') }}"
                                class="flex items-center gap-3 px-4 py-2.5 text-sm 
               {{ request()->routeIs('yacht.charter') ? 'bg-brand/10 text-brand' : 'text-gray-700 hover:bg-brand/10 hover:text-brand' }}">

                                <i class="fas fa-ship w-5 text-brand"></i>
                                <span>Yacht charter</span>
                            </a>

                            <a href="{{ route('boatel') }}"
                                class="flex items-center gap-3 px-4 py-2.5 text-sm 
               {{ request()->routeIs('boatel') ? 'bg-brand/10 text-brand' : 'text-gray-700 hover:bg-brand/10 hover:text-brand' }}">

                                <i class="fas fa-bed w-5 text-brand"></i>
                                <span>Boatel (sleep on boat)</span>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="dropdown-group">

                    <button
                        class="flex items-center gap-1.5 font-semibold py-1 cursor-pointer bg-transparent border-none
                        {{ request()->routeIs('boat.types') ? 'text-brand' : 'text-gray-700 hover:text-brand' }}">
                        Boat types
                        <i class="fas fa-chevron-down text-[10px] ml-0.5"></i>
                    </button>

                    <div class="dropdown-menu">
                        <div class="py-2">

                            <a href="{{ route('boat.types', ['type' => 'catamarans']) }}"
                                class="flex items-center gap-3 px-4 py-2.5 text-sm
                               {{ request()->routeIs('boat.types') && request()->type == 'catamarans'
                                   ? 'bg-brand/10 text-brand'
                                   : 'text-gray-700 hover:bg-brand/10 hover:text-brand' }}">
                                <i class="fas fa-sailboat w-5 text-brand"></i>
                                <span>Catamarans</span>
                            </a>

                            <a href="{{ route('boat.types', ['type' => 'houseboats']) }}"
                                class="flex items-center gap-3 px-4 py-2.5 text-sm
                               {{ request()->routeIs('boat.types') && request()->type == 'houseboats'
                                   ? 'bg-brand/10 text-brand'
                                   : 'text-gray-700 hover:bg-brand/10 hover:text-brand' }}">
                                <i class="fas fa-home w-5 text-brand"></i>
                                <span>Houseboats</span>
                            </a>

                            <a href="{{ route('boat.types', ['type' => 'motorboats']) }}"
                                class="flex items-center gap-3 px-4 py-2.5 text-sm
                               {{ request()->routeIs('boat.types') && request()->type == 'motorboats'
                                   ? 'bg-brand/10 text-brand'
                                   : 'text-gray-700 hover:bg-brand/10 hover:text-brand' }}">
                                <i class="fas fa-tachometer-alt w-5 text-brand"></i>
                                <span>Motorboats</span>
                            </a>

                            <a href="{{ route('boat.types', ['type' => 'sailboats']) }}"
                                class="flex items-center gap-3 px-4 py-2.5 text-sm
                               {{ request()->routeIs('boat.types') && request()->type == 'sailboats'
                                   ? 'bg-brand/10 text-brand'
                                   : 'text-gray-700 hover:bg-brand/10 hover:text-brand' }}">
                                <i class="fas fa-wind w-5 text-brand"></i>
                                <span>Sailboats</span>
                            </a>

                        </div>
                    </div>
                </div>
                <a href="{{ route('list.your.boat') }}"
                    class="nav-link font-semibold py-1 {{ request()->routeIs('list.your.boat') ? 'text-brand' : 'text-gray-700 hover:text-brand' }}">
                    List your boat
                </a>
                <a href="{{ route('contact') }}"
                    class="nav-link font-semibold py-1 relative {{ request()->routeIs('contact') ? 'text-brand' : 'text-gray-700 hover:text-brand' }}">
                    Contact
                </a>
                <a href="{{ route('help') }}"
                    class="nav-link font-semibold py-1 relative {{ request()->routeIs('help') ? 'text-brand' : 'text-gray-700 hover:text-brand' }}">
                    Help
                </a>
            </nav>
            <div class="hidden lg:flex items-center gap-2">
                <div class="dropdown-group"><button
                        class="flex items-center gap-1.5 px-3 py-2 rounded-xl text-gray-700 hover:text-brand hover:bg-gray-50"><i
                            class="fas fa-globe text-sm"></i><span class="font-semibold text-sm">EN</span><i
                            class="fas fa-chevron-down text-[10px]"></i></button>
                    <div class="dropdown-menu dropdown-menu-right min-w-[160px]">
                        <div class="py-1"><a href="#" data-lang="en" data-lang-label="English"
                                class="flex items-center gap-2 px-4 py-2.5 text-sm text-gray-700 hover:bg-brand/10"><span>🇬🇧</span>
                                English</a><a href="#" data-lang="fr" data-lang-label="Français"
                                class="flex items-center gap-2 px-4 py-2.5 text-sm text-gray-700 hover:bg-brand/10"><span>🇫🇷</span>
                                Français</a>
                        </div>
                    </div>
                </div>
                <div class="dropdown-group"><button
                        class="flex items-center gap-1.5 px-3 py-2 rounded-xl text-gray-700 hover:text-brand hover:bg-gray-50"><i
                            class="fas fa-coins text-sm"></i><span class="font-semibold text-sm">EUR</span><i
                            class="fas fa-chevron-down text-[10px]"></i></button>
                    <div class="dropdown-menu dropdown-menu-right min-w-[180px]">
                        <div class="py-1"><a href="#" data-currency="eur" data-currency-label="Euro (EUR)"
                                class="flex items-center justify-between px-4 py-2.5 text-sm text-gray-700 hover:bg-brand/10"><span>💶
                                    Euro (EUR)</span><span class="text-xs text-gray-400">€</span></a><a href="#"
                                data-currency="gbp" data-currency-label="Pound (GBP)"
                                class="flex items-center justify-between px-4 py-2.5 text-sm text-gray-700 hover:bg-brand/10"><span>💷
                                    Pound (GBP)</span><span class="text-xs text-gray-400">£</span></a><a href="#"
                                data-currency="usd" data-currency-label="Dollar (USD)"
                                class="flex items-center justify-between px-4 py-2.5 text-sm text-gray-700 hover:bg-brand/10"><span>💵
                                    Dollar (USD)</span><span class="text-xs text-gray-400">$</span></a><a href="#"
                                data-currency="inr" data-currency-label="Rupee (INR)"
                                class="flex items-center justify-between px-4 py-2.5 text-sm text-gray-700 hover:bg-brand/10"><span>🇮🇳
                                    Rupee (INR)</span><span class="text-xs text-gray-400">₹</span></a></div>
                    </div>
                </div>
                <div class="h-6 w-px bg-gray-200 mx-1"></div>

                @auth

                    @if (auth()->user()->user_type === 'owner')
                        <a href="{{ route('owner.dashboard') }}"
                            class="px-5 py-2 rounded-xl bg-gradient-to-r from-brand to-brand-dark text-white font-semibold shadow-md hover:shadow-lg hover:scale-105">
                            Dashboard
                        </a>
                    @elseif(auth()->user()->user_type === 'partner')
                        <a href="{{ route('partner.dashboard') }}"
                            class="px-5 py-2 rounded-xl bg-gradient-to-r from-brand to-brand-dark text-white font-semibold shadow-md hover:shadow-lg hover:scale-105">
                            Dashboard
                        </a>
                    @elseif(auth()->user()->user_type === 'user')
                        <a href="{{ route('guest.dashboard') }}"
                            class="px-5 py-2 rounded-xl bg-gradient-to-r from-brand to-brand-dark text-white font-semibold shadow-md hover:shadow-lg hover:scale-105">
                            Dashboard
                        </a>
                    @endif
                @else
                    <a href="{{ route('login') }}"
                        class="px-4 py-2 rounded-xl font-semibold inline-block
        {{ request()->routeIs('login') ? 'text-brand bg-gray-50' : 'text-gray-700 hover:text-brand hover:bg-gray-50' }}">

                        Log in
                    </a>

                    <a href="{{ route('register') }}">
                        <button
                            class="px-5 py-2 rounded-xl bg-gradient-to-r from-brand to-brand-dark text-white font-semibold shadow-md hover:shadow-lg hover:scale-105">
                            Sign up
                        </button>
                    </a>

                @endauth
            </div>
            <button id="mobileMenuBtn"
                class="lg:hidden w-10 h-10 flex items-center justify-center rounded-xl text-gray-700 hover:bg-gray-100"><i
                    class="fas fa-bars text-xl"></i></button>
        </div>
        <div id="mobileMenu" class="lg:hidden mobile-menu overflow-hidden max-h-0 opacity-0 invisible mt-3">
            <div class="py-4 space-y-2 border-t border-gray-100"><a href="./index.html"
                    class="mobile-nav-link block py-2.5 px-2 text-gray-700 hover:text-brand font-semibold"
                    data-page="home">Home</a>
                <div class="mobile-dropdown-item"><button
                        class="mobile-dropdown-btn w-full py-2.5 px-2 text-left text-gray-700 hover:text-brand font-semibold"
                        data-dropdown="bookNowMobile"><span>Book Now</span><i
                            class="fas fa-chevron-down text-xs transition-transform duration-300"
                            id="bookNowMobile-icon"></i></button>
                    <div class="mobile-submenu ml-4" id="bookNowMobile-menu"><a href="#"
                            class="flex items-center gap-3 px-3 py-3 text-sm text-gray-600 hover:text-brand hover:bg-brand/5 rounded-lg"
                            data-page="yacht-charter"><i class="fas fa-ship w-5 text-brand"></i><span>Yacht
                                charter</span></a><a href="#"
                            class="flex items-center gap-3 px-3 py-3 text-sm text-gray-600 hover:text-brand hover:bg-brand/5 rounded-lg"
                            data-page="boatel"><i class="fas fa-bed w-5 text-brand"></i><span>Boatel (sleep on
                                boat)</span></a></div>
                </div>
                <div class="mobile-dropdown-item"><button
                        class="mobile-dropdown-btn w-full py-2.5 px-2 text-left text-gray-700 hover:text-brand font-semibold"
                        data-dropdown="boatTypesMobile"><span>Boat types</span><i
                            class="fas fa-chevron-down text-xs transition-transform duration-300"
                            id="boatTypesMobile-icon"></i></button>
                    <div class="mobile-submenu ml-4" id="boatTypesMobile-menu"><a href="#"
                            class="flex items-center gap-3 px-3 py-3 text-sm text-gray-600 hover:text-brand hover:bg-brand/5 rounded-lg"
                            data-page="catamarans"><i
                                class="fas fa-sailboat w-5 text-brand"></i><span>Catamarans</span></a><a
                            href="#"
                            class="flex items-center gap-3 px-3 py-3 text-sm text-gray-600 hover:text-brand hover:bg-brand/5 rounded-lg"
                            data-page="houseboats"><i
                                class="fas fa-home w-5 text-brand"></i><span>Houseboats</span></a><a href="#"
                            class="flex items-center gap-3 px-3 py-3 text-sm text-gray-600 hover:text-brand hover:bg-brand/5 rounded-lg"
                            data-page="motorboats"><i
                                class="fas fa-tachometer-alt w-5 text-brand"></i><span>Motorboats</span></a><a
                            href="#"
                            class="flex items-center gap-3 px-3 py-3 text-sm text-gray-600 hover:text-brand hover:bg-brand/5 rounded-lg"
                            data-page="sailboats"><i class="fas fa-wind w-5 text-brand"></i><span>Sailboats</span></a>
                    </div>
                </div><a href="#"
                    class="mobile-nav-link block py-2.5 px-2 text-gray-700 hover:text-brand font-semibold"
                    data-page="list-your-boat">List your boat</a><a href="#"
                    class="mobile-nav-link block py-2.5 px-2 text-gray-700 hover:text-brand font-semibold"
                    data-page="rewards">Rewards <span
                        class="text-[10px] bg-brand text-white px-1.5 py-0.5 rounded-full ml-2">NEW</span></a>
                <div class="pt-4 mt-2 border-t border-gray-100 space-y-3">
                    <div class="mobile-dropdown-item"><button
                            class="mobile-dropdown-btn w-full py-2.5 px-2 text-left text-gray-700 hover:text-brand font-medium"
                            data-dropdown="langMobile">
                            <div class="flex items-center gap-3"><i
                                    class="fas fa-globe text-gray-500"></i><span>Language</span><span
                                    class="text-xs text-gray-400 ml-auto" id="selectedLangLabel">English</span>
                            </div><i class="fas fa-chevron-down text-xs transition-transform duration-300"
                                id="langMobile-icon"></i>
                        </button>
                        <div class="mobile-submenu ml-4" id="langMobile-menu"><a href="#" data-lang="en"
                                data-lang-label="English"
                                class="flex items-center gap-2 px-3 py-2.5 text-sm text-gray-600 hover:text-brand hover:bg-brand/5 rounded-lg"><span>🇬🇧</span>
                                English</a><a href="#" data-lang="fr" data-lang-label="Français"
                                class="flex items-center gap-2 px-3 py-2.5 text-sm text-gray-600 hover:text-brand hover:bg-brand/5 rounded-lg"><span>🇫🇷</span>
                                Français</a></div>
                    </div>
                    <div class="mobile-dropdown-item"><button
                            class="mobile-dropdown-btn w-full py-2.5 px-2 text-left text-gray-700 hover:text-brand font-medium"
                            data-dropdown="currencyMobile">
                            <div class="flex items-center gap-3"><i
                                    class="fas fa-coins text-gray-500"></i><span>Currency</span><span
                                    class="text-xs text-gray-400 ml-auto" id="selectedCurrencyLabel">Euro
                                    (EUR)</span></div><i
                                class="fas fa-chevron-down text-xs transition-transform duration-300"
                                id="currencyMobile-icon"></i>
                        </button>
                        <div class="mobile-submenu ml-4" id="currencyMobile-menu"><a href="#"
                                data-currency="eur" data-currency-label="Euro (EUR)"
                                class="flex items-center justify-between px-3 py-2.5 text-sm text-gray-600 hover:text-brand hover:bg-brand/5 rounded-lg"><span>💶
                                    Euro (EUR)</span><span class="text-xs text-gray-400">€</span></a><a href="#"
                                data-currency="gbp" data-currency-label="Pound (GBP)"
                                class="flex items-center justify-between px-3 py-2.5 text-sm text-gray-600 hover:text-brand hover:bg-brand/5 rounded-lg"><span>💷
                                    Pound (GBP)</span><span class="text-xs text-gray-400">£</span></a><a
                                href="#" data-currency="usd" data-currency-label="Dollar (USD)"
                                class="flex items-center justify-between px-3 py-2.5 text-sm text-gray-600 hover:text-brand hover:bg-brand/5 rounded-lg"><span>💵
                                    Dollar (USD)</span><span class="text-xs text-gray-400">$</span></a><a
                                href="#" data-currency="inr" data-currency-label="Rupee (INR)"
                                class="flex items-center justify-between px-3 py-2.5 text-sm text-gray-600 hover:text-brand hover:bg-brand/5 rounded-lg"><span>🇮🇳
                                    Rupee (INR)</span><span class="text-xs text-gray-400">₹</span></a></div>
                    </div>
                    <div class="flex gap-3 pt-2 px-2">
                        <a href="{{ route('login') }}">
                            <button
                                class="flex-1 py-2.5 rounded-xl text-gray-700 font-semibold border border-gray-300 hover:border-brand">Log
                                in</button>
                        </a>
                        <a href="{{ route('register') }}">
                            <button
                                class="flex-1 py-2.5 rounded-xl bg-gradient-to-r from-brand to-brand-dark text-white font-semibold shadow-md">Sign
                                up</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
