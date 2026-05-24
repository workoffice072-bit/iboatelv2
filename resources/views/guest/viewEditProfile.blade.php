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

            <!-- Main Content - Edit Profile -->
            <main class="flex-1 guest-main-with-sidebar pt-24 p-6 lg:pt-8 lg:p-8 xl:p-10">
                <div class="max-w-5xl mx-auto">

                    <!-- Header -->
                    <div class="mb-8">
                        <div class="flex items-center gap-3 flex-wrap">
                            <h1 class="text-3xl md:text-4xl font-extrabold text-navy tracking-tight"><i
                                    class="fas fa-user-edit text-brand mr-3"></i>Edit Profile</h1>
                            <span class="gep-wave-hand text-4xl">👤</span>
                        </div>
                        <p class="text-gray-500 text-sm mt-2">Update your personal information and account details</p>
                    </div>

                    <!-- Info Banner -->
                    <div class="gep-info-card mb-8">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-info-circle text-brand text-xl"></i>
                            <p class="text-sm text-gray-600">Your email address cannot be changed. For any assistance,
                                contact support.</p>
                        </div>
                    </div>

                    <form action="#" method="POST" enctype="multipart/form-data">
                        <!-- Profile Image Upload -->
                        <div class="bg-white rounded-3xl p-7 border border-gray-100 shadow-md mb-8">
                            <div class="flex flex-col items-center text-center">
                                <div class="gep-profile-image">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Profile"
                                        class="gep-profile-img" id="gep-profilePreview">
                                    <div class="gep-upload-btn"
                                        onclick="document.getElementById('gep-profileInput').click()">
                                        <i class="fas fa-camera"></i>
                                    </div>
                                    <input type="file" id="gep-profileInput" class="hidden" accept="image/*"
                                        onchange="gepPreviewProfileImage(this)">
                                </div>
                                <p class="text-xs text-gray-400 mt-3">Click on camera icon to change profile picture</p>
                                <p class="text-xs text-gray-400">Allowed: JPG, JPEG, PNG (Max 2MB)</p>
                            </div>
                        </div>

                        <!-- Personal Information -->
                        <div class="bg-white rounded-3xl p-7 border border-gray-100 shadow-md mb-8">
                            <div class="flex items-center gap-3 mb-6 pb-3 border-b border-gray-100">
                                <div
                                    class="w-10 h-10 rounded-xl bg-gradient-to-br from-brand/20 to-brand/10 flex items-center justify-center">
                                    <i class="fas fa-user-circle text-brand text-lg"></i>
                                </div>
                                <h3 class="font-bold text-navy text-2xl">Personal Information</h3>
                                <i class="fas fa-id-card text-brand/40 ml-auto text-xl"></i>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div>
                                    <label class="gep-form-label"><i class="fas fa-user mr-2 text-brand"></i>First
                                        Name</label>
                                    <input type="text" class="gep-form-input" name="first_name" value="Ashish"
                                        placeholder="First Name">
                                </div>
                                <div>
                                    <label class="gep-form-label"><i class="fas fa-user mr-2 text-brand"></i>Last
                                        Name</label>
                                    <input type="text" class="gep-form-input" name="last_name" value="Rajput"
                                        placeholder="Last Name">
                                </div>
                                <div>
                                    <label class="gep-form-label"><i class="fas fa-envelope mr-2 text-brand"></i>Email
                                        Address</label>
                                    <input type="email" class="gep-form-input" name="email"
                                        value="rajputashish1751@gmail.com" readonly>
                                </div>
                                <div>
                                    <label class="gep-form-label"><i
                                            class="fas fa-at mr-2 text-brand"></i>Username</label>
                                    <input type="text" class="gep-form-input" name="username" value="aaa123"
                                        placeholder="Username">
                                </div>
                                <div>
                                    <label class="gep-form-label"><i
                                            class="fas fa-phone-alt mr-2 text-brand"></i>Contact Number</label>
                                    <input type="tel" class="gep-form-input" name="contact_number"
                                        value="7217511751" placeholder="Contact Number">
                                </div>
                                <div class="md:col-span-2">
                                    <label class="gep-form-label"><i
                                            class="fas fa-map-marker-alt mr-2 text-brand"></i>Address</label>
                                    <textarea class="gep-form-textarea" name="address" placeholder="Your address">Vill & post Gajraula shiv</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Location Information -->
                        <div class="bg-white rounded-3xl p-7 border border-gray-100 shadow-md mb-8">
                            <div class="flex items-center gap-3 mb-6 pb-3 border-b border-gray-100">
                                <div
                                    class="w-10 h-10 rounded-xl bg-gradient-to-br from-brand/20 to-brand/10 flex items-center justify-center">
                                    <i class="fas fa-location-dot text-brand text-lg"></i>
                                </div>
                                <h3 class="font-bold text-navy text-2xl">Location Information</h3>
                                <i class="fas fa-globe text-brand/40 ml-auto text-xl"></i>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div>
                                    <label class="gep-form-label"><i
                                            class="fas fa-globe mr-2 text-brand"></i>Country</label>
                                    <select class="gep-form-select" name="country">
                                        <option value="Australia" selected>🇦🇺 Australia</option>
                                        <option value="India">🇮🇳 India</option>
                                        <option value="United Kingdom">🇬🇧 United Kingdom</option>
                                        <option value="United States">🇺🇸 United States</option>
                                        <option value="France">🇫🇷 France</option>
                                        <option value="Germany">🇩🇪 Germany</option>
                                        <option value="Italy">🇮🇹 Italy</option>
                                        <option value="Spain">🇪🇸 Spain</option>
                                        <option value="Dubai">🇦🇪 Dubai</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="gep-form-label"><i
                                            class="fas fa-city mr-2 text-brand"></i>City</label>
                                    <input type="text" class="gep-form-input" name="city" value="Six-tree"
                                        placeholder="City">
                                </div>
                                <!-- <div>
                                    <label class="gep-form-label"><i class="fas fa-building mr-2 text-brand"></i>State</label>
                                    <input type="text" class="gep-form-input" name="state" value="South Australia" placeholder="State">
                                </div> -->
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center py-4">
                            <button type="submit" class="gep-submit-btn">
                                <i class="fas fa-save mr-2"></i> Save Changes <i class="fas fa-arrow-right ml-2"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </main>
        </div>

    </section>

</x-guest-layout>
