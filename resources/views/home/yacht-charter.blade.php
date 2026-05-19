<x-guest-layout>
 
    <section  class="font-inter bg-gradient-to-br from-[#F4F7FC] to-[#EEF2F8] text-[#1a2a4f]">
        <!-- MOBILE FILTER BAR -->
    <div class="yc-mobile-filter-bar">
        <button id="yc_showAllFilters" class="yc-filter-btn yc-filter-btn-all">
            <i class="fas fa-sliders-h"></i> All Filters
        </button>
    </div>

    <!-- SIDEBAR OVERLAY (Mobile) -->
    <div id="yc_sidebarOverlay" class="yc-sidebar-overlay"></div>

    <!-- SIDEBAR PANEL (Mobile) -->
    <div id="yc_sidebarPanel" class="yc-sidebar-panel">
        <div class="yc-sidebar-header">
            <span class="font-bold text-navy"><i class="fas fa-filter mr-2 text-brand"></i>Filters</span>
            <div id="yc_closeSidebar" class="yc-sidebar-close">
                <i class="fas fa-times text-gray-500"></i>
            </div>
        </div>
        <div class="p-4">
            <div id="yc_mobileSidebarContent"></div>
        </div>
    </div>

    <!-- MAIN LAYOUT -->
    <div class="max-w-[1600px] mx-auto px-5 md:px-8 py-[130px] md:py-[50px] flex flex-col lg:flex-row gap-8">

        <!-- DESKTOP SIDEBAR -->
        <aside class="yc-desktop-sidebar lg:w-[330px] flex-shrink-0 space-y-5">

            <!-- Combined WHERE & DATES Section -->
            <div
                class="bg-white/95 backdrop-blur-sm rounded-2xl p-5 border border-brand/20 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_-15px_rgba(94,166,200,0.25)] transition-all duration-300 hover:-translate-y-1 relative overflow-visible group">
                <div class="absolute inset-0 bg-gradient-to-br from-brand/8 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-2xl"></div>
                <div class="relative z-10">
                    <div class="flex items-center gap-2 mb-4 pb-2 border-b border-brand/20">
                        <div
                            class="w-7 h-7 rounded-full bg-brand/15 flex items-center justify-center group-hover:bg-brand/25 transition-colors">
                            <i class="fas fa-map-marked-alt text-brand text-xs"></i>
                        </div>
                        <span
                            class="text-[11px] font-bold text-gray-500 uppercase tracking-[2px] group-hover:text-brand transition-colors">Where
                            & When</span>
                    </div>
                    <div class="space-y-4">
                        <div class="relative">
                            <label
                                class="block text-[10px] font-semibold text-gray-400 uppercase tracking-wider mb-1.5 ml-1">Country</label>
                            <div class="relative">
                                <i class="fas fa-globe-americas absolute left-4 top-1/2 -translate-y-1/2 text-brand/50 text-sm"></i>
                                <input type="text" id="yc_search_country" placeholder="Select destination"
                                    class="w-full py-3 pl-11 pr-5 rounded-2xl border border-gray-200 bg-gray-50/50 focus:bg-white focus:border-brand/60 focus:ring-2 focus:ring-brand/20 focus:outline-none transition-all text-sm text-gray-800 placeholder:text-gray-500">
                                <div id="yc_countryDropdown"
                                    class="hidden absolute z-50 mt-2 w-full bg-white rounded-xl shadow-xl border border-gray-100 custom-scroll max-h-52 overflow-y-auto">
                                    <ul id="yc_movies" class="py-1"></ul>
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <label
                                class="block text-[10px] font-semibold text-gray-400 uppercase tracking-wider mb-1.5 ml-1">City
                                / Marina</label>
                            <div class="relative">
                                <i class="fas fa-anchor absolute left-4 top-1/2 -translate-y-1/2 text-brand/50 text-sm"></i>
                                <input type="text" id="yc_search_city" placeholder="Select marina or city"
                                    class="w-full py-3 pl-11 pr-5 rounded-2xl border border-gray-200 bg-gray-50/50 focus:bg-white focus:border-brand/60 focus:ring-2 focus:ring-brand/20 focus:outline-none transition-all text-sm text-gray-800 placeholder:text-gray-500">
                                <div id="yc_cityDropdown"
                                    class="hidden absolute z-50 mt-2 w-full bg-white rounded-xl shadow-xl border border-gray-100 custom-scroll max-h-52 overflow-y-auto">
                                    <ul id="yc_moviescity" class="py-1"></ul>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 my-2">
                            <div class="flex-1 h-px bg-gradient-to-r from-transparent via-brand/20 to-transparent"></div>
                            <i class="fas fa-sailboat text-brand/20 text-xs"></i>
                            <div class="flex-1 h-px bg-gradient-to-r from-transparent via-brand/20 to-transparent"></div>
                        </div>
                        <div class="relative">
                            <label
                                class="block text-[10px] font-semibold text-gray-400 uppercase tracking-wider mb-1.5 ml-1">Check-in
                                / Check-out</label>
                            <div class="relative">
                                <i class="fas fa-calendar-week absolute left-4 top-1/2 -translate-y-1/2 text-brand/50 text-sm"></i>
                                <input type="text" id="yc_date_range" placeholder="Select your dates"
                                    class="w-full py-3 pl-11 pr-5 rounded-2xl border border-gray-200 bg-gray-50/50 focus:bg-white focus:border-brand/60 focus:ring-2 focus:ring-brand/20 focus:outline-none transition-all text-sm text-gray-800 placeholder:text-gray-500 cursor-pointer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BOAT TYPES Section -->
            <div
                class="bg-white/95 backdrop-blur-sm rounded-2xl p-5 border border-brand/20 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_-15px_rgba(94,166,200,0.25)] transition-all duration-300 hover:-translate-y-1 relative overflow-visible group">
                <div class="absolute inset-0 bg-gradient-to-br from-brand/8 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-2xl"></div>
                <div class="relative z-10">
                    <div class="flex items-center gap-2 mb-4 pb-2 border-b border-brand/20">
                        <div
                            class="w-7 h-7 rounded-full bg-brand/15 flex items-center justify-center group-hover:bg-brand/25 transition-colors">
                            <i class="fas fa-ship text-brand text-xs"></i>
                        </div>
                        <span
                            class="text-[11px] font-bold text-gray-500 uppercase tracking-[2px] group-hover:text-brand transition-colors">Boat
                            types</span>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <label
                            class="flex items-center gap-2 px-4 py-2 bg-gray-50/80 rounded-full text-sm font-medium border border-gray-200 cursor-pointer hover:bg-brand/10 hover:border-brand/30 hover:-translate-y-0.5 transition-all"><input
                                type="checkbox" class="yc_boatType w-4 h-4 accent-brand mr-1" value="Houseboat">
                            Houseboat</label>
                        <label
                            class="flex items-center gap-2 px-4 py-2 bg-gray-50/80 rounded-full text-sm font-medium border border-gray-200 cursor-pointer hover:bg-brand/10 hover:border-brand/30 hover:-translate-y-0.5 transition-all"><input
                                type="checkbox" class="yc_boatType w-4 h-4 accent-brand mr-1" value="Catamaran">
                            Catamaran</label>
                        <label
                            class="flex items-center gap-2 px-4 py-2 bg-gray-50/80 rounded-full text-sm font-medium border border-gray-200 cursor-pointer hover:bg-brand/10 hover:border-brand/30 hover:-translate-y-0.5 transition-all"><input
                                type="checkbox" class="yc_boatType w-4 h-4 accent-brand mr-1" value="Sailing boat">
                            Sailing</label>
                        <label
                            class="flex items-center gap-2 px-4 py-2 bg-gray-50/80 rounded-full text-sm font-medium border border-gray-200 cursor-pointer hover:bg-brand/10 hover:border-brand/30 hover:-translate-y-0.5 transition-all"><input
                                type="checkbox" class="yc_boatType w-4 h-4 accent-brand mr-1" value="Motorboat">
                            Motorboat</label>
                    </div>
                </div>
            </div>

            <!-- PRICE & LENGTH Section -->
            <div
                class="bg-white/95 backdrop-blur-sm rounded-2xl p-5 border border-brand/20 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_-15px_rgba(94,166,200,0.25)] transition-all duration-300 hover:-translate-y-1 relative overflow-visible group">
                <div class="absolute inset-0 bg-gradient-to-br from-brand/8 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-2xl"></div>
                <div class="relative z-10">
                    <div class="flex items-center gap-2 mb-4 pb-2 border-b border-brand/20">
                        <div
                            class="w-7 h-7 rounded-full bg-brand/15 flex items-center justify-center group-hover:bg-brand/25 transition-colors">
                            <i class="fas fa-sliders-h text-brand text-xs"></i>
                        </div>
                        <span
                            class="text-[11px] font-bold text-gray-500 uppercase tracking-[2px] group-hover:text-brand transition-colors">Budget
                            & Size</span>
                    </div>
                    <div class="space-y-5">
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-xs font-semibold text-gray-600"><i
                                        class="fas fa-euro-sign text-brand text-xs mr-1"></i> Price per day</span>
                                <span id="yc_showPriceRange"
                                    class="text-[11px] font-bold bg-brand/10 text-brand px-2.5 py-1 rounded-full">€0
                                    - €15000</span>
                            </div>
                            <div id="yc_price_range" class="ui-slider mt-2"></div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-xs font-semibold text-gray-600"><i
                                        class="fas fa-ruler-combined text-brand text-xs mr-1"></i> Boat length</span>
                                <span id="yc_showPriceRange1"
                                    class="text-[11px] font-bold bg-brand/10 text-brand px-2.5 py-1 rounded-full">0 -
                                    60 m</span>
                            </div>
                            <div id="yc_length_range" class="ui-slider mt-2"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CAPACITY Section -->
            <div
                class="bg-white/95 backdrop-blur-sm rounded-2xl p-5 border border-brand/20 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_-15px_rgba(94,166,200,0.25)] transition-all duration-300 hover:-translate-y-1 relative overflow-visible group">
                <div class="absolute inset-0 bg-gradient-to-br from-brand/8 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-2xl"></div>
                <div class="relative z-10">
                    <div class="flex items-center gap-2 mb-4 pb-2 border-b border-brand/20">
                        <div
                            class="w-7 h-7 rounded-full bg-brand/15 flex items-center justify-center group-hover:bg-brand/25 transition-colors">
                            <i class="fas fa-users text-brand text-xs"></i>
                        </div>
                        <span
                            class="text-[11px] font-bold text-gray-500 uppercase tracking-[2px] group-hover:text-brand transition-colors">Capacity</span>
                    </div>
                    <div class="flex justify-between items-center py-2 border-b border-gray-100">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-brand/10 flex items-center justify-center">
                                <i class="fas fa-user text-brand text-xs"></i>
                            </div>
                            <span class="text-sm font-semibold text-gray-700">Number of people</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <button id="yc_peopleMinus"
                                class="w-7 h-7 rounded-full bg-gray-100 hover:bg-brand/20 text-brand font-bold text-base flex items-center justify-center transition-all active:scale-95">−</button>
                            <span id="yc_peopleCountDisplay"
                                class="w-8 text-center text-navy font-extrabold text-base">2</span>
                            <input type="hidden" id="yc_peopleCount" value="2">
                            <button id="yc_peoplePlus"
                                class="w-7 h-7 rounded-full bg-gray-100 hover:bg-brand/20 text-brand font-bold text-base flex items-center justify-center transition-all active:scale-95">+</button>
                        </div>
                    </div>
                    <div class="flex justify-between items-center py-2 pt-3">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-brand/10 flex items-center justify-center">
                                <i class="fas fa-door-open text-brand text-xs"></i>
                            </div>
                            <span class="text-sm font-semibold text-gray-700">Number of cabins</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <button id="yc_cabinMinus"
                                class="w-7 h-7 rounded-full bg-gray-100 hover:bg-brand/20 text-brand font-bold text-base flex items-center justify-center transition-all active:scale-95">−</button>
                            <span id="yc_cabinCountDisplay"
                                class="w-8 text-center text-navy font-extrabold text-base">1</span>
                            <input type="hidden" id="yc_cabinCount" value="1">
                            <button id="yc_cabinPlus"
                                class="w-7 h-7 rounded-full bg-gray-100 hover:bg-brand/20 text-brand font-bold text-base flex items-center justify-center transition-all active:scale-95">+</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SEARCH BUTTON -->
            <button id="yc_searchBoatsBtn"
                class="w-full py-3.5 bg-gradient-to-r from-brand to-brand-dark rounded-xl text-white font-bold text-sm tracking-wide shadow-lg shadow-brand/25 hover:shadow-xl hover:shadow-brand/30 hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center gap-2 group">
                <i class="fas fa-search group-hover:scale-110 transition-transform"></i>
                <span>SEARCH BOATS</span>
            </button>
        </aside>

        <!-- MAIN CONTENT -->
        <main class="flex-1">

            <!-- Section Header -->
            <div class="mb-6">
                <div class="flex items-center gap-2">
                    <span class="w-10 h-1 bg-brand rounded-full"></span>
                    <span class="text-brand font-semibold text-xs tracking-wider">HAND-PICKED</span>
                </div>
                <h2 class="text-2xl md:text-3xl font-extrabold text-navy mt-2">✨ Top trending yachts</h2>
                <p class="text-sm text-gray-500 font-medium mt-1">Selections based on popularity & reviews</p>
            </div>

            <!-- Yacht Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                <!-- Card 1 - Sunseeker Predator -->
               <a href="./yeachtchater_details.html">
                 <div
                    class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 cursor-pointer border border-gray-100">
                    <div class="relative h-52 overflow-hidden">
                        <span
                            class="absolute top-3 left-3 z-10 bg-brand/90 backdrop-blur-sm px-3 py-1 rounded-full text-[10px] font-extrabold text-white shadow-md">INSTANT</span>
                        <span
                            class="absolute top-3 right-3 z-10 bg-amber-500/90 backdrop-blur-sm px-2 py-1 rounded-full text-[10px] font-bold text-white shadow-md">★
                            5.0</span>
                        <img src="https://images.unsplash.com/photo-1567899378494-47b22a2ae96a?w=500&h=280&fit=crop"
                            alt="yacht" class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute bottom-3 left-3 bg-black/50 backdrop-blur-sm px-2 py-0.5 rounded-full">
                            <span class="text-white text-[10px] flex items-center gap-1"><i
                                    class="fas fa-map-marker-alt text-[8px]"></i> Miami, USA</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="font-extrabold text-navy text-base">Sunseeker Predator</h3>
                            <span class="text-xs text-gray-400 bg-gray-100 px-2 py-0.5 rounded-full">1995</span>
                        </div>
                        <div class="flex items-center gap-2 mb-3">
                            <span
                                class="text-[11px] font-semibold bg-gray-100 text-brand-dark px-3 py-1 rounded-full"><i
                                    class="fas fa-ship mr-1 text-[10px]"></i> Motorboat</span>
                        </div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center gap-1.5">
                                <div class="w-7 h-7 rounded-full bg-brand/10 flex items-center justify-center">
                                    <i class="fas fa-bed text-brand text-xs"></i>
                                </div>
                                <div><span class="text-xs font-bold text-gray-800">4</span><span
                                        class="text-[10px] text-gray-500"> cabins</span></div>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <div class="w-7 h-7 rounded-full bg-brand/10 flex items-center justify-center">
                                    <i class="fas fa-user-tie text-brand text-xs"></i>
                                </div>
                                <div><span class="text-xs font-semibold text-green-600">✓</span><span
                                        class="text-[10px] text-gray-500"> with captain</span></div>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <div class="w-7 h-7 rounded-full bg-brand/10 flex items-center justify-center">
                                    <i class="fas fa-users text-brand text-xs"></i>
                                </div>
                                <div><span class="text-xs font-bold text-gray-800">10</span><span
                                        class="text-[10px] text-gray-500"> guests</span></div>
                            </div>
                        </div>
                        <div class="border-t border-gray-100 my-2"></div>
                        <div class="flex justify-between items-center mt-2">
                            <div><span class="text-[10px] text-gray-400">from</span><span
                                    class="font-bold text-2xl text-navy">€1,200</span><span
                                    class="text-[11px] text-gray-400">/day</span></div>
                            <button
                                class="text-brand text-sm font-semibold hover:text-brand-dark transition flex items-center gap-1">Details
                                <i class="fas fa-arrow-right text-xs"></i></button>
                        </div>
                    </div>
                </div>
               </a>

                <!-- Card 2 - Lagoon 450 Catamaran -->
               <a href="./yeachtchater_details.html">
                 <div
                    class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 cursor-pointer border border-gray-100">
                    <div class="relative h-52 overflow-hidden">
                        <span
                            class="absolute top-3 left-3 z-10 bg-rose-500/90 backdrop-blur-sm px-3 py-1 rounded-full text-[10px] font-extrabold text-white shadow-md">HOT
                            DEAL</span>
                        <span
                            class="absolute top-3 right-3 z-10 bg-amber-500/90 backdrop-blur-sm px-2 py-1 rounded-full text-[10px] font-bold text-white shadow-md">★
                            4.9</span>
                        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=500&h=280&fit=crop"
                            alt="catamaran" class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute bottom-3 left-3 bg-black/50 backdrop-blur-sm px-2 py-0.5 rounded-full">
                            <span class="text-white text-[10px] flex items-center gap-1"><i
                                    class="fas fa-map-marker-alt text-[8px]"></i> Lefkas, Greece</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="font-extrabold text-navy text-base">Lagoon 450 Catamaran</h3>
                            <span class="text-xs text-gray-400 bg-gray-100 px-2 py-0.5 rounded-full">2022</span>
                        </div>
                        <div class="flex items-center gap-2 mb-3">
                            <span
                                class="text-[11px] font-semibold bg-gray-100 text-brand-dark px-3 py-1 rounded-full"><i
                                    class="fas fa-ship mr-1 text-[10px]"></i> Catamaran</span>
                        </div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center gap-1.5">
                                <div class="w-7 h-7 rounded-full bg-brand/10 flex items-center justify-center">
                                    <i class="fas fa-bed text-brand text-xs"></i>
                                </div>
                                <div><span class="text-xs font-bold text-gray-800">5</span><span
                                        class="text-[10px] text-gray-500"> cabins</span></div>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <div class="w-7 h-7 rounded-full bg-brand/10 flex items-center justify-center">
                                    <i class="fas fa-user-tie text-brand text-xs"></i>
                                </div>
                                <div><span class="text-xs font-semibold text-green-600">✓</span><span
                                        class="text-[10px] text-gray-500"> with captain</span></div>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <div class="w-7 h-7 rounded-full bg-brand/10 flex items-center justify-center">
                                    <i class="fas fa-users text-brand text-xs"></i>
                                </div>
                                <div><span class="text-xs font-bold text-gray-800">12</span><span
                                        class="text-[10px] text-gray-500"> guests</span></div>
                            </div>
                        </div>
                        <div class="border-t border-gray-100 my-2"></div>
                        <div class="flex justify-between items-center mt-2">
                            <div><span class="text-[10px] text-gray-400">from</span><span
                                    class="font-bold text-2xl text-navy">€850</span><span
                                    class="text-[11px] text-gray-400">/day</span></div>
                            <button
                                class="text-brand text-sm font-semibold hover:text-brand-dark transition flex items-center gap-1">Details
                                <i class="fas fa-arrow-right text-xs"></i></button>
                        </div>
                    </div>
                </div>
               </a>

                <!-- Card 3 - Beneteau Oceanis -->
               <a href="./yeachtchater_details.html">
                 <div
                    class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 cursor-pointer border border-gray-100">
                    <div class="relative h-52 overflow-hidden">
                        <span
                            class="absolute top-3 left-3 z-10 bg-brand/90 backdrop-blur-sm px-3 py-1 rounded-full text-[10px] font-extrabold text-white shadow-md">INSTANT</span>
                        <span
                            class="absolute top-3 right-3 z-10 bg-amber-500/90 backdrop-blur-sm px-2 py-1 rounded-full text-[10px] font-bold text-white shadow-md">★
                            5.0</span>
                        <img src="https://images.unsplash.com/photo-1469796466635-455ede028aca?w=500&h=280&fit=crop"
                            alt="sailing" class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute bottom-3 left-3 bg-black/50 backdrop-blur-sm px-2 py-0.5 rounded-full">
                            <span class="text-white text-[10px] flex items-center gap-1"><i
                                    class="fas fa-map-marker-alt text-[8px]"></i> Portofino, Italy</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="font-extrabold text-navy text-base">Beneteau Oceanis</h3>
                            <span class="text-xs text-gray-400 bg-gray-100 px-2 py-0.5 rounded-full">2021</span>
                        </div>
                        <div class="flex items-center gap-2 mb-3">
                            <span
                                class="text-[11px] font-semibold bg-gray-100 text-brand-dark px-3 py-1 rounded-full"><i
                                    class="fas fa-sailboat mr-1 text-[10px]"></i> Sailing</span>
                        </div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center gap-1.5">
                                <div class="w-7 h-7 rounded-full bg-brand/10 flex items-center justify-center">
                                    <i class="fas fa-bed text-brand text-xs"></i>
                                </div>
                                <div><span class="text-xs font-bold text-gray-800">4</span><span
                                        class="text-[10px] text-gray-500"> cabins</span></div>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <div class="w-7 h-7 rounded-full bg-brand/10 flex items-center justify-center">
                                    <i class="fas fa-user-tie text-brand text-xs"></i>
                                </div>
                                <div><span class="text-xs font-semibold text-green-600">✓</span><span
                                        class="text-[10px] text-gray-500"> with captain</span></div>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <div class="w-7 h-7 rounded-full bg-brand/10 flex items-center justify-center">
                                    <i class="fas fa-users text-brand text-xs"></i>
                                </div>
                                <div><span class="text-xs font-bold text-gray-800">8</span><span
                                        class="text-[10px] text-gray-500"> guests</span></div>
                            </div>
                        </div>
                        <div class="border-t border-gray-100 my-2"></div>
                        <div class="flex justify-between items-center mt-2">
                            <div><span class="text-[10px] text-gray-400">from</span><span
                                    class="font-bold text-2xl text-navy">€950</span><span
                                    class="text-[11px] text-gray-400">/day</span></div>
                            <button
                                class="text-brand text-sm font-semibold hover:text-brand-dark transition flex items-center gap-1">Details
                                <i class="fas fa-arrow-right text-xs"></i></button>
                        </div>
                    </div>
                </div>
               </a>

                <!-- Card 4 - Azimut 60 -->
              <a href="./yeachtchater_details.html">
                  <div
                    class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 cursor-pointer border border-gray-100">
                    <div class="relative h-52 overflow-hidden">
                        <span
                            class="absolute top-3 left-3 z-10 bg-amber-600/90 backdrop-blur-sm px-3 py-1 rounded-full text-[10px] font-extrabold text-white shadow-md">LUXURY</span>
                        <span
                            class="absolute top-3 right-3 z-10 bg-amber-500/90 backdrop-blur-sm px-2 py-1 rounded-full text-[10px] font-bold text-white shadow-md">★
                            4.8</span>
                        <img src="https://images.unsplash.com/photo-1500375592092-40eb2168fd21?w=500&h=280&fit=crop"
                            alt="yacht" class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute bottom-3 left-3 bg-black/50 backdrop-blur-sm px-2 py-0.5 rounded-full">
                            <span class="text-white text-[10px] flex items-center gap-1"><i
                                    class="fas fa-map-marker-alt text-[8px]"></i> Puerto Banús, Spain</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="font-extrabold text-navy text-base">Azimut 60</h3>
                            <span class="text-xs text-gray-400 bg-gray-100 px-2 py-0.5 rounded-full">2023</span>
                        </div>
                        <div class="flex items-center gap-2 mb-3">
                            <span
                                class="text-[11px] font-semibold bg-gray-100 text-brand-dark px-3 py-1 rounded-full"><i
                                    class="fas fa-ship mr-1 text-[10px]"></i> Motorboat</span>
                        </div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center gap-1.5">
                                <div class="w-7 h-7 rounded-full bg-brand/10 flex items-center justify-center">
                                    <i class="fas fa-bed text-brand text-xs"></i>
                                </div>
                                <div><span class="text-xs font-bold text-gray-800">4</span><span
                                        class="text-[10px] text-gray-500"> cabins</span></div>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <div class="w-7 h-7 rounded-full bg-brand/10 flex items-center justify-center">
                                    <i class="fas fa-user-tie text-brand text-xs"></i>
                                </div>
                                <div><span class="text-xs font-semibold text-green-600">✓</span><span
                                        class="text-[10px] text-gray-500"> with captain</span></div>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <div class="w-7 h-7 rounded-full bg-brand/10 flex items-center justify-center">
                                    <i class="fas fa-users text-brand text-xs"></i>
                                </div>
                                <div><span class="text-xs font-bold text-gray-800">10</span><span
                                        class="text-[10px] text-gray-500"> guests</span></div>
                            </div>
                        </div>
                        <div class="border-t border-gray-100 my-2"></div>
                        <div class="flex justify-between items-center mt-2">
                            <div><span class="text-[10px] text-gray-400">from</span><span
                                    class="font-bold text-2xl text-navy">€1,500</span><span
                                    class="text-[11px] text-gray-400">/day</span></div>
                            <button
                                class="text-brand text-sm font-semibold hover:text-brand-dark transition flex items-center gap-1">Details
                                <i class="fas fa-arrow-right text-xs"></i></button>
                        </div>
                    </div>
                </div>
              </a>

                <!-- Card 5 - Princess Y72 -->
               <a href="./yeachtchater_details.html">
                 <div
                    class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 cursor-pointer border border-gray-100">
                    <div class="relative h-52 overflow-hidden">
                        <span
                            class="absolute top-3 left-3 z-10 bg-indigo-500/90 backdrop-blur-sm px-3 py-1 rounded-full text-[10px] font-extrabold text-white shadow-md">PREMIUM</span>
                        <span
                            class="absolute top-3 right-3 z-10 bg-amber-500/90 backdrop-blur-sm px-2 py-1 rounded-full text-[10px] font-bold text-white shadow-md">★
                            4.9</span>
                        <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?w=500&h=280&fit=crop"
                            alt="yacht" class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute bottom-3 left-3 bg-black/50 backdrop-blur-sm px-2 py-0.5 rounded-full">
                            <span class="text-white text-[10px] flex items-center gap-1"><i
                                    class="fas fa-map-marker-alt text-[8px]"></i> Cannes, France</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="font-extrabold text-navy text-base">Princess Y72</h3>
                            <span class="text-xs text-gray-400 bg-gray-100 px-2 py-0.5 rounded-full">2022</span>
                        </div>
                        <div class="flex items-center gap-2 mb-3">
                            <span
                                class="text-[11px] font-semibold bg-gray-100 text-brand-dark px-3 py-1 rounded-full"><i
                                    class="fas fa-ship mr-1 text-[10px]"></i> Motorboat</span>
                        </div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center gap-1.5">
                                <div class="w-7 h-7 rounded-full bg-brand/10 flex items-center justify-center">
                                    <i class="fas fa-bed text-brand text-xs"></i>
                                </div>
                                <div><span class="text-xs font-bold text-gray-800">5</span><span
                                        class="text-[10px] text-gray-500"> cabins</span></div>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <div class="w-7 h-7 rounded-full bg-brand/10 flex items-center justify-center">
                                    <i class="fas fa-user-tie text-brand text-xs"></i>
                                </div>
                                <div><span class="text-xs font-semibold text-green-600">✓</span><span
                                        class="text-[10px] text-gray-500"> with captain</span></div>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <div class="w-7 h-7 rounded-full bg-brand/10 flex items-center justify-center">
                                    <i class="fas fa-users text-brand text-xs"></i>
                                </div>
                                <div><span class="text-xs font-bold text-gray-800">12</span><span
                                        class="text-[10px] text-gray-500"> guests</span></div>
                            </div>
                        </div>
                        <div class="border-t border-gray-100 my-2"></div>
                        <div class="flex justify-between items-center mt-2">
                            <div><span class="text-[10px] text-gray-400">from</span><span
                                    class="font-bold text-2xl text-navy">€2,100</span><span
                                    class="text-[11px] text-gray-400">/day</span></div>
                            <button
                                class="text-brand text-sm font-semibold hover:text-brand-dark transition flex items-center gap-1">Details
                                <i class="fas fa-arrow-right text-xs"></i></button>
                        </div>
                    </div>
                </div>
               </a>

                <!-- Card 6 - Fountaine Pajot -->
               <a href="./yeachtchater_details.html">
                 <div
                    class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 cursor-pointer border border-gray-100">
                    <div class="relative h-52 overflow-hidden">
                        <span
                            class="absolute top-3 left-3 z-10 bg-emerald-500/90 backdrop-blur-sm px-3 py-1 rounded-full text-[10px] font-extrabold text-white shadow-md">FAMILY</span>
                        <span
                            class="absolute top-3 right-3 z-10 bg-amber-500/90 backdrop-blur-sm px-2 py-1 rounded-full text-[10px] font-bold text-white shadow-md">★
                            4.7</span>
                        <img src="https://images.unsplash.com/photo-1569263979104-865ab7cd8d13?w=500&h=280&fit=crop"
                            alt="catamaran" class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute bottom-3 left-3 bg-black/50 backdrop-blur-sm px-2 py-0.5 rounded-full">
                            <span class="text-white text-[10px] flex items-center gap-1"><i
                                    class="fas fa-map-marker-alt text-[8px]"></i> Göcek, Turkey</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="font-extrabold text-navy text-base">Fountaine Pajot</h3>
                            <span class="text-xs text-gray-400 bg-gray-100 px-2 py-0.5 rounded-full">2023</span>
                        </div>
                        <div class="flex items-center gap-2 mb-3">
                            <span
                                class="text-[11px] font-semibold bg-gray-100 text-brand-dark px-3 py-1 rounded-full"><i
                                    class="fas fa-ship mr-1 text-[10px]"></i> Catamaran</span>
                        </div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center gap-1.5">
                                <div class="w-7 h-7 rounded-full bg-brand/10 flex items-center justify-center">
                                    <i class="fas fa-bed text-brand text-xs"></i>
                                </div>
                                <div><span class="text-xs font-bold text-gray-800">4</span><span
                                        class="text-[10px] text-gray-500"> cabins</span></div>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <div class="w-7 h-7 rounded-full bg-brand/10 flex items-center justify-center">
                                    <i class="fas fa-user-tie text-brand text-xs"></i>
                                </div>
                                <div><span class="text-xs font-semibold text-green-600">✓</span><span
                                        class="text-[10px] text-gray-500"> with captain</span></div>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <div class="w-7 h-7 rounded-full bg-brand/10 flex items-center justify-center">
                                    <i class="fas fa-users text-brand text-xs"></i>
                                </div>
                                <div><span class="text-xs font-bold text-gray-800">10</span><span
                                        class="text-[10px] text-gray-500"> guests</span></div>
                            </div>
                        </div>
                        <div class="border-t border-gray-100 my-2"></div>
                        <div class="flex justify-between items-center mt-2">
                            <div><span class="text-[10px] text-gray-400">from</span><span
                                    class="font-bold text-2xl text-navy">€780</span><span
                                    class="text-[11px] text-gray-400">/day</span></div>
                            <button
                                class="text-brand text-sm font-semibold hover:text-brand-dark transition flex items-center gap-1">Details
                                <i class="fas fa-arrow-right text-xs"></i></button>
                        </div>
                    </div>
                </div>
               </a>
            </div>

            <!-- PAGINATION SECTION -->
            <div class="yc-pagination">
                <div class="yc-pagination-item disabled">
                    <i class="fas fa-chevron-left"></i>
                </div>
                <div class="yc-pagination-item active">1</div>
                <div class="yc-pagination-item">2</div>
                <div class="yc-pagination-item">3</div>
                <div class="yc-pagination-item">4</div>
                <div class="yc-pagination-item">...</div>
                <div class="yc-pagination-item">8</div>
                <div class="yc-pagination-item">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
        </main>
    </div>

    </section>

</x-guest-layout>