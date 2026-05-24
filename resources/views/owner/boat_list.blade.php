<x-guest-layout>
    <section class="font-inter bg-gradient-to-br from-[#F4F7FC] to-[#EEF2F8] min-h-screen relative">

        <div class="bmt-bg-circles">
            <div class="bmt-circle"></div>
            <div class="bmt-circle"></div>
            <div class="bmt-circle"></div>
            <div class="bmt-circle"></div>
            <div class="bmt-circle"></div>
        </div>

        <div class="lg:hidden fixed pt-4 md:pt-[90px]  left-5 z-50">

            <button id="od-menuToggle"
                class="bg-white/90 backdrop-blur-md p-3 rounded-2xl shadow-xl border border-white/40 transition-all duration-300 hover:scale-105 active:scale-95">

                <i id="od-menuIcon" class="fas fa-bars text-navy text-lg transition-all duration-300"></i>

            </button>

        </div>
        <div id="od-sidebarOverlay" class="fixed inset-0 bg-black/20 backdrop-blur-sm hidden lg:hidden"></div>

        <div class="flex min-h-screen relative z-10">

            <!-- Sidebar -->
            <x-owner-sidebar />

            <!-- Main Content - Boats Management -->
            <main class="flex-1 od-main-with-sidebar pt-24 p-6 lg:pt-8 lg:p-8 xl:p-10">
                <div class="max-w-7xl mx-auto">

                    <!-- Header -->
                    <div class="mb-8">
                        <div class="flex justify-between items-start flex-wrap gap-5">
                            <div>
                                <div class="flex items-center gap-3 flex-wrap">
                                    <h1 class="text-3xl md:text-4xl font-extrabold text-navy tracking-tight"><i
                                            class="fas fa-ship text-brand mr-3"></i>My Boats</h1>

                                </div>
                                <p class="text-gray-500 text-sm mt-2">Manage all your registered boats - view, edit, or
                                    remove listings</p>
                            </div>
                            <a href="./yachtchater.html"
                                class="flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-brand to-brand-dark text-white rounded-xl font-semibold text-sm shadow-md hover:shadow-lg transition-all">
                                <i class="fas fa-plus-circle"></i> Add New Boat
                            </a>
                        </div>
                    </div>

                    <!-- Stats Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-8">
                        <div class="bmt-stat-card p-5">
                            <div class="flex justify-between items-start">
                                <div>
                                    <p class="text-gray-400 text-xs uppercase font-bold">Total Boats</p>
                                    <p class="text-3xl font-extrabold text-navy mt-1">4</p>
                                </div>
                                <div class="w-10 h-10 rounded-xl bg-brand/10 flex items-center justify-center">
                                    <i class="fas fa-ship text-brand text-lg"></i>
                                </div>
                            </div>
                        </div>
                        <div class="bmt-stat-card p-5">
                            <div class="flex justify-between items-start">
                                <div>
                                    <p class="text-gray-400 text-xs uppercase font-bold">Active Listings</p>
                                    <p class="text-3xl font-extrabold text-emerald-600 mt-1">3</p>
                                </div>
                                <div class="w-10 h-10 rounded-xl bg-emerald-50 flex items-center justify-center">
                                    <i class="fas fa-check-circle text-emerald-500 text-lg"></i>
                                </div>
                            </div>
                        </div>
                        <div class="bmt-stat-card p-5">
                            <div class="flex justify-between items-start">
                                <div>
                                    <p class="text-gray-400 text-xs uppercase font-bold">Pending Approval</p>
                                    <p class="text-3xl font-extrabold text-amber-600 mt-1">1</p>
                                </div>
                                <div class="w-10 h-10 rounded-xl bg-amber-50 flex items-center justify-center">
                                    <i class="fas fa-clock text-amber-500 text-lg"></i>
                                </div>
                            </div>
                        </div>
                        <div class="bmt-stat-card p-5">
                            <div class="flex justify-between items-start">
                                <div>
                                    <p class="text-gray-400 text-xs uppercase font-bold">Total Bookings</p>
                                    <p class="text-3xl font-extrabold text-navy mt-1">12</p>
                                </div>
                                <div class="w-10 h-10 rounded-xl bg-sky-50 flex items-center justify-center">
                                    <i class="fas fa-calendar-check text-sky-500 text-lg"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Search and Filter Bar -->
                    <div class="bg-white rounded-2xl p-4 border border-gray-100 shadow-sm mb-6">
                        <div class="flex flex-wrap justify-between items-center gap-4">
                            <div class="relative">
                                <i
                                    class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                                <input type="text" id="bmt-searchInput" class="bmt-search-input"
                                    placeholder="Search by boat name, type...">
                            </div>
                            <div class="flex gap-3">
                                <select
                                    class="px-4 py-2 rounded-xl border border-gray-200 text-sm bg-white focus:outline-none focus:border-brand">
                                    <option value="all">All Types</option>
                                    <option value="yacht">Yacht Charter</option>
                                    <option value="boatel">Boatel Sleep & Boat</option>
                                </select>
                                <select
                                    class="px-4 py-2 rounded-xl border border-gray-200 text-sm bg-white focus:outline-none focus:border-brand">
                                    <option value="all">All Status</option>
                                    <option value="active">Active</option>
                                    <option value="pending">Pending</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Boats Table -->
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-md overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="bmt-boats-table min-w-[900px]">
                                <thead>
                                    <tr>
                                        <th><i class="fas fa-image mr-2 text-brand"></i>Image</th>
                                        <th><i class="fas fa-heading mr-2 text-brand"></i>Title</th>
                                        <th><i class="fas fa-tag mr-2 text-brand"></i>Rent (€)</th>
                                        <th><i class="fas fa-clock mr-2 text-brand"></i>Uploaded Time</th>
                                        <th><i class="fas fa-ship mr-2 text-brand"></i>Type</th>
                                        <th><i class="fas fa-percent mr-2 text-brand"></i>Discount</th>
                                        <th><i class="fas fa-calendar-alt mr-2 text-brand"></i>Offer Dates</th>
                                        <th><i class="fas fa-circle mr-2 text-brand"></i>Status</th>
                                        <th><i class="fas fa-cog mr-2 text-brand"></i>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="bmt-boatsTableBody">
                                    <!-- Boat 1 - Sunseeker (Yacht Charter) -->
                                    <tr>
                                        <td><img src="https://images.unsplash.com/photo-1567899378494-47b22a2ae96a?w=60&h=60&fit=crop"
                                                class="w-12 h-12 rounded-lg object-cover"></td>
                                        <td class="font-semibold text-navy">Sunseeker Camargue 47</td>
                                        <td class="font-bold text-brand">€1,150</td>
                                        <td class="text-gray-500 text-sm">2026-04-10 06:08:34</td>
                                        <td><span class="bmt-badge-active">Yacht Charter</span></td>
                                        <td class="text-gray-500">—</td>
                                        <td class="text-gray-500 text-sm">—</td>
                                        <td><span class="bmt-badge-active"><i
                                                    class="fas fa-check-circle mr-1"></i>Active</span></td>
                                        <td>
                                            <div class="flex gap-2">
                                                <a href="#" class="bmt-action-btn bmt-edit-btn"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="#" class="bmt-action-btn bmt-delete-btn"><i
                                                        class="fas fa-trash"></i></a>
                                                <a href="#" class="bmt-action-btn bmt-view-btn"><i
                                                        class="fas fa-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Boat 2 - Lagoon 450 (Yacht Charter) -->
                                    <tr>
                                        <td><img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?w=60&h=60&fit=crop"
                                                class="w-12 h-12 rounded-lg object-cover"></td>
                                        <td class="font-semibold text-navy">Lagoon 450 F</td>
                                        <td class="font-bold text-brand">€2,550</td>
                                        <td class="text-gray-500 text-sm">2026-03-15 10:22:15</td>
                                        <td><span class="bmt-badge-active">Yacht Charter</span></td>
                                        <td class="text-green-600">10% OFF</td>
                                        <td class="text-gray-500 text-sm">May 15 - Jun 15</td>
                                        <td><span class="bmt-badge-active"><i
                                                    class="fas fa-check-circle mr-1"></i>Active</span></td>
                                        <td>
                                            <div class="flex gap-2">
                                                <a href="#" class="bmt-action-btn bmt-edit-btn"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="#" class="bmt-action-btn bmt-delete-btn"><i
                                                        class="fas fa-trash"></i></a>
                                                <a href="#" class="bmt-action-btn bmt-view-btn"><i
                                                        class="fas fa-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Boat 3 - Boatel Houseboat (Sleep & Boat) -->
                                    <tr>
                                        <td><img src="https://images.unsplash.com/photo-1589633546862-174acf40ef8b?w=60&h=60&fit=crop"
                                                class="w-12 h-12 rounded-lg object-cover"></td>
                                        <td class="font-semibold text-navy">Luxury Houseboat</td>
                                        <td class="font-bold text-brand">€450</td>
                                        <td class="text-gray-500 text-sm">2026-04-20 14:30:00</td>
                                        <td><span class="bmt-badge-active">Boatel Sleep & Boat</span></td>
                                        <td class="text-gray-500">—</td>
                                        <td class="text-gray-500 text-sm">—</td>
                                        <td><span class="bmt-badge-active"><i
                                                    class="fas fa-check-circle mr-1"></i>Active</span></td>
                                        <td>
                                            <div class="flex gap-2">
                                                <a href="#" class="bmt-action-btn bmt-edit-btn"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="#" class="bmt-action-btn bmt-delete-btn"><i
                                                        class="fas fa-trash"></i></a>
                                                <a href="#" class="bmt-action-btn bmt-view-btn"><i
                                                        class="fas fa-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Boat 4 - Azimut 60 (Pending) -->
                                    <tr>
                                        <td><img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?w=60&h=60&fit=crop"
                                                class="w-12 h-12 rounded-lg object-cover"></td>
                                        <td class="font-semibold text-navy">Azimut 60</td>
                                        <td class="font-bold text-brand">€6,000</td>
                                        <td class="text-gray-500 text-sm">2026-04-25 09:15:00</td>
                                        <td><span class="bmt-badge-pending">Yacht Charter</span></td>
                                        <td class="text-gray-500">—</td>
                                        <td class="text-gray-500 text-sm">—</td>
                                        <td><span class="bmt-badge-pending"><i
                                                    class="fas fa-hourglass-half mr-1"></i>Pending</span></td>
                                        <td>
                                            <div class="flex gap-2">
                                                <a href="#" class="bmt-action-btn bmt-edit-btn"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="#" class="bmt-action-btn bmt-delete-btn"><i
                                                        class="fas fa-trash"></i></a>
                                                <a href="#" class="bmt-action-btn bmt-view-btn"><i
                                                        class="fas fa-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Table Footer with Pagination -->
                        <div
                            class="px-6 py-4 border-t border-gray-100 flex justify-between items-center flex-wrap gap-3">
                            <div class="text-sm text-gray-500">
                                <i class="fas fa-info-circle text-brand mr-1"></i> Showing 1 to 4 of 4 entries
                            </div>
                            <div class="bmt-pagination">
                                <button class="bmt-page-btn"><i class="fas fa-chevron-left"></i></button>
                                <button class="bmt-page-btn active">1</button>
                                <button class="bmt-page-btn">2</button>
                                <button class="bmt-page-btn"><i class="fas fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Tips Card -->
                    <div
                        class="mt-6 bg-gradient-to-r from-brand/5 to-transparent rounded-2xl p-4 border border-brand/10">
                        <div class="flex items-center gap-3 flex-wrap">
                            <i class="fas fa-lightbulb text-brand text-xl"></i>
                            <p class="text-sm text-gray-600"><span class="font-semibold text-navy">Quick Tip:</span>
                                Keep your boat listings updated with high-quality photos and seasonal discounts to
                                attract more customers!</p>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </section>
</x-guest-layout>
