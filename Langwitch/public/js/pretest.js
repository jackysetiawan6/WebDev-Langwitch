const start_button_01 = document.querySelector(
    "#part-start > .panel-container > .button-01"
);
const start_button_02 = document.querySelector(
    "#part-start > .panel-container > .button-02"
);
const test_button_01 = document.querySelector(
    "#part-test > .panel-container > .button-01"
);
const test_button_02 = document.querySelector(
    "#part-test > .panel-container > .button-02"
);
const level_button_01 = document.querySelector(
    "#part-level > .panel-container > .button-01"
);
const pass_button_01 = document.querySelector(
    "#part-pass > .panel-container > .button-01"
);

const start_panel = document.querySelector("#part-start");
const test_panel = document.querySelector("#part-test");
const level_panel = document.querySelector("#part-level");
const pass_panel = document.querySelector("#part-pass");

let panels = [start_panel, test_panel, level_panel, pass_panel];

function hidePanels(current_panel) {
    panels.forEach((panel) => {
        if (panel != current_panel) {
            panel.style.display = "none";
        }
    });
}

start_button_01.addEventListener("click", () => {
    hidePanels(test_panel);
    test_panel.style.display = "flex";
});

start_button_02.addEventListener("click", () => {
    hidePanels(rookie_panel);
    rookie_panel.style.display = "flex";
});

test_button_01.addEventListener("click", () => {
    hidePanels(pass_panel);
    pass_panel.style.display = "flex";
});

test_button_02.addEventListener("click", () => {
    hidePanels(rookie_panel);
    rookie_panel.style.display = "flex";
});

level_button_01.addEventListener("click", () => {
    window.location.href = "/homecourse";
});

pass_button_01.addEventListener("click", () => {
    hidePanels(level_panel);
    level_panel.style.display = "flex";
});
