
// For menu
const headerHTML = document.getElementById('header').innerHTML;

addEventListener("resize", (event) => {
    document.getElementById('header').innerHTML = headerHTML;
    // Menu on mobile screen
    document.getElementById('header-icons__bar').onclick = () => {
        document.getElementById('web').classList.add("web--mobile");
        document.getElementById('header-icons__bar').style.display = "none";
        document.getElementById('header__menu').style.display = "block";
        document.getElementById('header-icons__cls').style.display = "block";
    }

    document.getElementById('header-icons__cls').onclick = () => {
        document.getElementById('web').classList.remove("web--mobile");
        document.getElementById('header-icons__bar').style.display = "block";
        document.getElementById('header__menu').style.display = "none";
        document.getElementById('header-icons__cls').style.display = "none";
    }

    if( window.screen.width <= 1200 ){
        document.getElementById('header-icons__cls').click();
    }
});

window.dispatchEvent(new Event('resize'));