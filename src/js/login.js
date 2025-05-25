
  document.addEventListener("DOMContentLoaded", function () {
    const togglePassword = document.querySelector(".password-toggle");
    const passwordInput = document.getElementById("password");
  
    togglePassword.addEventListener("click", function () {
      if (passwordInput.type === "password") {
        passwordInput.type = "text";
      } else {
        passwordInput.type = "password";
      }
    });
  });
  

  // Form Validation Feature
  const form = document.querySelector("form");
  const emailInput = document.getElementById("email");

  form.addEventListener("submit", function (event) {
    let isValid = true;

    // Remove old error messages
    document.querySelectorAll(".error-message").forEach((el) => el.remove());

    // Email Validation
    if (!emailInput.value.includes("@") || !emailInput.value.includes(".")) {
      showError(emailInput, "Please enter a valid email.");
      isValid = false;
    }

    // Password Validation
    if (passwordInput.value.length < 6) {
      showError(passwordInput, "Password must be at least 6 characters.");
      isValid = false;
    }

    if (!isValid) {
      event.preventDefault(); // Stop form submission if validation fails
    }
  });

  function showError(input, message) {
    const errorDiv = document.createElement("div");
    errorDiv.classList.add("error-message");
    errorDiv.style.color = "red";
    errorDiv.style.fontSize = "14px";
    errorDiv.style.marginTop = "5px";
    errorDiv.innerText = message;
    input.parentNode.appendChild(errorDiv);
  }




