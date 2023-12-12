const logo = document.querySelector(".logo");
const form = document.querySelector("form");
const title = document.querySelector(".middle-title");
const fullname = document.querySelector("#fullname");
const fullname_input = document.querySelector("#fullname-input");
const fullname_invalid = document.querySelector("#invalid-fullname");
const email = document.querySelector("#email");
const email_input = document.querySelector("#email-input");
const email_invalid = document.querySelector("#invalid-email");
const password = document.querySelector("#password");
const password_input = document.querySelector("#password-input");
const password_invalid = document.querySelector("#invalid-password");
const confirmation = document.querySelector("#confirmation");
const confirmation_input = document.querySelector("#confirmation-input");
const confirmation_invalid = document.querySelector("#invalid-confirmation");
const progress = document.querySelector("progress");
const button = document.querySelector("button");
const question_statement = document.querySelector(".middle-question > span");
const question_link = document.querySelector(".middle-question > a");
const text_invalid = document.querySelectorAll(".invalid-input");

logo.addEventListener("click", function () {
    window.location.href = "/";
});

function toggle_login_register() {
    text_invalid.forEach((text) => {
        text.innerHTML = "";
        text.style.display = "none";
    });
    form.reset();
    reset_input(fullname);
    reset_input(email);
    reset_input(password);
    reset_input(confirmation);
    if (title.innerHTML === "Masuk Akun") {
        title.innerHTML = "Daftar Akun";
        fullname.style.display = "flex";
        confirmation.style.display = "flex";
        button.innerHTML = "Daftar";
        question_statement.innerHTML = "Sudah punya akun?";
        question_link.innerHTML = "Masuk";
        progress.style.display = "flex";
        fullname_input.addEventListener("input", validate_fullname);
        email_input.addEventListener("input", validate_email);
        password_input.addEventListener("input", validate_password);
        confirmation_input.addEventListener("input", validate_confirmation);
    } else {
        title.innerHTML = "Masuk Akun";
        fullname.style.display = "none";
        confirmation.style.display = "none";
        button.innerHTML = "Masuk";
        question_statement.innerHTML = "Belum punya akun?";
        question_link.innerHTML = "Daftar";
        progress.style.display = "none";
        fullname_input.removeEventListener("input", validate_fullname);
        email_input.removeEventListener("input", validate_email);
        password_input.removeEventListener("input", validate_password);
        confirmation_input.removeEventListener("input", validate_confirmation);
    }
}

function invalid_input(input) {
    input.style.color = "#ff0000";
    input.style.borderBottom = "2px solid #ff0000";
}

function reset_input(input) {
    input.style.color = "#000000";
    input.style.borderBottom = "1px solid #000000";
}

function validate_fullname() {
    if (fullname_input.value !== "") {
        if (fullname_input.value[0] == " ") {
            fullname_invalid.style.display = "block";
            fullname_invalid.innerHTML = "Name cannot start with space";
            invalid_input(fullname);
            return;
        } else if (
            fullname_input.value.length < 3 ||
            fullname_input.value.length > 100
        ) {
            fullname_invalid.style.display = "block";
            fullname_invalid.innerHTML =
                "Name must be between 3 and 100 characters";
            invalid_input(fullname);
            return;
        } else {
            for (let i = 0; i < fullname_input.value.length; i++) {
                if (
                    (fullname_input.value[i].toUpperCase() < "A" ||
                        fullname_input.value[i].toUpperCase() > "Z") &&
                    fullname_input.value[i] !== " "
                ) {
                    fullname_invalid.style.display = "block";
                    fullname_invalid.innerHTML =
                        "Name must only contain letters and whitespace";
                    invalid_input(fullname);
                    return;
                }
                fullname_invalid.style.display = "none";
                fullname_invalid.innerHTML = "";
                reset_input(fullname);
            }
        }
    } else {
        fullname_invalid.style.display = "block";
        fullname_invalid.innerHTML = "Name cannot be empty";
        invalid_input(fullname);
    }
}

function validate_email() {
    if (email_input.value !== "") {
        if (email_input.value[0] == " ") {
            email_invalid.style.display = "block";
            email_invalid.innerHTML = "Email cannot start with space";
            invalid_input(email);
            return;
        } else if (
            email_input.value.length < 10 ||
            email_input.value.length > 320
        ) {
            email_invalid.style.display = "block";
            email_invalid.innerHTML =
                "Email must be between 10 and 320 characters";
            invalid_input(email);
            return;
        } else {
            let at = 0;
            let dot = 0;
            for (let i = 0; i < email_input.value.length; i++) {
                if (
                    (email_input.value[i].toUpperCase() < "A" ||
                        email_input.value[i].toUpperCase() > "Z") &&
                    (email_input.value[i] < "0" ||
                        email_input.value[i] > "9") &&
                    email_input.value[i] !== "@" &&
                    email_input.value[i] !== "." &&
                    email_input.value[i] !== "_"
                ) {
                    email_invalid.style.display = "block";
                    email_invalid.innerHTML =
                        "Email must only contain letters, numbers, @, ., _";
                    invalid_input(email);
                    return;
                } else if (email_input.value[i] == "@") {
                    at++;
                } else if (email_input.value[i] == ".") {
                    dot++;
                }
                if (
                    email_input.value[i] == "." &&
                    email_input.value[i - 1] == "."
                ) {
                    email_invalid.style.display = "block";
                    email_invalid.innerHTML = "Email is invalid";
                    invalid_input(email);
                    return;
                }
            }
            if (
                at !== 1 ||
                dot < 1 ||
                email_input.value.indexOf("@") < 1 ||
                email_input.value.lastIndexOf(".") <=
                    email_input.value.indexOf("@") + 1 ||
                email_input.value[email_input.value.length - 1] == "."
            ) {
                email_invalid.style.display = "block";
                email_invalid.innerHTML = "Email is invalid";
                invalid_input(email);
                return;
            }
            email_invalid.style.display = "none";
            email_invalid.innerHTML = "";
            reset_input(email);
        }
    } else {
        email_invalid.style.display = "block";
        email_invalid.innerHTML = "Email cannot be empty";
        invalid_input(email);
    }
}

function validate_password() {
    if (password_input.value !== "") {
        let strength = 0;
        let password_value = password_input.value;
        calculate_strength(strength);
        if (password_value[0] == " ") {
            password_invalid.style.display = "block";
            password_invalid.innerHTML = "Password cannot start with space";
            invalid_input(password);
            return;
        }
        calculate_strength(strength);
        if (password_value.length >= 8) {
            strength += 1;
        } else if (password_value.length < 8 || password_value.length > 40) {
            password_invalid.style.display = "block";
            password_invalid.innerHTML =
                "Password must be between 8 and 40 characters";
            invalid_input(password);
            return;
        }
        calculate_strength(strength);
        if (
            password_value.match(/[a-z]+/) &&
            password_value.match(/[A-Z]+/) &&
            password_value.match(/[0-9]+/)
        ) {
            strength += 1;
        } else {
            password_invalid.style.display = "block";
            password_invalid.innerHTML =
                "Password must contain at least one lowercase letter, one uppercase letter, and one number";
            invalid_input(password);
            return;
        }
        calculate_strength(strength);
        if (password_value.match(/[$@#&!]+/)) {
            strength += 1;
        } else {
            password_invalid.style.display = "block";
            password_invalid.innerHTML =
                "Password must contain at least one special character ($, @, #, &, !)";
            invalid_input(password);
            return;
        }
        calculate_strength(strength);
        password_invalid.style.display = "none";
        password_invalid.innerHTML = "";
        reset_input(password);
    } else {
        progress.value = 0;
        progress.className = "";
        password_invalid.style.display = "block";
        password_invalid.innerHTML = "Password cannot be empty";
        invalid_input(password);
    }
}

function calculate_strength(strength) {
    switch (strength) {
        case 0:
            progress.value = 25;
            progress.className = "";
            break;
        case 1:
            progress.value = 50;
            progress.className = "strength-weak";
            break;
        case 2:
            progress.value = 75;
            progress.className = "strength-medium";
            break;
        case 3:
            progress.value = 100;
            progress.className = "strength-strong";
            break;
    }
}

function validate_confirmation() {
    if (confirmation_input.value !== "") {
        if (password_input.value !== confirmation_input.value) {
            confirmation_invalid.style.display = "block";
            confirmation_invalid.innerHTML =
                "Konfirmasi password harus sama dengan password.";
            invalid_input(confirmation);
            return;
        }
        confirmation_invalid.style.display = "none";
        confirmation_invalid.innerHTML = "";
        reset_input(confirmation);
    } else {
        confirmation_invalid.style.display = "block";
        confirmation_invalid.innerHTML =
            "Confirmation password cannot be empty";
        invalid_input(confirmation);
    }
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
    if (title.innerHTML === "Masuk Akun") {
        // Find user in database into result
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
    } else {
        if (fullname_input.value === "") {
            fullname_invalid.style.display = "block";
            fullname_invalid.innerHTML = "Nama lengkap harus diisi.";
            invalid_input(fullname);
            return;
        }
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
        if (confirmation_input.value === "") {
            confirmation_invalid.style.display = "block";
            confirmation_invalid.innerHTML = "Konfirmasi password harus diisi.";
            invalid_input(confirmation);
            return;
        }
        // Register user into database
        //s
    }
}
