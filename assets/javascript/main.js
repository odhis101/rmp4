
const menuLinksBtn = document.querySelector(`.navMenu`);
const menuLinks = document.querySelector(`.menu-links`);




const navMenuToggle = () => {
    menuLinksBtn.addEventListener(`click`, () =>{
        menuLinks.classList.toggle(`active-menu-links`);
        console.log(`gg`);
    });
}

navMenuToggle();