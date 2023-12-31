//Trigger hamburger Menu on small devices
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

//On Hover, show Megamenu
const showHideMenu = () => {
    let megaMenu = document.getElementsByClassName("megaMenu")[0];
    let watches = document.getElementsByClassName("watches")[0];
    let megaMenuSub = document.getElementsByClassName("megaMenuSub")[0];

    watches.addEventListener("mouseenter", (e) => {
        e.preventDefault();
        megaMenu.classList.add("xl:block");
    });

    megaMenuSub.addEventListener("mouseleave", (e) => {
        e.preventDefault();
        megaMenu.classList.remove("xl:block");
    });
};
showHideMenu();

// ////////////////////////////////////////////
//About topper show and hide on hover
const AboutTopper = () => {
    let subMenu = document.getElementsByClassName("aboutTopperShowHide")[0];
    let aboutTopperBtn = document.getElementsByClassName("AboutTopperBtn")[0];

    aboutTopperBtn.addEventListener("mouseenter", (e) => {
        e.preventDefault();
        subMenu.classList.remove("lg:hidden");
        subMenu.classList.add("lg:block");
    });

    subMenu.addEventListener("mouseleave", (e) => {
        e.preventDefault();
        subMenu.classList.remove("lg:block");
        subMenu.classList.add("lg:hidden");
    });
};

AboutTopper();
