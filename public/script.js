const body = document.querySelector("body"),
sidebar = body.querySelector(".sidebar"),
toggle = body.querySelector(".toggle"),
modeSwitch = body.querySelector(".toggle-switch"),
modeText = body.querySelector(".mode-text")

toggle.addEventListener("click", () =>
{
    sidebar.classList.toggle("close");
});

modeSwitch.addEventListener("click", () =>
{
    body.classList.toggle("dark");
});

function DarkModeB()
{
 var element = document.body;
 element.dataset.bsTheme=
    element.dataset.bsTheme == "light" ? "dark" : "light";
}