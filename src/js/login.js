document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.querySelector('form');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const loginButton = document.querySelector('.login-button');
    const passwordToggle = document.querySelector('.password-toggle');

    passwordToggle.innerHTML = '<img src="./src/assets/images/eye.svg" alt="Show password" />';
    passwordToggle.addEventListener('click', () => {
        const type = passwordInput.type === 'password' ? 'text' : 'password';
        passwordInput.type = type;
        passwordToggle.innerHTML = type === 'password' 
            ? '<img src="./src/assets/images/hide-password.svg" alt="Show password" />'
            : '<img src="./src/assets/images/hide-password.svg" alt="Hide password" />';
    });

    loginForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        
        if (!emailInput.value || !passwordInput.value) {
            showError('Please fill in all fields');
            return;
        }

        loginButton.disabled = true;
        loginButton.innerHTML = '<span class="spinner"></span> Logging in...';

        try {
            const response = await fetch('src/php/process-login.php', {
                method: 'POST',
                body: new FormData(loginForm)
            });

            const data = await response.json();
            
            if (data.success) {
                window.location.href = 'dashboard.html';
            } else {
                showError(data.message || 'Invalid credentials');
            }
        } catch (error) {
            showError('An error occurred. Please try again.');
        } finally {
            loginButton.disabled = false;
            loginButton.innerHTML = 'Login';
        }
    });

    function showError(message) {
        const errorDiv = document.querySelector('.error-message') || document.createElement('div');
        errorDiv.className = 'error-message';
        errorDiv.textContent = message;
        
        const loginHeader = document.querySelector('.login-header');
        if (!document.querySelector('.error-message')) {
            loginHeader.insertBefore(errorDiv, loginHeader.firstChild);
        }
    }
});




