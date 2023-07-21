const TriggerMenu = () => {
    let hiddenMenu = document.getElementsByClassName("hiddenMenu")[0];
    let closeBtn = document.getElementsByClassName("closeBtn")[0];
    let hamburgerBtn = document.getElementsByClassName("humbergerBtn")[0];

    hamburgerBtn.addEventListener("click", () => {
        hiddenMenu.classList.remove("hidden");
        closeBtn.classList.remove("hidden");
        hamburgerBtn.classList.add("hidden");
    });

    closeBtn.addEventListener("click", () => {
        hiddenMenu.classList.add("hidden");
        closeBtn.classList.add("hidden");
        hamburgerBtn.classList.remove("hidden");
    });
};

TriggerMenu();
