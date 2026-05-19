<x-guest-layout>

    @push('styles')
    <link rel="stylesheet" href="{{ asset('website/css/login.css') }}">
    @endpush

    <section>
        <!-- Background Circles -->
        <div class="bg-circles">
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
        </div>



        <!-- ==================== FORGOT PASSWORD SECTION ==================== -->
        <div class="relative z-10 min-h-[calc(100vh-200px)] flex items-center justify-center px-4 py-12 sm:py-16 md:py-20">
          <div class="w-full max-w-[550px] mx-auto animate-fade-up">
            <div
              class="bg-white/98 backdrop-blur-sm rounded-2xl sm:rounded-3xl p-6 sm:p-8 shadow-2xl border border-brand/20 transition-all duration-300 hover:-translate-y-1">

              <div class="text-center mb-6">
                <div
                  class="w-14 h-14 bg-gradient-to-br from-brand to-brand-dark rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                  <span class="text-white text-2xl">⚓</span>
                </div>
                <h2 class="text-2xl font-extrabold text-[#1a2a4f] tracking-tight">Forgot Password?</h2>
                <p class="text-sm text-gray-500 mt-2 max-w-[280px] mx-auto">No worries! Enter your email address and we'll
                  send you a link to reset your password.</p>
              </div>

              <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="mb-6">
                  <label class="block text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">EMAIL ADDRESS <span
                      class="text-red-500">*</span></label>
                  <div class="relative">
                    <i class="fas fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-brand text-sm"></i>
                    <input type="email" name="email" required
                      class="w-full pl-11 pr-4 py-3 border border-gray-200 rounded-xl focus:border-brand focus:ring-2 focus:ring-brand/20 transition-all bg-gray-50 text-sm"
                      placeholder="hello@iboatel.com">
                  </div>
                  <p class="text-xs text-gray-400 mt-2">We'll send a password reset link to this email address.</p>
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <button type="submit"
                  class="reset-btn w-full bg-gradient-to-r from-brand to-brand-dark text-white font-bold py-3 rounded-xl shadow-md flex items-center justify-center gap-2 text-sm">
                  <i class="fas fa-paper-plane text-sm"></i> Reset Password
                </button>

                <input type="hidden" name="token" id="token" value="">
              </form>

              <div class="flex items-center my-6">
                <div class="flex-1 h-px bg-gray-200"></div>
                <span class="px-4 text-xs text-gray-400 font-medium">Remember your password?</span>
                <div class="flex-1 h-px bg-gray-200"></div>
              </div>

              <div class="text-center">
                <a href="{{route('login')}}"
                  class="inline-flex items-center gap-2 text-brand font-semibold text-sm hover:text-brand-dark transition back-link">
                  <i class="fas fa-arrow-left text-xs"></i> Back to Log in
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>


  @push('scripts')
<script src="{{ asset('website/js/login.js') }}"></script>
@endpush
</x-guest-layout>
