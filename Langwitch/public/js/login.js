const logo = document.querySelector(".logo");
const email = document.querySelector("#email");
const email_input = document.querySelector("#email-input");
const email_invalid = document.querySelector("#invalid-email");
const password = document.querySelector("#password");
const password_input = document.querySelector("#password-input");
const password_invalid = document.querySelector("#invalid-password");

logo.addEventListener("click", function () {
    window.location.href = "/";
});

function invalid_input(input) {
    input.style.color = "#ff0000";
    input.style.borderBottom = "2px solid #ff0000";
}

function reset_input(input) {
    input.style.color = "#000000";
    input.style.borderBottom = "1px solid #000000";
}

function reveal_password(input_id) {
    const input = document.getElementById(input_id + "-input");
    const eye = document.getElementById(input_id + "-eye");
    if (input.type === "password") {
        input.type = "text";
        eye.src = "images/EyeOpen.svg";
    }
}

function hide_password(input_id) {
    const input = document.getElementById(input_id + "-input");
    const eye = document.getElementById(input_id + "-eye");
    input.type = "password";
    eye.src = "images/EyeClosed.svg";
}

function validate() {
    if (email_input.value === "") {
        email_invalid.style.display = "block";
        email_invalid.innerHTML = "Email harus diisi.";
        invalid_input(email);
        return;
    }
    if (password_input.value === "") {
        password_invalid.style.display = "block";
        password_invalid.innerHTML = "Password harus diisi.";
        invalid_input(password);
        return;
    }
}
