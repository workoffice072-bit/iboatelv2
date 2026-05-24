<x-guest-layout>
    <section class="font-inter bg-gradient-to-br from-[#F4F7FC] to-[#EEF2F8] min-h-screen relative">

        <div class="bd-bg-circles">
            <div class="bd-circle"></div>
            <div class="bd-circle"></div>
            <div class="bd-circle"></div>
            <div class="bd-circle"></div>
            <div class="bd-circle"></div>
        </div>

        <div class="lg:hidden fixed pt-4 md:pt-[90px] left-5 z-50">

            <button id="od-menuToggle"
                class="bg-white/90 backdrop-blur-md p-3 rounded-2xl shadow-xl border border-white/40 transition-all duration-300 hover:scale-105 active:scale-95">

                <i id="od-menuIcon" class="fas fa-bars text-navy text-lg transition-all duration-300"></i>

            </button>

        </div>
        <div id="od-sidebarOverlay" class="fixed inset-0 bg-black/20 backdrop-blur-sm hidden lg:hidden"></div>

        <div class="flex min-h-screen relative z-10">

            <!-- Sidebar -->
            <x-owner-sidebar />

            <!-- Main Content - Bank Details -->
            <main class="flex-1 od-main-with-sidebar pt-24 p-6 lg:pt-8 lg:p-8 xl:p-10">
                <div class="max-w-4xl mx-auto">

                    <!-- Header -->
                    <div class="mb-8">
                        <div class="flex items-center gap-3 flex-wrap">
                            <h1 class="text-3xl md:text-4xl font-extrabold text-navy tracking-tight"><i
                                    class="fas fa-university text-brand mr-3"></i>Bank Details</h1>

                        </div>
                        <p class="text-gray-500 text-sm mt-2">Manage your bank account information for payouts and
                            transactions</p>
                    </div>

                    <!-- Info Banner -->
                    <div class="bd-info-card mb-8">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-shield-alt text-brand text-xl"></i>
                            <p class="text-sm text-gray-600">Your bank details are secure and encrypted. We use this
                                information for your earnings payouts.</p>
                        </div>
                    </div>

                    <form action="#" method="POST">
                        <div class="bg-white rounded-3xl p-7 border border-gray-100 shadow-md">

                            <!-- Bank Details Header -->
                            <div class="bd-section-header">
                                <i class="fas fa-building-columns"></i>
                                <h3>Bank Account Information</h3>
                                <i class="fas fa-credit-card text-brand/40 ml-auto text-xl"></i>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <!-- Holder Name -->
                                <div>
                                    <label class="bd-form-label"><i class="fas fa-user mr-2 text-brand"></i>Account
                                        Holder Name</label>
                                    <input type="text" class="bd-form-input" name="holder_name" value="ASHISH"
                                        placeholder="Enter account holder name">
                                </div>

                                <!-- Bank Branch -->
                                <div>
                                    <label class="bd-form-label"><i class="fas fa-building mr-2 text-brand"></i>Bank
                                        Branch</label>
                                    <input type="text" class="bd-form-input" name="bank_name"
                                        value="STATE BANK OF INDIA" placeholder="Enter bank branch">
                                </div>

                                <!-- IBAN -->
                                <div>
                                    <label class="bd-form-label"><i class="fas fa-code mr-2 text-brand"></i>IBAN
                                        Number</label>
                                    <input type="text" class="bd-form-input" name="Iban" value="sd99d5"
                                        placeholder="Enter IBAN number">
                                    <p class="text-xs text-gray-400 mt-1">International Bank Account Number</p>
                                </div>

                                <!-- City -->
                                <div>
                                    <label class="bd-form-label"><i class="fas fa-city mr-2 text-brand"></i>Bank
                                        City</label>
                                    <input type="text" class="bd-form-input" name="city_bank" value="jdithx"
                                        placeholder="Enter bank city">
                                </div>

                                <!-- Country -->
                                <div>
                                    <label class="bd-form-label"><i class="fas fa-globe mr-2 text-brand"></i>Bank
                                        Country</label>
                                    <select class="bd-form-select" name="country_bank">
                                        <option value="">Select Country</option>
                                        <option value="Australia">🇦🇺 Australia</option>
                                        <option value="India" selected>🇮🇳 India</option>
                                        <option value="United Kingdom">🇬🇧 United Kingdom</option>
                                        <option value="United States">🇺🇸 United States</option>
                                        <option value="France">🇫🇷 France</option>
                                        <option value="Germany">🇩🇪 Germany</option>
                                        <option value="Italy">🇮🇹 Italy</option>
                                        <option value="Spain">🇪🇸 Spain</option>
                                        <option value="Dubai">🇦🇪 Dubai</option>
                                    </select>
                                </div>

                                <!-- SWIFT/BIC -->
                                <div>
                                    <label class="bd-form-label"><i
                                            class="fas fa-exchange-alt mr-2 text-brand"></i>SWIFT / BIC Code</label>
                                    <input type="text" class="bd-form-input" name="swift_bic" value=""
                                        placeholder="Enter SWIFT/BIC code">
                                    <p class="text-xs text-gray-400 mt-1">Required for international transfers</p>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center pt-6 mt-4 border-t border-gray-100">
                                <button type="submit" class="bd-submit-btn">
                                    <i class="fas fa-save mr-2"></i> Save Bank Details <i
                                        class="fas fa-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Security Note -->
                    <div class="mt-6 text-center">
                        <p class="text-xs text-gray-400">
                            <i class="fas fa-lock mr-1"></i> Your information is secure and encrypted
                        </p>
                    </div>
                </div>
            </main>
        </div>
    </section>
</x-guest-layout>
