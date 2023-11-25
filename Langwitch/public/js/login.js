const logo = document.querySelector(".logo");
const title = document.querySelector(".middle-title");
const button = document.querySelector(".middle-button");
const question = document.querySelector(".middle-question > span");
const fullname = document.querySelectorAll(".middle > div")[0];
const fullname_input = document.querySelector("#fullname-input");
const email = document.querySelectorAll(".middle > div")[1];
const email_input = document.querySelector("#email-input");
const password = document.querySelectorAll(".middle > div")[2];
const password_input = document.querySelector("#password-input");
const confirmation = document.querySelectorAll(".middle > div")[3];
const confirmation_input = document.querySelector("#confirmation-input");
const progress = document.querySelectorAll("progress")[0];

logo.addEventListener("click", function () {
    window.location.href = "/";
});

function change_title() {
    if (title.innerHTML === "Masuk Akun") {
        title.innerHTML = "Daftar Akun";
        button.innerHTML = "Daftar";
        question.innerHTML =
            'Sudah punya akun? <a onclick="change_title()">Masuk</a>';
        fullname.style.display = "flex";
        confirmation.style.display = "flex";
        progress.style.display = "block";
    } else {
        title.innerHTML = "Masuk Akun";
        button.innerHTML = "Masuk";
        question.innerHTML =
            'Belum punya akun? <a onclick="change_title()">Daftar</a>';
        fullname.style.display = "none";
        email.style.display = "flex";
        password.style.display = "flex";
        confirmation.style.display = "none";
        progress.style.display = "none";
    }
}

function reveal_password(input_id) {
    const input = document.getElementById(input_id + "-input");
    const eye = document.getElementById(input_id + "-eye");
    if (input.type === "password") {
        input.type = "text";
        eye.src = "images/EyeOpen.svg";
    } else {
        input.type = "password";
        eye.src = "images/EyeClosed.svg";
    }
}

password_input.addEventListener("input", function () {
    let strength = 0;
    let password_value = password_input.value;
    if (password_value.length == 0) {
        progress.value = 0;
        progress.className = "";
        return;
    }
    if (
        password_value.match(/[a-z]+/) &&
        password_value.match(/[A-Z]+/) &&
        password_value.match(/[0-9]+/)
    ) {
        strength += 1;
    }
    if (password_value.match(/[$@#&!]+/)) {
        strength += 1;
    }
    if (password_value.length > 8) {
        strength += 1;
    }
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
});

function submit_data() {
    if (title.innerHTML === "Masuk Akun") {
        // TODO: access database to check if email and password match
    } else if (title.innerHTML === "Daftar Akun") {
        if (progress.value < 100) {
            alert(
                "Password minimal 8 karakter dan memuat huruf kapital, non-kapital, angka, dan simbol" +
                    "\nContoh: Password123!"
            );
            return;
        }
        if (password_input.value !== confirmation_input.value) {
            alert("Password dan konfirmasi password tidak sama");
            return;
        }
    }
}
