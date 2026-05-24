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

             <x-guest-sidebar />

            <main class="flex-1 main-with-sidebar pt-24 p-6 lg:pt-8 lg:p-8 xl:p-10">
                <div class="mb-10">
                    <div class="flex justify-between items-start flex-wrap gap-5">
                        <div>
                            <div class="flex items-center gap-3 flex-wrap">
                                <h1 class="text-3xl md:text-4xl font-extrabold text-navy tracking-tight">Welcome back,
                                    Ashish!</h1>
                                <span class="wave-hand text-4xl">⚓</span>
                            </div>
                            <p class="text-gray-500 text-sm mt-2 max-w-xl">Your maritime journey at a glance — manage
                                bookings, explore nautical adventures, and set sail with iBoatel.</p>
                        </div>
                        <div class="flex items-center gap-3 sm:gap-4">
                            <div class="relative group">
                                <div
                                    class="w-11 h-11 rounded-full bg-white shadow-md flex items-center justify-center cursor-pointer border border-gray-200">
                                    <i class="fas fa-bell text-gray-500 text-base group-hover:text-brand"></i>
                                </div>
                                <span
                                    class="absolute -top-1 -right-1 w-5 h-5 bg-gradient-to-br from-red-500 to-rose-600 text-white text-[10px] font-bold rounded-full flex items-center justify-center">3</span>
                            </div>
                            <div
                                class="flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-brand/10 to-brand/5 rounded-full border border-brand/30">
                                <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span>
                                <span class="text-[11px] font-bold text-brand uppercase tracking-wider">Live
                                    Session</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stat cards with refined rounded corner accents (each card gets a unique tone matching icon bg) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5 lg:gap-6 mb-12">
                    <!-- Total Bookings - brand accent (blue) -->
                    <div class="stat-card accent-brand p-5 relative">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-400 text-[11px] uppercase tracking-wider font-bold">Total Bookings
                                </p>
                                <p class="text-4xl font-extrabold text-navy mt-2">4</p>
                                <p class="text-[11px] text-gray-400 mt-1"><i
                                        class="fas fa-check-circle text-brand text-[9px]"></i> Active & past trips</p>
                            </div>
                            <div
                                class="w-11 h-11 rounded-2xl bg-gradient-to-br from-brand/20 to-brand/5 flex items-center justify-center">
                                <i class="fas fa-calendar-check text-brand text-xl"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Total Spent - amber accent -->
                    <div class="stat-card accent-amber p-5 relative">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-400 text-[11px] uppercase tracking-wider font-bold">Total Spent</p>
                                <p class="text-4xl font-extrabold text-navy mt-2">€12,100</p>
                                <p class="text-[11px] text-gray-400 mt-1">Premium experiences</p>
                            </div>
                            <div class="w-11 h-11 rounded-2xl bg-amber-50 flex items-center justify-center">
                                <i class="fas fa-euro-sign text-amber-600 text-xl"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Confirmed - emerald accent -->
                    <div class="stat-card accent-emerald p-5 relative">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-400 text-[11px] uppercase tracking-wider font-bold">Confirmed</p>
                                <p class="text-4xl font-extrabold text-emerald-600 mt-2">2</p>
                                <p class="text-[11px] text-gray-400 mt-1">Paid & verified</p>
                            </div>
                            <div class="w-11 h-11 rounded-2xl bg-emerald-50 flex items-center justify-center">
                                <i class="fas fa-check-double text-emerald-500 text-xl"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Upcoming - sky accent -->
                    <div class="stat-card accent-sky p-5 relative">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-gray-400 text-[11px] uppercase tracking-wider font-bold">Upcoming</p>
                                <p class="text-4xl font-extrabold text-sky-600 mt-2">1</p>
                                <p class="text-[11px] text-gray-400 mt-1">Next: 25 May 2026</p>
                            </div>
                            <div class="w-11 h-11 rounded-2xl bg-sky-50 flex items-center justify-center">
                                <i class="fas fa-ship text-sky-500 text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>

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
                            <div
                                class="info-field flex flex-col sm:flex-row sm:justify-between sm:items-center gap-1.5">
                                <span class="text-gray-500 text-sm font-medium">Full Name</span><span
                                    class="font-semibold text-navy">Ashish Rajput</span></div>
                            <div
                                class="info-field flex flex-col sm:flex-row sm:justify-between sm:items-center gap-1.5">
                                <span class="text-gray-500 text-sm">Username</span><span
                                    class="font-semibold text-brand">@aaa123</span></div>
                            <div
                                class="info-field flex flex-col sm:flex-row sm:justify-between sm:items-center gap-1.5">
                                <span class="text-gray-500 text-sm">Email</span><span
                                    class="text-gray-700 text-sm">rajputashish1751@gmail.com</span></div>
                            <div
                                class="info-field flex flex-col sm:flex-row sm:justify-between sm:items-center gap-1.5">
                                <span class="text-gray-500 text-sm">Phone</span><span
                                    class="font-semibold text-navy">+91 7217511751</span></div>
                            <div
                                class="info-field flex flex-col sm:flex-row sm:justify-between sm:items-center gap-1.5">
                                <span class="text-gray-500 text-sm">Address</span><span
                                    class="text-gray-700 text-sm">Vill & post Gajraula shiv</span></div>
                            <div
                                class="info-field flex flex-col sm:flex-row sm:justify-between sm:items-center gap-1.5">
                                <span class="text-gray-500 text-sm">City, State</span><span
                                    class="text-gray-700 text-sm">Altıağac, Balkh</span></div>
                            <div
                                class="info-field flex flex-col sm:flex-row sm:justify-between sm:items-center gap-1.5">
                                <span class="text-gray-500 text-sm">Country</span><span
                                    class="font-semibold text-navy">Afghanistan</span></div>
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
                            class="bg-gradient-to-br from-brand/5 via-white to-white rounded-2xl p-5 mb-6 border border-brand/20 relative overflow-hidden">
                            <div class="absolute right-3 bottom-1 opacity-10 text-6xl"><i class="fas fa-map"></i>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-14 h-14 rounded-xl bg-brand/25 flex items-center justify-center"><i
                                        class="fas fa-trophy text-brand text-3xl"></i></div>
                                <div>
                                    <p class="font-extrabold text-navy text-lg">Standard Skipper</p>
                                    <p class="text-xs text-gray-500">Certified mariner • ICC License</p>
                                </div>
                                <span
                                    class="ml-auto px-3 py-1.5 bg-brand/15 text-brand text-[10px] font-black rounded-full uppercase">SAILING</span>
                            </div>
                        </div>
                        <div class="space-y-3.5">
                            <div
                                class="info-field flex flex-col sm:flex-row sm:justify-between sm:items-center gap-1.5">
                                <span class="text-gray-500 text-sm">Navigation Level</span><span
                                    class="px-3 py-1 bg-sky-100 text-sky-800 text-xs font-bold rounded-full">BEGINNER →
                                    ADVANCING</span></div>
                            <div
                                class="info-field flex flex-col sm:flex-row sm:justify-between sm:items-center gap-1.5">
                                <span class="text-gray-500 text-sm">Role Type</span><span
                                    class="font-semibold text-navy">Premium Guest</span></div>
                            <div class="info-field"><span class="text-gray-500 text-sm block mb-2">Bio</span>
                                <p class="text-gray-700 text-sm">efrweff — passionate sailor, always ready for the next
                                    tide.</p>
                            </div>
                        </div>
                        <div class="mt-6 pt-5 border-t border-gray-100">
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-4">📄 Official
                                Documents</p>
                            <div class="flex gap-3 flex-wrap">
                                <a href="#"
                                    class="inline-flex items-center gap-2 px-5 py-2.5 bg-brand/10 hover:bg-brand/20 text-brand rounded-xl text-sm font-semibold transition-all"><i
                                        class="fas fa-anchor"></i> Sailing License</a>
                                <a href="#"
                                    class="inline-flex items-center gap-2 px-5 py-2.5 bg-brand/10 hover:bg-brand/20 text-brand rounded-xl text-sm font-semibold transition-all"><i
                                        class="fas fa-passport"></i> Passport / ID</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-7 border border-gray-100 shadow-md">
                    <div class="flex justify-between items-center mb-6 pb-2 border-b border-gray-100">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-xl bg-brand/10 flex items-center justify-center"><i
                                    class="fas fa-list-ul text-brand text-base"></i></div>
                            <h3 class="font-bold text-navy text-2xl">Upcoming & History</h3>
                        </div>
                        <span class="text-xs text-gray-500 bg-gray-100 px-3 py-1.5 rounded-full font-bold">4
                            reservations</span>
                    </div>
                    <div class="space-y-4">
                        <div class="booking-card p-5">
                            <div class="flex flex-wrap items-center justify-between gap-4">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-12 h-12 rounded-xl bg-gradient-to-br from-brand/30 to-brand/5 flex items-center justify-center">
                                        <i class="fas fa-ship text-brand text-xl"></i></div>
                                    <div><span
                                            class="text-brand font-mono text-[11px] font-bold bg-brand/10 px-2 py-0.5 rounded-full">#BK-1001</span>
                                        <h4 class="font-bold text-navy text-base mt-1">Bonita Catamaran</h4>
                                        <p class="text-xs text-gray-500"><i class="far fa-calendar-alt mr-1"></i> 15
                                            May 2026</p>
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center gap-3"><span
                                        class="badge-paid px-3 py-1.5 rounded-full text-[10px] font-bold"><i
                                            class="fas fa-check-circle"></i> Paid</span><span
                                        class="badge-verified px-3 py-1.5 rounded-full text-[10px] font-bold"><i
                                            class="fas fa-shield-alt"></i> Verified</span><span
                                        class="text-2xl font-black text-navy">€1,150</span><button
                                        class="text-brand text-xs font-bold hover:underline">Details →</button></div>
                            </div>
                        </div>
                        <div class="booking-card p-5">
                            <div class="flex flex-wrap items-center justify-between gap-4">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-100 to-amber-50 flex items-center justify-center">
                                        <i class="fas fa-fan text-amber-600 text-xl"></i></div>
                                    <div><span
                                            class="text-amber-600 font-mono text-[11px] font-bold bg-amber-100 px-2 py-0.5 rounded-full">#BK-1002</span>
                                        <h4 class="font-bold text-navy text-base mt-1">Sunseeker Predator</h4>
                                        <p class="text-xs text-gray-500"><i class="far fa-calendar-alt mr-1"></i> 10
                                            Apr 2026</p>
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center gap-3"><span
                                        class="badge-pending px-3 py-1.5 rounded-full text-[10px] font-bold"><i
                                            class="fas fa-clock"></i> Pending</span><span
                                        class="badge-pending px-3 py-1.5 rounded-full text-[10px] font-bold"><i
                                            class="fas fa-hourglass-half"></i> Awaiting</span><span
                                        class="text-2xl font-black text-navy">€2,400</span><button
                                        class="text-brand text-xs font-bold hover:underline">Details →</button></div>
                            </div>
                        </div>
                        <div class="booking-card p-5">
                            <div class="flex flex-wrap items-center justify-between gap-4">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-12 h-12 rounded-xl bg-gradient-to-br from-brand/20 to-brand/5 flex items-center justify-center">
                                        <i class="fas fa-sailboat text-brand text-xl"></i></div>
                                    <div><span
                                            class="text-brand font-mono text-[11px] font-bold bg-brand/10 px-2 py-0.5 rounded-full">#BK-1003</span>
                                        <h4 class="font-bold text-navy text-base mt-1">Lagoon 450</h4>
                                        <p class="text-xs text-gray-500"><i class="far fa-calendar-alt mr-1"></i> 25
                                            May 2026</p>
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center gap-3"><span
                                        class="badge-paid px-3 py-1.5 rounded-full text-[10px] font-bold"><i
                                            class="fas fa-check-circle"></i> Paid</span><span
                                        class="badge-verified px-3 py-1.5 rounded-full text-[10px] font-bold"><i
                                            class="fas fa-shield-alt"></i> Verified</span><span
                                        class="text-2xl font-black text-navy">€2,550</span><button
                                        class="text-brand text-xs font-bold hover:underline">Details →</button></div>
                            </div>
                        </div>
                        <div class="booking-card p-5">
                            <div class="flex flex-wrap items-center justify-between gap-4">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-12 h-12 rounded-xl bg-gradient-to-br from-red-50 to-red-100 flex items-center justify-center">
                                        <i class="fas fa-crown text-red-400 text-xl"></i></div>
                                    <div><span
                                            class="text-red-500 font-mono text-[11px] font-bold bg-red-100 px-2 py-0.5 rounded-full">#BK-1004</span>
                                        <h4 class="font-bold text-navy text-base mt-1">Azimut 60</h4>
                                        <p class="text-xs text-gray-500"><i class="far fa-calendar-alt mr-1"></i> 01
                                            Mar 2026</p>
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center gap-3"><span
                                        class="badge-cancelled px-3 py-1.5 rounded-full text-[10px] font-bold"><i
                                            class="fas fa-times-circle"></i> Cancelled</span><span
                                        class="badge-cancelled px-3 py-1.5 rounded-full text-[10px] font-bold"><i
                                            class="fas fa-ban"></i> Refunded</span><span
                                        class="text-2xl font-black text-navy line-through opacity-50">€6,000</span><button
                                        class="text-brand text-xs font-bold hover:underline">Details →</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 pt-4 text-center border-t border-gray-100"><a href="#"
                            class="text-brand text-sm font-extrabold hover:underline inline-flex items-center gap-1">Browse
                            All Reservations <i class="fas fa-arrow-right text-xs"></i></a></div>
                </div>
            </main>
        </div>

    </section>
</x-guest-layout>
