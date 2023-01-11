const btn_nav = document.getElementById('navbarHeader');

btn_nav = addEventListener('click', () => {
    if(btn_nav.classList('show')){
        btn_nav.classList('');
    } else {
        btn_nav.classList('show');
    }
});