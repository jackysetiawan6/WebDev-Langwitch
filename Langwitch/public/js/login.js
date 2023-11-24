const title = document.querySelector(".middle-title");
const button = document.querySelector(".middle-button");
const question = document.querySelector(".middle-question > span");
const fullname = document.querySelectorAll(".middle > div")[0];
const email = document.querySelectorAll(".middle > div")[1];
const password = document.querySelectorAll(".middle > div")[2];
const confirmation = document.querySelectorAll(".middle > div")[3];

function change_title() {
    if (title.innerHTML === "Masuk Akun") {
        title.innerHTML = "Daftar Akun";
        button.innerHTML = "Daftar";
        question.innerHTML =
            'Sudah punya akun? <a onclick="change_title()">Masuk</a>';
        fullname.style.display = "flex";
        email.style.display = "flex";
        password.style.display = "flex";
        confirmation.style.display = "flex";
    } else {
        title.innerHTML = "Masuk Akun";
        button.innerHTML = "Masuk";
        question.innerHTML =
            'Belum punya akun? <a onclick="change_title()">Daftar</a>';
        fullname.style.display = "none";
        email.style.display = "flex";
        password.style.display = "flex";
        confirmation.style.display = "none";
    }
}

function reveal_password(input_id) {
    const textbox = document.getElementById(input_id);
    const eye = document.querySelector;

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}
