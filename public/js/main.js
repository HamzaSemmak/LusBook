// -----------------------------------------------------------------------------
// This file contains all code js of webpages
// -----------------------------------------------------------------------------

/* 
* -------------------------
*   Variables : 
* -------------------------
*/ 
const topBar = document.querySelector('#topBar')
const closeToBar = document.querySelector("#closeToBar")
const navbar = document.querySelector("#navbar")
const searchBar = document.querySelector("#searchBar")
const closeSearchBar = document.querySelector("#closeSearchBar")
const openSerachBar = document.querySelector("#openSerachBar")
const scrolTopBtn = document.querySelector('.scrolTopBtn')

window.onscroll = function() {
    if (document.body.scrollTop > 15 || document.documentElement.scrollTop > 15) {
        navbar.style.position = "fixed"
        navbar.style.top = "0px"
        navbar.classList.add('navbar-animation') 
        navbar.classList.add('shadow-navbar')
        scrolTopBtn.style.display = 'block'
        sidebar.classList.replace('sidebar-show', 'sidebar-hide')
    }
    else if (document.body.scrollTop < 20 || document.documentElement.scrollTop < 20 ) {
        navbar.classList.remove('shadow')
        navbar.style.position = "relative"
        navbar.classList.remove('shadow-navbar')
        navbar.classList.remove('navbar-animation')
        scrolTopBtn.style.display = 'none'
    }
}
/* 
* -------------------------
*   ScrollTop  
* -------------------------
*/ 
scrolTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth',
    })
})
/* 
* -------------------------
*   Topbar 
* -------------------------
*/ 
closeToBar.addEventListener('click', () => {
    topBar.classList.add('hide')
})
/* 
* -------------------------
*   searchBar 
* -------------------------
*/
closeSearchBar.addEventListener('click', () => {
    searchBar.classList.remove('show-search-bar')
})
openSerachBar.addEventListener('click', () => {
    searchBar.classList.add('show-search-bar')
    sidebar.classList.remove('sidebar-show')
    sidebar.classList.add('sidebar-hide')
})
