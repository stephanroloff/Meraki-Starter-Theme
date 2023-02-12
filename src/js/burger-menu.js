setTimeout(() => {

    let burgerMenu = document.querySelector('.burger-menu-container');
    let burgerMenuOverlay = document.querySelector('.burger-menu-overlay');

    if (!burgerMenu) return;

    burgerMenu.addEventListener('click', () => {
        burgerMenuOverlay.classList.remove('hidden');
    })

    burgerMenuOverlay.addEventListener('click', () => {
        setTimeout(() => {
            burgerMenuOverlay.classList.add('hidden');
        }, 500);
    })

}, 2000);