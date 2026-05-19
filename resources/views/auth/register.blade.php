<x-guest-layout>
    <section class="font-inter bg-gradient-to-br from-[#f0f7fc] to-[#e8f2f8] relative min-h-screen">
        <!-- Background Circles -->
        <div class="bg-circles">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>

        <!-- Main Content -->
        <div class="relative z-10 min-h-screen flex items-center justify-center px-4 py-12 sm:py-16 lg:py-20">
            <div class="max-w-6xl mx-auto w-full animate-fade-up">

                <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12 xl:gap-16">

                    <div class="w-full lg:w-1/2 flex justify-center">
                        <div class="relative">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-brand/20 to-brand-light/20 rounded-full blur-3xl">
                            </div>

                            <!-- Custom SVG Illustration  -->
                            <svg class="floating-img w-80 md:w-96 lg:w-[450px] xl:w-[500px] relative z-10"
                                viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Background Water -->
                                <ellipse cx="250" cy="380" rx="220" ry="40" fill="#5EA6C8" fill-opacity="0.15" />
                                <ellipse cx="250" cy="390" rx="180" ry="25" fill="#5EA6C8" fill-opacity="0.1" />

                                <!-- Waves -->
                                <path class="wave-path"
                                    d="M50 370 Q100 355 150 370 Q200 385 250 370 Q300 355 350 370 Q400 385 450 370"
                                    stroke="#5EA6C8" stroke-width="2.5" fill="none" stroke-linecap="round"
                                    opacity="0.4" />
                                <path class="wave-path"
                                    d="M30 390 Q80 375 130 390 Q180 405 230 390 Q280 375 330 390 Q380 405 430 390 Q480 375 470 390"
                                    stroke="#5EA6C8" stroke-width="2" fill="none" stroke-linecap="round" opacity="0.3"
                                    style="animation-delay: 0.5s;" />

                                <!-- Sun/Sunset Glow -->
                                <circle cx="380" cy="100" r="50" fill="#FFE6C7" opacity="0.3" />
                                <circle cx="380" cy="100" r="35" fill="#FFD700" opacity="0.2" />

                                <!-- Boat Hull -->
                                <path d="M120 330 L180 370 L320 370 L380 330 L360 310 L140 310 L120 330Z" fill="#1a2a4f"
                                    stroke="#5EA6C8" stroke-width="2" />
                                <path d="M140 310 L360 310 L350 295 L150 295 L140 310Z" fill="#2c3e5c" />

                                <!-- Deck Railing -->
                                <line x1="180" y1="295" x2="180" y2="270" stroke="#5EA6C8" stroke-width="3"
                                    stroke-linecap="round" />
                                <line x1="320" y1="295" x2="320" y2="270" stroke="#5EA6C8" stroke-width="3"
                                    stroke-linecap="round" />
                                <line x1="180" y1="270" x2="320" y2="270" stroke="#5EA6C8" stroke-width="2.5"
                                    stroke-linecap="round" />

                                <!-- Upper Deck / Cabin -->
                                <rect x="200" y="260" width="100" height="35" rx="5" fill="#f8fafd" stroke="#5EA6C8"
                                    stroke-width="1.5" />
                                <rect x="210" y="265" width="30" height="25" rx="3" fill="#5EA6C8" opacity="0.3" />
                                <rect x="250" y="265" width="30" height="25" rx="3" fill="#5EA6C8" opacity="0.3" />
                                <rect x="260" y="268" width="28" height="20" rx="2" fill="#1a2a4f" opacity="0.6" />

                                <!-- Mast -->
                                <line x1="250" y1="260" x2="250" y2="140" stroke="#5EA6C8" stroke-width="3"
                                    stroke-linecap="round" />

                                <!-- Sail -->
                                <path d="M250 150 L250 260 L190 230 L250 150Z" fill="white" stroke="#5EA6C8"
                                    stroke-width="1.5" opacity="0.9" />
                                <path d="M250 150 L310 230 L250 260 L250 150Z" fill="#f0f7fc" stroke="#5EA6C8"
                                    stroke-width="1.5" opacity="0.85" />

                                <!-- Flag -->
                                <polygon points="250,140 280,145 250,150" fill="#5EA6C8" />
                                <line x1="250" y1="140" x2="250" y2="135" stroke="#5EA6C8" stroke-width="2"
                                    stroke-linecap="round" />

                                <!-- Clouds -->
                                <g opacity="0.6">
                                    <ellipse cx="100" cy="100" rx="40" ry="25" fill="white" />
                                    <ellipse cx="130" cy="90" rx="30" ry="20" fill="white" />
                                    <ellipse cx="70" cy="95" rx="25" ry="18" fill="white" />
                                </g>
                                <g opacity="0.4">
                                    <ellipse cx="80" cy="180" rx="35" ry="20" fill="white" />
                                    <ellipse cx="105" cy="172" rx="25" ry="16" fill="white" />
                                </g>

                                <!-- Birds -->
                                <path d="M430 150 Q435 145 440 150 Q445 145 450 150" stroke="#5a6e85" stroke-width="1.5"
                                    fill="none" opacity="0.5" />
                                <path d="M455 170 Q459 166 463 170 Q467 166 471 170" stroke="#5a6e85" stroke-width="1.5"
                                    fill="none" opacity="0.4" />

                                <!-- Lifebuoy -->
                                <circle cx="350" cy="340" r="12" fill="none" stroke="#5EA6C8" stroke-width="2.5" />
                                <circle cx="350" cy="340" r="8" fill="none" stroke="#5EA6C8" stroke-width="1.5" />
                                <line x1="342" y1="340" x2="358" y2="340" stroke="#5EA6C8" stroke-width="2" />
                            </svg>

                            <!-- Decorative Badge -->
                            <div class="absolute -bottom-4 -right-4 bg-white rounded-full shadow-lg p-3 z-20">
                                <div
                                    class="w-10 h-10 bg-gradient-to-br from-brand to-brand-dark rounded-full flex items-center justify-center">
                                    <i class="fas fa-star text-white text-sm"></i>
                                </div>
                            </div>
                            <!-- Top Badge -->
                            <div class="absolute -top-4 -left-4 bg-white rounded-full shadow-lg p-2 z-20">
                                <div class="w-8 h-8 bg-brand/10 rounded-full flex items-center justify-center">
                                    <i class="fas fa-crown text-brand text-xs"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Role Cards Column -->
                    <div class="w-full lg:w-1/2 space-y-4">
                        
                        

                        <!-- Guest Card -->
                        <a href="{{route('register.guest')}}"
                            class="role-card block bg-white rounded-2xl p-5 border border-gray-100 transition-all duration-300 group shadow-sm">
                            <div class="flex items-center gap-5">
                                <div
                                    class="role-icon w-14 h-14 bg-gradient-to-br from-gray-100 to-gray-50 rounded-xl flex items-center justify-center transition-all duration-300">
                                    <i class="fas fa-user text-brand text-2xl transition-all duration-300"></i>
                                </div>
                                <div class="flex-1">
                                    
                                        <h3 class="text-xl font-bold text-[#1a2a4f]">Sign Up as a Guest</h3>
                               
                                    <p class="text-gray-500 text-sm mt-0.5">Explore and book yachts as a guest user</p>
                                </div>
                                <div class="role-arrow transition-all duration-300">
                                    <i class="fas fa-arrow-right text-brand text-xl"></i>
                                </div>
                            </div>
                        </a>


                           <!-- Owner Card -->
                        <a href="{{route('register.owner')}}"
                            class="role-card block bg-white rounded-2xl p-5 border border-gray-100 transition-all duration-300 group shadow-sm">
                            <div class="flex items-center gap-5">
                                <div
                                    class="role-icon w-14 h-14 bg-gradient-to-br from-gray-100 to-gray-50 rounded-xl flex items-center justify-center transition-all duration-300">
                                    <i class="fas fa-ship text-brand text-2xl transition-all duration-300"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-[#1a2a4f]">Register as an Owner</h3>
                                    <p class="text-gray-500 text-sm mt-0.5">List your boat and start earning</p>
                                </div>
                                <div class="role-arrow transition-all duration-300">
                                    <i class="fas fa-arrow-right text-brand text-xl"></i>
                                </div>
                            </div>
                        </a>
                        

                        <!-- Partner Card -->
                        <a href="{{route('register.partner')}}"
                            class="role-card block bg-white rounded-2xl p-5 border border-gray-100 transition-all duration-300 group shadow-sm">
                            <div class="flex items-center gap-5">
                                <div
                                    class="role-icon w-14 h-14 bg-gradient-to-br from-gray-100 to-gray-50 rounded-xl flex items-center justify-center transition-all duration-300">
                                    <i class="fas fa-handshake text-brand text-2xl transition-all duration-300"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-[#1a2a4f]">Register as a Partner</h3>
                                    <p class="text-gray-500 text-sm mt-0.5">Collaborate with iBoatel as a business
                                        partner</p>
                                </div>
                                <div class="role-arrow transition-all duration-300">
                                    <i class="fas fa-arrow-right text-brand text-xl"></i>
                                </div>
                            </div>
                        </a>

                        

                    </div>
                </div>

                <!--  Note -->
                <div class="text-center mt-12 pt-6 border-t border-gray-200/60">
                    <p class="text-sm text-gray-500">Already have an account?
                        <a href="{{route('login')}}"
                            class="text-brand font-semibold hover:text-brand-dark transition hover:underline">Login</a>
                    </p>
                </div>

            </div>
        </div>
    </section>
</x-guest-layout>
