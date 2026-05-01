<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <title>iBoatel | Login or Sign up - Premium Boat Rental</title>
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
          colors: { 'brand': '#5EA6C8', 'brand-dark': '#3d8aae', 'brand-light': '#7fbcd9', 'ocean': '#1A6D8F', 'deep-teal': '#0E4D66' },
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

    <!-- Sign Up Container -->
    <div class="relative z-10 min-h-screen flex items-center justify-center px-4 py-8 sm:py-12">
      <div class="w-full max-w-[550px] mx-auto animate-fade-up">
        <div
          class="bg-white/98 backdrop-blur-sm rounded-2xl sm:rounded-3xl p-5 sm:p-6 md:p-8 shadow-2xl border border-brand/20 hover:shadow-3xl transition-all duration-300 hover:-translate-y-1">

          <!-- Logo & Title -->
          <div class="text-center mb-4 sm:mb-5 md:mb-6">
            <div
              class="w-12 h-12 sm:w-14 sm:h-14 bg-gradient-to-br from-brand to-brand-dark rounded-xl sm:rounded-2xl flex items-center justify-center mx-auto mb-3 shadow-lg">
              <span class="text-white text-xl sm:text-2xl">⚓</span>
            </div>
            <h2 class="text-xl sm:text-2xl font-extrabold text-[#1a2a4f] tracking-tight">Create an account</h2>
            <p class="text-xs sm:text-sm text-gray-500 mt-1">Join iBoatel and start your sailing journey</p>
          </div>

          <form>

            <div class="mb-4">
              <label
                class="block text-[0.65rem] sm:text-xs font-bold text-gray-500 uppercase tracking-wider mb-1.5">EMAIL
                ADDRESS <span class="text-red-500">*</span></label>
              <div class="relative">
                <i
                  class="fas fa-envelope absolute left-3 sm:left-4 top-1/2 -translate-y-1/2 text-brand text-xs sm:text-sm"></i>
                <input type="email" name="email" required
                  class="w-full pl-8 sm:pl-11 pr-3 py-2.5 sm:py-3 border border-gray-200 rounded-xl focus:border-brand focus:ring-2 focus:ring-brand/20 transition-all bg-gray-50 text-sm"
                  placeholder="hello@iboatel.com">
              </div>
            </div>

            <div class="mb-4">
              <label
                class="block text-[0.65rem] sm:text-xs font-bold text-gray-500 uppercase tracking-wider mb-1.5">PASSWORD
                <span class="text-red-500">*</span></label>
              <div class="relative">
                <i
                  class="fas fa-lock absolute left-3 sm:left-4 top-1/2 -translate-y-1/2 text-brand text-xs sm:text-sm"></i>
                <input type="password" name="password" id="password" required
                  class="w-full pl-8 sm:pl-11 pr-8 sm:pr-12 py-2.5 sm:py-3 border border-gray-200 rounded-xl focus:border-brand focus:ring-2 focus:ring-brand/20 transition-all bg-gray-50 text-sm"
                  placeholder="Create a strong password">
                <i class="fas fa-eye-slash password-toggle absolute right-3 sm:right-4 top-1/2 -translate-y-1/2 text-gray-400 text-xs sm:text-sm"
                  id="togglePassword"></i>
              </div>
            </div>

            <div class="mb-4">
              <label
                class="block text-[0.65rem] sm:text-xs font-bold text-gray-500 uppercase tracking-wider mb-1.5">CONFIRM
                PASSWORD <span class="text-red-500">*</span></label>
              <div class="relative">
                <i
                  class="fas fa-lock absolute left-3 sm:left-4 top-1/2 -translate-y-1/2 text-brand text-xs sm:text-sm"></i>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                  class="w-full pl-8 sm:pl-11 pr-8 sm:pr-12 py-2.5 sm:py-3 border border-gray-200 rounded-xl focus:border-brand focus:ring-2 focus:ring-brand/20 transition-all bg-gray-50 text-sm"
                  placeholder="Confirm your password">
                <i class="fas fa-eye-slash password-toggle absolute right-3 sm:right-4 top-1/2 -translate-y-1/2 text-gray-400 text-xs sm:text-sm"
                  id="toggleConfirmPassword"></i>
              </div>
            </div>

            <label class="flex items-start gap-2 mb-5 cursor-pointer">
              <input type="checkbox" required class="checkbox-custom mt-0.5">
              <span class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                By registering, you agree to iBoatel
                <a href="#" class="text-brand hover:text-brand-dark font-medium hover:underline">Terms & Conditions</a>
                and acknowledge that you have read our
                <a href="#" class="text-brand hover:text-brand-dark font-medium hover:underline">Privacy Policy</a>
                regarding the processing of your personal data.
              </span>
            </label>

            <button type="submit"
              class="signup-btn w-full bg-gradient-to-r from-brand to-brand-dark text-white font-bold py-2.5 sm:py-3 rounded-xl shadow-md flex items-center justify-center gap-2 text-sm sm:text-base">
              <i class="fas fa-user-plus text-xs sm:text-sm"></i> Create an account
            </button>
          </form>

          <!-- Divider -->
          <div class="flex items-center my-5 sm:my-6">
            <div class="flex-1 h-px bg-gray-200"></div>
            <span class="px-3 sm:px-4 text-[0.65rem] sm:text-xs text-gray-400 font-medium">Or register with</span>
            <div class="flex-1 h-px bg-gray-200"></div>
          </div>

          <!-- Google Social Login -->
          <button
            class="social-btn w-full flex items-center justify-center gap-2 sm:gap-3 bg-white border-2 border-gray-200 text-gray-700 font-semibold py-2.5 sm:py-3 rounded-xl text-sm sm:text-base transition-all">
            <svg width="18" height="18" class="sm:w-5 sm:h-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M21.8032 12.2297C21.8032 11.5499 21.7481 10.8664 21.6305 10.1977H12.1982V14.0485H17.5996C17.3755 15.2905 16.6553 16.3891 15.6007 17.0873V19.5859H18.8232C20.7155 17.8442 21.8032 15.2721 21.8032 12.2297Z"
                fill="#4285F4"></path>
              <path
                d="M12.1982 22C14.8952 22 17.1697 21.1145 18.8269 19.5859L15.6044 17.0873C14.7078 17.6972 13.5504 18.0426 12.2018 18.0426C9.59299 18.0426 7.38098 16.2826 6.5873 13.9162H3.26193V16.492C4.95952 19.8688 8.41717 22 12.1982 22Z"
                fill="#34A853"></path>
              <path
                d="M6.58363 13.9162C6.16474 12.6743 6.16474 11.3294 6.58363 10.0874V7.51166H3.26193C1.8436 10.3373 1.8436 13.6664 3.26193 16.492L6.58363 13.9162Z"
                fill="#FBBC04"></path>
              <path
                d="M12.1982 5.95738C13.6239 5.93533 15.0018 6.4718 16.0343 7.45655L18.8893 4.60151C17.0815 2.90392 14.6821 1.97061 12.1982 2C8.41717 2 4.95952 4.13118 3.26193 7.51167L6.58363 10.0875C7.37363 7.71744 9.58932 5.95738 12.1982 5.95738Z"
                fill="#EA4335"></path>
            </svg>
            Continue with Google
          </button>

          <!-- Login Link -->
          <div class="text-center mt-5">
            <p class="text-xs sm:text-sm text-gray-500">
              Already registered?
              <a href="#" class="text-brand font-semibold hover:text-brand-dark hover:underline transition">Log in</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="./js/login.js"></script>

</body>

</html>