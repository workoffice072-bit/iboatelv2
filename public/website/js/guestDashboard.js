// --------------------------------------------------
// 1. SIDEBAR TOGGLE FOR MOBILE DEVICES START
// --------------------------------------------------
    
    const menuToggle = document.getElementById('od-menuToggle');
    const sidebar = document.getElementById('od-sidebar');
    const overlay = document.getElementById('od-sidebarOverlay');
    const menuIcon = document.getElementById('od-menuIcon');

    if (menuToggle) {

        menuToggle.addEventListener('click', () => {

            sidebar.classList.toggle('od-open');
            overlay.classList.toggle('hidden');

            const isOpen = sidebar.classList.contains('od-open');

            document.body.style.overflow = isOpen ? 'hidden' : '';

            // icon change
            if (isOpen) {
                menuIcon.classList.remove('fa-bars');
                menuIcon.classList.add('fa-times');
            } else {
                menuIcon.classList.remove('fa-times');
                menuIcon.classList.add('fa-bars');
            }

        });

    }

    if (overlay) {

        overlay.addEventListener('click', () => {

            sidebar.classList.remove('od-open');
            overlay.classList.add('hidden');
            document.body.style.overflow = '';

            // reset icon
            menuIcon.classList.remove('fa-times');
            menuIcon.classList.add('fa-bars');

        });

    }

    window.addEventListener('resize', () => {

        if (window.innerWidth >= 1024) {

            sidebar.classList.remove('od-open');

            if (overlay) overlay.classList.add('hidden');

            document.body.style.overflow = '';

            // reset icon
            menuIcon.classList.remove('fa-times');
            menuIcon.classList.add('fa-bars');

        }

    });


// Sidebar active state
       
document.addEventListener("DOMContentLoaded", function () {

    let currentPage = window.location.pathname.split("/").pop();

    const navItems = document.querySelectorAll(".od-nav-item");

    navItems.forEach(item => {

        const link = item.querySelector("a");

        if (link) {

            let linkPage = link.getAttribute("href").split("/").pop();

            item.classList.remove("od-active");

            if (linkPage === currentPage) {
                item.classList.add("od-active");
            }
        }
    });

});


        
   
// --------------------------------------------------
// 1. SIDEBAR TOGGLE FOR MOBILE DEVICES End 
// --------------------------------------------------


// --------------------------------------------------
// EDIT PROFILE START
// --------------------------------------------------
        // Profile Image Preview
        function gepPreviewProfileImage(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('gep-profilePreview').src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        // Sidebar Toggle for Guest
        const guestMenuToggle = document.getElementById('guest-menuToggle');
        const guestSidebar = document.getElementById('guest-sidebar');
        const guestOverlay = document.getElementById('guest-sidebarOverlay');

        if (guestMenuToggle) {
            guestMenuToggle.addEventListener('click', () => {
                guestSidebar.classList.toggle('guest-open');
                guestOverlay.classList.toggle('hidden');
                document.body.style.overflow = guestSidebar.classList.contains('guest-open') ? 'hidden' : '';
            });
        }

        if (guestOverlay) {
            guestOverlay.addEventListener('click', () => {
                guestSidebar.classList.remove('guest-open');
                guestOverlay.classList.add('hidden');
                document.body.style.overflow = '';
            });
        }

        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                guestSidebar.classList.remove('guest-open');
                if (guestOverlay) guestOverlay.classList.add('hidden');
                document.body.style.overflow = '';
            }
        });
    
// --------------------------------------------------
// EDIT PROFILE END
// --------------------------------------------------

// --------------------------------------------------
// CHANGE PASSWORD START
// --------------------------------------------------

        // Toggle Password Visibility
        function gcpTogglePassword(inputId) {
            const input = document.getElementById(inputId);
            const icon = input.nextElementSibling.querySelector('i');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            }
        }

        // Password Strength Check
        const gcpNewPassword = document.getElementById('gcpNewPassword');
        const gcpStrengthBar = document.getElementById('gcpStrengthBar');
        const gcpStrengthText = document.getElementById('gcpStrengthText');
        
        // Requirements elements
        const gcpReqLength = document.getElementById('gcpReqLength');
        const gcpReqUpper = document.getElementById('gcpReqUpper');
        const gcpReqLower = document.getElementById('gcpReqLower');
        const gcpReqNumber = document.getElementById('gcpReqNumber');
        const gcpReqSpecial = document.getElementById('gcpReqSpecial');

        function gcpCheckPasswordStrength(password) {
            let strength = 0;
            const checks = {
                length: password.length >= 8,
                upper: /[A-Z]/.test(password),
                lower: /[a-z]/.test(password),
                number: /[0-9]/.test(password),
                special: /[!@#$%^&*(),.?":{}|<>]/.test(password)
            };

            // Update UI for requirements
            gcpReqLength.classList.toggle('valid', checks.length);
            gcpReqLength.querySelector('i').className = checks.length ? 'fas fa-check-circle' : 'fas fa-circle';
            
            gcpReqUpper.classList.toggle('valid', checks.upper);
            gcpReqUpper.querySelector('i').className = checks.upper ? 'fas fa-check-circle' : 'fas fa-circle';
            
            gcpReqLower.classList.toggle('valid', checks.lower);
            gcpReqLower.querySelector('i').className = checks.lower ? 'fas fa-check-circle' : 'fas fa-circle';
            
            gcpReqNumber.classList.toggle('valid', checks.number);
            gcpReqNumber.querySelector('i').className = checks.number ? 'fas fa-check-circle' : 'fas fa-circle';
            
            gcpReqSpecial.classList.toggle('valid', checks.special);
            gcpReqSpecial.querySelector('i').className = checks.special ? 'fas fa-check-circle' : 'fas fa-circle';

            // Calculate strength
            if (checks.length) strength++;
            if (checks.upper) strength++;
            if (checks.lower) strength++;
            if (checks.number) strength++;
            if (checks.special) strength++;

            // Update strength bar and text
            gcpStrengthBar.className = 'gcp-strength-bar';
            if (password.length === 0) {
                gcpStrengthBar.style.width = '0%';
                gcpStrengthText.textContent = '';
                return;
            }
            
            if (strength <= 2) {
                gcpStrengthBar.classList.add('gcp-strength-weak');
                gcpStrengthText.textContent = 'Weak password';
                gcpStrengthText.style.color = '#ef4444';
            } else if (strength <= 4) {
                gcpStrengthBar.classList.add('gcp-strength-medium');
                gcpStrengthText.textContent = 'Medium password';
                gcpStrengthText.style.color = '#f59e0b';
            } else {
                gcpStrengthBar.classList.add('gcp-strength-strong');
                gcpStrengthText.textContent = 'Strong password!';
                gcpStrengthText.style.color = '#10b981';
            }
            
            return strength === 5;
        }

        // Password Match Check
        const gcpConfirmPassword = document.getElementById('gcpConfirmPassword');
        const gcpMatchMessage = document.getElementById('gcpMatchMessage');

        function gcpCheckPasswordMatch() {
            const newPass = gcpNewPassword.value;
            const confirmPass = gcpConfirmPassword.value;
            
            if (confirmPass.length === 0) {
                gcpMatchMessage.textContent = '';
                return false;
            }
            
            if (newPass === confirmPass) {
                gcpMatchMessage.textContent = '✓ Passwords match';
                gcpMatchMessage.className = 'gcp-match-text gcp-match-success';
                return true;
            } else {
                gcpMatchMessage.textContent = '✗ Passwords do not match';
                gcpMatchMessage.className = 'gcp-match-text gcp-match-error';
                return false;
            }
        }

        // Event Listeners
        if (gcpNewPassword) {
            gcpNewPassword.addEventListener('input', function() {
                gcpCheckPasswordStrength(this.value);
                gcpCheckPasswordMatch();
            });
        }
        
        if (gcpConfirmPassword) {
            gcpConfirmPassword.addEventListener('input', gcpCheckPasswordMatch);
        }

        // Submit validation
        const gcpSubmitBtn = document.getElementById('gcpSubmitBtn');
        const gcpForm = document.querySelector('form');
        
        if (gcpForm) {
            gcpForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const isStrong = gcpCheckPasswordStrength(gcpNewPassword.value);
                const doMatch = gcpCheckPasswordMatch();
                
                if (!isStrong) {
                    alert('Please choose a stronger password meeting all requirements.');
                    return;
                }
                
                if (!doMatch) {
                    alert('Passwords do not match. Please try again.');
                    return;
                }
                
                const currentPassword = document.getElementById('gcpCurrentPassword');
                if (currentPassword && gcpNewPassword.value === currentPassword.value) {
                    alert('New password cannot be the same as current password.');
                    return;
                }
                
                alert('Password updated successfully!');
                // gcpForm.submit(); // Uncomment to actually submit
            });
        }
   // --------------------------------------------------
// CHANGE PASSWORD END 
// --------------------------------------------------