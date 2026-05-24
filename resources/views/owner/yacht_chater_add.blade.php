<x-guest-layout>
    <section class="font-inter bg-gradient-to-br from-[#F4F7FC] to-[#EEF2F8] min-h-screen relative">

        <div class="od-bg-circles">
            <div class="od-circle"></div>
            <div class="od-circle"></div>
            <div class="od-circle"></div>
            <div class="od-circle"></div>
            <div class="od-circle"></div>
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

            <!-- Main Content -->
            <main class="flex-1 od-main-with-sidebar pt-24 p-6 lg:pt-8 lg:p-8 xl:p-10">
                <div class="max-w-6xl mx-auto">

                    <div class="mb-8">
                        <div class="flex items-center gap-3 flex-wrap">
                            <h1 class="text-3xl md:text-4xl font-extrabold text-navy tracking-tight"><i
                                    class="fas fa-ship text-brand mr-3"></i>Register Your Boat <i
                                    class="fas fa-plus-circle text-brand text-2xl ml-2"></i></h1>
                            <span class="yacht-wave-hand text-4xl"></span>
                        </div>
                        <p class="text-gray-500 text-sm mt-2"><i class="fas fa-info-circle text-brand mr-1"></i>Fill in
                            the details below to list your boat on iBoatel — Yacht Charter</p>
                            @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    </div>

                    <form action="{{route('owner.YachtStore')}}" method="post" enctype="multipart/form-data">
                      @csrf
                        <!-- SECTION 1: OWNER INFORMATION -->
                        <div class="bg-white rounded-3xl p-7 border border-gray-100 shadow-md mb-8">
                            <div class="flex items-center gap-3 mb-6 pb-3 border-b border-gray-100">
                                <div
                                    class="w-10 h-10 rounded-xl bg-gradient-to-br from-brand/20 to-brand/10 flex items-center justify-center">
                                    <i class="fas fa-user-circle text-brand text-xl"></i>
                                </div>
                                <h3 class="font-bold text-navy text-2xl">Owner Information</h3>
                                <i class="fas fa-anchor text-brand/40 ml-auto text-xl"></i>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div><label class="yacht-form-label"><i class="fas fa-user mr-2 text-brand"></i>First
                                        Name <span class="text-red-500">*</span></label><input type="text"
                                        class="yacht-form-input" name="first_name" placeholder="Enter first name">
                                </div>
                                <div><label class="yacht-form-label"><i class="fas fa-user mr-2 text-brand"></i>Last
                                        Name <span class="text-red-500">*</span></label><input type="text"
                                        class="yacht-form-input" name="last_name" placeholder="Enter last name">
                                </div>
                                <div><label class="yacht-form-label"><i
                                            class="fas fa-envelope mr-2 text-brand"></i>Email Address <span
                                            class="text-red-500">*</span></label><input type="email"
                                        class="yacht-form-input" name="email" placeholder="Enter email address">
                                </div>
                                <div><label class="yacht-form-label"><i
                                            class="fas fa-phone-alt mr-2 text-brand"></i>Phone Number <span
                                            class="text-red-500">*</span></label><input type="tel"
                                        class="yacht-form-input" name="phone" placeholder="Enter phone number">
                                </div>
                                <div>
                                    <label class="yacht-form-label"><i
                                            class="fas fa-question-circle mr-2 text-brand"></i>Support <span
                                            class="text-red-500">*</span></label>
                                    <select class="yacht-form-select" name="support" id="yacht-supportSelect">
                                        <option value="0"><i class="fas fa-search mr-2"></i>Found iBoatel Myself
                                        </option>
                                        <option value="1"><i class="fas fa-users mr-2"></i>Someone Proposed Me
                                        </option>
                                    </select>
                                </div>
                                <div><label class="yacht-form-label"><i class="fas fa-globe mr-2 text-brand"></i>Country
                                        <span class="text-red-500">*</span></label>
                                    <select class="yacht-form-select" name="country">
                                        <option value=""><i class="fas fa-map-marker-alt mr-2"></i>Select
                                            Country
                                        </option>
                                        <option value="Australia"><i class="fas fa-flag mr-2"></i>Australia</option>
                                        <option value="India"><i class="fas fa-flag mr-2"></i>India</option>
                                        <option value="United Kingdom"><i class="fas fa-flag mr-2"></i>United Kingdom
                                        </option>
                                        <option value="United States"><i class="fas fa-flag mr-2"></i>United States
                                        </option>
                                        <option value="France"><i class="fas fa-flag mr-2"></i>France</option>
                                        <option value="Germany"><i class="fas fa-flag mr-2"></i>Germany</option>
                                        <option value="Italy"><i class="fas fa-flag mr-2"></i>Italy</option>
                                        <option value="Spain"><i class="fas fa-flag mr-2"></i>Spain</option>
                                        <option value="Dubai"><i class="fas fa-flag mr-2"></i>Dubai</option>
                                    </select>
                                </div>
                                <div><label class="yacht-form-label"><i class="fas fa-city mr-2 text-brand"></i>City
                                        <span class="text-red-500">*</span></label><input type="text"
                                        class="yacht-form-input" name="city" placeholder="Enter city"></div>
                            </div>

                            <div id="yacht-partnerRow" class="mt-5 yacht-partner-row">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                    <div><label class="yacht-form-label"><i
                                                class="fas fa-user-friends mr-2 text-brand"></i>Partner
                                            Name</label><input type="text" class="yacht-form-input"
                                            name="partner_name" placeholder="Enter partner name"></div>
                                    <div><label class="yacht-form-label"><i
                                                class="fas fa-envelope mr-2 text-brand"></i>Partner Email</label><input
                                            type="email" class="yacht-form-input" name="partner_email"
                                            placeholder="Enter partner email"></div>
                                </div>
                            </div>
                        </div>

                        <!-- SECTION 2: TECHNICAL DETAILS -->
                        <div class="bg-white rounded-3xl p-7 border border-gray-100 shadow-md mb-8">
                            <div class="flex items-center gap-3 mb-6 pb-3 border-b border-gray-100">
                                <div
                                    class="w-10 h-10 rounded-xl bg-gradient-to-br from-brand/20 to-brand/10 flex items-center justify-center">
                                    <i class="fas fa-chart-line text-brand text-xl"></i>
                                </div>
                                <h3 class="font-bold text-navy text-2xl"><i
                                        class="fas fa-microchip mr-2 text-brand"></i>Technical Details</h3>
                                <i class="fas fa-water text-brand/40 ml-auto text-xl"></i>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                                <div><label class="yacht-form-label"><i
                                            class="fas fa-users mr-2 text-brand"></i>Onboard
                                        Capacity</label><input type="number" class="yacht-form-input"
                                        name="onboard_capacity" placeholder="Max passengers"></div>
                                <div><label class="yacht-form-label"><i class="fas fa-bed mr-2 text-brand"></i>Number
                                        of
                                        Cabins</label><input type="number" class="yacht-form-input" name="cabins"
                                        placeholder="Number of cabins"></div>
                                <div><label class="yacht-form-label"><i
                                            class="fas fa-moon mr-2 text-brand"></i>Capacity
                                        for Sleeping</label><input type="number" class="yacht-form-input"
                                        name="sleeping_capacity" placeholder="Sleeping capacity"></div>
                                <div><label class="yacht-form-label"><i
                                            class="fas fa-toilet mr-2 text-brand"></i>Number
                                        of Bathrooms</label><input type="number" class="yacht-form-input"
                                        name="bathrooms" placeholder="Number of bathrooms"></div>
                                <div><label class="yacht-form-label"><i
                                            class="fas fa-calendar-alt mr-2 text-brand"></i>Year of
                                        Construction</label><input type="number" class="yacht-form-input" placeholder="YYYY" min="1900" max="{{date('Y')}}" step="1"
                                        name="year_built"></div>
                                <div><label class="yacht-form-label"><i class="fas fa-ship mr-2 text-brand"></i>Type
                                        of
                                        Boat</label>
                                    <select class="yacht-form-select" name="boat_type">
                                        <option value=""><i class="fas fa-question-circle mr-2"></i>Select Boat
                                            Type
                                        </option>
                                        <option value="Houseboat"><i class="fas fa-home mr-2"></i>Houseboat</option>
                                        <option value="Catamaran"><i class="fas fa-sailboat mr-2"></i>Catamaran
                                        </option>
                                        <option value="Sailing boat"><i class="fas fa-sailboat mr-2"></i>Sailing Boat
                                        </option>
                                        <option value="Motorboat"><i class="fas fa-ship mr-2"></i>Motorboat</option>
                                        <option value="Yacht"><i class="fas fa-ship mr-2"></i>Yacht</option>
                                    </select>
                                </div>
                                <div><label class="yacht-form-label"><i
                                            class="fas fa-anchor mr-2 text-brand"></i>Harbour / Marina</label><input
                                        type="text" class="yacht-form-input" name="harbour"
                                        placeholder="Harbour name">
                                </div>
                                <div class="md:col-span-2"><label class="yacht-form-label"><i
                                            class="fas fa-heading mr-2 text-brand"></i>Title</label>
                                    <textarea class="yacht-form-input" name="title" rows="2" placeholder="Boat title / headline"></textarea>
                                </div>
                                <div class="md:col-span-3"><label class="yacht-form-label"><i
                                            class="fas fa-align-left mr-2 text-brand"></i>Description</label>
                                    <textarea class="yacht-form-input" name="description" rows="3" placeholder="Describe your boat"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- SECTION 3: BOAT SPECIFICATIONS -->
                        <div class="bg-white rounded-3xl p-7 border border-gray-100 shadow-md mb-8">
                            <div class="flex items-center gap-3 mb-6 pb-3 border-b border-gray-100">
                                <div
                                    class="w-10 h-10 rounded-xl bg-gradient-to-br from-brand/20 to-brand/10 flex items-center justify-center">
                                    <i class="fas fa-ruler-combined text-brand text-xl"></i>
                                </div>
                                <h3 class="font-bold text-navy text-2xl"><i
                                        class="fas fa-tachometer-alt mr-2 text-brand"></i>Boat Specifications</h3>
                                <i class="fas fa-ship text-brand/40 ml-auto text-xl"></i>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                                <div><label class="yacht-form-label"><i
                                            class="fas fa-ruler mr-2 text-brand"></i>Length
                                        Type</label>
                                    <select class="yacht-form-select" name="length_type">
                                        <option value="feet"><i class="fas fa-ruler mr-2"></i>Feet</option>
                                        <option value="meter"><i class="fas fa-ruler mr-2"></i>Meter</option>
                                    </select>
                                </div>
                                <div><label class="yacht-form-label"><i
                                            class="fas fa-arrows-alt-h mr-2 text-brand"></i>Length</label><input
                                        type="number" class="yacht-form-input" name="length" placeholder="Length"
                                        step="0.1"></div>
                                <div><label class="yacht-form-label"><i class="fas fa-clock mr-2 text-brand"></i>Time
                                        Duration</label>
                                    <select class="yacht-form-select" name="time_duration" id="yacht-timeDuration">
                                        <option value="perday" selected><i class="fas fa-calendar-day mr-2"></i>Per
                                            Day
                                        </option>
                                        <option value="perweek"><i class="fas fa-calendar-week mr-2"></i>Per Week
                                        </option>
                                        <option value="add_new"><i class="fas fa-plus-circle mr-2"></i>Add New Period
                                        </option>
                                    </select>
                                </div>
                                <div><label class="yacht-form-label"><i
                                            class="fas fa-tag mr-2 text-brand"></i>Advanced
                                        Price (€)</label><input type="number" class="yacht-form-input"
                                        name="advanced_price" placeholder="Price" step="0.01"></div>
                                <div><label class="yacht-form-label"><i
                                            class="fas fa-industry mr-2 text-brand"></i>Manufacturer</label><input
                                        type="text" class="yacht-form-input" name="manufacturer"
                                        placeholder="Manufacturer name"></div>
                                <div><label class="yacht-form-label"><i
                                            class="fas fa-car-side mr-2 text-brand"></i>Model</label><input
                                        type="text" class="yacht-form-input" name="model"
                                        placeholder="Model name"></div>
                            </div>

                            <div id="yacht-newPeriodRow" class="mt-5 yacht-new-period-row">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                    <div>
                                        <label class="yacht-form-label"><i
                                                class="fas fa-plus-circle mr-2 text-brand"></i>Select New
                                            Period</label>
                                        <select class="yacht-form-select" name="advance_price_option">
                                            <option value="HalfDay"><i class="fas fa-sun mr-2"></i>Half Day</option>
                                            <option value="2days"><i class="fas fa-calendar-day mr-2"></i>2 Days
                                            </option>
                                            <option value="3days"><i class="fas fa-calendar-day mr-2"></i>3 Days
                                            </option>
                                            <option value="4days"><i class="fas fa-calendar-day mr-2"></i>4 Days
                                            </option>
                                            <option value="5days"><i class="fas fa-calendar-day mr-2"></i>5 Days
                                            </option>
                                            <option value="6days"><i class="fas fa-calendar-day mr-2"></i>6 Days
                                            </option>
                                            <option value="10days"><i class="fas fa-calendar-day mr-2"></i>10 Days
                                            </option>
                                            <option value="15days"><i class="fas fa-calendar-day mr-2"></i>15 Days
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- SECTION 4: MORE TECHNICAL DETAILS -->
                        <div class="bg-white rounded-3xl p-7 border border-gray-100 shadow-md mb-8">
                            <div class="flex items-center gap-3 mb-6 pb-3 border-b border-gray-100">
                                <div
                                    class="w-10 h-10 rounded-xl bg-gradient-to-br from-brand/20 to-brand/10 flex items-center justify-center">
                                    <i class="fas fa-microchip text-brand text-xl"></i>
                                </div>
                                <h3 class="font-bold text-navy text-2xl"><i
                                        class="fas fa-cogs mr-2 text-brand"></i>More
                                    Technical Details</h3>
                                <i class="fas fa-tachometer-alt text-brand/40 ml-auto text-xl"></i>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div><label class="yacht-form-label"><i
                                            class="fas fa-gas-pump mr-2 text-brand"></i>Consumption (L/H)</label><input
                                        type="text" class="yacht-form-input" name="consumption"
                                        placeholder="Fuel consumption"></div>
                                <div><label class="yacht-form-label"><i
                                            class="fas fa-tachometer-alt mr-2 text-brand"></i>Speed
                                        (knots)</label><input type="text" class="yacht-form-input" name="speed"
                                        placeholder="Max speed"></div>
                                <div><label class="yacht-form-label"><i
                                            class="fas fa-users mr-2 text-brand"></i>Number
                                        of Crew</label><input type="number" class="yacht-form-input" name="crew"
                                        placeholder="Crew count"></div>
                                <div><label class="yacht-form-label"><i class="fas fa-engine mr-2 text-brand"></i>Type
                                        of Engine</label><input type="text" class="yacht-form-input"
                                        name="engine" placeholder="Engine type"></div>
                                <div><label class="yacht-form-label"><i
                                            class="fas fa-sailboat mr-2 text-brand"></i>Tender</label>
                                    <select class="yacht-form-select" name="tender">
                                        <option value="1"><i class="fas fa-check-circle mr-2"></i>Yes</option>
                                        <option value="0"><i class="fas fa-times-circle mr-2"></i>No</option>
                                    </select>
                                </div>
                                <div><label class="yacht-form-label"><i
                                            class="fas fa-ban mr-2 text-brand"></i>Cancellation Rules</label>
                                    <select class="yacht-form-select" name="cancellation">
                                        <option value="100"><i
                                                class="fas fa-check-circle text-green-500 mr-2"></i>CONFORT (full
                                            refund
                                            up to 1 day before)</option>
                                        <option value="65"><i
                                                class="fas fa-hourglass-half text-yellow-500 mr-2"></i>INTERMEDIATE
                                            (65%
                                            refund 10 days before)</option>
                                        <option value="50"><i
                                                class="fas fa-exclamation-triangle text-red-500 mr-2"></i>STRICT (50%
                                            refund 30 days before)</option>
                                    </select>
                                </div>
                                <div><label class="yacht-form-label"><i
                                            class="fas fa-droplet mr-2 text-brand"></i>Fuel
                                        Cost</label>
                                    <select class="yacht-form-select" name="fuel_cost">
                                        <option value=""><i class="fas fa-question-circle mr-2"></i>Select
                                        </option>
                                        <option value="Included"><i class="fas fa-check-circle mr-2"></i>Included
                                        </option>
                                        <option value="Excluded"><i class="fas fa-times-circle mr-2"></i>Excluded
                                        </option>
                                    </select>
                                </div>
                                <div><label class="yacht-form-label"><i
                                            class="fas fa-user-tie mr-2 text-brand"></i>Captain</label>
                                    <select class="yacht-form-select" name="captain">
                                        <option value="0"><i class="fas fa-user-tie mr-2"></i>With Captain
                                        </option>
                                        <option value="1"><i class="fas fa-ship mr-2"></i>Without Captain
                                        </option>
                                    </select>
                                </div>
                                <div><label class="yacht-form-label"><i class="fas fa-clock mr-2 text-brand"></i>Check
                                        In Time</label><input type="time" class="yacht-form-input"
                                        name="check_in">
                                </div>
                                <div><label class="yacht-form-label"><i class="fas fa-clock mr-2 text-brand"></i>Check
                                        Out Time</label><input type="time" class="yacht-form-input"
                                        name="check_out">
                                </div>
                                <div><label class="yacht-form-label"><i
                                            class="fas fa-shield-alt mr-2 text-brand"></i>Amount of Security Deposit
                                        (€)</label><input type="number" class="yacht-form-input"
                                        name="security_deposit" placeholder="Security deposit amount"></div>
                                <div>
                                    <label class="yacht-form-label"><i
                                            class="fas fa-file-pdf mr-2 text-brand"></i>Insurance Document</label>
                                    <div class="yacht-file-upload-card"
                                        onclick="document.getElementById('yacht-insurance').click()">
                                        <div class="flex items-center gap-3">
                                            <i class="fas fa-file-pdf text-2xl text-brand"></i>
                                            <div class="flex-1">
                                                <p class="text-sm font-medium">Upload Insurance <i
                                                        class="fas fa-upload ml-1 text-gray-400"></i></p>
                                                <p class="text-xs text-gray-400">PDF, JPG, PNG up to 5MB</p>
                                            </div>
                                        </div>
                                        <input type="file" id="yacht-insurance" class="hidden"
                                            accept=".pdf,.jpg,.png">
                                    </div>
                                    <div id="yacht-insuranceName" class="text-xs text-brand mt-2"></div>
                                </div>

                                <div class="md:col-span-2 mt-2">
                                    <label class="yacht-form-label"><i
                                            class="fas fa-calendar-times mr-2 text-brand"></i>Select Dates when boat is
                                        not available</label>
                                    <input type="text" id="yacht-unavailableDates" class="yacht-form-input"
                                        placeholder="Click to select multiple dates" readonly>
                                    <p class="text-xs text-gray-400 mt-1"><i class="fas fa-info-circle"></i> You can
                                        select multiple dates when your boat is not available for booking</p>
                                </div>
                            </div>
                        </div>

                        <!-- SECTION 5: PHOTOS UPLOAD -->
                        <div class="bg-white rounded-3xl p-7 border border-gray-100 shadow-md mb-8">
                            <div class="flex items-center gap-3 mb-6 pb-3 border-b border-gray-100">
                                <div
                                    class="w-10 h-10 rounded-xl bg-gradient-to-br from-brand/20 to-brand/10 flex items-center justify-center">
                                    <i class="fas fa-camera text-brand text-xl"></i>
                                </div>
                                <h3 class="font-bold text-navy text-2xl"><i
                                        class="fas fa-image mr-2 text-brand"></i>Upgrading Photos</h3>
                                <i class="fas fa-image text-brand/40 ml-auto text-xl"></i>
                            </div>

                            <div class="yacht-upload-area"
                                onclick="document.getElementById('yacht-fileInput').click()">
                                <i class="fas fa-cloud-upload-alt text-5xl text-brand mb-3"></i>
                                <p class="text-gray-500"><i class="fas fa-drag-drop"></i> Drag & Drop your files or
                                    <span class="text-brand font-semibold">Browse</span>
                                </p>
                                <p class="text-xs text-gray-400 mt-2"><i class="fas fa-info-circle"></i> Supports:
                                    JPG,
                                    PNG, GIF (Max 10MB)</p>
                                <input type="file" id="yacht-fileInput" class="hidden" multiple accept="image/*">
                            </div>
                            <div id="yacht-imagePreview" class="flex flex-wrap gap-4 mt-4"></div>
                        </div>

                        <!-- SECTION 6: AMENITIES -->
                        <div class="bg-white rounded-3xl p-7 border border-gray-100 shadow-md mb-8">
                            <div class="flex items-center gap-3 mb-6 pb-3 border-b border-gray-100">
                                <div
                                    class="w-10 h-10 rounded-xl bg-gradient-to-br from-brand/20 to-brand/10 flex items-center justify-center">
                                    <i class="fas fa-umbrella-beach text-brand text-xl"></i>
                                </div>
                                <h3 class="font-bold text-navy text-2xl"><i
                                        class="fas fa-star mr-2 text-brand"></i>Boat
                                    Amenities</h3>
                                <i class="fas fa-star text-brand/40 ml-auto text-xl"></i>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <h4 class="font-bold text-navy mb-3"><i class="fas fa-sun text-brand mr-2"></i>
                                        OUTSIDE</h4>
                                    <div class="space-y-2">
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Bimini</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Deck shower</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Cockpit speakers</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Teak bridge</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Sunbathing before</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Rear sundeck</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Bathing platform</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Bathing ladder</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> 220V sockets</label>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="font-bold text-navy mb-3"><i class="fas fa-home text-brand mr-2"></i>
                                        INSIDE</h4>
                                    <div class="space-y-2">
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Hot water</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Watermaker</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Air conditioning</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Fans</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Heating</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> WC</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Bedding</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Bath towels</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Wi-Fi</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> USB port</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Refrigerator</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> TV</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Freezer</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Oven/stove</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Barbecue</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Microwave</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Coffee machine</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Ice maker</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Cooler</label>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="font-bold text-navy mb-3"><i class="fas fa-fish text-brand mr-2"></i>
                                        LEISURE</h4>
                                    <div class="space-y-2">
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Paddle</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Canoeing</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Masks and snorkels</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Fishing equipment</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Diving equipment</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Seabob</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Water ski</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Wakeboarding</label>
                                        <label class="flex items-center gap-2 cursor-pointer"><input type="checkbox"
                                                class="w-4 h-4"> Towable buoy</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center py-8">
                            <button type="submit" class="yacht-submit-btn">
                                <i class="fas fa-ship mr-2"></i> Register Boat <i class="fas fa-arrow-right ml-2"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </section>
</x-guest-layout>
