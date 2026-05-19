<x-guest-layout>
    <section class="font-inter bg-gradient-to-br from-[#F4F7FC] to-[#EEF2F8] min-h-screen relative">

        <div class="od-bg-circles">
            <div class="od-circle"></div>
            <div class="od-circle"></div>
            <div class="od-circle"></div>
            <div class="od-circle"></div>
            <div class="od-circle"></div>
        </div>

        <div class="lg:hidden fixed pt-4 md:pt-[90px] left-5 z-50">

            <button id="od-menuToggle"
                class="bg-white/90 backdrop-blur-md p-3 rounded-2xl shadow-xl border border-white/40 transition-all duration-300 hover:scale-105 active:scale-95">

                <i id="od-menuIcon" class="fas fa-bars text-navy text-lg transition-all duration-300"></i>

            </button>

        </div>

        <div id="od-sidebarOverlay" class="fixed inset-0 bg-black/20 backdrop-blur-sm hidden lg:hidden"></div>

        <div class="flex min-h-screen relative z-10">

            <x-owner-sidebar />

            <main class="flex-1 od-main-with-sidebar pt-24 p-6 lg:pt-8 lg:p-8 xl:p-10">
                <div class="mb-10">
                    <div class="flex justify-between items-start flex-wrap gap-5">
                        <div>
                            <div class="flex items-center gap-3 flex-wrap">
                                <h1 class="text-3xl md:text-4xl font-extrabold text-navy tracking-tight">Welcome back,
                                    Ashish!</h1>
                                <span class="od-wave-hand text-4xl">⚓</span>
                            </div>
                            <p class="text-gray-500 text-sm mt-2 max-w-xl">Owner command center — manage fleet,
                                registrations, and all boat bookings.</p>
                        </div>
                        <div class="flex items-center gap-3 sm:gap-4">
                            <div class="relative group">
                                <div
                                    class="w-11 h-11 rounded-full bg-white shadow-md flex items-center justify-center cursor-pointer border border-gray-200">
                                    <i class="fas fa-bell text-gray-500 text-base group-hover:text-brand"></i>
                                </div>
                                <span
                                    class="absolute -top-1 -right-1 w-5 h-5 bg-gradient-to-br from-red-500 to-rose-600 text-white text-[10px] font-bold rounded-full flex items-center justify-center">2</span>
                            </div>
                            <div
                                class="flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-brand/10 to-brand/5 rounded-full border border-brand/30">
                                <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span>
                                <span class="text-[11px] font-bold text-brand uppercase tracking-wider">Owner
                                    Mode</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stat Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5 lg:gap-6 mb-12">
                    <div class="od-stat-card od-accent-brand p-5">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-400 text-[11px] uppercase tracking-wider font-bold">Total Listings
                                </p>
                                <p class="text-4xl font-extrabold text-navy mt-2">3</p>
                                <p class="text-[11px] text-gray-400 mt-1">Active fleet</p>
                            </div>
                            <div
                                class="w-11 h-11 rounded-2xl bg-gradient-to-br from-brand/20 to-brand/5 flex items-center justify-center">
                                <i class="fas fa-water text-brand text-xl"></i>
                            </div>
                        </div>
                    </div>
                    <div class="od-stat-card od-accent-amber p-5">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-400 text-[11px] uppercase tracking-wider font-bold">Total Bookings
                                </p>
                                <p class="text-4xl font-extrabold text-navy mt-2">4</p>
                                <p class="text-[11px] text-gray-400 mt-1">All reservations</p>
                            </div>
                            <div class="w-11 h-11 rounded-2xl bg-amber-50 flex items-center justify-center">
                                <i class="fas fa-calendar-check text-amber-600 text-xl"></i>
                            </div>
                        </div>
                    </div>
                    <div class="od-stat-card od-accent-emerald p-5">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-400 text-[11px] uppercase tracking-wider font-bold">Confirmed</p>
                                <p class="text-4xl font-extrabold text-emerald-600 mt-2">2</p>
                                <p class="text-[11px] text-gray-400 mt-1">Paid bookings</p>
                            </div>
                            <div class="w-11 h-11 rounded-2xl bg-emerald-50 flex items-center justify-center">
                                <i class="fas fa-check-double text-emerald-500 text-xl"></i>
                            </div>
                        </div>
                    </div>
                    <div class="od-stat-card od-accent-sky p-5">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-400 text-[11px] uppercase tracking-wider font-bold">Revenue (YTD)
                                </p>
                                <p class="text-4xl font-extrabold text-navy mt-2">€18.2k</p>
                                <p class="text-[11px] text-gray-400 mt-1">+€2.4k this month</p>
                            </div>
                            <div class="w-11 h-11 rounded-2xl bg-sky-50 flex items-center justify-center">
                                <i class="fas fa-euro-sign text-sky-500 text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Personal Details & Sailing Credentials -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
                    <div class="bg-white rounded-3xl p-7 border border-gray-100 shadow-md">
                        <div class="flex items-center gap-3 mb-6 pb-3 border-b border-gray-100">
                            <div
                                class="w-10 h-10 rounded-xl bg-gradient-to-br from-brand/20 to-brand/10 flex items-center justify-center">
                                <i class="fas fa-id-card text-brand text-lg"></i>
                            </div>
                            <h3 class="font-bold text-navy text-2xl">Personal Details</h3>
                            <i class="fas fa-anchor text-brand/40 ml-auto text-xl"></i>
                        </div>
                        <div class="space-y-4">

                            <div class="od-info-field flex justify-between">
                                <span class="text-gray-500">Full Name</span>
                                <span class="font-semibold text-navy">Ashish Rajput</span>
                            </div>

                            <div class="od-info-field flex justify-between">
                                <span class="text-gray-500">Username</span>
                                <span class="font-semibold text-brand">@ashu108108</span>
                            </div>

                            <div class="od-info-field flex justify-between">
                                <span class="text-gray-500">Email</span>
                                <span>jean.moreau@riviera-yachts.fr</span>
                            </div>

                            <div class="od-info-field flex justify-between">
                                <span class="text-gray-500">Phone</span>
                                <span class="font-semibold">+33 6 45 78 92 11</span>
                            </div>

                            <div class="od-info-field flex justify-between">
                                <span class="text-gray-500">Address</span>
                                <span>12 Boulevard de la Croisette</span>
                            </div>

                            <div class="od-info-field flex justify-between">
                                <span class="text-gray-500">City, State</span>
                                <span>Cannes, Provence-Alpes-Côte d’Azur</span>
                            </div>

                            <div class="od-info-field flex justify-between">
                                <span class="text-gray-500">Country</span>
                                <span class="font-semibold text-navy">France</span>
                            </div>

                            <div class="od-info-field flex justify-between">
                                <span class="text-gray-500">Role Type</span>

                                <span class="px-2 py-1 bg-brand/10 text-brand text-xs rounded-full">
                                    Yacht Owner / Charter Captain
                                </span>
                            </div>

                        </div>
                    </div>

                    <div class="bg-white rounded-3xl p-7 border border-gray-100 shadow-md">
                        <div class="flex items-center gap-3 mb-6 pb-3 border-b border-gray-100">
                            <div
                                class="w-10 h-10 rounded-xl bg-gradient-to-br from-brand/20 to-brand/10 flex items-center justify-center">
                                <i class="fas fa-life-ring text-brand text-lg"></i>
                            </div>
                            <h3 class="font-bold text-navy text-2xl">Sailing Credentials</h3>
                            <i class="fas fa-water text-brand/30 ml-auto text-xl"></i>
                        </div>
                        <div
                            class="bg-gradient-to-br from-brand/5 via-white to-white rounded-2xl p-5 mb-6 border border-brand/20">
                            <div class="flex items-center gap-4">
                                <div class="w-14 h-14 rounded-xl bg-brand/25 flex items-center justify-center"><i
                                        class="fas fa-trophy text-brand text-3xl"></i></div>
                                <div>
                                    <p class="font-extrabold text-navy text-lg">Standard Skipper</p>
                                    <p class="text-xs text-gray-500">Certified mariner • ICC License</p>
                                </div>
                                <span
                                    class="ml-auto px-3 py-1.5 bg-brand/15 text-brand text-[10px] font-black rounded-full">SAILING</span>
                            </div>
                        </div>
                        <div class="space-y-3.5">

                            <div class="od-info-field flex justify-between">
                                <span class="text-gray-500">
                                    Level of Navigation
                                </span>

                                <span class="px-3 py-1 bg-emerald-100 text-emerald-800 text-xs font-bold rounded-full">
                                    ADVANCED YACHT SAILING
                                </span>
                            </div>

                            <div class="od-info-field flex justify-between">
                                <span class="text-gray-500">
                                    More Info
                                </span>

                                <span class="font-semibold">
                                    French Riviera — luxury yacht captain
                                </span>
                            </div>

                            <div class="od-info-field flex justify-between">
                                <span class="text-gray-500">
                                    Certification
                                </span>

                                <span class="font-semibold text-brand">
                                    ICC MASTER LICENCE
                                </span>
                            </div>

                            <div class="od-info-field">
                                <span class="text-gray-500 block mb-2">
                                    Description
                                </span>

                                <p class="text-gray-700">
                                    Experienced yacht owner and sailing enthusiast specializing in
                                    Mediterranean luxury charters, fleet management, and private
                                    cruising experiences along the French Riviera.
                                </p>
                            </div>

                        </div>
                        <div class="mt-6 pt-5 border-t border-gray-100">
                            <p class="text-xs font-bold text-gray-400 uppercase mb-4">📄 Official Documents</p>
                            <div class="flex gap-3 flex-wrap">

                                <a href="#"
                                    class="inline-flex items-center gap-2 px-5 py-2.5 bg-brand/10 hover:bg-brand/20 text-brand rounded-xl text-sm font-semibold"><i
                                        class="fas fa-passport"></i> passport/ID</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- All Boat Bookings Table - ONLY STATIC SEARCH FIELD, NO FUNCTIONALITY -->
                <div class="bg-white rounded-3xl border border-gray-100 shadow-md overflow-hidden">
                    <div
                        class="px-6 pt-6 pb-3 border-b border-gray-100 flex justify-between items-center flex-wrap gap-3">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-xl bg-gradient-to-br from-brand/20 to-brand/10 flex items-center justify-center">
                                <i class="fas fa-ship text-brand text-xl"></i>
                            </div>
                            <h3 class="font-bold text-navy text-2xl">All Boat Bookings</h3>
                        </div>
                        <div class="flex items-center gap-3">
                            <!-- Static Search Field - No JavaScript Filter -->
                            <div class="relative">
                                <i
                                    class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-xs"></i>
                                <input type="text" placeholder="Search by boat,  or reservation..."
                                    class="od-search-input">
                            </div>
                            <span class="text-xs text-gray-500 bg-gray-100 px-3 py-1.5 rounded-full"><i
                                    class="far fa-calendar-alt mr-1"></i> 3 bookings</span>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="od-booking-table min-w-[1300px]">
                            <thead>
                                <tr>
                                    <th>Reservation #</th>
                                    <th>Username</th>
                                    <th>Phone</th>
                                    <th>Payment</th>
                                    <th>License</th>
                                    <th>Passport</th>
                                    <th>Pay Method</th>
                                    <th>Date</th>
                                    <th>Boat</th>
                                    <th>Status</th>
                                    <th>Chat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="font-mono text-xs font-bold">1776677335</td>
                                    <td class="font-medium">Rohan</td>
                                    <td class="text-gray-500 text-xs">N/A</td>
                                    <td><span class="od-badge-notpaid"><i class="fas fa-hourglass-half mr-1"></i>Not
                                            Paid</span></td>
                                    <td class="text-gray-400 text-xs">No license</td>
                                    <td class="text-gray-400 text-xs">No passport</td>
                                    <td class="text-gray-400 text-xs">—</td>
                                    <td class="whitespace-nowrap text-xs">20-04-2026</td>
                                    <td class="od-boat-details-cell">
                                        <a href="#" class="od-boat-link">Sunseeker Camargue 47</a>
                                        <div class="od-boat-subtitle">12 guests · 47ft · Yacht Charter</div>
                                    </td>
                                    <td><select class="od-status-select od-declined text-xs">
                                            <option value="approved">Approved</option>
                                            <option value="declined" selected>Declined</option>
                                            <option value="cancelled">Cancelled</option>
                                        </select></td>
                                    <td><button class="od-chat-btn"><i
                                                class="fab fa-rocketchat mr-1"></i>Chat</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-mono text-xs font-bold">1776677336</td>
                                    <td class="font-medium">Emma Watson</td>
                                    <td class="text-gray-500 text-xs">+44 7700 123456</td>
                                    <td><span class="od-badge-paid"><i
                                                class="fas fa-check-circle mr-1"></i>Paid</span>
                                    </td>
                                    <td class="text-green-600 text-xs bg-green-50 px-2 py-0.5 rounded">Provided</td>
                                    <td class="text-green-600 text-xs bg-green-50 px-2 py-0.5 rounded">Provided</td>
                                    <td class="text-gray-600 text-xs">VISA</td>
                                    <td class="whitespace-nowrap text-xs">15-05-2026</td>
                                    <td class="od-boat-details-cell">
                                        <a href="#" class="od-boat-link">Lagoon 450 F</a>
                                        <div class="od-boat-subtitle">Catamaran · 8 guests · Sleep & Boat</div>
                                    </td>
                                    <td><select class="od-status-select od-approved text-xs">
                                            <option value="approved" selected>Approved</option>
                                            <option value="declined">Declined</option>
                                            <option value="cancelled">Cancelled</option>
                                        </select></td>
                                    <td><button class="od-chat-btn"><i
                                                class="fab fa-rocketchat mr-1"></i>Chat</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-mono text-xs font-bold">1776677337</td>
                                    <td class="font-medium">Michael Chen</td>
                                    <td class="text-gray-500 text-xs">+65 9123 4567</td>
                                    <td><span class="od-badge-paid"><i
                                                class="fas fa-check-circle mr-1"></i>Paid</span>
                                    </td>
                                    <td class="text-green-600 text-xs bg-green-50 px-2 py-0.5 rounded">Provided</td>
                                    <td class="text-green-600 text-xs bg-green-50 px-2 py-0.5 rounded">Provided</td>
                                    <td class="text-gray-600 text-xs">Amex</td>
                                    <td class="whitespace-nowrap text-xs">28-05-2026</td>
                                    <td class="od-boat-details-cell">
                                        <a href="#" class="od-boat-link">Azimut 60</a>
                                        <div class="od-boat-subtitle">10 guests · Luxury Yacht</div>
                                    </td>
                                    <td><select class="od-status-select od-cancelled text-xs">
                                            <option value="approved">Approved</option>
                                            <option value="declined">Declined</option>
                                            <option value="cancelled" selected>Cancelled</option>
                                        </select></td>
                                    <td><button class="od-chat-btn"><i
                                                class="fab fa-rocketchat mr-1"></i>Chat</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="px-6 py-4 border-t border-gray-100 flex justify-between items-center flex-wrap gap-3">
                        <div class="text-xs text-gray-400"><i class="fas fa-info-circle text-brand mr-1"></i> Showing
                            3
                            bookings · Horizontal scroll available →</div>
                        <div class="flex gap-2">
                            <button
                                class="border border-gray-300 rounded-xl px-3 py-1.5 text-xs hover:bg-gray-50">Previous</button>
                            <button class="bg-brand text-white rounded-xl px-3 py-1.5 text-xs shadow-sm">1</button>
                            <button
                                class="border border-gray-300 rounded-xl px-3 py-1.5 text-xs hover:bg-gray-50">Next</button>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </section>
</x-guest-layout>
