// -----------------------------------------------------------------------------
// This file contains all code of Dashboard Panel
// -----------------------------------------------------------------------------

const sidebarDashboardToggler = document.querySelector('.sidebar-dashboard-toggler')
const sidebarDashboard = document.querySelector('.sidebar-dashboard')

sidebarDashboardToggler.addEventListener('click' , () => {
    sidebarDashboard.classList.toggle('active')
})

