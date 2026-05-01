<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <title>iBoatel | Forgot Password - Reset Your Password</title>
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800;14..32,900&display=swap"
    rel="stylesheet">
  <!-- Font Awesome 6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="stylesheet" href="./css/login.css">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { 'inter': ['Inter', 'sans-serif'] },
          colors: { 'brand': '#5EA6C8', 'brand-dark': '#3d8aae', 'brand-light': '#7fbcd9' },
        }
      }
    }
  </script>

</head>

<body class="font-inter bg-gradient-to-br from-[#f0f7fc] to-[#e8f2f8]">

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

          <form>
            <input type="hidden" name="_token">

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
            <a href="#"
              class="inline-flex items-center gap-2 text-brand font-semibold text-sm hover:text-brand-dark transition back-link">
              <i class="fas fa-arrow-left text-xs"></i> Back to Log in
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script src="./js/login.js"></script>

</body>

</html>