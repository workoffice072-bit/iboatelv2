
    // Password toggle for password field
    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');
    if (togglePassword && password) {
      togglePassword.addEventListener('click', function() {
        const type = password.type === 'password' ? 'text' : 'password';
        password.type = type;
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
      });
    }

    // Password toggle for confirm password field
    const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
    const confirmPassword = document.getElementById('password_confirmation');
    if (toggleConfirmPassword && confirmPassword) {
      toggleConfirmPassword.addEventListener('click', function() {
        const type = confirmPassword.type === 'password' ? 'text' : 'password';
        confirmPassword.type = type;
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
      });
    }
  

//   login js=======================

  const toggleLoginPassword = document.getElementById('toggleLoginPassword');
  const loginPassword = document.getElementById('loginPassword');

  if (toggleLoginPassword && loginPassword) {
    toggleLoginPassword.addEventListener('click', function () {
      loginPassword.type = loginPassword.type === 'password' ? 'text' : 'password';

      this.classList.toggle('fa-eye');
      this.classList.toggle('fa-eye-slash');
    });
  }


 