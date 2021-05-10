/*===== SHOW NAVBAR  =====*/
const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId)

    // Validate that all variables exist
    if(toggle && nav && bodypd && headerpd){
        toggle.addEventListener('click', ()=>{
            // show navbar
            nav.classList.toggle('show')
            // change icon
            toggle.classList.toggle('bx-x')
            // add padding to body
            bodypd.classList.toggle('body-pd')
            // add padding to header
            headerpd.classList.toggle('body-pd')
        })
    }
}

showNavbar('header-toggle','nav-bar','body-pd','header')

/*===== LINK ACTIVE  =====*/
const linkColor = document.querySelectorAll('.nav__link')

function colorLink(){
    if(linkColor){
        linkColor.forEach(l=> l.classList.remove('navActive'))
        this.classList.add('navActive')
    }
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))


//PASSWORD
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');
togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    // this.classList.toggle('bx bxs-hide');

    if(togglePassword.classList.hasClass('bx bxs-hide')){
        togglePassword.classList.removeClass('bx bxs-hide');
        togglePassword.classList.addClass('bx bxs-show');
    }
    else if(togglePassword.classList.hasClass('bx bxs-show')){
        togglePassword.classList.removeClass('bx bxs-show');
        togglePassword.classList.addClass('bx bxs-hide');
    }
});
