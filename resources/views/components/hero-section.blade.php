 <!-- ==================== HERO SECTION ==================== -->
 <section class="font-inter bg-[#f5fafd] overflow-x-hidden pb-[80px]">
    <div
        class="relative w-full h-[45vh] min-h-[320px] sm:h-[50vh] sm:min-h-[380px] md:h-[70vh] md:min-h-[620px] bg-[url('https://images.unsplash.com/photo-1567899378494-47b22a2ae96a?auto=format&fit=crop&w=2400&q=95')] bg-cover bg-center flex flex-col justify-center isolate">
        <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/20 to-black/80 z-0"></div>
        <div
            class="absolute bottom-0 left-0 w-full h-[25px] sm:h-[30px] md:h-[90px] bg-gradient-to-t from-[#f5fafd] to-transparent z-10 pointer-events-none">
        </div>
        <div class="relative z-20 max-w-[1400px] mx-auto w-full px-4 sm:px-5 md:px-12 lg:px-16">
            <div class="max-w-full md:max-w-[720px] text-center sm:text-center md:text-left">
                <div
                    class="inline-flex items-center gap-2 bg-brand/20 backdrop-blur-md px-3 py-1 sm:px-3 sm:py-1 md:px-4 md:py-1.5 rounded-full text-brand-light text-[0.55rem] sm:text-[0.6rem] md:text-xs font-bold tracking-[1.5px] mb-3 sm:mb-3 md:mb-6 border border-brand/40">
                    <i class="fas fa-anchor text-[0.5rem] sm:text-[0.55rem] md:text-xs"></i> PRESTIGE & EXCELLENCE
                </div>
                <h1
                    class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold text-white leading-tight mb-1 sm:mb-2 md:mb-3 drop-shadow-lg">
                    Destination <span
                        class="bg-gradient-to-r from-[#FFE6C7] via-[#c0e2f5] to-[#7bc3e6] bg-clip-text text-transparent">iBoatel</span>
                </h1>
                <p
                    class="text-white/85 text-sm sm:text-base md:text-lg lg:text-xl max-w-full md:max-w-[520px] mb-2 sm:mb-3 md:mb-6 backdrop-blur-sm px-2 md:px-0">
                    34,000+ private Boatels and Yacht charters worldwide. Sleep on water or sail your dream trip.
                </p>
            </div>
        </div>
        <div
            class="hidden lg:flex absolute right-8 bottom-10 z-20 flex-col items-center gap-2 cursor-pointer hover:translate-y-[-3px] transition-transform">
            <span class="text-[0.7rem] tracking-[5px] uppercase text-[#e2f0f7] writing-mode-vertical">iBoatel</span>
            <div class="w-[1.8px] h-16 bg-gradient-to-b from-[#9acde9] to-brand/30 rounded-full"></div>
        </div>
    </div>
    <div class="relative z-30 max-w-[1420px] mx-auto -mt-4 sm:-mt-5 md:-mt-[66px] px-3 sm:px-4 md:px-7">
        <div
            class="relative bg-white rounded-xl sm:rounded-2xl md:rounded-[3rem] md:rounded-br-[2rem] shadow-[0_10px_20px_-8px_rgba(0,28,40,0.2)] overflow-hidden">
            <form
                class="flex flex-col md:flex-row flex-wrap items-stretch gap-1.5 p-3 sm:p-4 md:p-5 bg-transparent">
                <div
                    class="w-full md:flex-1 bg-[#f8fdff] mx-0 md:mx-1 my-0.5 md:my-1 p-2 sm:p-2.5 md:p-4 pl-3 sm:pl-3 md:pl-5 rounded-lg sm:rounded-xl border border-brand/20 shadow-sm form-field-enhanced">
                    <label
                        class="flex items-center gap-1 text-[0.5rem] sm:text-[0.55rem] md:text-[0.65rem] font-extrabold uppercase tracking-[1px] text-[#1f6e8f]"><i
                            class="fas fa-map-marker-alt text-[0.65rem] sm:text-[0.7rem] md:text-xs text-brand"></i>
                        DESTINATION</label><input type="text" id="destinationInput"
                        placeholder="Ibiza, Croatia, Sardinia..." value="French Riviera"
                        class="w-full border-none p-0.5 text-[0.8rem] sm:text-[0.85rem] md:text-[0.98rem] font-medium text-[#0a2e3f] bg-transparent focus:outline-none">
                </div>
                <div
                    class="w-full md:flex-1 bg-[#f8fdff] mx-0 md:mx-1 my-0.5 md:my-1 p-2 sm:p-2.5 md:p-4 pl-3 sm:pl-3 md:pl-5 rounded-lg sm:rounded-xl border border-brand/20 shadow-sm form-field-enhanced">
                    <label
                        class="flex items-center gap-1 text-[0.5rem] sm:text-[0.55rem] md:text-[0.65rem] font-extrabold uppercase tracking-[1px] text-[#1f6e8f]"><i
                            class="fas fa-calendar-alt text-[0.65rem] sm:text-[0.7rem] md:text-xs text-brand"></i>
                        DEPARTURE DATE</label><input type="text" id="startDate" placeholder="DD/MM/YYYY"
                        class="datepicker w-full border-none p-0.5 text-[0.8rem] sm:text-[0.85rem] md:text-[0.98rem] font-medium text-[#0a2e3f] bg-transparent focus:outline-none cursor-pointer"
                        readonly>
                </div>
                <div
                    class="w-full md:flex-1 bg-[#f8fdff] mx-0 md:mx-1 my-0.5 md:my-1 p-2 sm:p-2.5 md:p-4 pl-3 sm:pl-3 md:pl-5 rounded-lg sm:rounded-xl border border-brand/20 shadow-sm form-field-enhanced">
                    <label
                        class="flex items-center gap-1 text-[0.5rem] sm:text-[0.55rem] md:text-[0.65rem] font-extrabold uppercase tracking-[1px] text-[#1f6e8f]"><i
                            class="fas fa-calendar-check text-[0.65rem] sm:text-[0.7rem] md:text-xs text-brand"></i>
                        RETURN DATE</label><input type="text" id="endDate" placeholder="DD/MM/YYYY"
                        class="datepicker w-full border-none p-0.5 text-[0.8rem] sm:text-[0.85rem] md:text-[0.98rem] font-medium text-[#0a2e3f] bg-transparent focus:outline-none cursor-pointer"
                        readonly>
                </div>
                <div
                    class="w-full md:flex-1 bg-[#f8fdff] mx-0 md:mx-1 my-0.5 md:my-1 p-2 sm:p-2.5 md:p-4 pl-3 sm:pl-3 md:pl-5 rounded-lg sm:rounded-xl border border-brand/20 shadow-sm form-field-enhanced">
                    <label
                        class="flex items-center gap-1 text-[0.5rem] sm:text-[0.55rem] md:text-[0.65rem] font-extrabold uppercase tracking-[1px] text-[#1f6e8f]"><i
                            class="fas fa-ship text-[0.65rem] sm:text-[0.7rem] md:text-xs text-brand"></i> BOAT
                        TYPE</label><select id="boatType"
                        class="w-full border-none p-0.5 text-[0.8rem] sm:text-[0.85rem] md:text-[0.98rem] font-medium text-[#0a2e3f] bg-transparent focus:outline-none">
                        <option value="All types">All types</option>
                        <option value="Sailboat">Catamarans</option>
                        <option value="Catamaran">Houseboats</option>
                        <option value="Motor Yacht">Motorboats</option>
                        <option value="Superyacht">Sailboats</option>
                    </select>
                </div>
                <div class="w-full md:w-auto flex items-stretch my-0.5 md:my-1 mx-0 md:mx-2"><button type="submit"
                        class="premium-search-btn w-full md:w-auto px-5 sm:px-6 md:px-8 py-2.5 sm:py-3 md:py-3.5 rounded-xl sm:rounded-xl md:rounded-2xl text-white font-extrabold text-xs sm:text-sm md:text-base tracking-wide flex items-center justify-center gap-2.5 transition-all duration-300 cursor-pointer group"><i
                            class="fas fa-search text-sm sm:text-base md:text-lg"></i><span
                            class="relative z-10">EXPLORE LUXURY YACHTS</span><i
                            class="fas fa-arrow-right text-xs sm:text-sm md:text-base opacity-0 group-hover:opacity-100 transition-all duration-300 transform group-hover:translate-x-1"></i></button>
                </div>
            </form>
        </div>
    </div>
</section>