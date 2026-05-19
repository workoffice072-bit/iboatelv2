<div class="grid grid-cols-1 md:grid-cols-2 gap-5">

    <!-- Password -->
    <div>

        <label class="block text-sm font-semibold text-gray-700 mb-1.5">
            Password <span class="text-red-500">*</span>
        </label>

        <div class="relative">

            <!-- Left Icon -->
            <i class="fas fa-key absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>

            <!-- Password Input -->
            <input
                type="password"
                name="password"
                autocomplete="off"
                id="{{ $prefix }}_password"
                class="w-full pl-11 pr-12 py-3 rounded-xl bg-gray-50/50 border border-gray-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition"
                placeholder="Create a strong password"
                required>

            <!-- Toggle Password -->
            <button
                type="button"
                id="{{ $prefix }}_toggle_password"
                class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">

                <i class="fas fa-eye"></i>

            </button>

        </div>
        <div
    id="{{ $prefix }}_password_error"
    class="mt-2 text-sm text-red-500 hidden">
</div>
        <!-- Password Rules -->
        <div
            id="{{ $prefix }}_strength"
            class="mt-3 space-y-2 text-sm">

            <div
                id="{{ $prefix }}_rule_length"
                class="flex items-center gap-2 text-gray-400">

                <span class="icon text-xs">•</span>

                Minimum 8 characters

            </div>

            <div
                id="{{ $prefix }}_rule_uppercase"
                class="flex items-center gap-2 text-gray-400">

                <span class="icon text-xs">•</span>

                One uppercase letter

            </div>

            <div
                id="{{ $prefix }}_rule_lowercase"
                class="flex items-center gap-2 text-gray-400">

                <span class="icon text-xs">•</span>

                One lowercase letter

            </div>

            <div
                id="{{ $prefix }}_rule_number"
                class="flex items-center gap-2 text-gray-400">

                <span class="icon text-xs">•</span>

                One numeric value

            </div>

            <div
                id="{{ $prefix }}_rule_special"
                class="flex items-center gap-2 text-gray-400">

                <span class="icon text-xs">•</span>

                One special character

            </div>

        </div>

    </div>

    <!-- Confirm Password -->
    <div>

        <label class="block text-sm font-semibold text-gray-700 mb-1.5">
            Confirm Password <span class="text-red-500">*</span>
        </label>

        <div class="relative">

            <!-- Left Icon -->
            <i class="fas fa-check-circle absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>

            <!-- Confirm Password Input -->
            <input
                type="password"
                name="password_confirmation"
                autocomplete="off"
                id="{{ $prefix }}_confirm_password"
                class="w-full pl-11 pr-12 py-3 rounded-xl bg-gray-50/50 border border-gray-200 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition"
                placeholder="Confirm your password"
                required>

            <!-- Toggle Confirm Password -->
            <button
                type="button"
                id="{{ $prefix }}_toggle_confirm_password"
                class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">

                <i class="fas fa-eye"></i>

            </button>

        </div>
        <div
        id="{{ $prefix }}_confirm_password_error"
        class="mt-2 text-sm text-red-500 hidden">
    </div>
        <!-- Password Match Message -->
        <div
            id="{{ $prefix }}_match"
            class="mt-3 text-sm font-medium">
        </div>

    </div>

</div>

<script>

    document.addEventListener('DOMContentLoaded', function () {
    
        let form =
            document.getElementById('{{ $prefix }}_form');
    
        let password =
            document.getElementById('{{ $prefix }}_password');
    
        let confirmPassword =
            document.getElementById('{{ $prefix }}_confirm_password');
    
        let matchText =
            document.getElementById('{{ $prefix }}_match');
    
            document
        .getElementById('{{ $prefix }}_toggle_password')

        .addEventListener('click', function () {

            let icon =
                this.querySelector('i');

            if (password.type === 'password') {

                password.type = 'text';

                icon.classList.remove('fa-eye');

                icon.classList.add('fa-eye-slash');

            } else {

                password.type = 'password';

                icon.classList.remove('fa-eye-slash');

                icon.classList.add('fa-eye');
            }
        });

    /**
     * Toggle Confirm Password
     */
    document
        .getElementById('{{ $prefix }}_toggle_confirm_password')

        .addEventListener('click', function () {

            let icon =
                this.querySelector('i');

            if (confirmPassword.type === 'password') {

                confirmPassword.type = 'text';

                icon.classList.remove('fa-eye');

                icon.classList.add('fa-eye-slash');

            } else {

                confirmPassword.type = 'password';

                icon.classList.remove('fa-eye-slash');

                icon.classList.add('fa-eye');
            }
        });    
        /**
         * Update Rule UI
         */
        function updateRule(elementId, condition)
        {
            let element =
                document.getElementById(elementId);
    
            let icon =
                element.querySelector('.icon');
    
            if (condition) {
    
                element.classList.remove('text-gray-400');
                element.classList.add('text-green-600');
    
                icon.innerHTML = '✓';
    
            } else {
    
                element.classList.remove('text-green-600');
                element.classList.add('text-gray-400');
    
                icon.innerHTML = '•';
            }
        }
    
        /**
         * Validate Password
         */
        function isPasswordStrong(value)
        {
            let hasUppercase =
                /[A-Z]/.test(value);
    
            let hasLowercase =
                /[a-z]/.test(value);
    
            let hasNumber =
                /[0-9]/.test(value);
    
            let hasSpecial =
                /[^A-Za-z0-9]/.test(value);
    
            let hasLength =
                value.length >= 8;
    
            return (
                hasUppercase &&
                hasLowercase &&
                hasNumber &&
                hasSpecial &&
                hasLength
            );
        }
    
        /**
         * Password Validation UI
         */
        password.addEventListener('input', function () {
    
            let value = this.value;
    
            updateRule(
                '{{ $prefix }}_rule_length',
                value.length >= 8
            );
    
            updateRule(
                '{{ $prefix }}_rule_uppercase',
                /[A-Z]/.test(value)
            );
    
            updateRule(
                '{{ $prefix }}_rule_lowercase',
                /[a-z]/.test(value)
            );
    
            updateRule(
                '{{ $prefix }}_rule_number',
                /[0-9]/.test(value)
            );
    
            updateRule(
                '{{ $prefix }}_rule_special',
                /[^A-Za-z0-9]/.test(value)
            );
        });
    
        /**
         * Confirm Password Match
         */
        confirmPassword.addEventListener('input', function () {
    
            if (
                password.value !== '' &&
                password.value === confirmPassword.value
            ) {
    
                matchText.innerHTML = `
                    <div class="flex items-center gap-2 text-green-600">
                        <span>✓</span>
                        Passwords matched
                    </div>
                `;
    
            } else {
    
                matchText.innerHTML = `
                    <div class="flex items-center gap-2 text-red-500">
                        <span>•</span>
                        Passwords do not match
                    </div>
                `;
            }
        });
    
        /**
         * Form Submit Validation
         */
        form.addEventListener('submit', function (event) {
            
            let passwordError =
    document.getElementById('{{ $prefix }}_password_error');

let confirmPasswordError =
    document.getElementById('{{ $prefix }}_confirm_password_error');

            let passwordValue =
                password.value;
    
            let confirmPasswordValue =
                confirmPassword.value;
    
            // Strong Password Check
                if (!isPasswordStrong(passwordValue)) {

        event.preventDefault();

        passwordError.innerHTML =
            'Password must contain uppercase, lowercase, number, special character and minimum 8 characters.';

        passwordError.classList.remove('hidden');

        return;
    }

    
            // Password Match Check
            if (passwordValue !== confirmPasswordValue) {

event.preventDefault();

confirmPasswordError.innerHTML =
    'Passwords do not match.';

confirmPasswordError.classList.remove('hidden');

return;
}
        });
    
    });
    </script>