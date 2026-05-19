<x-guest-layout>
    <section class="font-inter bg-gradient-to-br from-[#f0f7fc] to-[#e8f2f8] min-h-screen relative" bv>



        <!-- Background Circles -->
        <div class="bg-circles">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>

        <!-- Main Content -->
        <div class="relative z-10 py-12 px-4 sm:px-6 lg:px-8">

            <div class="max-w-5xl mx-auto">
                @if ($errors->any())

                    <div class="relative mb-6 overflow-hidden rounded-3xl border border-red-200 bg-white shadow-sm">

                        <!-- Top Accent -->
                        <div class="h-1.5 w-full bg-gradient-to-r from-red-500 via-rose-500 to-pink-500"></div>

                        <div class="p-5">

                            <!-- Header -->
                            <div class="flex items-start gap-4">

                                <!-- Icon -->
                                <div
                                    class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-red-100 text-red-600">

                                    <i class="fas fa-circle-exclamation text-lg"></i>

                                </div>

                                <!-- Content -->
                                <div class="flex-1">

                                    <div class="flex items-center justify-between">

                                        <div>

                                            <h3 class="text-base font-semibold text-gray-900">

                                                Validation Error

                                            </h3>

                                            <p class="mt-1 text-sm text-gray-500">

                                                Please correct the following fields and try again.

                                            </p>

                                        </div>

                                        <!-- Close -->
                                        <button type="button" onclick="this.closest('.relative').remove()"
                                            class="text-gray-400 transition hover:text-gray-600">

                                            <i class="fas fa-times"></i>

                                        </button>

                                    </div>

                                    <!-- Error List -->
                                    <div class="mt-5 space-y-3">

                                        @foreach ($errors->all() as $error)
                                            <div
                                                class="flex items-start gap-3 rounded-2xl border border-red-100 bg-red-50/70 p-3">

                                                <!-- Bullet -->
                                                <div
                                                    class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-red-500 text-white">

                                                    <i class="fas fa-exclamation text-[10px]"></i>

                                                </div>

                                                <!-- Message -->
                                                <p class="text-sm leading-relaxed text-red-700">

                                                    {{ $error }}

                                                </p>

                                            </div>
                                        @endforeach

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                @endif
                <div class="form-card bg-white/95 backdrop-blur-sm rounded-3xl shadow-xl border border-gray-100 overflow-hidden animate-fade-up"
                    style="animation-delay: 0.1s;">

                    <div class="bg-gradient-to-r from-brand to-brand-dark p-6 text-white">
                        <div class="flex items-center gap-5 flex-wrap">
                            <div
                                class="w-14 h-14 bg-white/20 backdrop-blur rounded-xl flex items-center justify-center">
                                <i class="fas fa-gem text-2xl"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-xl">Sign Up as a Guest</h3>
                                <p class="text-brand-light text-sm mt-1">Become a guest of our platform iBoatel and
                                    access the largest database of boats for rent.</p>
                            </div>

                        </div>
                    </div>

                    <form class="p-8 md:p-10" method="POST" id="guest_form" action="{{ route('guest.register') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <!-- Personal Information Section -->
                        <div class="mb-8">
                            <h3
                                class="section-header text-xl font-bold text-navy mb-5 pb-2 border-b-2 border-brand/15 flex items-center gap-3">
                                <div class="w-9 h-9 bg-brand/10 rounded-xl flex items-center justify-center">
                                    <i class="fas fa-user-circle text-brand text-base"></i>
                                </div>
                                Personal Information
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <!-- First Name -->
                                <div class="group">
                                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                                        First Name <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="first_name" value="{{ old('first_name') }}"
                                        class="w-full px-4 py-3 rounded-xl bg-gray-50/50"
                                        placeholder="Enter your first name" required>
                                </div>

                                <!-- Last Name -->
                                <div class="group">
                                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                                        Last Name
                                    </label>
                                    <input type="text" name="last_name" value="{{ old('last_name') }}"
                                        class="w-full px-4 py-3 rounded-xl bg-gray-50/50"
                                        placeholder="Enter your last name">
                                </div>

                                <!-- Username -->
                                <div class="group">
                                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                                        Username <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="username" value="{{ old('username') }}"
                                        autocomplete="off" class="w-full px-4 py-3 rounded-xl bg-gray-50/50"
                                        placeholder="Choose a username" required>
                                </div>

                                <!-- Date of Birth -->
                                <div class="group">
                                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                                        Date of Birth <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" name="dob" id="guest_dob" value="{{ old('dob') }}"
                                        class="w-full px-4 py-3 rounded-xl bg-gray-50/50 cursor-pointer"
                                        placeholder="DD/MM/YYYY" required readonly>
                                </div>
                            </div>

                            <!-- Address - Full Width Textarea -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                                <div class="group">
                                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                                        Address <span class="text-red-500">*</span>
                                    </label>
                                    <textarea name="address" rows="3" class="w-full px-4 py-3 rounded-xl bg-gray-50/50 resize-none"
                                        placeholder="Full Address (Street, Apartment, City, ZIP Code)" required>{{ old('address') }}</textarea>
                                </div>
                                <div class="group">
                                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                                        Gender <span class="text-red-500">*</span>
                                    </label>
                                    <div class="flex gap-3">
                                        <label
                                            class="flex-1 flex items-center justify-center gap-2 px-4 py-2.5 bg-gray-50/80 border border-gray-200 rounded-xl cursor-pointer hover:bg-brand/10 hover:border-brand/30 transition-all has-[:checked]:bg-brand/10 has-[:checked]:border-brand/40 has-[:checked]:text-brand">
                                            <input type="radio" {{ old('gender') == 'Male' ? 'checked' : '' }}
                                                name="gender" value="Male" class="w-4 h-4 accent-brand" />
                                            <span class="font-medium">Male</span>
                                        </label>
                                        <label
                                            class="flex-1 flex items-center justify-center gap-2 px-4 py-2.5 bg-gray-50/80 border border-gray-200 rounded-xl cursor-pointer hover:bg-brand/10 hover:border-brand/30 transition-all has-[:checked]:bg-brand/10 has-[:checked]:border-brand/40 has-[:checked]:text-brand">
                                            <input type="radio" name="gender" value="Female"
                                                class="w-4 h-4 accent-brand"
                                                {{ old('gender') == 'Female' ? 'checked' : '' }} />
                                            <span class="font-medium">Female</span>
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="group mt-5">
                                <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                                    Profile image <span class="text-red-500">*</span>
                                </label>
                                <x-image-upload-preview prefix="guest" name="profile_photo" label="Profile Photo" />
                            </div>
                        </div>

                        <!-- Contact Information -->
                        <div class="mb-8">
                            <h3
                                class="section-header text-xl font-bold text-navy mb-5 pb-2 border-b-2 border-brand/15 flex items-center gap-3">
                                <i class="fas fa-address-card text-brand text-base"></i>
                                Contact Information
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <!-- Email Address -->
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                                        Email Address <span class="text-red-500">*</span>
                                    </label>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="w-full px-4 py-3 rounded-xl bg-gray-50/50" placeholder="your@email.com"
                                        required>
                                </div>

                                <!-- Phone Number -->
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                                        Phone Number <span class="text-red-500">*</span>
                                    </label>
                                    <input type="tel" name="number" value="{{ old('number') }}"
                                        class="w-full px-4 py-3 rounded-xl bg-gray-50/50" placeholder="Phone number"
                                        required>
                                </div>

                                <!-- Gender - Pill Style Design -->

                            </div>
                        </div>

                        <!-- Location -->
                        <div class="mb-8">
                            <h3
                                class="section-header text-xl font-bold text-navy mb-5 pb-2 border-b-2 border-brand/15 flex items-center gap-3">
                                <i class="fas fa-location-dot text-brand text-base"></i>
                                Your Location
                            </h3>
                            <x-country-state-city prefix="guest" />

                        </div>



                        <!-- Password Section -->
                        <div class="mb-8">
                            <h3
                                class="section-header text-xl font-bold text-navy mb-5 pb-2 border-b-2 border-brand/15 flex items-center gap-3">
                                <i class="fas fa-lock text-brand text-base"></i>
                                Security
                            </h3>
                            <x-strong-password prefix="guest" />
                        </div>

                        <!-- Terms and Submit -->
                        <div class="pt-5 border-t-2 border-gray-100">
                            <div class="flex items-start gap-3 mb-6">
                                <input type="checkbox" id="terms" class="mt-0.5 w-4 h-4 rounded accent-brand"
                                    required>
                                <label for="terms" class="text-sm text-gray-600">
                                    I agree to the <a href="#"
                                        class="text-brand hover:underline font-medium">Terms of Service</a>
                                    and <a href="#" class="text-brand hover:underline font-medium">Privacy
                                        Policy</a>.
                                </label>
                            </div>
                            <div class="flex justify-end">
                                <button type="submit"
                                    class="submit-btn px-10 py-3.5 rounded-full text-white font-bold shadow-md transition-all flex items-center gap-2 text-sm">
                                    <i class="fas fa-paper-plane"></i> Create Account
                                </button>
                            </div>
                        </div>
                    </form>

                </div>

                <!-- Login Link -->
                <div class="text-center mt-8 animate-fade-up" style="animation-delay: 0.2s;">
                    <p class="text-gray-500">Already have an account?
                        <a href="{{ route('login') }}"
                            class="text-brand font-semibold hover:text-brand-dark transition-colors ml-1 hover:underline">Sign
                            in <i class="fas fa-arrow-right text-xs ml-1"></i></a>
                    </p>
                </div>

            </div>
        </div>
    </section>

</x-guest-layout>
