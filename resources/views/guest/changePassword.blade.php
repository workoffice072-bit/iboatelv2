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

            <!-- Main Content - Change Password -->
            <!-- Main Content - Change Password -->
            <main class="flex-1 guest-main-with-sidebar pt-24 p-6 lg:pt-8 lg:p-8 xl:p-10">
                <div class="max-w-2xl mx-auto">

                    <!-- Header -->
                    <div class="mb-8">
                        <div class="flex items-center gap-3 flex-wrap">
                            <h1 class="text-3xl md:text-4xl font-extrabold text-navy tracking-tight"><i
                                    class="fas fa-key text-brand mr-3"></i>Change Password</h1>
                            <span class="gcp-wave-hand text-4xl">🔐</span>
                        </div>
                        <p class="text-gray-500 text-sm mt-2">Update your password to keep your account secure</p>
                    </div>

                    <!-- Info Banner -->
                    <div class="gcp-info-card mb-8">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-shield-alt text-brand text-xl"></i>
                            <p class="text-sm text-gray-600">Choose a strong password that you don't use for other
                                accounts.</p>
                        </div>
                    </div>

                    <form action="#" method="POST">
                        <div class="bg-white rounded-3xl p-7 border border-gray-100 shadow-md">

                            <!-- Current Password -->
                            <div class="mb-6">
                                <label class="gcp-form-label"><i class="fas fa-lock mr-2 text-brand"></i>Current
                                    Password</label>
                                <div class="relative">
                                    <input type="password" class="gcp-form-input" id="gcpCurrentPassword"
                                        name="current_password" placeholder="Enter your current password">
                                    <button type="button"
                                        class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-brand"
                                        onclick="gcpTogglePassword('gcpCurrentPassword')">
                                        <i class="fas fa-eye-slash"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- New Password -->
                            <div class="mb-6">
                                <label class="gcp-form-label"><i class="fas fa-unlock-alt mr-2 text-brand"></i>New
                                    Password</label>
                                <div class="relative">
                                    <input type="password" class="gcp-form-input" id="gcpNewPassword"
                                        name="new_password" placeholder="Enter new password">
                                    <button type="button"
                                        class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-brand"
                                        onclick="gcpTogglePassword('gcpNewPassword')">
                                        <i class="fas fa-eye-slash"></i>
                                    </button>
                                </div>

                                <!-- Password Strength Indicator -->
                                <div class="gcp-strength-bar" id="gcpStrengthBar"></div>
                                <div class="gcp-strength-text" id="gcpStrengthText"></div>

                                <!-- Password Requirements -->
                                <div class="mt-3 pt-3 border-t border-gray-100">
                                    <p class="text-xs font-semibold text-gray-500 mb-2">Password Requirements:</p>
                                    <div id="gcpReqLength" class="gcp-requirement">
                                        <i class="fas fa-circle text-[8px]"></i> <span>At least 8 characters</span>
                                    </div>
                                    <div id="gcpReqUpper" class="gcp-requirement">
                                        <i class="fas fa-circle text-[8px]"></i> <span>At least one uppercase
                                            letter</span>
                                    </div>
                                    <div id="gcpReqLower" class="gcp-requirement">
                                        <i class="fas fa-circle text-[8px]"></i> <span>At least one lowercase
                                            letter</span>
                                    </div>
                                    <div id="gcpReqNumber" class="gcp-requirement">
                                        <i class="fas fa-circle text-[8px]"></i> <span>At least one number</span>
                                    </div>
                                    <div id="gcpReqSpecial" class="gcp-requirement">
                                        <i class="fas fa-circle text-[8px]"></i> <span>At least one special
                                            character</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Confirm New Password -->
                            <div class="mb-8">
                                <label class="gcp-form-label"><i
                                        class="fas fa-check-circle mr-2 text-brand"></i>Confirm New Password</label>
                                <div class="relative">
                                    <input type="password" class="gcp-form-input" id="gcpConfirmPassword"
                                        name="new_password_confirmation" placeholder="Confirm your new password">
                                    <button type="button"
                                        class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-brand"
                                        onclick="gcpTogglePassword('gcpConfirmPassword')">
                                        <i class="fas fa-eye-slash"></i>
                                    </button>
                                </div>
                                <div id="gcpMatchMessage" class="gcp-match-text"></div>
                            </div>

                            <!-- Tips Card -->
                            <div class="gcp-info-card mb-6">
                                <div class="flex items-start gap-3">
                                    <i class="fas fa-lightbulb text-amber-500 text-lg mt-0.5"></i>
                                    <div>
                                        <p class="text-sm font-semibold text-navy">Password Tips:</p>
                                        <ul class="text-xs text-gray-500 mt-1 space-y-1">
                                            <li>• Don't use common words like "password" or "123456"</li>
                                            <li>• Avoid using personal information like your name or birthdate</li>
                                            <li>• Use a mix of letters, numbers, and symbols</li>
                                            <li>• Consider using a passphrase with multiple words</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" class="gcp-submit-btn" id="gcpSubmitBtn">
                                    <i class="fas fa-save mr-2"></i> Update Password <i
                                        class="fas fa-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
        </div>

    </section>
</x-guest-layout>
